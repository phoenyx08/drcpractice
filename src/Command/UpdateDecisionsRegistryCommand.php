<?php

namespace App\Command;

use App\Entity\Category;
use App\Service\Converter;
use Doctrine\ORM\Mapping\Entity;
use PhoenyxStudio\Downloader\IDownloader;
use App\Service\Parser\FakeParser;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Doctrine\ORM\EntityManagerInterface;

class UpdateDecisionsRegistryCommand extends Command
{
    private $parser;
    private $downloader;
    private $entityManager;
    private $converter;
    private $decisionsList;
    /**
     * @var string
     */
    protected static $defaultName = 'app:registry:update';

    public function __construct(
        IDownloader $downloader,
        FakeParser $parser,
        EntityManagerInterface $entityManager,
        Converter $converter
    )
    {
        $this->entityManager = $entityManager;
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
        $output->writeln('Hello, world!!');
        $output->writeln('You are about to update decisions registry');
        $repository = $this->entityManager->getRepository(Category::class);
        $category = $repository->findOneBy(['ShortName' => 'solidarity']);
        if ($category == null) {
            $category = new Category();
        }
        $html = $this->downloader->download('http://google.com');
        $result = $this->parser->parse($html);
        $parsedObject = $result->ejectObject();
        foreach($parsedObject->decisionsList as $parsedDecision) {
            $decision = $this->converter->parsedDecisionToDecisionEntity($parsedDecision, $category);
            $this->decisionsList[] = $decision;
        }
        return 0;
    }
}
