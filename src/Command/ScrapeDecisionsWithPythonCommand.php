<?php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class ScrapeDecisionsWithPythonCommand extends Command
{
    protected static $defaultName = 'app:scrape-python';
    
    protected function configure()
    {
        $this->setDescription('Run Python scraper for FIFA solidarity decisions');
    }
    
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        
        $io->title('Running Python Scraper for FIFA Solidarity Decisions');
        
        $pythonScript = __DIR__ . '/../../fifa_scraper.py';
        
        if (!file_exists($pythonScript)) {
            $io->error('Python scraper script not found at: ' . $pythonScript);
            return 1;
        }
        
        $io->note('Starting Python scraper...');
        
        $command = "python3 $pythonScript";
        $output = shell_exec($command);
        
        if ($output === null) {
            $io->error('Failed to run Python scraper');
            return 1;
        }
        
        $io->success('Python scraper completed');
        $io->writeln($output);
        
        return 0;
    }
}