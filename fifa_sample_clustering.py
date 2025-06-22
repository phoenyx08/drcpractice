#!/usr/bin/env python3
"""
FIFA Sample Paragraph Clustering - Test with subset
"""

import os
import json
import re
import math
import random
from collections import Counter, defaultdict
from datetime import datetime
from typing import List, Dict

class FIFASampleClusterer:
    """Sample FIFA paragraph clustering for testing"""
    
    def __init__(self, input_file: str, sample_size: int = 5000):
        self.input_file = input_file
        self.sample_size = sample_size
        self.paragraphs = []
        self.cleaned_paragraphs = []
        self.tfidf_vectors = []
        self.vocabulary = {}
        self.clusters = None
        self.centroids = []
        self.k = 10  # Fixed number of clusters for testing
        
        timestamp = datetime.now().strftime("%Y%m%d_%H%M%S")
        self.output_prefix = f"fifa_sample_clusters_{timestamp}"
    
    def load_sample_paragraphs(self) -> List[str]:
        """Load a random sample of paragraphs"""
        print(f"Loading sample from {self.input_file}...")
        
        with open(self.input_file, 'r', encoding='utf-8') as f:
            content = f.read()
        
        # Split and clean
        all_paragraphs = content.split('---PARAGRAPH_SEPARATOR---')
        cleaned = []
        
        for para in all_paragraphs:
            para = para.strip()
            if (len(para) > 30 and 
                not para.startswith('#') and 
                not para.startswith('Generated:') and
                not para.startswith('Source:') and
                not para.startswith('Format:')):
                cleaned.append(para)
        
        # Take random sample
        if len(cleaned) > self.sample_size:
            self.paragraphs = random.sample(cleaned, self.sample_size)
        else:
            self.paragraphs = cleaned
        
        print(f"Loaded {len(self.paragraphs)} sample paragraphs")
        return self.paragraphs
    
    def simple_preprocess(self, text: str) -> List[str]:
        """Basic preprocessing"""
        text = text.lower()
        text = re.sub(r'[^a-zA-Z\s]', ' ', text)
        words = text.split()
        
        # Basic stop words
        stop_words = {'the', 'a', 'an', 'and', 'or', 'in', 'on', 'at', 'to', 'for', 'of', 'with', 'by', 'is', 'was', 'are', 'were'}
        
        return [w for w in words if len(w) > 2 and w not in stop_words]
    
    def create_simple_vectors(self):
        """Create simple term frequency vectors"""
        print("Creating TF vectors...")
        
        # Preprocess all paragraphs
        self.cleaned_paragraphs = [self.simple_preprocess(para) for para in self.paragraphs]
        
        # Build vocabulary
        all_words = []
        for words in self.cleaned_paragraphs:
            all_words.extend(words)
        
        word_counts = Counter(all_words)
        # Keep words that appear 2-100 times
        self.vocabulary = {word: idx for idx, (word, count) in enumerate(word_counts.items()) 
                          if 2 <= count <= 100}
        
        print(f"Vocabulary size: {len(self.vocabulary)}")
        
        # Create TF vectors
        self.tfidf_vectors = []
        vocab_size = len(self.vocabulary)
        
        for words in self.cleaned_paragraphs:
            word_count = Counter(words)
            vector = [0.0] * vocab_size
            
            for word, count in word_count.items():
                if word in self.vocabulary:
                    idx = self.vocabulary[word]
                    if idx < vocab_size:  # Safety check
                        vector[idx] = count / len(words) if len(words) > 0 else 0
            
            self.tfidf_vectors.append(vector)
        
        print(f"Created {len(self.tfidf_vectors)} vectors")
    
    def distance(self, v1: List[float], v2: List[float]) -> float:
        """Euclidean distance"""
        return math.sqrt(sum((a - b) ** 2 for a, b in zip(v1, v2)))
    
    def simple_kmeans(self):
        """Simple K-means implementation"""
        print(f"Running K-means with k={self.k}...")
        
        n_docs = len(self.tfidf_vectors)
        n_features = len(self.vocabulary)
        
        # Random initialization
        random.seed(42)
        self.centroids = []
        for _ in range(self.k):
            centroid = [random.random() for _ in range(n_features)]
            self.centroids.append(centroid)
        
        # Main loop
        for iteration in range(10):  # Fixed iterations
            print(f"  Iteration {iteration + 1}")
            
            # Assign to clusters
            new_clusters = []
            for vector in self.tfidf_vectors:
                distances = [self.distance(vector, centroid) for centroid in self.centroids]
                closest = distances.index(min(distances))
                new_clusters.append(closest)
            
            # Update centroids
            new_centroids = []
            for cluster_id in range(self.k):
                cluster_vectors = [self.tfidf_vectors[i] for i in range(n_docs) 
                                 if new_clusters[i] == cluster_id]
                
                if cluster_vectors:
                    # Mean of cluster
                    centroid = [0.0] * n_features
                    for vector in cluster_vectors:
                        for j in range(n_features):
                            centroid[j] += vector[j]
                    
                    for j in range(n_features):
                        centroid[j] /= len(cluster_vectors)
                    
                    new_centroids.append(centroid)
                else:
                    # Empty cluster - random reinit
                    new_centroids.append([random.random() for _ in range(n_features)])
            
            self.clusters = new_clusters
            self.centroids = new_centroids
        
        # Show distribution
        cluster_counts = Counter(self.clusters)
        for i in range(self.k):
            count = cluster_counts.get(i, 0)
            pct = (count / n_docs) * 100
            print(f"  Cluster {i}: {count} docs ({pct:.1f}%)")
    
    def analyze_simple_clusters(self):
        """Basic cluster analysis"""
        print("Analyzing clusters...")
        
        # Reverse vocabulary
        idx_to_word = {idx: word for word, idx in self.vocabulary.items()}
        
        results = {}
        for cluster_id in range(self.k):
            # Get cluster paragraphs
            cluster_paras = [self.paragraphs[i] for i in range(len(self.paragraphs))
                           if self.clusters[i] == cluster_id]
            
            if not cluster_paras:
                continue
            
            # Top centroid terms
            centroid = self.centroids[cluster_id]
            top_indices = sorted(range(len(centroid)), key=lambda i: centroid[i], reverse=True)[:5]
            top_terms = [idx_to_word.get(idx, f"term_{idx}") for idx in top_indices if centroid[idx] > 0]
            
            # Sample paragraphs
            samples = cluster_paras[:3] if len(cluster_paras) >= 3 else cluster_paras
            
            results[cluster_id] = {
                'size': len(cluster_paras),
                'top_terms': top_terms,
                'samples': [s[:150] + "..." for s in samples]
            }
        
        return results
    
    def save_simple_results(self):
        """Save results"""
        analysis = self.analyze_simple_clusters()
        
        # Save analysis
        analysis_file = f"{self.output_prefix}_analysis.json"
        with open(analysis_file, 'w', encoding='utf-8') as f:
            json.dump(analysis, f, indent=2, ensure_ascii=False)
        
        # Summary report
        summary_file = f"{self.output_prefix}_summary.txt"
        with open(summary_file, 'w', encoding='utf-8') as f:
            f.write("FIFA SAMPLE CLUSTERING RESULTS\n")
            f.write("=" * 40 + "\n\n")
            f.write(f"Sample size: {len(self.paragraphs)} paragraphs\n")
            f.write(f"Clusters: {self.k}\n")
            f.write(f"Vocabulary: {len(self.vocabulary)} terms\n\n")
            
            for cluster_id, data in analysis.items():
                f.write(f"CLUSTER {cluster_id} ({data['size']} paragraphs):\n")
                f.write(f"  Key terms: {', '.join(data['top_terms'])}\n")
                f.write(f"  Samples:\n")
                for i, sample in enumerate(data['samples']):
                    f.write(f"    {i+1}. {sample}\n")
                f.write("\n")
        
        print(f"Results saved to:")
        print(f"  - {analysis_file}")
        print(f"  - {summary_file}")
        
        return analysis_file, summary_file
    
    def run_sample_clustering(self):
        """Run sample clustering"""
        print("FIFA Sample Clustering")
        print("=" * 30)
        
        self.load_sample_paragraphs()
        self.create_simple_vectors()
        self.simple_kmeans()
        self.save_simple_results()
        
        print("\nSample clustering complete!")


def main():
    input_file = "fifa_paragraphs_20250622_175352.txt"
    
    if not os.path.exists(input_file):
        print(f"Error: {input_file} not found!")
        return
    
    clusterer = FIFASampleClusterer(input_file, sample_size=5000)
    clusterer.run_sample_clustering()


if __name__ == "__main__":
    main()