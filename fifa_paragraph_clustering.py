#!/usr/bin/env python3
"""
FIFA Paragraph Clustering using Sentence-BERT
Clusters FIFA DRC decision paragraphs for semantic analysis
"""

import os
import json
import pickle
import numpy as np
import pandas as pd
from datetime import datetime
from pathlib import Path
from typing import List, Dict, Tuple
import warnings
warnings.filterwarnings('ignore')

# Check and install required packages
def check_dependencies():
    required_packages = [
        'sentence-transformers',
        'scikit-learn',
        'matplotlib',
        'seaborn',
        'umap-learn'
    ]
    
    missing = []
    for package in required_packages:
        try:
            __import__(package.replace('-', '_'))
        except ImportError:
            missing.append(package)
    
    if missing:
        print(f"Installing missing packages: {missing}")
        import subprocess
        for package in missing:
            subprocess.check_call([f"pip3", "install", package])

check_dependencies()

from sentence_transformers import SentenceTransformer
from sklearn.cluster import KMeans, MiniBatchKMeans
from sklearn.metrics import silhouette_score
from sklearn.decomposition import PCA
from sklearn.manifold import TSNE
import umap
import matplotlib.pyplot as plt
import seaborn as sns

class FIFAParagraphClusterer:
    """FIFA Paragraph Clustering with Sentence-BERT"""
    
    def __init__(self, input_file: str, model_name: str = 'all-MiniLM-L6-v2'):
        self.input_file = input_file
        self.model_name = model_name
        self.model = None
        self.paragraphs = []
        self.embeddings = None
        self.clusters = None
        self.cluster_labels = None
        self.optimal_k = None
        
        # Output files
        timestamp = datetime.now().strftime("%Y%m%d_%H%M%S")
        self.output_prefix = f"fifa_clusters_{timestamp}"
        
    def load_paragraphs(self) -> List[str]:
        """Load and clean paragraphs from input file"""
        print(f"Loading paragraphs from {self.input_file}...")
        
        with open(self.input_file, 'r', encoding='utf-8') as f:
            content = f.read()
        
        # Split by separator and clean
        paragraphs = content.split('---PARAGRAPH_SEPARATOR---')
        
        # Clean paragraphs
        cleaned = []
        for para in paragraphs:
            para = para.strip()
            # Skip header, empty, or very short paragraphs
            if (len(para) > 20 and 
                not para.startswith('#') and 
                not para.startswith('Generated:') and
                not para.startswith('Source:') and
                not para.startswith('Format:')):
                cleaned.append(para)
        
        self.paragraphs = cleaned
        print(f"Loaded {len(self.paragraphs)} paragraphs")
        return self.paragraphs
    
    def load_model(self):
        """Load Sentence-BERT model"""
        print(f"Loading Sentence-BERT model: {self.model_name}")
        self.model = SentenceTransformer(self.model_name)
        print("Model loaded successfully")
    
    def generate_embeddings(self, batch_size: int = 32):
        """Generate embeddings for all paragraphs"""
        print("Generating embeddings...")
        print(f"Processing {len(self.paragraphs)} paragraphs in batches of {batch_size}")
        
        # Generate embeddings with progress bar
        self.embeddings = self.model.encode(
            self.paragraphs,
            batch_size=batch_size,
            show_progress_bar=True,
            convert_to_numpy=True
        )
        
        print(f"Generated embeddings: {self.embeddings.shape}")
        
        # Save embeddings for future use
        embeddings_file = f"{self.output_prefix}_embeddings.pkl"
        with open(embeddings_file, 'wb') as f:
            pickle.dump(self.embeddings, f)
        print(f"Embeddings saved to {embeddings_file}")
    
    def find_optimal_clusters(self, k_range: Tuple[int, int] = (5, 30)):
        """Find optimal number of clusters using elbow method"""
        print(f"Finding optimal number of clusters in range {k_range}")
        
        k_min, k_max = k_range
        wcss = []
        silhouette_scores = []
        k_values = range(k_min, k_max + 1)
        
        # Use MiniBatchKMeans for speed with large dataset
        for k in k_values:
            print(f"Testing k={k}...", end=' ')
            
            kmeans = MiniBatchKMeans(
                n_clusters=k,
                random_state=42,
                batch_size=1000,
                n_init=3
            )
            cluster_labels = kmeans.fit_predict(self.embeddings)
            
            wcss.append(kmeans.inertia_)
            
            # Calculate silhouette score (sample subset for speed)
            sample_size = min(5000, len(self.embeddings))
            sample_idx = np.random.choice(len(self.embeddings), sample_size, replace=False)
            sil_score = silhouette_score(
                self.embeddings[sample_idx], 
                cluster_labels[sample_idx]
            )
            silhouette_scores.append(sil_score)
            print(f"Silhouette: {sil_score:.3f}")
        
        # Find elbow point
        wcss_normalized = (np.array(wcss) - min(wcss)) / (max(wcss) - min(wcss))
        
        # Simple elbow detection: maximum curvature
        diffs = np.diff(wcss_normalized)
        second_diffs = np.diff(diffs)
        elbow_idx = np.argmax(second_diffs) + 2  # +2 for indexing
        self.optimal_k = k_values[elbow_idx] if elbow_idx < len(k_values) else k_values[-1]
        
        # Also consider silhouette score
        best_sil_idx = np.argmax(silhouette_scores)
        best_sil_k = k_values[best_sil_idx]
        
        print(f"\nElbow method suggests k={self.optimal_k}")
        print(f"Best silhouette score at k={best_sil_k} (score: {max(silhouette_scores):.3f})")
        
        # Plot results
        fig, (ax1, ax2) = plt.subplots(1, 2, figsize=(12, 5))
        
        ax1.plot(k_values, wcss, 'bo-')
        ax1.axvline(x=self.optimal_k, color='r', linestyle='--', label=f'Elbow k={self.optimal_k}')
        ax1.set_xlabel('Number of Clusters (k)')
        ax1.set_ylabel('WCSS')
        ax1.set_title('Elbow Method')
        ax1.legend()
        ax1.grid(True)
        
        ax2.plot(k_values, silhouette_scores, 'go-')
        ax2.axvline(x=best_sil_k, color='r', linestyle='--', label=f'Best k={best_sil_k}')
        ax2.set_xlabel('Number of Clusters (k)')
        ax2.set_ylabel('Silhouette Score')
        ax2.set_title('Silhouette Analysis')
        ax2.legend()
        ax2.grid(True)
        
        plt.tight_layout()
        plt.savefig(f"{self.output_prefix}_cluster_analysis.png", dpi=300, bbox_inches='tight')
        print(f"Cluster analysis plot saved to {self.output_prefix}_cluster_analysis.png")
        
        # Use silhouette score if significantly better
        if silhouette_scores[best_sil_idx] > 0.3 and abs(best_sil_k - self.optimal_k) <= 3:
            self.optimal_k = best_sil_k
            print(f"Using k={self.optimal_k} based on silhouette score")
        
        return self.optimal_k
    
    def perform_clustering(self, n_clusters: int = None):
        """Perform final clustering"""
        if n_clusters is None:
            n_clusters = self.optimal_k
        
        print(f"Performing final clustering with k={n_clusters}")
        
        # Use regular KMeans for final clustering
        kmeans = KMeans(
            n_clusters=n_clusters,
            random_state=42,
            n_init=10,
            max_iter=300
        )
        
        self.clusters = kmeans.fit_predict(self.embeddings)
        self.cluster_labels = kmeans.labels_
        
        # Calculate cluster statistics
        unique, counts = np.unique(self.clusters, return_counts=True)
        print(f"Cluster distribution:")
        for i, count in enumerate(counts):
            percentage = (count / len(self.clusters)) * 100
            print(f"  Cluster {i}: {count} paragraphs ({percentage:.1f}%)")
        
        return self.clusters
    
    def analyze_clusters(self):
        """Analyze and label clusters based on content"""
        print("Analyzing cluster content...")
        
        cluster_analysis = {}
        
        for cluster_id in range(max(self.clusters) + 1):
            cluster_paragraphs = [self.paragraphs[i] for i in range(len(self.paragraphs)) 
                                if self.clusters[i] == cluster_id]
            
            # Sample paragraphs for analysis
            sample_size = min(10, len(cluster_paragraphs))
            sample_paragraphs = np.random.choice(cluster_paragraphs, sample_size, replace=False)
            
            # Basic content analysis
            avg_length = np.mean([len(p) for p in cluster_paragraphs])
            
            # Common patterns
            common_words = self._extract_common_patterns(cluster_paragraphs)
            
            cluster_analysis[cluster_id] = {
                'size': len(cluster_paragraphs),
                'avg_length': avg_length,
                'common_patterns': common_words,
                'sample_paragraphs': sample_paragraphs.tolist()
            }
        
        return cluster_analysis
    
    def _extract_common_patterns(self, paragraphs: List[str]) -> List[str]:
        """Extract common patterns from cluster paragraphs"""
        # Simple keyword extraction
        all_text = ' '.join(paragraphs).lower()
        
        # FIFA-specific patterns
        fifa_patterns = [
            'ref tms', 'article', 'rstp', 'solidarity', 'transfer',
            'claimant', 'respondent', 'former club', 'player',
            'euro', 'eur', 'payment', 'due', 'facts', 'legal',
            'dispute resolution chamber', 'football tribunal',
            'percentage', 'contribution', 'training', 'registration'
        ]
        
        found_patterns = []
        for pattern in fifa_patterns:
            if pattern in all_text:
                count = all_text.count(pattern)
                if count >= len(paragraphs) * 0.1:  # At least 10% of paragraphs
                    found_patterns.append(f"{pattern} ({count})")
        
        return found_patterns[:5]  # Top 5 patterns
    
    def save_results(self):
        """Save clustering results"""
        print("Saving results...")
        
        # Create results dataframe
        results_df = pd.DataFrame({
            'paragraph_id': range(len(self.paragraphs)),
            'paragraph_text': self.paragraphs,
            'cluster_id': self.clusters,
            'paragraph_length': [len(p) for p in self.paragraphs]
        })
        
        # Save to CSV
        csv_file = f"{self.output_prefix}_results.csv"
        results_df.to_csv(csv_file, index=False)
        print(f"Results saved to {csv_file}")
        
        # Analyze clusters
        cluster_analysis = self.analyze_clusters()
        
        # Save cluster analysis
        analysis_file = f"{self.output_prefix}_analysis.json"
        with open(analysis_file, 'w', encoding='utf-8') as f:
            json.dump(cluster_analysis, f, indent=2, ensure_ascii=False)
        print(f"Cluster analysis saved to {analysis_file}")
        
        # Create summary report
        self._create_summary_report(cluster_analysis)
        
        return csv_file, analysis_file
    
    def _create_summary_report(self, cluster_analysis):
        """Create human-readable summary report"""
        report_file = f"{self.output_prefix}_summary.txt"
        
        with open(report_file, 'w', encoding='utf-8') as f:
            f.write("FIFA PARAGRAPH CLUSTERING SUMMARY\n")
            f.write("=" * 50 + "\n\n")
            f.write(f"Dataset: {self.input_file}\n")
            f.write(f"Model: {self.model_name}\n")
            f.write(f"Total paragraphs: {len(self.paragraphs)}\n")
            f.write(f"Optimal clusters: {self.optimal_k}\n")
            f.write(f"Generated: {datetime.now().strftime('%Y-%m-%d %H:%M:%S')}\n\n")
            
            f.write("CLUSTER BREAKDOWN\n")
            f.write("-" * 30 + "\n\n")
            
            for cluster_id, analysis in cluster_analysis.items():
                f.write(f"CLUSTER {cluster_id}:\n")
                f.write(f"  Size: {analysis['size']} paragraphs\n")
                f.write(f"  Avg length: {analysis['avg_length']:.0f} characters\n")
                f.write(f"  Common patterns: {', '.join(analysis['common_patterns'])}\n")
                f.write(f"  Sample paragraphs:\n")
                
                for i, sample in enumerate(analysis['sample_paragraphs'][:3]):
                    f.write(f"    {i+1}. {sample[:100]}...\n")
                f.write("\n")
        
        print(f"Summary report saved to {report_file}")
    
    def visualize_clusters(self):
        """Create cluster visualizations"""
        print("Creating visualizations...")
        
        # Reduce dimensionality for visualization
        print("Reducing dimensionality with UMAP...")
        umap_reducer = umap.UMAP(n_components=2, random_state=42, n_neighbors=15, min_dist=0.1)
        embedding_2d = umap_reducer.fit_transform(self.embeddings)
        
        # Create visualization
        plt.figure(figsize=(12, 8))
        scatter = plt.scatter(
            embedding_2d[:, 0], 
            embedding_2d[:, 1], 
            c=self.clusters, 
            cmap='tab20', 
            alpha=0.6,
            s=20
        )
        plt.colorbar(scatter)
        plt.title(f'FIFA Paragraph Clusters (k={self.optimal_k})')
        plt.xlabel('UMAP Dimension 1')
        plt.ylabel('UMAP Dimension 2')
        
        viz_file = f"{self.output_prefix}_visualization.png"
        plt.savefig(viz_file, dpi=300, bbox_inches='tight')
        print(f"Cluster visualization saved to {viz_file}")
        plt.close()
    
    def run_full_pipeline(self):
        """Run complete clustering pipeline"""
        print("Starting FIFA Paragraph Clustering Pipeline")
        print("=" * 50)
        
        # Load data
        self.load_paragraphs()
        
        # Load model
        self.load_model()
        
        # Generate embeddings
        self.generate_embeddings()
        
        # Find optimal clusters
        self.find_optimal_clusters()
        
        # Perform clustering
        self.perform_clustering()
        
        # Save results
        self.save_results()
        
        # Create visualizations
        self.visualize_clusters()
        
        print("\n" + "=" * 50)
        print("CLUSTERING COMPLETE!")
        print(f"Results saved with prefix: {self.output_prefix}")
        print("Files generated:")
        print(f"  - {self.output_prefix}_results.csv")
        print(f"  - {self.output_prefix}_analysis.json") 
        print(f"  - {self.output_prefix}_summary.txt")
        print(f"  - {self.output_prefix}_visualization.png")
        print(f"  - {self.output_prefix}_cluster_analysis.png")


def main():
    """Main execution function"""
    input_file = "fifa_paragraphs_20250622_175352.txt"
    
    if not os.path.exists(input_file):
        print(f"Error: Input file {input_file} not found!")
        return
    
    # Initialize clusterer
    clusterer = FIFAParagraphClusterer(input_file)
    
    # Run pipeline
    clusterer.run_full_pipeline()


if __name__ == "__main__":
    main()