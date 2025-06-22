#!/usr/bin/env python3
"""
FIFA Solidarity Decisions Paragraph Extractor

This tool processes a list of FIFA decision PDF URLs, downloads each PDF,
extracts paragraphs using various techniques, and builds an unlabeled dataset.
PDFs are cleaned up after processing to save disk space.
"""

import os
import re
import sys
import time
import requests
from datetime import datetime
from pathlib import Path

# PDF processing libraries
try:
    import PyPDF2
except ImportError:
    print("PyPDF2 not found. Install with: pip install PyPDF2")
    sys.exit(1)

try:
    import pdfplumber
except ImportError:
    print("pdfplumber not found. Install with: pip install pdfplumber")
    sys.exit(1)


class ParagraphExtractor:
    def __init__(self, urls_file, output_file=None):
        self.urls_file = urls_file
        self.output_file = output_file or f"fifa_paragraphs_{datetime.now().strftime('%Y%m%d_%H%M%S')}.txt"
        self.processed_count = 0
        self.error_count = 0
        self.temp_pdf_path = "temp_decision.pdf"
        
    def download_pdf(self, url):
        """Download PDF from URL to temporary file"""
        try:
            response = requests.get(url, timeout=30)
            response.raise_for_status()
            
            with open(self.temp_pdf_path, 'wb') as f:
                f.write(response.content)
            return True
        except Exception as e:
            print(f"Error downloading {url}: {e}")
            return False
    
    def extract_text_pypdf2(self, pdf_path):
        """Extract text using PyPDF2"""
        try:
            with open(pdf_path, 'rb') as file:
                reader = PyPDF2.PdfReader(file)
                text = ""
                for page in reader.pages:
                    text += page.extract_text() + "\n"
                return text
        except Exception as e:
            print(f"PyPDF2 extraction failed: {e}")
            return None
    
    def extract_text_pdfplumber(self, pdf_path):
        """Extract text using pdfplumber (better for complex layouts)"""
        try:
            with pdfplumber.open(pdf_path) as pdf:
                text = ""
                for page in pdf.pages:
                    page_text = page.extract_text()
                    if page_text:
                        text += page_text + "\n"
                return text
        except Exception as e:
            print(f"pdfplumber extraction failed: {e}")
            return None
    
    def extract_paragraphs_from_text(self, text):
        """Extract paragraphs from raw text"""
        if not text:
            return []
        
        # Clean up the text
        text = re.sub(r'\s+', ' ', text)  # Normalize whitespace
        text = text.strip()
        
        # Split into potential paragraphs using various delimiters
        # Look for double newlines, numbered sections, or clear breaks
        paragraphs = []
        
        # Method 1: Split by double newlines or clear breaks
        chunks = re.split(r'\n\s*\n|\.[\s\n]+(?=[A-Z])', text)
        
        for chunk in chunks:
            chunk = chunk.strip()
            if len(chunk) < 20:  # Skip very short chunks
                continue
            if len(chunk) > 2000:  # Split very long chunks
                # Try to split at sentence boundaries
                sentences = re.split(r'\.[\s\n]+', chunk)
                current_para = ""
                for sentence in sentences:
                    if len(current_para + sentence) < 1000:
                        current_para += sentence + ". "
                    else:
                        if current_para.strip():
                            paragraphs.append(current_para.strip())
                        current_para = sentence + ". "
                if current_para.strip():
                    paragraphs.append(current_para.strip())
            else:
                paragraphs.append(chunk)
        
        # Method 2: Look for numbered paragraphs
        numbered_matches = re.findall(r'\d+\.\s+[^.]*(?:\.[^.]*)*\.', text)
        for match in numbered_matches:
            if len(match) > 30 and match not in paragraphs:
                paragraphs.append(match.strip())
        
        # Method 3: Look for clear section breaks
        section_matches = re.findall(r'(?:^|\n)[A-Z][^.]*(?:\.[^.]*)*\.(?=\s*(?:[A-Z]|\d+\.|$))', text, re.MULTILINE)
        for match in section_matches:
            if len(match) > 30 and match not in paragraphs:
                paragraphs.append(match.strip())
        
        # Clean and deduplicate paragraphs
        clean_paragraphs = []
        seen = set()
        
        for para in paragraphs:
            para = para.strip()
            if len(para) < 20:  # Skip very short paragraphs
                continue
            if para in seen:  # Skip duplicates
                continue
            
            # Skip paragraphs that are mostly numbers or special characters
            if len(re.sub(r'[^\w\s]', '', para)) < len(para) * 0.5:
                continue
                
            clean_paragraphs.append(para)
            seen.add(para)
        
        return clean_paragraphs
    
    def process_single_pdf(self, url):
        """Process a single PDF URL"""
        print(f"Processing: {url}")
        
        # Download PDF
        if not self.download_pdf(url):
            return []
        
        # Try multiple extraction methods
        text = self.extract_text_pdfplumber(self.temp_pdf_path)
        if not text:
            text = self.extract_text_pypdf2(self.temp_pdf_path)
        
        if not text:
            print(f"Failed to extract text from {url}")
            self.cleanup_temp_file()
            return []
        
        # Extract paragraphs
        paragraphs = self.extract_paragraphs_from_text(text)
        
        # Cleanup
        self.cleanup_temp_file()
        
        print(f"Extracted {len(paragraphs)} paragraphs")
        return paragraphs
    
    def cleanup_temp_file(self):
        """Remove temporary PDF file"""
        try:
            if os.path.exists(self.temp_pdf_path):
                os.remove(self.temp_pdf_path)
        except Exception as e:
            print(f"Error cleaning up temp file: {e}")
    
    def save_paragraphs(self, paragraphs):
        """Append paragraphs to output file"""
        try:
            with open(self.output_file, 'a', encoding='utf-8') as f:
                for para in paragraphs:
                    # Write each paragraph on a separate line with separator
                    f.write(f"{para}\n---PARAGRAPH_SEPARATOR---\n")
        except Exception as e:
            print(f"Error saving paragraphs: {e}")
    
    def process_all_urls(self):
        """Process all URLs from the input file"""
        print(f"Starting paragraph extraction from {self.urls_file}")
        print(f"Output file: {self.output_file}")
        
        # Create output file with header
        with open(self.output_file, 'w', encoding='utf-8') as f:
            f.write(f"# FIFA Solidarity Decisions Paragraph Dataset\n")
            f.write(f"# Generated: {datetime.now().isoformat()}\n")
            f.write(f"# Source: {self.urls_file}\n")
            f.write("# Format: Each paragraph separated by ---PARAGRAPH_SEPARATOR---\n\n")
        
        # Read URLs and process them
        try:
            with open(self.urls_file, 'r') as f:
                urls = [line.strip() for line in f if line.strip()]
        except Exception as e:
            print(f"Error reading URLs file: {e}")
            return
        
        total_urls = len(urls)
        print(f"Found {total_urls} URLs to process")
        
        for i, url in enumerate(urls, 1):
            print(f"\n[{i}/{total_urls}] Processing URL {i}")
            
            try:
                paragraphs = self.process_single_pdf(url)
                if paragraphs:
                    self.save_paragraphs(paragraphs)
                    self.processed_count += 1
                else:
                    self.error_count += 1
                    
            except Exception as e:
                print(f"Error processing {url}: {e}")
                self.error_count += 1
                self.cleanup_temp_file()
            
            # Progress report every 50 URLs
            if i % 50 == 0:
                print(f"\nProgress: {i}/{total_urls} URLs processed")
                print(f"Successful: {self.processed_count}, Errors: {self.error_count}")
            
            # Small delay to be respectful to the server
            time.sleep(0.5)
        
        print(f"\n=== EXTRACTION COMPLETE ===")
        print(f"Total URLs: {total_urls}")
        print(f"Successfully processed: {self.processed_count}")
        print(f"Errors: {self.error_count}")
        print(f"Output file: {self.output_file}")
        
        # Final cleanup
        self.cleanup_temp_file()


def main():
    if len(sys.argv) < 2:
        print("Usage: python paragraph_extractor.py <urls_file> [output_file]")
        print("Example: python paragraph_extractor.py fifa_solidarity_decisions_urls_20250622_113904.txt")
        sys.exit(1)
    
    urls_file = sys.argv[1]
    output_file = sys.argv[2] if len(sys.argv) > 2 else None
    
    if not os.path.exists(urls_file):
        print(f"Error: URLs file {urls_file} does not exist")
        sys.exit(1)
    
    extractor = ParagraphExtractor(urls_file, output_file)
    extractor.process_all_urls()


if __name__ == "__main__":
    main()