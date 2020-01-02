<?php

namespace App\Command;

use App\Entity\Category;
use App\Repository\DecisionRepository;
use App\Service\Converter;
use Doctrine\ORM\Mapping\Entity;
use PhoenyxStudio\Downloader\IDownloader;
use App\Service\Parser\FakeParser;
use Psr\Log\LoggerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Decision;
use Symfony\Component\Console\Style\SymfonyStyle;

class UpdateDecisionsRegistryCommand extends Command
{
    private $parser;
    private $downloader;
    private $entityManager;
    private $converter;
    private $decisionsList;
    private $logger;
    /**
     * @var string
     */
    protected static $defaultName = 'app:registry:update';

    public function __construct(
        IDownloader $downloader,
        FakeParser $parser,
        EntityManagerInterface $entityManager,
        LoggerInterface $logger,
        Converter $converter
    )
    {
        $this->entityManager = $entityManager;
        $this->logger = $logger;
        $this->downloader = $downloader;
        $this->parser = $parser;
        $this->converter = $converter;
        parent::__construct();
    }

    protected function configure()
    {
        $this
            ->setDescription('Updates decisions registry')
            ->setHelp('Use this to update decisions registry')
        ;
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int
     */
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $this->logger->info('Starting update Decisions registry');
        $io = new SymfonyStyle($input, $output);
        $start = microtime(true);
        $output->writeln('Hello, world!!');
        $output->writeln('You are about to update decisions registry');
        $repository = $this->entityManager->getRepository(Category::class);
        $categories = $repository->findAll();
        foreach ($categories as $category) {
            $html = $this->downloader->download($category->getLink());
            $result = $this->parser->parse($html);
            $parsedObject = $result->ejectObject();
            $decisionsRepository = $this->entityManager->getRepository(Decision::class);
            foreach($parsedObject->decisionsList as $parsedDecision) {
                $decision = $this->converter->parsedDecisionToDecisionEntity($parsedDecision, $category);

                $decisionFromTheDatabase = $decisionsRepository->findOneBy([
                    'Name' => $decision->getName(),
                    'Link' => $decision->getLink(),
                    'Category' => $decision->getCategory(),
                    'Month' => $decision->getMonth(),
                    'Year' => $decision->getYear(),
                ]);

                if ($decisionFromTheDatabase == null) {
                    $this->entityManager->persist($decision);
                    $this->entityManager->flush();
                }

                $this->decisionsList[] = $decision;
            }

        }

        $finish = microtime(true);
        $delta = $finish - $start;
        $io->success('Time for execution: ' . $delta . PHP_EOL);
        return 0;
    }
}
