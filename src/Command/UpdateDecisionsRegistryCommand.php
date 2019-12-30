<?php

namespace App\Command;

use PhoenyxStudio\Downloader\IDownloader;
use App\Service\Parser\FakeParser;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class UpdateDecisionsRegistryCommand extends Command
{
    private $parser;
    private $downloader;
    /**
     * @var string
     */
    protected static $defaultName = 'app:registry:update';

    public function __construct(IDownloader $downloader, FakeParser $parser)
    {
        $this->downloader = $downloader;
        $this->parser = $parser;
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
        //$output->writeln($this->downloader->download('http://google.com'));
        $html = $this->downloader->download('http://google.com');
        $result = $this->parser->parse($html);
        return 0;
    }
}
