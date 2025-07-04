<?php

declare(strict_types=1);

namespace App\Command;

use App\Entity\Body;
use App\Entity\Category;
use Symfony\Component\Console\Command\Command;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class FillInitialDataCommand extends Command
{
    private EntityManagerInterface $entityManager;
    protected static $defaultName = 'app:init';

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
        $drc = $bodiesRepository->findOneBy(['name' => 'drc']);
        if ($drc == null) {
            $body = new Body();
            $body
                ->setName('drc')
                ->setShortName('Disputes Resolution Chamber');
            $this->entityManager->persist($body);
            $this->entityManager->flush();
            $drc = $body;
        }

        // Players status committee
        $psc = $bodiesRepository->findOneBy(['name' => 'psc']);
        if ($psc == null) {

            $body = new Body();
            $body
                ->setName('psc')
                ->setShortName('Players\'s Status Chamber');
            $this->entityManager->persist($body);
            $this->entityManager->flush();
            $psc = $body;
        }

        // Adding dispute categories
        $categoriesRepository = $this->entityManager->getRepository(Category::class);

        // Solidarity contribution category
        $link = 'https://www.fifa.com/about-fifa/who-we-are/legal/judicial-bodies/dispute-resolution-chamber/decisions/_libraries/_solidarity_contribution';

        $solidarity = $categoriesRepository->findOneBy(['shortName' => 'solidarity']);
        if ($solidarity == null) {
            $solidarity = new Category();
            $solidarity
                ->setName('Solidarity Contribution')
                ->setShortName('solidarity')
                ->setLink($link)
                ->setBody($drc);
            $this->entityManager->persist($solidarity);
            $this->entityManager->flush();
        }

        // Training compensation category
        $link = 'https://www.fifa.com/about-fifa/who-we-are/legal/judicial-bodies/dispute-resolution-chamber/decisions/_libraries/_training_compensation';

        $training = $categoriesRepository->findOneBy(['shortName' => 'training']);
        if ($training == null) {
            $training = new Category();
            $training
                ->setName('Training Compensation')
                ->setShortName('training')
                ->setLink($link)
                ->setBody($drc);
            $this->entityManager->persist($training);
            $this->entityManager->flush();
        }

        // Labour disputes category
        $link = 'https://www.fifa.com/about-fifa/who-we-are/legal/judicial-bodies/dispute-resolution-chamber/decisions/_libraries/_labour_disputes';

        $labour = $categoriesRepository->findOneBy(['shortName' => 'labour']);
        if ($labour == null) {
            $labour = new Category();
            $labour
                ->setName('Labour Disputes')
                ->setShortName('labour')
                ->setLink($link)
                ->setBody($drc);
            $this->entityManager->persist($labour);
            $this->entityManager->flush();
        }

        // Overdue payables category
        $link = 'https://www.fifa.com/about-fifa/who-we-are/legal/judicial-bodies/dispute-resolution-chamber/decisions/_libraries/_overdue_payables';

        $overdueDrc = $categoriesRepository->findOneBy(['shortName' => 'overdue-drc']);
        if ($overdueDrc == null) {
            $overdueDrc = new Category();
            $overdueDrc
                ->setName('Overdue Payables (DRC)')
                ->setShortName('overdue-drc')
                ->setLink($link)
                ->setBody($drc);
            $this->entityManager->persist($overdueDrc);
            $this->entityManager->flush();
        }

        // Preliminary Decisions (DRC) category
        $preliminaryDrc = $categoriesRepository->findOneBy(['shortName' => 'preliminary-drc']);
        if ($preliminaryDrc == null) {
            $preliminaryDrc = new Category();
            $preliminaryDrc
                ->setName('Preliminary Decisions (DRC)')
                ->setShortName('preliminary-drc')
                ->setLink($link)
                ->setBody($drc);
            $this->entityManager->persist($preliminaryDrc);
            $this->entityManager->flush();
        }

        // Club vs Club disputes category
        $link = 'https://www.fifa.com/about-fifa/who-we-are/legal/judicial-bodies/player-status-committee/decisions/_libraries/_club_vs_club_disputes';

        $club = $categoriesRepository->findOneBy(['shortName' => 'club']);
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

        $coach = $categoriesRepository->findOneBy(['shortName' => 'coach']);
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

        $agent = $categoriesRepository->findOneBy(['shortName' => 'agent']);
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

        $overduePsc = $categoriesRepository->findOneBy(['shortName' => 'overdue-psc']);
        if ($overduePsc == null) {
            $overduePsc = new Category();
            $overduePsc
                ->setName('Overdue payables (PSC)')
                ->setShortName('overdue-psc')
                ->setLink($link)
                ->setBody($psc);
            $this->entityManager->persist($overduePsc);
            $this->entityManager->flush();
        }

        // Preliminary Decisions (psc) catagory
        $link = 'https://www.fifa.com/about-fifa/who-we-are/legal/judicial-bodies/player-status-committee/decisions/_libraries/_overdue_payables';

        $preliminaryPsc = $categoriesRepository->findOneBy(['shortName' => 'preliminary-psc']);
        if ($preliminaryPsc == null) {
            $preliminaryPsc = new Category();
            $preliminaryPsc
                ->setName('Preliminary Decisions (PSC)')
                ->setShortName('preliminary-psc')
                ->setLink($link)
                ->setBody($psc);
            $this->entityManager->persist($preliminaryPsc);
            $this->entityManager->flush();
        }

        $io->success('Filling the database with initial data is finished successfully');

        return 0;
    }
}
