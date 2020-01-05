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
            $drc = $body;
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
            $psc = $body;
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

        // Training compensation category
        $link = 'https://www.fifa.com/about-fifa/who-we-are/legal/judicial-bodies/dispute-resolution-chamber/decisions/_libraries/_training_compensation';

        $training = $categoriesRepository->findOneBy(['ShortName' => 'training']);
        if ($training == null) {
            $training = new Category();
            $training
                ->setName('Training compensation')
                ->setShortName('training')
                ->setLink($link)
                ->setBody($drc);
            $this->entityManager->persist($training);
            $this->entityManager->flush();
        }

        // Labour disputes category
        $link = 'https://www.fifa.com/about-fifa/who-we-are/legal/judicial-bodies/dispute-resolution-chamber/decisions/_libraries/_labour_disputes';

        $labour = $categoriesRepository->findOneBy(['ShortName' => 'labour']);
        if ($labour == null) {
            $labour = new Category();
            $labour
                ->setName('Labour disputes')
                ->setShortName('labour')
                ->setLink($link)
                ->setBody($drc);
            $this->entityManager->persist($labour);
            $this->entityManager->flush();
        }

        // Overdue payables category
        $link = 'https://www.fifa.com/about-fifa/who-we-are/legal/judicial-bodies/dispute-resolution-chamber/decisions/_libraries/_overdue_payables';

        $overdueDrc = $categoriesRepository->findOneBy(['ShortName' => 'overdueDrc']);
        if ($overdueDrc == null) {
            $overdueDrc = new Category();
            $overdueDrc
                ->setName('Overdue payables (DRC)')
                ->setShortName('overdueDrc')
                ->setLink($link)
                ->setBody($drc);
            $this->entityManager->persist($overdueDrc);
            $this->entityManager->flush();
        }

        // Club vs Club disputes category
        $link = 'https://www.fifa.com/about-fifa/who-we-are/legal/judicial-bodies/player-status-committee/decisions/_libraries/_club_vs_club_disputes';

        $club = $categoriesRepository->findOneBy(['ShortName' => 'club']);
        if ($club == null) {
            $club = new Category();
            $club
                ->setName('Club vs Club disputes')
                ->setShortName('club')
                ->setLink($link)
                ->setBody($psc);
            $this->entityManager->persist($club);
            $this->entityManager->flush();
        }

        // Coach disputes category
        $link = 'https://www.fifa.com/about-fifa/who-we-are/legal/judicial-bodies/player-status-committee/decisions/_libraries/_coach_disputes';

        $coach = $categoriesRepository->findOneBy(['ShortName' => 'coach']);
        if ($coach == null) {
            $coach = new Category();
            $coach
                ->setName('Coach disputes')
                ->setShortName('coach')
                ->setLink($link)
                ->setBody($psc);
            $this->entityManager->persist($coach);
            $this->entityManager->flush();
        }

        // Agents disputes category
        $link = 'https://www.fifa.com/about-fifa/who-we-are/legal/judicial-bodies/player-status-committee/decisions/_libraries/_players_match_agents_disputes';

        $agent = $categoriesRepository->findOneBy(['ShortName' => 'agent']);
        if ($agent == null) {
            $agent = new Category();
            $agent
                ->setName('Agent disputes')
                ->setShortName('agent')
                ->setLink($link)
                ->setBody($psc);
            $this->entityManager->persist($agent);
            $this->entityManager->flush();
        }

        // Overdue payables (psc) catagory
        $link = 'https://www.fifa.com/about-fifa/who-we-are/legal/judicial-bodies/player-status-committee/decisions/_libraries/_overdue_payables';

        $overduePsc = $categoriesRepository->findOneBy(['ShortName' => 'overduePsc']);
        if ($overduePsc == null) {
            $overduePsc = new Category();
            $overduePsc
                ->setName('Overdue payables (PSC)')
                ->setShortName('overduePsc')
                ->setLink($link)
                ->setBody($psc);
            $this->entityManager->persist($overduePsc);
            $this->entityManager->flush();
        }

        $io->success('Filling the database with initial data is finished sucessrully');

        return 0;
    }
}
