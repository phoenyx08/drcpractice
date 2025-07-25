<?php

namespace App\Repository;

use App\Entity\Decision;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Decision|null find($id, $lockMode = null, $lockVersion = null)
 * @method Decision|null findOneBy(array $criteria, array $orderBy = null)
 * @method Decision[]    findAll()
 * @method Decision[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DecisionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Decision::class);
    }

    /**
     * Find decisions with pending status
     * 
     * @return Decision[] Returns an array of Decision objects with pending status
     */
    public function findPendingDecisions(): array
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.status = :status')
            ->setParameter('status', 'pending')
            ->orderBy('d.lastUpdated', 'ASC')
            ->getQuery()
            ->getResult();
    }
}
