<?php

namespace App\Command;

use App\Entity\Body;
use App\Entity\Category;
use Symfony\Component\Console\Command\Command;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate;

class FillInitialDataCommand extends Command
{
    private $entityManager;
    protected static $defaultName = 'app:fill-initial-data';

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
        parent::__construct();
    }

    protected function configure()
    {
        $this
            ->setDescription('This command adds to the database initial Decision making bodies and Decision categories')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);

        $output->writeln('Operation started');
        $output->writeln('You are about to fill the database with initial data');

        // Add decision making bodies

        $bodiesRepository = $this->entityManager->getRepository(Body::class);


        // Dispute resolution chamber
        $drc = $bodiesRepository->findOneBy(['Name' => 'drc']);
        if ($drc == null) {
            $body = new Body();
            $body
                ->setName('drc')
                ->setShortName('Disputes resolution chamber');
            $this->entityManager->persist($body);
            $this->entityManager->flush();
            $drcId = $body->getId();
        } else {
            $drcId = $drc->getId();
        }

        // Players status committee
        $psc = $bodiesRepository->findOneBy(['Name' => 'psc']);
        if ($psc == null) {

            $body = new Body();
            $body
                ->setName('psc')
                ->setShortName('Players status committee');
            $this->entityManager->persist($body);
            $this->entityManager->flush();
            $pscId=$body->getId();
        } else {
            $pscId = $psc->getId();
        }

        // Adding dispute categories
        $categoriesRepository = $this->entityManager->getRepository(Category::class);

        // Solidarity contribution category

        $link = 'https://www.fifa.com/about-fifa/who-we-are/legal/judicial-bodies/dispute-resolution-chamber/decisions/_libraries/_solidarity_contribution';

        $solidarity = $categoriesRepository->findOneBy(['ShortName' => 'solidarity']);
        if ($solidarity == null) {
            $solidarity = new Category();
            $solidarity
                ->setName('Solidarity contribution')
                ->setShortName('solidarity')
                ->setLink($link)
                ->setBody($drc);
            $this->entityManager->persist($solidarity);
            $this->entityManager->flush();
        }

        $io->success('Filling the database with initial data is finished sucessrully');

        return 0;
    }
}
