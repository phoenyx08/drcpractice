<?php

declare(strict_types=1);

namespace App\Command;

use App\Service\WakeupService;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class WakeupCommand extends Command
{
    protected static $defaultName = 'app:wakeup';

    public function __construct(private readonly WakeupService $wakeupService)
    {
        parent::__construct();
    }

    protected function configure(): void
    {
        $this->setDescription('Check for new decisions from FIFA API and add them to the database');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $io->title('FIFA Decision Wakeup Process');

        $startTime = microtime(true);

        try {
            $newDecisionsCount = $this->wakeupService->processNewDecisions();
            
            $executionTime = microtime(true) - $startTime;
            
            if ($newDecisionsCount > 0) {
                $io->success(sprintf(
                    'Successfully processed %d new decisions in %.2f seconds',
                    $newDecisionsCount,
                    $executionTime
                ));
            } else {
                $io->info(sprintf(
                    'No new decisions found. Process completed in %.2f seconds',
                    $executionTime
                ));
            }

            return Command::SUCCESS;
            
        } catch (\Exception $e) {
            $io->error('An error occurred during the wakeup process: ' . $e->getMessage());
            return Command::FAILURE;
        }
    }
}
