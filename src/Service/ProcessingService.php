<?php

declare(strict_types=1);

namespace App\Service;

use App\Entity\Decision;
use Psr\Log\LoggerInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Contracts\HttpClient\Exception\ExceptionInterface;

class ProcessingService
{
    public function __construct(
        private readonly HttpClientInterface $httpClient,
        private readonly LoggerInterface $logger,
        private readonly string $summarizerApiUrl,
        private readonly string $summarizerApiToken,
        private readonly string $callbackUrl
    ) {}

    public function processDecisionsForSummarization(array $decisions): void
    {
        foreach ($decisions as $decision) {
            $this->sendDecisionToSummarizer($decision);
        }
    }

    private function sendDecisionToSummarizer(Decision $decision): void
    {
        if (!$decision->getEntityId()) {
            $this->logger->error('Decision missing entityId', ['decision_id' => $decision->getId()]);
            return;
        }

        $payload = [
            'entityId' => $decision->getEntityId(),
            'file' => $decision->getLink(),
            'title' => $decision->getTitle(),
            'category' => $decision->getCategory()->getName(),
            'callbackUrl' => $this->callbackUrl
        ];

        try {
            // Download the PDF file from FIFA
            $fileContent = $this->downloadFile($decision->getLink());
            if (!$fileContent) {
                $this->logger->error('Failed to download file', [
                    'entityId' => $decision->getEntityId(),
                    'url' => $decision->getLink()
                ]);
                return;
            }

            // Create a temporary file with PDF extension
            $tempFile = tempnam(sys_get_temp_dir(), 'fifa_decision_') . '.pdf';
            file_put_contents($tempFile, $fileContent);

            // Extract filename from URL for proper content type
            $filename = basename(parse_url($decision->getLink(), PHP_URL_PATH));
            if (!str_ends_with($filename, '.pdf')) {
                $filename .= '.pdf';
            }

            $response = $this->httpClient->request('POST', $this->summarizerApiUrl, [
                'body' => [
                    'entityId' => $decision->getEntityId(),
                    'file' => fopen($tempFile, 'r'),
                    'title' => $decision->getTitle(),
                    'category' => $decision->getCategory()->getName(),
                    'callbackUrl' => $this->callbackUrl
                ],
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->summarizerApiToken
                ]
            ]);

            // Clean up temporary file
            unlink($tempFile);

            if ($response->getStatusCode() === 200) {
                $this->logger->info('Decision sent to summarizer', [
                    'entityId' => $decision->getEntityId(),
                    'title' => $decision->getTitle()
                ]);
            } else {
                $responseBody = $response->getContent(false);
                $this->logger->error('Failed to send decision to summarizer', [
                    'entityId' => $decision->getEntityId(),
                    'status_code' => $response->getStatusCode(),
                    'response_body' => $responseBody,
                    'payload' => $payload
                ]);
            }
        } catch (ExceptionInterface $e) {
            $this->logger->error('HTTP error sending decision to summarizer', [
                'entityId' => $decision->getEntityId(),
                'url' => $this->summarizerApiUrl,
                'error' => $e->getMessage()
            ]);
        } catch (\Exception $e) {
            $this->logger->error('Unexpected error sending decision to summarizer', [
                'entityId' => $decision->getEntityId(),
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
        }
    }

    private function downloadFile(string $url): ?string
    {
        try {
            $response = $this->httpClient->request('GET', $url);
            
            if ($response->getStatusCode() === 200) {
                return $response->getContent();
            }
            
            $this->logger->error('Failed to download file', [
                'url' => $url,
                'status_code' => $response->getStatusCode()
            ]);
            
            return null;
            
        } catch (ExceptionInterface $e) {
            $this->logger->error('Error downloading file', [
                'url' => $url,
                'error' => $e->getMessage()
            ]);
            return null;
        }
    }

}