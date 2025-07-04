<?php

namespace App\DataFixtures;

use App\Entity\Body;
use App\Entity\Category;
use App\Entity\Decision;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // First, create the bodies and categories (from app:init command)
        $this->createBodiesAndCategories($manager);
        
        $categoryRepository = $manager->getRepository(Category::class);
        
        // Get all categories
        $solidarity = $categoryRepository->findOneBy(['shortName' => 'solidarity']);
        $training = $categoryRepository->findOneBy(['shortName' => 'training']);
        $labour = $categoryRepository->findOneBy(['shortName' => 'labour']);
        $overdueDrc = $categoryRepository->findOneBy(['shortName' => 'overdueDrc']);
        $club = $categoryRepository->findOneBy(['shortName' => 'club']);
        $coach = $categoryRepository->findOneBy(['shortName' => 'coach']);
        $agent = $categoryRepository->findOneBy(['shortName' => 'agent']);
        $overduePsc = $categoryRepository->findOneBy(['shortName' => 'overduePsc']);

        // Solidarity contribution decisions
        if ($solidarity) {
            $solidarityDecisions = [
                ['name' => 'FC Barcelona vs Santos FC', 'year' => 2024, 'month' => 1, 'link' => 'https://fifa.com/legal/drc-solidarity-001'],
                ['name' => 'Real Madrid vs Flamengo', 'year' => 2024, 'month' => 2, 'link' => 'https://fifa.com/legal/drc-solidarity-002'],
                ['name' => 'Manchester City vs Palmeiras', 'year' => 2024, 'month' => 3, 'link' => 'https://fifa.com/legal/drc-solidarity-003'],
                ['name' => 'Chelsea FC vs River Plate', 'year' => 2023, 'month' => 12, 'link' => 'https://fifa.com/legal/drc-solidarity-004'],
                ['name' => 'PSG vs Atletico Mineiro', 'year' => 2023, 'month' => 11, 'link' => 'https://fifa.com/legal/drc-solidarity-005'],
                ['name' => 'Bayern Munich vs Gremio', 'year' => 2023, 'month' => 10, 'link' => 'https://fifa.com/legal/drc-solidarity-006'],
                ['name' => 'Liverpool FC vs Boca Juniors', 'year' => 2023, 'month' => 9, 'link' => 'https://fifa.com/legal/drc-solidarity-007'],
                ['name' => 'Juventus vs Sao Paulo FC', 'year' => 2023, 'month' => 8, 'link' => 'https://fifa.com/legal/drc-solidarity-008'],
                ['name' => 'AC Milan vs Corinthians', 'year' => 2023, 'month' => 7, 'link' => 'https://fifa.com/legal/drc-solidarity-009'],
                ['name' => 'Arsenal FC vs Internacional', 'year' => 2023, 'month' => 6, 'link' => 'https://fifa.com/legal/drc-solidarity-010']
            ];
            $this->createDecisions($manager, $solidarityDecisions, $solidarity);
        }

        // Training compensation decisions
        if ($training) {
            $trainingDecisions = [
                ['name' => 'Ajax vs FC Barcelona', 'year' => 2024, 'month' => 1, 'link' => 'https://fifa.com/legal/drc-training-001'],
                ['name' => 'Sporting CP vs Benfica', 'year' => 2024, 'month' => 2, 'link' => 'https://fifa.com/legal/drc-training-002'],
                ['name' => 'Borussia Dortmund vs Bayern Munich', 'year' => 2024, 'month' => 3, 'link' => 'https://fifa.com/legal/drc-training-003'],
                ['name' => 'AS Monaco vs PSG', 'year' => 2023, 'month' => 12, 'link' => 'https://fifa.com/legal/drc-training-004'],
                ['name' => 'FC Porto vs Sporting CP', 'year' => 2023, 'month' => 11, 'link' => 'https://fifa.com/legal/drc-training-005'],
                ['name' => 'Olympique Lyon vs AS Monaco', 'year' => 2023, 'month' => 10, 'link' => 'https://fifa.com/legal/drc-training-006'],
                ['name' => 'RB Leipzig vs Borussia Dortmund', 'year' => 2023, 'month' => 9, 'link' => 'https://fifa.com/legal/drc-training-007'],
                ['name' => 'Atletico Madrid vs Real Madrid', 'year' => 2023, 'month' => 8, 'link' => 'https://fifa.com/legal/drc-training-008'],
                ['name' => 'Valencia CF vs FC Barcelona', 'year' => 2023, 'month' => 7, 'link' => 'https://fifa.com/legal/drc-training-009'],
                ['name' => 'Sevilla FC vs Real Betis', 'year' => 2023, 'month' => 6, 'link' => 'https://fifa.com/legal/drc-training-010']
            ];
            $this->createDecisions($manager, $trainingDecisions, $training);
        }

        // Labour disputes decisions
        if ($labour) {
            $labourDecisions = [
                ['name' => 'Neymar Jr vs Al-Hilal', 'year' => 2024, 'month' => 1, 'link' => 'https://fifa.com/legal/drc-labour-001'],
                ['name' => 'Lionel Messi vs Inter Miami', 'year' => 2024, 'month' => 2, 'link' => 'https://fifa.com/legal/drc-labour-002'],
                ['name' => 'Cristiano Ronaldo vs Al-Nassr', 'year' => 2024, 'month' => 3, 'link' => 'https://fifa.com/legal/drc-labour-003'],
                ['name' => 'Kylian Mbappe vs PSG', 'year' => 2023, 'month' => 12, 'link' => 'https://fifa.com/legal/drc-labour-004'],
                ['name' => 'Erling Haaland vs Manchester City', 'year' => 2023, 'month' => 11, 'link' => 'https://fifa.com/legal/drc-labour-005'],
                ['name' => 'Vinicius Jr vs Real Madrid', 'year' => 2023, 'month' => 10, 'link' => 'https://fifa.com/legal/drc-labour-006'],
                ['name' => 'Pedri vs FC Barcelona', 'year' => 2023, 'month' => 9, 'link' => 'https://fifa.com/legal/drc-labour-007'],
                ['name' => 'Jude Bellingham vs Borussia Dortmund', 'year' => 2023, 'month' => 8, 'link' => 'https://fifa.com/legal/drc-labour-008'],
                ['name' => 'Jamal Musiala vs Bayern Munich', 'year' => 2023, 'month' => 7, 'link' => 'https://fifa.com/legal/drc-labour-009'],
                ['name' => 'Phil Foden vs Manchester City', 'year' => 2023, 'month' => 6, 'link' => 'https://fifa.com/legal/drc-labour-010']
            ];
            $this->createDecisions($manager, $labourDecisions, $labour);
        }

        // Overdue payables (DRC) decisions
        if ($overdueDrc) {
            $overdueDrcDecisions = [
                ['name' => 'Chelsea FC vs Borussia Dortmund', 'year' => 2024, 'month' => 1, 'link' => 'https://fifa.com/legal/drc-overdue-001'],
                ['name' => 'Manchester United vs Ajax', 'year' => 2024, 'month' => 2, 'link' => 'https://fifa.com/legal/drc-overdue-002'],
                ['name' => 'Arsenal FC vs Brighton', 'year' => 2024, 'month' => 3, 'link' => 'https://fifa.com/legal/drc-overdue-003'],
                ['name' => 'Tottenham vs Leicester City', 'year' => 2023, 'month' => 12, 'link' => 'https://fifa.com/legal/drc-overdue-004'],
                ['name' => 'Newcastle United vs Everton', 'year' => 2023, 'month' => 11, 'link' => 'https://fifa.com/legal/drc-overdue-005'],
                ['name' => 'West Ham vs Aston Villa', 'year' => 2023, 'month' => 10, 'link' => 'https://fifa.com/legal/drc-overdue-006'],
                ['name' => 'Wolves vs Crystal Palace', 'year' => 2023, 'month' => 9, 'link' => 'https://fifa.com/legal/drc-overdue-007'],
                ['name' => 'Brentford vs Fulham', 'year' => 2023, 'month' => 8, 'link' => 'https://fifa.com/legal/drc-overdue-008'],
                ['name' => 'Bournemouth vs Nottingham Forest', 'year' => 2023, 'month' => 7, 'link' => 'https://fifa.com/legal/drc-overdue-009'],
                ['name' => 'Sheffield United vs Luton Town', 'year' => 2023, 'month' => 6, 'link' => 'https://fifa.com/legal/drc-overdue-010']
            ];
            $this->createDecisions($manager, $overdueDrcDecisions, $overdueDrc);
        }

        // Club vs Club disputes decisions
        if ($club) {
            $clubDecisions = [
                ['name' => 'Real Madrid vs Manchester City', 'year' => 2024, 'month' => 1, 'link' => 'https://fifa.com/legal/psc-club-001'],
                ['name' => 'Barcelona vs PSG', 'year' => 2024, 'month' => 2, 'link' => 'https://fifa.com/legal/psc-club-002'],
                ['name' => 'Bayern Munich vs Arsenal', 'year' => 2024, 'month' => 3, 'link' => 'https://fifa.com/legal/psc-club-003'],
                ['name' => 'Liverpool vs Napoli', 'year' => 2023, 'month' => 12, 'link' => 'https://fifa.com/legal/psc-club-004'],
                ['name' => 'Chelsea vs AC Milan', 'year' => 2023, 'month' => 11, 'link' => 'https://fifa.com/legal/psc-club-005'],
                ['name' => 'Juventus vs Benfica', 'year' => 2023, 'month' => 10, 'link' => 'https://fifa.com/legal/psc-club-006'],
                ['name' => 'Inter Milan vs Porto', 'year' => 2023, 'month' => 9, 'link' => 'https://fifa.com/legal/psc-club-007'],
                ['name' => 'Atletico Madrid vs Bayer Leverkusen', 'year' => 2023, 'month' => 8, 'link' => 'https://fifa.com/legal/psc-club-008'],
                ['name' => 'Sevilla vs Eintracht Frankfurt', 'year' => 2023, 'month' => 7, 'link' => 'https://fifa.com/legal/psc-club-009'],
                ['name' => 'Villarreal vs Atalanta', 'year' => 2023, 'month' => 6, 'link' => 'https://fifa.com/legal/psc-club-010']
            ];
            $this->createDecisions($manager, $clubDecisions, $club);
        }

        // Coach disputes decisions
        if ($coach) {
            $coachDecisions = [
                ['name' => 'Pep Guardiola vs Manchester City', 'year' => 2024, 'month' => 1, 'link' => 'https://fifa.com/legal/psc-coach-001'],
                ['name' => 'Jurgen Klopp vs Liverpool FC', 'year' => 2024, 'month' => 2, 'link' => 'https://fifa.com/legal/psc-coach-002'],
                ['name' => 'Carlo Ancelotti vs Real Madrid', 'year' => 2024, 'month' => 3, 'link' => 'https://fifa.com/legal/psc-coach-003'],
                ['name' => 'Thomas Tuchel vs Bayern Munich', 'year' => 2023, 'month' => 12, 'link' => 'https://fifa.com/legal/psc-coach-004'],
                ['name' => 'Xavi Hernandez vs FC Barcelona', 'year' => 2023, 'month' => 11, 'link' => 'https://fifa.com/legal/psc-coach-005'],
                ['name' => 'Mauricio Pochettino vs PSG', 'year' => 2023, 'month' => 10, 'link' => 'https://fifa.com/legal/psc-coach-006'],
                ['name' => 'Antonio Conte vs Tottenham', 'year' => 2023, 'month' => 9, 'link' => 'https://fifa.com/legal/psc-coach-007'],
                ['name' => 'Zinedine Zidane vs Real Madrid', 'year' => 2023, 'month' => 8, 'link' => 'https://fifa.com/legal/psc-coach-008'],
                ['name' => 'Jose Mourinho vs AS Roma', 'year' => 2023, 'month' => 7, 'link' => 'https://fifa.com/legal/psc-coach-009'],
                ['name' => 'Diego Simeone vs Atletico Madrid', 'year' => 2023, 'month' => 6, 'link' => 'https://fifa.com/legal/psc-coach-010']
            ];
            $this->createDecisions($manager, $coachDecisions, $coach);
        }

        // Agent disputes decisions
        if ($agent) {
            $agentDecisions = [
                ['name' => 'Jorge Mendes vs Gestifute', 'year' => 2024, 'month' => 1, 'link' => 'https://fifa.com/legal/psc-agent-001'],
                ['name' => 'Mino Raiola Estate vs CAA Sports', 'year' => 2024, 'month' => 2, 'link' => 'https://fifa.com/legal/psc-agent-002'],
                ['name' => 'Jonathan Barnett vs Stellar Group', 'year' => 2024, 'month' => 3, 'link' => 'https://fifa.com/legal/psc-agent-003'],
                ['name' => 'Volker Struth vs SportsTotal', 'year' => 2023, 'month' => 12, 'link' => 'https://fifa.com/legal/psc-agent-004'],
                ['name' => 'Pini Zahavi vs Unique Sports', 'year' => 2023, 'month' => 11, 'link' => 'https://fifa.com/legal/psc-agent-005'],
                ['name' => 'Fali Ramadani vs Lian Sports', 'year' => 2023, 'month' => 10, 'link' => 'https://fifa.com/legal/psc-agent-006'],
                ['name' => 'Kia Joorabchian vs Media Base', 'year' => 2023, 'month' => 9, 'link' => 'https://fifa.com/legal/psc-agent-007'],
                ['name' => 'Pere Guardiola vs Wasserman', 'year' => 2023, 'month' => 8, 'link' => 'https://fifa.com/legal/psc-agent-008'],
                ['name' => 'Rafaela Pimenta vs CAA Base', 'year' => 2023, 'month' => 7, 'link' => 'https://fifa.com/legal/psc-agent-009'],
                ['name' => 'Federico Pastorello vs P&P Sport', 'year' => 2023, 'month' => 6, 'link' => 'https://fifa.com/legal/psc-agent-010']
            ];
            $this->createDecisions($manager, $agentDecisions, $agent);
        }

        // Overdue payables (PSC) decisions
        if ($overduePsc) {
            $overduePscDecisions = [
                ['name' => 'Lazio vs Sassuolo', 'year' => 2024, 'month' => 1, 'link' => 'https://fifa.com/legal/psc-overdue-001'],
                ['name' => 'Fiorentina vs Torino', 'year' => 2024, 'month' => 2, 'link' => 'https://fifa.com/legal/psc-overdue-002'],
                ['name' => 'Genoa vs Cagliari', 'year' => 2024, 'month' => 3, 'link' => 'https://fifa.com/legal/psc-overdue-003'],
                ['name' => 'Udinese vs Lecce', 'year' => 2023, 'month' => 12, 'link' => 'https://fifa.com/legal/psc-overdue-004'],
                ['name' => 'Monza vs Empoli', 'year' => 2023, 'month' => 11, 'link' => 'https://fifa.com/legal/psc-overdue-005'],
                ['name' => 'Frosinone vs Verona', 'year' => 2023, 'month' => 10, 'link' => 'https://fifa.com/legal/psc-overdue-006'],
                ['name' => 'Salernitana vs Spezia', 'year' => 2023, 'month' => 9, 'link' => 'https://fifa.com/legal/psc-overdue-007'],
                ['name' => 'Cremonese vs Sampdoria', 'year' => 2023, 'month' => 8, 'link' => 'https://fifa.com/legal/psc-overdue-008'],
                ['name' => 'Venezia vs Crotone', 'year' => 2023, 'month' => 7, 'link' => 'https://fifa.com/legal/psc-overdue-009'],
                ['name' => 'Benevento vs Pescara', 'year' => 2023, 'month' => 6, 'link' => 'https://fifa.com/legal/psc-overdue-010']
            ];
            $this->createDecisions($manager, $overduePscDecisions, $overduePsc);
        }

        $manager->flush();
    }

    private function createDecisions(ObjectManager $manager, array $decisions, Category $category): void
    {
        foreach ($decisions as $decisionData) {
            $decision = new Decision();
            $decision->setName($decisionData['name']);
            $decision->setYear($decisionData['year']);
            $decision->setMonth($decisionData['month']);
            $decision->setCategory($category);
            $decision->setLink($decisionData['link']);
            $manager->persist($decision);
        }
    }

    private function createBodiesAndCategories(ObjectManager $manager): void
    {
        $bodiesRepository = $manager->getRepository(Body::class);

        // Create Dispute Resolution Chamber (DRC)
        $drc = $bodiesRepository->findOneBy(['name' => 'drc']);
        if ($drc == null) {
            $body = new Body();
            $body
                ->setName('drc')
                ->setShortName('Disputes resolution chamber');
            $manager->persist($body);
            $manager->flush();
            $drc = $body;
        }

        // Create Players Status Committee (PSC)
        $psc = $bodiesRepository->findOneBy(['name' => 'psc']);
        if ($psc == null) {
            $body = new Body();
            $body
                ->setName('psc')
                ->setShortName('Players status committee');
            $manager->persist($body);
            $manager->flush();
            $psc = $body;
        }

        // Create categories
        $categoriesRepository = $manager->getRepository(Category::class);

        // Solidarity contribution category
        $solidarity = $categoriesRepository->findOneBy(['shortName' => 'solidarity']);
        if ($solidarity == null) {
            $solidarity = new Category();
            $solidarity
                ->setName('Solidarity contribution')
                ->setShortName('solidarity')
                ->setLink('https://www.fifa.com/about-fifa/who-we-are/legal/judicial-bodies/dispute-resolution-chamber/decisions/_libraries/_solidarity_contribution')
                ->setBody($drc);
            $manager->persist($solidarity);
            $manager->flush();
        }

        // Training compensation category
        $training = $categoriesRepository->findOneBy(['shortName' => 'training']);
        if ($training == null) {
            $training = new Category();
            $training
                ->setName('Training compensation')
                ->setShortName('training')
                ->setLink('https://www.fifa.com/about-fifa/who-we-are/legal/judicial-bodies/dispute-resolution-chamber/decisions/_libraries/_training_compensation')
                ->setBody($drc);
            $manager->persist($training);
            $manager->flush();
        }

        // Labour disputes category
        $labour = $categoriesRepository->findOneBy(['shortName' => 'labour']);
        if ($labour == null) {
            $labour = new Category();
            $labour
                ->setName('Labour disputes')
                ->setShortName('labour')
                ->setLink('https://www.fifa.com/about-fifa/who-we-are/legal/judicial-bodies/dispute-resolution-chamber/decisions/_libraries/_labour_disputes')
                ->setBody($drc);
            $manager->persist($labour);
            $manager->flush();
        }

        // Overdue payables (DRC) category
        $overdueDrc = $categoriesRepository->findOneBy(['shortName' => 'overdueDrc']);
        if ($overdueDrc == null) {
            $overdueDrc = new Category();
            $overdueDrc
                ->setName('Overdue payables (DRC)')
                ->setShortName('overdueDrc')
                ->setLink('https://www.fifa.com/about-fifa/who-we-are/legal/judicial-bodies/dispute-resolution-chamber/decisions/_libraries/_overdue_payables')
                ->setBody($drc);
            $manager->persist($overdueDrc);
            $manager->flush();
        }

        // Club vs Club disputes category
        $club = $categoriesRepository->findOneBy(['shortName' => 'club']);
        if ($club == null) {
            $club = new Category();
            $club
                ->setName('Club vs Club disputes')
                ->setShortName('club')
                ->setLink('https://www.fifa.com/about-fifa/who-we-are/legal/judicial-bodies/player-status-committee/decisions/_libraries/_club_vs_club_disputes')
                ->setBody($psc);
            $manager->persist($club);
            $manager->flush();
        }

        // Coach disputes category
        $coach = $categoriesRepository->findOneBy(['shortName' => 'coach']);
        if ($coach == null) {
            $coach = new Category();
            $coach
                ->setName('Coach disputes')
                ->setShortName('coach')
                ->setLink('https://www.fifa.com/about-fifa/who-we-are/legal/judicial-bodies/player-status-committee/decisions/_libraries/_coach_disputes')
                ->setBody($psc);
            $manager->persist($coach);
            $manager->flush();
        }

        // Agent disputes category
        $agent = $categoriesRepository->findOneBy(['shortName' => 'agent']);
        if ($agent == null) {
            $agent = new Category();
            $agent
                ->setName('Agent disputes')
                ->setShortName('agent')
                ->setLink('https://www.fifa.com/about-fifa/who-we-are/legal/judicial-bodies/player-status-committee/decisions/_libraries/_players_match_agents_disputes')
                ->setBody($psc);
            $manager->persist($agent);
            $manager->flush();
        }

        // Overdue payables (PSC) category
        $overduePsc = $categoriesRepository->findOneBy(['shortName' => 'overduePsc']);
        if ($overduePsc == null) {
            $overduePsc = new Category();
            $overduePsc
                ->setName('Overdue payables (PSC)')
                ->setShortName('overduePsc')
                ->setLink('https://www.fifa.com/about-fifa/who-we-are/legal/judicial-bodies/player-status-committee/decisions/_libraries/_overdue_payables')
                ->setBody($psc);
            $manager->persist($overduePsc);
            $manager->flush();
        }
    }
}
