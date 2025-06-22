#!/usr/bin/env python3
"""
Quick FIFA Paragraph Analysis
Fast analysis of paragraph patterns without full clustering
"""

import os
import re
import json
import random
from collections import Counter
from datetime import datetime

def quick_fifa_analysis():
    """Quick analysis of FIFA paragraphs"""
    input_file = "fifa_paragraphs_20250622_175352.txt"
    
    print("FIFA Paragraph Quick Analysis")
    print("=" * 40)
    
    # Load sample
    print("Loading paragraphs...")
    with open(input_file, 'r', encoding='utf-8') as f:
        content = f.read()
    
    paragraphs = content.split('---PARAGRAPH_SEPARATOR---')
    
    # Clean paragraphs
    cleaned = []
    for para in paragraphs:
        para = para.strip()
        if (len(para) > 30 and 
            not para.startswith('#') and 
            not para.startswith('Generated:') and
            not para.startswith('Source:') and
            not para.startswith('Format:')):
            cleaned.append(para)
    
    total_count = len(cleaned)
    print(f"Total paragraphs: {total_count}")
    
    # Take sample for analysis
    sample_size = min(1000, total_count)
    sample = random.sample(cleaned, sample_size)
    print(f"Analyzing sample of {sample_size} paragraphs")
    
    # Basic statistics
    lengths = [len(para) for para in sample]
    avg_length = sum(lengths) / len(lengths)
    
    print(f"\nBASIC STATISTICS:")
    print(f"Average length: {avg_length:.0f} characters")
    print(f"Min length: {min(lengths)}")
    print(f"Max length: {max(lengths)}")
    
    # Pattern analysis
    print(f"\nPATTERN ANALYSIS:")
    
    # FIFA-specific patterns
    patterns = {
        'case_ref': r'REF TMS \d+',
        'euro_amount': r'EUR [0-9,]+',
        'date_pattern': r'\d{1,2} \w+ \d{4}',
        'article_ref': r'[Aa]rticle \d+',
        'claimant': r'[Cc]laimant',
        'respondent': r'[Rr]espondent',
        'solidarity': r'[Ss]olidarity',
        'transfer': r'[Tt]ransfer',
        'player_name': r'[Pp]layer',
        'former_club': r'[Ff]ormer [Cc]lub',
        'rstp': r'RSTP',
        'fifa': r'FIFA',
        'percentage': r'\d+\.?\d*%',
        'registration': r'[Rr]egistration'
    }
    
    pattern_counts = {}
    for name, pattern in patterns.items():
        count = 0
        for para in sample:
            if re.search(pattern, para):
                count += 1
        pattern_counts[name] = count
        percentage = (count / sample_size) * 100
        print(f"  {name}: {count} paragraphs ({percentage:.1f}%)")
    
    # Classify paragraph types based on patterns
    print(f"\nPARAGRAPH TYPE CLASSIFICATION:")
    
    types = {
        'header': [],
        'facts': [],
        'financial': [],
        'legal': [],
        'procedural': [],
        'other': []
    }
    
    for para in sample:
        para_lower = para.lower()
        
        if re.search(r'REF TMS|decision of|single judge', para):
            types['header'].append(para)
        elif 'facts of the case' in para_lower or 'player:' in para_lower:
            types['facts'].append(para)
        elif any(word in para_lower for word in ['eur', 'payment', 'fee', 'amount', 'solidarity contribution']):
            types['financial'].append(para)
        elif any(word in para_lower for word in ['article', 'rstp', 'regulations', 'legal']):
            types['legal'].append(para)
        elif any(word in para_lower for word in ['claimant', 'respondent', 'claim', 'request']):
            types['procedural'].append(para)
        else:
            types['other'].append(para)
    
    for type_name, paras in types.items():
        count = len(paras)
        percentage = (count / sample_size) * 100
        print(f"  {type_name}: {count} paragraphs ({percentage:.1f}%)")
    
    # Show examples
    print(f"\nEXAMPLE PARAGRAPHS BY TYPE:")
    for type_name, paras in types.items():
        if paras:
            example = paras[0][:200] + "..." if len(paras[0]) > 200 else paras[0]
            print(f"\n{type_name.upper()}:")
            print(f"  {example}")
    
    # Save results
    timestamp = datetime.now().strftime("%Y%m%d_%H%M%S")
    
    results = {
        'total_paragraphs': total_count,
        'sample_size': sample_size,
        'avg_length': avg_length,
        'pattern_analysis': pattern_counts,
        'type_classification': {k: len(v) for k, v in types.items()},
        'examples': {k: v[0][:300] if v else "" for k, v in types.items()}
    }
    
    output_file = f"fifa_quick_analysis_{timestamp}.json"
    with open(output_file, 'w', encoding='utf-8') as f:
        json.dump(results, f, indent=2, ensure_ascii=False)
    
    print(f"\nResults saved to: {output_file}")
    
    # Clustering recommendation
    print(f"\nCLUSTERING RECOMMENDATIONS:")
    print(f"Based on this analysis, I recommend:")
    print(f"1. Use 6-8 clusters matching paragraph types:")
    print(f"   - Header/Reference ({types['header'].__len__()} examples)")
    print(f"   - Facts/Player info ({types['facts'].__len__()} examples)")  
    print(f"   - Financial details ({types['financial'].__len__()} examples)")
    print(f"   - Legal reasoning ({types['legal'].__len__()} examples)")
    print(f"   - Procedural ({types['procedural'].__len__()} examples)")
    print(f"   - Other/Misc ({types['other'].__len__()} examples)")
    print(f"2. Focus on keywords: solidarity, transfer, EUR, article, claimant")
    print(f"3. Consider length-based clustering (avg: {avg_length:.0f} chars)")

if __name__ == "__main__":
    quick_fifa_analysis()