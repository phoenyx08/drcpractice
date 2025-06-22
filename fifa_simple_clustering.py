#!/usr/bin/env python3
"""
Simplified FIFA Paragraph Clustering
Uses basic TF-IDF and K-means with minimal dependencies
"""

import os
import json
import re
import math
from collections import Counter, defaultdict
from datetime import datetime
from typing import List, Dict, Tuple, Set
import random

class SimpleFIFAClusterer:
    """Simple FIFA paragraph clustering using TF-IDF and K-means"""
    
    def __init__(self, input_file: str):
        self.input_file = input_file
        self.paragraphs = []
        self.cleaned_paragraphs = []
        self.tfidf_vectors = []
        self.vocabulary = {}
        self.clusters = None
        self.centroids = []
        self.optimal_k = 15  # Start with reasonable default
        
        # Output files
        timestamp = datetime.now().strftime("%Y%m%d_%H%M%S")
        self.output_prefix = f"fifa_simple_clusters_{timestamp}"
    
    def load_paragraphs(self) -> List[str]:
        """Load and clean paragraphs"""
        print(f"Loading paragraphs from {self.input_file}...")
        
        with open(self.input_file, 'r', encoding='utf-8') as f:
            content = f.read()
        
        # Split by separator and clean
        paragraphs = content.split('---PARAGRAPH_SEPARATOR---')
        
        cleaned = []
        for para in paragraphs:
            para = para.strip()
            if (len(para) > 20 and 
                not para.startswith('#') and 
                not para.startswith('Generated:') and
                not para.startswith('Source:') and
                not para.startswith('Format:')):
                cleaned.append(para)
        
        self.paragraphs = cleaned
        print(f"Loaded {len(self.paragraphs)} paragraphs")
        return self.paragraphs
    
    def preprocess_text(self, text: str) -> List[str]:
        """Simple text preprocessing"""
        # Convert to lowercase
        text = text.lower()
        
        # Remove special characters and numbers, keep letters and spaces
        text = re.sub(r'[^a-zA-Z\s]', ' ', text)
        
        # Split into words
        words = text.split()
        
        # Remove common stop words
        stop_words = {
            'the', 'a', 'an', 'and', 'or', 'but', 'in', 'on', 'at', 'to', 'for', 
            'of', 'with', 'by', 'from', 'as', 'is', 'was', 'are', 'were', 'be', 
            'been', 'being', 'have', 'has', 'had', 'do', 'does', 'did', 'will', 
            'would', 'could', 'should', 'may', 'might', 'must', 'can', 'shall',
            'this', 'that', 'these', 'those', 'i', 'you', 'he', 'she', 'it', 
            'we', 'they', 'me', 'him', 'her', 'us', 'them', 'my', 'your', 'his',
            'her', 'its', 'our', 'their', 'all', 'any', 'both', 'each', 'few',
            'more', 'most', 'other', 'some', 'such', 'no', 'nor', 'not', 'only',
            'own', 'same', 'so', 'than', 'too', 'very', 'just', 'now'
        }
        
        # Filter out stop words and short words
        filtered_words = [word for word in words if len(word) > 2 and word not in stop_words]
        
        return filtered_words
    
    def build_vocabulary(self):
        """Build vocabulary from all paragraphs"""
        print("Building vocabulary...")
        
        # Preprocess all paragraphs
        self.cleaned_paragraphs = []
        word_counts = Counter()
        
        for para in self.paragraphs:
            words = self.preprocess_text(para)
            self.cleaned_paragraphs.append(words)
            word_counts.update(words)
        
        # Keep words that appear at least 2 times but not too frequently
        total_docs = len(self.paragraphs)
        min_freq = 2
        max_freq = total_docs * 0.5  # Remove words in more than 50% of documents
        
        vocabulary = {}
        idx = 0
        for word, count in word_counts.items():
            if min_freq <= count <= max_freq:
                vocabulary[word] = idx
                idx += 1
        
        self.vocabulary = vocabulary
        print(f"Built vocabulary with {len(self.vocabulary)} terms")
    
    def calculate_tfidf(self):
        """Calculate TF-IDF vectors"""
        print("Calculating TF-IDF vectors...")
        
        vocab_size = len(self.vocabulary)
        doc_count = len(self.paragraphs)
        
        # Calculate document frequency for each term
        df = defaultdict(int)
        for words in self.cleaned_paragraphs:
            unique_words = set(words)
            for word in unique_words:
                if word in self.vocabulary:
                    df[word] += 1
        
        # Calculate TF-IDF for each document
        self.tfidf_vectors = []
        
        for doc_idx, words in enumerate(self.cleaned_paragraphs):
            if doc_idx % 10000 == 0:
                print(f"  Processing document {doc_idx}/{doc_count}")
            
            # Count term frequencies
            tf = Counter(words)
            doc_length = len(words)
            
            # Calculate TF-IDF vector
            vector = [0.0] * vocab_size
            
            for word, count in tf.items():
                if word in self.vocabulary:
                    word_idx = self.vocabulary[word]
                    
                    # TF: term frequency normalized by document length
                    tf_score = count / doc_length if doc_length > 0 else 0
                    
                    # IDF: inverse document frequency
                    idf_score = math.log(doc_count / (df[word] + 1))
                    
                    # TF-IDF score
                    vector[word_idx] = tf_score * idf_score
            
            self.tfidf_vectors.append(vector)
        
        print(f"Calculated TF-IDF vectors: {len(self.tfidf_vectors)} x {vocab_size}")
    
    def cosine_similarity(self, vec1: List[float], vec2: List[float]) -> float:
        """Calculate cosine similarity between two vectors"""
        dot_product = sum(a * b for a, b in zip(vec1, vec2))
        
        norm1 = math.sqrt(sum(a * a for a in vec1))
        norm2 = math.sqrt(sum(b * b for b in vec2))
        
        if norm1 == 0 or norm2 == 0:
            return 0.0
        
        return dot_product / (norm1 * norm2)
    
    def euclidean_distance(self, vec1: List[float], vec2: List[float]) -> float:
        """Calculate Euclidean distance between vectors"""
        return math.sqrt(sum((a - b) ** 2 for a, b in zip(vec1, vec2)))
    
    def kmeans_clustering(self, k: int, max_iters: int = 20):
        """Simple K-means clustering implementation"""
        print(f"Running K-means clustering with k={k}")
        
        n_docs = len(self.tfidf_vectors)
        n_features = len(self.tfidf_vectors[0])
        
        # Initialize centroids randomly
        self.centroids = []
        for _ in range(k):
            centroid = [random.random() for _ in range(n_features)]
            self.centroids.append(centroid)
        
        for iteration in range(max_iters):
            print(f"  Iteration {iteration + 1}/{max_iters}")
            
            # Assign points to closest centroid
            new_clusters = [0] * n_docs
            
            for doc_idx in range(n_docs):
                if doc_idx % 10000 == 0:
                    print(f"    Assigning document {doc_idx}/{n_docs}")
                
                min_distance = float('inf')
                closest_centroid = 0
                
                for centroid_idx in range(k):
                    distance = self.euclidean_distance(
                        self.tfidf_vectors[doc_idx], 
                        self.centroids[centroid_idx]
                    )
                    
                    if distance < min_distance:
                        min_distance = distance
                        closest_centroid = centroid_idx
                
                new_clusters[doc_idx] = closest_centroid
            
            # Update centroids
            new_centroids = []
            for cluster_idx in range(k):
                cluster_vectors = [
                    self.tfidf_vectors[i] for i in range(n_docs) 
                    if new_clusters[i] == cluster_idx
                ]
                
                if cluster_vectors:
                    # Calculate mean of cluster vectors
                    centroid = [0.0] * n_features
                    for vector in cluster_vectors:
                        for j in range(n_features):
                            centroid[j] += vector[j]
                    
                    for j in range(n_features):
                        centroid[j] /= len(cluster_vectors)
                    
                    new_centroids.append(centroid)
                else:
                    # Empty cluster, reinitialize randomly
                    new_centroids.append([random.random() for _ in range(n_features)])
            
            # Check for convergence
            converged = True
            if hasattr(self, 'clusters') and self.clusters:
                for i in range(n_docs):
                    if new_clusters[i] != self.clusters[i]:
                        converged = False
                        break
            else:
                converged = False
            
            self.clusters = new_clusters
            self.centroids = new_centroids
            
            if converged:
                print(f"  Converged after {iteration + 1} iterations")
                break
        
        # Print cluster distribution
        cluster_counts = Counter(self.clusters)
        print("Cluster distribution:")
        for cluster_id in range(k):
            count = cluster_counts.get(cluster_id, 0)
            percentage = (count / n_docs) * 100
            print(f"  Cluster {cluster_id}: {count} paragraphs ({percentage:.1f}%)")
    
    def analyze_clusters(self):
        """Analyze cluster content"""
        print("Analyzing clusters...")
        
        cluster_analysis = {}
        k = len(set(self.clusters))
        
        # Reverse vocabulary for term lookup
        idx_to_word = {idx: word for word, idx in self.vocabulary.items()}
        
        for cluster_id in range(k):
            # Get paragraphs in this cluster
            cluster_paragraphs = [
                self.paragraphs[i] for i in range(len(self.paragraphs))
                if self.clusters[i] == cluster_id
            ]
            
            if not cluster_paragraphs:
                continue
            
            # Get centroid for this cluster
            centroid = self.centroids[cluster_id]
            
            # Find top terms in centroid
            top_indices = sorted(range(len(centroid)), key=lambda i: centroid[i], reverse=True)[:10]
            top_terms = [idx_to_word[idx] for idx in top_indices if centroid[idx] > 0]
            
            # Sample paragraphs
            sample_size = min(5, len(cluster_paragraphs))
            sample_paragraphs = random.sample(cluster_paragraphs, sample_size)
            
            cluster_analysis[cluster_id] = {
                'size': len(cluster_paragraphs),
                'top_terms': top_terms,
                'sample_paragraphs': [para[:200] + "..." for para in sample_paragraphs],
                'avg_length': sum(len(para) for para in cluster_paragraphs) / len(cluster_paragraphs)
            }
        
        return cluster_analysis
    
    def save_results(self):
        """Save clustering results"""
        print("Saving results...")
        
        # Save cluster assignments
        results = []
        for i in range(len(self.paragraphs)):
            results.append({
                'paragraph_id': i,
                'cluster_id': self.clusters[i],
                'paragraph_text': self.paragraphs[i][:500] + "..." if len(self.paragraphs[i]) > 500 else self.paragraphs[i],
                'paragraph_length': len(self.paragraphs[i])
            })
        
        results_file = f"{self.output_prefix}_results.json"
        with open(results_file, 'w', encoding='utf-8') as f:
            json.dump(results, f, indent=2, ensure_ascii=False)
        
        # Analyze clusters
        cluster_analysis = self.analyze_clusters()
        
        analysis_file = f"{self.output_prefix}_analysis.json"
        with open(analysis_file, 'w', encoding='utf-8') as f:
            json.dump(cluster_analysis, f, indent=2, ensure_ascii=False)
        
        # Create summary report
        summary_file = f"{self.output_prefix}_summary.txt"
        with open(summary_file, 'w', encoding='utf-8') as f:
            f.write("FIFA PARAGRAPH CLUSTERING SUMMARY\n")
            f.write("=" * 50 + "\n\n")
            f.write(f"Dataset: {self.input_file}\n")
            f.write(f"Method: TF-IDF + K-means\n")
            f.write(f"Total paragraphs: {len(self.paragraphs)}\n")
            f.write(f"Vocabulary size: {len(self.vocabulary)}\n")
            f.write(f"Number of clusters: {self.optimal_k}\n")
            f.write(f"Generated: {datetime.now().strftime('%Y-%m-%d %H:%M:%S')}\n\n")
            
            f.write("CLUSTER ANALYSIS\n")
            f.write("-" * 30 + "\n\n")
            
            for cluster_id, analysis in cluster_analysis.items():
                f.write(f"CLUSTER {cluster_id}:\n")
                f.write(f"  Size: {analysis['size']} paragraphs\n")
                f.write(f"  Avg length: {analysis['avg_length']:.0f} characters\n")
                f.write(f"  Top terms: {', '.join(analysis['top_terms'][:5])}\n")
                f.write(f"  Sample paragraphs:\n")
                
                for i, sample in enumerate(analysis['sample_paragraphs'][:2]):
                    f.write(f"    {i+1}. {sample}\n")
                f.write("\n")
        
        print(f"Results saved:")
        print(f"  - {results_file}")
        print(f"  - {analysis_file}")
        print(f"  - {summary_file}")
        
        return results_file, analysis_file, summary_file
    
    def run_clustering(self, k: int = None):
        """Run complete clustering pipeline"""
        print("Starting Simple FIFA Paragraph Clustering")
        print("=" * 50)
        
        # Use provided k or default
        if k:
            self.optimal_k = k
        
        # Load and preprocess data
        self.load_paragraphs()
        self.build_vocabulary()
        self.calculate_tfidf()
        
        # Cluster
        self.kmeans_clustering(self.optimal_k)
        
        # Save results
        self.save_results()
        
        print("\n" + "=" * 50)
        print("CLUSTERING COMPLETE!")
        print(f"Processed {len(self.paragraphs)} paragraphs into {self.optimal_k} clusters")


def main():
    """Main execution"""
    input_file = "fifa_paragraphs_20250622_175352.txt"
    
    if not os.path.exists(input_file):
        print(f"Error: Input file {input_file} not found!")
        return
    
    # Initialize and run clustering
    clusterer = SimpleFIFAClusterer(input_file)
    clusterer.run_clustering(k=15)  # Start with 15 clusters


if __name__ == "__main__":
    main()