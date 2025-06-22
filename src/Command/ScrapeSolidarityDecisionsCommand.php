<?php

namespace App\Command;

use App\Service\DecisionScraper;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class ScrapeSolidarityDecisionsCommand extends Command
{
    protected static $defaultName = 'app:scrape-solidarity-decisions';
    
    protected function configure()
    {
        $this->setDescription('Scrape solidarity mechanism decisions from FIFA website');
    }
    
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        
        $io->title('Scraping Solidarity Mechanism Decisions');
        
        try {
            $scraper = new DecisionScraper();
            $decisions = $scraper->scrapeSolidarityDecisions();
            
            $io->success(sprintf('Found %d solidarity mechanism decisions', count($decisions)));
            
            if (!empty($decisions)) {
                $io->section('Decision Links:');
                foreach ($decisions as $decision) {
                    $io->writeln($decision);
                }
                
                // Save to file
                $filename = 'var/solidarity_decisions_' . date('Y-m-d_H-i-s') . '.txt';
                file_put_contents($filename, implode("\n", $decisions));
                $io->note('Links saved to: ' . $filename);
            }
            
        } catch (\Exception $e) {
            $io->error('Failed to scrape decisions: ' . $e->getMessage());
            return 1;
        }
        
        return 0;
    }
}