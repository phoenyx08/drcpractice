<?php

declare(strict_types=1);

namespace App\Service;

use App\Entity\Category;
use App\Entity\Decision;
use App\Service\ProcessingService;
use App\Repository\CategoryRepository;
use App\Repository\DecisionRepository;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Contracts\HttpClient\Exception\ExceptionInterface;

class WakeupService
{
    private const API_BASE_URL = 'https://inside.fifa.com/api/get-card-content';
    private const DEFAULT_SUMMARY = 'in progress';

    public function __construct(
        private readonly HttpClientInterface $httpClient,
        private readonly EntityManagerInterface $entityManager,
        private readonly LoggerInterface $logger,
        private readonly CategoryRepository $categoryRepository,
        private readonly DecisionRepository $decisionRepository,
        private readonly ProcessingService $processingService
    ) {}

    public function processNewDecisions(): int
    {
        $this->logger->info('Starting wakeup process to check for new decisions');
        
        $categories = $this->categoryRepository->findAll();
        $totalNewDecisions = 0;

        // First phase: Check for new decisions
        foreach ($categories as $category) {
            $this->logger->info('Processing category: ' . $category->getName());
            
            try {
                $newDecisions = $this->checkCategoryForNewDecisions($category);
                $totalNewDecisions += count($newDecisions);
                
                if (!empty($newDecisions)) {
                    $this->persistNewDecisions($newDecisions, $category);
                    $this->logger->info(sprintf('Added %d new decisions for category %s', count($newDecisions), $category->getName()));
                }
            } catch (\Exception $e) {
                $this->logger->error('Error processing category ' . $category->getName() . ': ' . $e->getMessage());
                continue;
            }
        }

        $this->logger->info(sprintf('New decisions phase completed. Total new decisions added: %d', $totalNewDecisions));

        // Second phase: Process pending decisions
        $this->processPendingDecisions();

        $this->logger->info('Wakeup process completed successfully');
        return $totalNewDecisions;
    }

    private function processPendingDecisions(): void
    {
        $this->logger->info('Starting processing of pending decisions');
        
        try {
            $pendingDecisions = $this->decisionRepository->findPendingDecisions();
            
            if (empty($pendingDecisions)) {
                $this->logger->info('No pending decisions found');
                return;
            }

            $this->logger->info(sprintf('Found %d pending decisions for processing', count($pendingDecisions)));
            
            // Send pending decisions to processing service for summarization
            $this->processingService->processDecisionsForSummarization($pendingDecisions);
            
            $this->logger->info(sprintf('Sent %d pending decisions to processing service', count($pendingDecisions)));
            
        } catch (\Exception $e) {
            $this->logger->error('Error processing pending decisions: ' . $e->getMessage());
        }
    }

    private function checkCategoryForNewDecisions(Category $category): array
    {
        $apiDecisions = $this->fetchDecisionsFromApi($category);
        $newDecisions = [];

        foreach ($apiDecisions as $apiDecision) {
            if (!$this->decisionExistsInDatabase($apiDecision, $category)) {
                $newDecisions[] = $apiDecision;
            }
        }

        // Sort by date (newest first) as per requirements
        usort($newDecisions, function($a, $b) {
            $dateA = \DateTime::createFromFormat('j M Y', $a['date']);
            $dateB = \DateTime::createFromFormat('j M Y', $b['date']);
            
            if (!$dateA || !$dateB) {
                return 0;
            }
            
            return $dateB->getTimestamp() - $dateA->getTimestamp();
        });

        return $newDecisions;
    }

    private function fetchDecisionsFromApi(Category $category): array
    {
        $url = $this->buildApiUrl($category);
        
        try {
            $response = $this->httpClient->request('GET', $url);
            
            if ($response->getStatusCode() !== 200) {
                throw new \RuntimeException('API request failed with status: ' . $response->getStatusCode());
            }

            $data = $response->toArray();
            return $this->parseApiResponse($data);
            
        } catch (ExceptionInterface $e) {
            $this->logger->error('API request failed for category ' . $category->getName() . ': ' . $e->getMessage());
            return [];
        }
    }

    private function buildApiUrl(Category $category): string
    {
        // Build API URL with category's filterId as requestTags parameter
        $params = [
            'requestLocale' => 'en',
            'requestContentTypes' => 'Document',
            'requestSize' => 24,
            'requestFrom' => 0,
            'requestSort' => 'dateDesc',
            'requestTags' => $category->getFilterId(),
            'requestCombinationTags' => '',
            'requestExcludeIds' => '',
            'requestQueryString' => '',
            'requestTagHandlingQuery' => 'AND'
        ];

        return self::API_BASE_URL . '?' . http_build_query($params);
    }

    private function parseApiResponse(array $data): array
    {
        $decisions = [];
        
        // Parse the API response structure - FIFA API returns topicContent with data array
        if (isset($data['topicContent']['data']) && is_array($data['topicContent']['data'])) {
            foreach ($data['topicContent']['data'] as $item) {
                if (isset($item['title'], $item['date'], $item['download']['url'])) {
                    $decisions[] = [
                        'title' => $item['title'],
                        'date' => $item['date'],
                        'download_url' => $item['download']['url']
                    ];
                } else {
                    $this->logger->warning('Skipping item with missing required fields', ['item_title' => $item['title'] ?? 'unknown']);
                }
            }
        }

        return $decisions;
    }

    private function decisionExistsInDatabase(array $apiDecision, Category $category): bool
    {
        try {
            $dateTime = \DateTime::createFromFormat('j M Y', $apiDecision['date']);
            if (!$dateTime) {
                $this->logger->error('Failed to parse date format', ['date' => $apiDecision['date']]);
                return false;
            }
        } catch (\Exception $e) {
            $this->logger->error('Date parsing error', ['date' => $apiDecision['date'], 'error' => $e->getMessage()]);
            return false;
        }
        
        $existingDecision = $this->decisionRepository->findOneBy([
            'title' => $apiDecision['title'],
            'link' => $apiDecision['download_url'],
            'category' => $category,
            'date' => $dateTime
        ]);

        return $existingDecision !== null;
    }

    private function persistNewDecisions(array $newDecisions, Category $category): void
    {
        $decisions = [];
        foreach ($newDecisions as $apiDecision) {
            $decision = $this->createDecisionFromApiData($apiDecision, $category);
            $this->entityManager->persist($decision);
            $decisions[] = $decision;
        }
        
        $this->entityManager->flush();
        
        // Send new decisions to processing service for summarization
        if (!empty($decisions)) {
            $this->processingService->processDecisionsForSummarization($decisions);
        }
    }

    private function createDecisionFromApiData(array $apiDecision, Category $category): Decision
    {
        $dateTime = \DateTime::createFromFormat('j M Y', $apiDecision['date']);
        if (!$dateTime) {
            throw new \RuntimeException('Invalid date format: ' . $apiDecision['date']);
        }
        
        $decision = new Decision();
        $decision->setName($apiDecision['title'])
            ->setYear((int)$dateTime->format('Y'))
            ->setMonth((int)$dateTime->format('n'))
            ->setLink($apiDecision['download_url'])
            ->setCategory($category)
            ->setSummary(self::DEFAULT_SUMMARY)
            ->setDate($dateTime)
            ->setTitle($apiDecision['title'])
            ->setEntityId($this->generateUuid())
            ->setStatus('pending')
            ->setLastUpdated(new \DateTime());

        return $decision;
    }

    private function generateUuid(): string
    {
        return sprintf(
            '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
            mt_rand(0, 0xffff), mt_rand(0, 0xffff),
            mt_rand(0, 0xffff),
            mt_rand(0, 0x0fff) | 0x4000,
            mt_rand(0, 0x3fff) | 0x8000,
            mt_rand(0, 0xffff), mt_rand(0, 0xffff), mt_rand(0, 0xffff)
        );
    }
}