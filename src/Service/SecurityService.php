<?php

declare(strict_types=1);

namespace App\Service;

use Symfony\Component\HttpFoundation\Request;

class SecurityService
{
    private const API_KEY_HEADER = 'X-API-Key';

    public function __construct(
        private readonly string $apiKey
    ) {}

    public function isValidApiKey(Request $request): bool
    {
        // Check for X-API-Key header first
        $providedApiKey = $request->headers->get(self::API_KEY_HEADER);
        if ($providedApiKey && hash_equals($this->apiKey, $providedApiKey)) {
            return true;
        }

        // Check for Bearer token in Authorization header
        $authHeader = $request->headers->get('Authorization');
        if ($authHeader && str_starts_with($authHeader, 'Bearer ')) {
            $bearerToken = substr($authHeader, 7); // Remove 'Bearer ' prefix
            if (hash_equals($this->apiKey, $bearerToken)) {
                return true;
            }
        }

        return false;
    }

    public function getApiKeyHeader(): string
    {
        return self::API_KEY_HEADER;
    }

    public function getApiKey(): string
    {
        return $this->apiKey;
    }
}