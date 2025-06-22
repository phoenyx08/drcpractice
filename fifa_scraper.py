#!/usr/bin/env python3
"""
FIFA Solidarity Decisions Scraper

This script scrapes solidarity mechanism decisions from FIFA's website using
the discovered API endpoint that directly returns JSON data with decision metadata.
"""

import requests
import json
import time
import re
from urllib.parse import urljoin, urlparse
from datetime import datetime

class FIFAScraper:
    def __init__(self):
        self.base_url = "https://inside.fifa.com"
        self.api_url = "https://inside.fifa.com/api/get-card-content"
        self.solidarity_filter_id = "5tdw6qM6UYXSHxzpZWTRaw"
        
        self.session = requests.Session()
        self.session.headers.update({
            'User-Agent': 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36',
            'Accept': 'application/json,text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8',
            'Accept-Language': 'en-US,en;q=0.5',
            'Accept-Encoding': 'gzip, deflate',
            'Connection': 'keep-alive',
            'Referer': 'https://inside.fifa.com/legal/football-tribunal/dispute-resolution-chamber-decisions'
        })
        
    def fetch_solidarity_decisions(self, size=24, from_offset=0):
        """Fetch solidarity decisions using the API endpoint"""
        params = {
            'requestLocale': 'en',
            'requestContentTypes': 'Document',
            'requestSize': size,
            'requestFrom': from_offset,
            'requestSort': 'dateDesc',
            'requestTags': self.solidarity_filter_id,
            'requestCombinationTags': '',
            'requestExcludeIds': '',
            'requestQueryString': '',
            'requestTagHandlingQuery': 'AND'
        }
        
        try:
            response = self.session.get(self.api_url, params=params, timeout=30)
            response.raise_for_status()
            
            data = response.json()
            decisions = []
            
            
            if 'topicContent' in data and 'data' in data['topicContent']:
                for item in data['topicContent']['data']:
                    decision = {
                        'title': item.get('title', 'Unknown'),
                        'date': item.get('date', 'Unknown'),
                        'pdf_url': item.get('download', {}).get('url', ''),
                        'image_url': item.get('image', ''),
                        'tag': item.get('tag', ''),
                        'type': 'api_extracted'
                    }
                    decisions.append(decision)
            
            # Try different possible locations for total count
            total_count = 0
            if 'topicContent' in data:
                topic_content = data['topicContent']
                total_count = topic_content.get('total', 0)
                # Sometimes total is in different locations
                if total_count == 0:
                    total_count = topic_content.get('count', 0)
                    if total_count == 0 and 'pagination' in topic_content:
                        total_count = topic_content['pagination'].get('total', 0)
            
            return decisions, total_count
            
        except Exception as e:
            print(f"Error fetching API data: {e}")
            return [], 0
    
    def fetch_all_solidarity_decisions(self, max_requests=None):
        """Fetch all solidarity decisions using pagination"""
        all_decisions = []
        page_size = 24  # Use default page size to avoid API limits
        offset = 0
        total_count = None
        request_count = 0
        
        print("Fetching all solidarity decisions...")
        
        while True:
            if max_requests and request_count >= max_requests:
                print(f"Reached maximum request limit: {max_requests}")
                break
                
            print(f"Fetching page {request_count + 1} (offset: {offset})...")
            
            decisions, total = self.fetch_solidarity_decisions(size=page_size, from_offset=offset)
            
            if total_count is None:
                total_count = total
                print(f"Total decisions available: {total_count}")
            
            if not decisions:
                print("No more decisions found")
                break
            
            all_decisions.extend(decisions)
            offset += len(decisions)
            request_count += 1
            
            print(f"Fetched {len(decisions)} decisions (total so far: {len(all_decisions)})")
            
            # Check if we've fetched all available decisions
            if len(all_decisions) >= total_count:
                print("All decisions fetched!")
                break
            
            # Rate limiting - be respectful to the server
            time.sleep(1)
        
        print(f"\nFetching complete. Total decisions collected: {len(all_decisions)}")
        return all_decisions, total_count
    
    def _extract_decisions_from_json(self, data, decisions=None):
        """Recursively extract decision-like objects from JSON data"""
        if decisions is None:
            decisions = []
            
        if isinstance(data, dict):
            # Look for URL-like values
            for key, value in data.items():
                if isinstance(value, str) and self._is_decision_link(value):
                    decisions.append({
                        'url': urljoin(self.base_url, value),
                        'title': key.replace('_', ' ').title(),
                        'type': 'json_extracted'
                    })
                elif isinstance(value, (dict, list)):
                    self._extract_decisions_from_json(value, decisions)
        elif isinstance(data, list):
            for item in data:
                self._extract_decisions_from_json(item, decisions)
                
        return decisions
    
    def _is_decision_link(self, link):
        """Check if a link appears to be a decision document"""
        if not link:
            return False
            
        link_lower = link.lower()
        decision_indicators = [
            'decision', 'pdf', 'document', 'ruling', 'award',
            'solidarity', 'drc', 'tribunal', 'chamber'
        ]
        
        return any(indicator in link_lower for indicator in decision_indicators)
    
    def search_for_api_endpoints(self):
        """Attempt to discover API endpoints that might serve decision data"""
        print("Searching for potential API endpoints...")
        
        # Common API patterns to try
        api_patterns = [
            "/api/decisions",
            "/api/legal/decisions",
            "/api/tribunal/decisions", 
            "/api/documents",
            "/_next/data/{buildId}/legal/football-tribunal/dispute-resolution-chamber-decisions.json",
        ]
        
        # Extract build ID from main page for Next.js API
        try:
            response = self.session.get(self.decisions_url)
            build_id_match = re.search(r'"buildId":"([^"]+)"', response.text)
            if build_id_match:
                build_id = build_id_match.group(1)
                api_patterns.append(f"/_next/data/{build_id}/legal/football-tribunal/dispute-resolution-chamber-decisions.json")
        except:
            pass
        
        found_endpoints = []
        
        for pattern in api_patterns:
            url = urljoin(self.base_url, pattern)
            try:
                response = self.session.get(url, timeout=10)
                if response.status_code == 200:
                    content_type = response.headers.get('content-type', '')
                    if 'json' in content_type:
                        found_endpoints.append({
                            'url': url,
                            'status': response.status_code,
                            'content_type': content_type,
                            'data': response.json() if 'json' in content_type else None
                        })
            except:
                continue
        
        return found_endpoints
    
    def generate_instructions(self):
        """Generate instructions for manual or semi-automated extraction"""
        instructions = """
        MANUAL EXTRACTION INSTRUCTIONS FOR FIFA SOLIDARITY DECISIONS:
        
        1. Visit: https://inside.fifa.com/legal/football-tribunal/dispute-resolution-chamber-decisions
        
        2. Wait for page to fully load (all JavaScript content)
        
        3. Apply the 'Solidarity Contribution' filter by clicking on it
        
        4. Use browser developer tools (F12) to:
           - Monitor Network tab for API calls when filter is applied
           - Look for JSON responses containing decision data
           - Note any pagination endpoints
        
        5. Alternative approaches:
           - Use browser automation (Selenium/Puppeteer) to click through pages
           - Inspect the page source after JavaScript execution
           - Look for embedded JSON data in <script> tags
        
        6. Key filter ID for solidarity: 5tdw6qM6UYXSHxzpZWTRaw
        
        7. Once you identify the API endpoints, you can modify this script to call them directly
        """
        
        return instructions
    
    def save_results(self, decisions, filename_prefix="fifa_solidarity_decisions"):
        """Save results to files"""
        timestamp = datetime.now().strftime("%Y%m%d_%H%M%S")
        
        # Save as JSON
        json_filename = f"{filename_prefix}_{timestamp}.json"
        with open(json_filename, 'w', encoding='utf-8') as f:
            json.dump(decisions, f, indent=2, ensure_ascii=False)
        print(f"Results saved to: {json_filename}")
        
        # Save URLs only
        urls_filename = f"{filename_prefix}_urls_{timestamp}.txt"
        with open(urls_filename, 'w', encoding='utf-8') as f:
            for decision in decisions:
                url = decision.get('pdf_url') or decision.get('url', '')
                if url:
                    f.write(f"{url}\n")
        print(f"URLs saved to: {urls_filename}")
        
        return json_filename, urls_filename

def main():
    print("FIFA Solidarity Decisions Scraper")
    print("=" * 50)
    
    scraper = FIFAScraper()
    
    # Test with a small sample first
    print("Testing API endpoint with sample data...")
    sample_decisions, total_count = scraper.fetch_solidarity_decisions(size=5)
    
    if sample_decisions:
        print(f"✓ API working! Found {len(sample_decisions)} sample decisions out of {total_count} total")
        print("Sample decisions:")
        for i, decision in enumerate(sample_decisions[:3], 1):
            print(f"  {i}. {decision['title']} ({decision['date']})")
            print(f"     PDF: {decision['pdf_url']}")
        
        # Automatically fetch all decisions
        print(f"\nTotal decisions available: {total_count}")
        print("Automatically fetching all decisions...")
        decisions, total = scraper.fetch_all_solidarity_decisions()
        
        if decisions:
            json_file, urls_file = scraper.save_results(decisions)
            print(f"\n✓ Successfully extracted {len(decisions)} solidarity decisions")
            print(f"  JSON data: {json_file}")
            print(f"  URLs only: {urls_file}")
        
    else:
        print("✗ Failed to fetch decisions from API")
        print("The API endpoint may have changed or rate limiting is in effect")
    
    return sample_decisions if 'sample_decisions' in locals() else []

if __name__ == "__main__":
    main()