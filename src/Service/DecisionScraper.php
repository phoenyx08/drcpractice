<?php

namespace App\Service;

class DecisionScraper
{
    
    public function scrapeSolidarityDecisions(): array
    {
        $decisions = [];
        $page = 1;
        $hasMore = true;
        
        while ($hasMore) {
            $pageDecisions = $this->scrapePage($page);
            
            if (empty($pageDecisions)) {
                $hasMore = false;
            } else {
                $decisions = array_merge($decisions, $pageDecisions);
                $page++;
            }
        }
        
        return $decisions;
    }
    
    private function scrapePage(int $page): array
    {
        try {
            $url = 'https://inside.fifa.com/legal/football-tribunal/dispute-resolution-chamber-decisions';
            if ($page > 1) {
                $url .= '?page=' . $page;
            }
            
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
            curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36');
            curl_setopt($ch, CURLOPT_HTTPHEADER, [
                'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8',
                'Accept-Language: en-US,en;q=0.5',
            ]);
            curl_setopt($ch, CURLOPT_TIMEOUT, 30);
            
            $content = curl_exec($ch);
            $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            $error = curl_error($ch);
            curl_close($ch);
            
            if ($content === false || !empty($error)) {
                throw new \RuntimeException('cURL error: ' . $error);
            }
            
            if ($httpCode !== 200) {
                throw new \RuntimeException('HTTP error: ' . $httpCode);
            }
            
            $links = $this->extractDecisionLinks($content);
            
            // Debug: log first page content if no links found
            if (empty($links) && $page === 1) {
                file_put_contents('var/debug_page_content.html', $content);
            }
            
            return $links;
            
        } catch (\Exception $e) {
            throw new \RuntimeException('Failed to scrape page ' . $page . ': ' . $e->getMessage());
        }
    }
    
    private function extractDecisionLinks(string $html): array
    {
        $decisions = [];
        
        // Create DOM parser
        $dom = new \DOMDocument();
        @$dom->loadHTML($html);
        $xpath = new \DOMXPath($dom);
        
        // Look for decision links - these patterns may need adjustment based on actual HTML structure
        $linkNodes = $xpath->query('//a[contains(@href, "/legal/") or contains(@href, "decision")]');
        
        foreach ($linkNodes as $link) {
            $href = $link->getAttribute('href');
            $text = trim($link->textContent);
            
            // Filter for actual decision links and avoid duplicates
            if ($this->isDecisionLink($href, $text)) {
                $fullUrl = $this->makeAbsoluteUrl($href);
                if (!in_array($fullUrl, $decisions)) {
                    $decisions[] = $fullUrl;
                }
            }
        }
        
        return $decisions;
    }
    
    private function isDecisionLink(string $href, string $text): bool
    {
        // Skip empty links, navigation links, and non-decision URLs
        if (empty($href) || $href === '#' || strpos($href, 'javascript:') === 0) {
            return false;
        }
        
        // Look for patterns that indicate decision documents
        $decisionPatterns = [
            '/decision/',
            '/document/',
            '.pdf',
            'solidarity',
            'DRC'
        ];
        
        foreach ($decisionPatterns as $pattern) {
            if (stripos($href, $pattern) !== false || stripos($text, $pattern) !== false) {
                return true;
            }
        }
        
        return false;
    }
    
    private function makeAbsoluteUrl(string $url): string
    {
        if (strpos($url, 'http') === 0) {
            return $url;
        }
        
        if (strpos($url, '/') === 0) {
            return 'https://inside.fifa.com' . $url;
        }
        
        return 'https://inside.fifa.com/legal/football-tribunal/dispute-resolution-chamber-decisions/' . $url;
    }
}