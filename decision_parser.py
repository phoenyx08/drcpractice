#!/usr/bin/env python3
"""
FIFA DRC Decision Parser

This module extracts text from FIFA DRC PDF decisions and splits them into 
semantic paragraphs for classification and analysis.
"""

import requests
import json
import re
from typing import List, Dict, Optional, Tuple
import tempfile
import os
from pathlib import Path

try:
    import PyPDF2
except ImportError:
    try:
        import pypdf
        PyPDF2 = pypdf
    except ImportError:
        print("Please install PyPDF2 or pypdf: pip install PyPDF2")
        exit(1)

class DecisionParser:
    
    def __init__(self):
        pass
    
    def download_pdf(self, url: str) -> Optional[str]:
        """Download PDF from URL and return local file path"""
        try:
            response = requests.get(url, timeout=30)
            response.raise_for_status()
            
            # Create temporary file
            with tempfile.NamedTemporaryFile(delete=False, suffix='.pdf') as tmp_file:
                tmp_file.write(response.content)
                return tmp_file.name
                
        except Exception as e:
            print(f"Error downloading PDF {url}: {e}")
            return None
    
    def extract_text_from_pdf(self, pdf_path: str) -> Optional[str]:
        """Extract text from PDF file"""
        try:
            with open(pdf_path, 'rb') as file:
                if hasattr(PyPDF2, 'PdfReader'):
                    # pypdf/PyPDF2 v3+
                    reader = PyPDF2.PdfReader(file)
                    text = ""
                    for page in reader.pages:
                        page_text = page.extract_text()
                        # Better line break preservation
                        text += page_text + "\n\n"
                else:
                    # PyPDF2 v2
                    reader = PyPDF2.PdfFileReader(file)
                    text = ""
                    for page_num in range(reader.numPages):
                        page = reader.getPage(page_num)
                        page_text = page.extractText()
                        text += page_text + "\n\n"
                
                return text.strip()
                
        except Exception as e:
            print(f"Error extracting text from PDF {pdf_path}: {e}")
            return None
    
    def clean_text(self, text: str) -> str:
        """Clean and normalize extracted text"""
        if not text:
            return ""
        
        # Remove excessive whitespace
        text = re.sub(r'\s+', ' ', text)
        
        # Fix common PDF extraction issues
        text = re.sub(r'(?<=[a-z])(?=[A-Z])', ' ', text)  # Split camelCase
        text = re.sub(r'\s*\n\s*', '\n', text)  # Clean line breaks
        text = re.sub(r'\s+', ' ', text)  # Multiple spaces to single
        
        return text.strip()
    
    def split_into_paragraphs(self, text: str) -> List[Dict[str, str]]:
        """Split text into semantic paragraphs"""
        if not text:
            return []
        
        # First, identify and mark section headers
        section_markers = [
            r'I\.\s*FACTS OF THE CASE',
            r'II\.\s*LEGAL CONSIDERATIONS', 
            r'III\.\s*DECISION',
            r'Claim and Response:',
            r'Decision:',
            r'Applicable law:',
            r'Procedural Rules',
            r'Financial conditions:',
            r'Date of transfer:',
            r'Player passport',
            r'Claimant club:',
            r'Respondent club:'
        ]
        
        # Mark section breaks
        for marker in section_markers:
            text = re.sub(f'({marker})', r'\n\n\1\n\n', text, flags=re.IGNORECASE)
        
        # Split by various patterns
        potential_paragraphs = re.split(r'\n\s*\n+', text)
        
        # Also split on numbered points
        final_paragraphs = []
        for para in potential_paragraphs:
            # Split numbered points (1., 2., etc.)
            numbered_splits = re.split(r'(?<=\.)\s+(\d+\.)\s+', para)
            for split_para in numbered_splits:
                if split_para.strip():
                    final_paragraphs.append(split_para.strip())
        
        paragraphs = []
        for i, para_text in enumerate(final_paragraphs):
            para_text = para_text.strip()
            if len(para_text) < 30:  # Skip very short paragraphs
                continue
            
            # Remove page headers/footers and reference numbers
            para_text = self.clean_paragraph(para_text)
            if len(para_text) < 30:  # Check again after cleaning
                continue
            
            paragraphs.append({
                'index': i,
                'text': para_text,
                'length': len(para_text),
                'word_count': len(para_text.split())
            })
        
        return paragraphs
    
    def clean_paragraph(self, text: str) -> str:
        """Clean individual paragraph from common PDF artifacts"""
        # Remove page references and headers
        text = re.sub(r'REF TMS \d+\s+Page \d+ of \d+', '', text)
        text = re.sub(r'\{[^}]*\}', '', text)  # Remove encrypted/garbled text
        text = re.sub(r'^\s*\d+\.\s*', '', text)  # Remove leading numbers
        text = re.sub(r'\s+', ' ', text)  # Normalize whitespace
        return text.strip()
    
    
    def parse_decision_from_url(self, pdf_url: str, title: str = "Unknown") -> Optional[Dict]:
        """Parse a decision from PDF URL"""
        print(f"Parsing decision: {title}")
        
        # Download PDF
        pdf_path = self.download_pdf(pdf_url)
        if not pdf_path:
            return None
        
        try:
            # Extract text
            text = self.extract_text_from_pdf(pdf_path)
            if not text:
                return None
            
            # Clean text
            clean_text = self.clean_text(text)
            
            # Split into paragraphs
            paragraphs = self.split_into_paragraphs(clean_text)
            
            # Generate summary statistics
            stats = self.generate_paragraph_stats(paragraphs)
            
            return {
                'title': title,
                'pdf_url': pdf_url,
                'raw_text_length': len(text),
                'clean_text_length': len(clean_text),
                'paragraph_count': len(paragraphs),
                'paragraphs': paragraphs,
                'stats': stats
            }
            
        finally:
            # Clean up temporary file
            if pdf_path and os.path.exists(pdf_path):
                os.unlink(pdf_path)
    
    def generate_paragraph_stats(self, paragraphs: List[Dict]) -> Dict:
        """Generate basic statistics about paragraphs"""
        if not paragraphs:
            return {}
        
        total_length = 0
        total_words = 0
        
        for para in paragraphs:
            total_length += para['length']
            total_words += para['word_count']
        
        return {
            'total_paragraphs': len(paragraphs),
            'total_length': total_length,
            'total_words': total_words,
            'avg_paragraph_length': total_length // len(paragraphs) if paragraphs else 0,
            'avg_words_per_paragraph': total_words // len(paragraphs) if paragraphs else 0
        }
    
    def parse_sample_decisions(self, decisions_file: str, sample_size: int = 3) -> List[Dict]:
        """Parse a sample of decisions from the scraped data file"""
        try:
            with open(decisions_file, 'r', encoding='utf-8') as f:
                decisions = json.load(f)
            
            # Take a sample
            sample_decisions = decisions[:sample_size]
            parsed_results = []
            
            for decision in sample_decisions:
                if 'pdf_url' in decision and decision['pdf_url']:
                    result = self.parse_decision_from_url(
                        decision['pdf_url'], 
                        decision.get('title', 'Unknown')
                    )
                    if result:
                        parsed_results.append(result)
            
            return parsed_results
            
        except Exception as e:
            print(f"Error parsing sample decisions: {e}")
            return []

def main():
    parser = DecisionParser()
    
    # Parse sample decisions
    decisions_file = "fifa_solidarity_decisions_20250622_113904.json"
    
    if not os.path.exists(decisions_file):
        print(f"Decisions file not found: {decisions_file}")
        print("Please run fifa_scraper.py first to download decision metadata")
        return
    
    print("Parsing sample FIFA DRC decisions...")
    print("=" * 50)
    
    parsed_decisions = parser.parse_sample_decisions(decisions_file, sample_size=2)
    
    if parsed_decisions:
        # Save results
        output_file = "parsed_decisions_sample.json"
        with open(output_file, 'w', encoding='utf-8') as f:
            json.dump(parsed_decisions, f, indent=2, ensure_ascii=False)
        
        print(f"\nParsed {len(parsed_decisions)} decisions")
        print(f"Results saved to: {output_file}")
        
        # Display summary
        for decision in parsed_decisions:
            print(f"\n--- {decision['title']} ---")
            print(f"Paragraphs: {decision['paragraph_count']}")
            print(f"Text length: {decision['clean_text_length']} chars")
            
            if 'stats' in decision:
                stats = decision['stats']
                print(f"Total words: {stats.get('total_words', 0)}")
                print(f"Avg paragraph length: {stats.get('avg_paragraph_length', 0)} chars")
                print(f"Avg words per paragraph: {stats.get('avg_words_per_paragraph', 0)}")
    
    else:
        print("No decisions could be parsed")

if __name__ == "__main__":
    main()