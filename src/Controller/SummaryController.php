<?php

declare(strict_types=1);

namespace App\Controller;

use App\Repository\DecisionRepository;
use App\Service\SecurityService;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class SummaryController extends AbstractController
{
    public function __construct(
        private readonly DecisionRepository $decisionRepository,
        private readonly EntityManagerInterface $entityManager,
        private readonly LoggerInterface $logger,
        private readonly SecurityService $securityService
    ) {}

    #[Route('/api/summary/callback', name: 'summary_callback', methods: ['POST'])]
    public function summaryCallback(Request $request): JsonResponse
    {
        $this->logger->info('Received summary callback request');

        // Check API key authentication (header or body)
        $data = json_decode($request->getContent(), true);
        
        $this->logger->info('Callback request details', [
            'headers' => $request->headers->all(),
            'body' => $data,
            'method' => $request->getMethod(),
            'content_type' => $request->headers->get('Content-Type')
        ]);
        
        // Check API key authentication (X-API-Key header, Bearer token, or body)
        if (!$this->securityService->isValidApiKey($request) && 
            (!$data || !isset($data['apiKey']) || !hash_equals($this->securityService->getApiKey(), $data['apiKey']))) {
            $this->logger->warning('Unauthorized summary callback attempt', [
                'has_header' => $request->headers->has('X-API-Key'),
                'has_auth_header' => $request->headers->has('Authorization'),
                'has_body_key' => isset($data['apiKey']),
                'auth_header' => $request->headers->get('Authorization'),
                'expected_key' => $this->securityService->getApiKey()
            ]);
            return new JsonResponse(['error' => 'Unauthorized'], Response::HTTP_UNAUTHORIZED);
        }

        try {
            if (!$data || !isset($data['entityId'], $data['summary'])) {
                $this->logger->error('Invalid request data', ['data' => $data]);
                return new JsonResponse(['error' => 'Invalid request data'], Response::HTTP_BAD_REQUEST);
            }

            $entityId = $data['entityId'];
            $summary = $data['summary'];

            $decision = $this->decisionRepository->findOneBy(['entityId' => $entityId]);
            
            if (!$decision) {
                $this->logger->error('Decision not found', ['entityId' => $entityId]);
                return new JsonResponse(['error' => 'Decision not found'], Response::HTTP_NOT_FOUND);
            }

            // Update decision with summary
            $decision->setSummary($summary);
            $decision->setStatus('processed');
            $decision->setLastUpdated(new \DateTime());

            $this->entityManager->flush();

            $this->logger->info('Summary processed successfully', [
                'entityId' => $entityId,
                'decision_id' => $decision->getId(),
                'title' => $decision->getTitle()
            ]);

            return new JsonResponse([
                'success' => true,
                'message' => 'Summary processed successfully',
                'entityId' => $entityId
            ]);

        } catch (\Exception $e) {
            $this->logger->error('Error processing summary callback', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
            
            return new JsonResponse([
                'error' => 'Internal server error'
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    #[Route('/api/decision/status/{entityId}', name: 'decision_status', methods: ['GET'])]
    public function getDecisionStatus(string $entityId): JsonResponse
    {
        $decision = $this->decisionRepository->findOneBy(['entityId' => $entityId]);
        
        if (!$decision) {
            return new JsonResponse(['error' => 'Decision not found'], Response::HTTP_NOT_FOUND);
        }

        return new JsonResponse([
            'entityId' => $decision->getEntityId(),
            'status' => $decision->getStatus(),
            'lastUpdated' => $decision->getLastUpdated()?->format('Y-m-d H:i:s'),
            'title' => $decision->getTitle(),
            'hasSummary' => !empty($decision->getSummary()) && $decision->getSummary() !== 'in progress'
        ]);
    }
}