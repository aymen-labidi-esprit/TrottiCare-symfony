<?php
// src/Repository/ReponseRepository.php

namespace App\Repository;

use App\Entity\Reponse;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class ReponseRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Reponse::class);
    }

    /**
     * Find all responses for a specific reclamation ordered by date of response (earliest first)
     */
    public function findByReclamationOrderedByDate($reclamation)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.reclamation = :reclamation')
            ->setParameter('reclamation', $reclamation)
            ->orderBy('r.date_reponse', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Find a specific response by its ID
     */
    public function findById($id)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.id = :id')
            ->setParameter('id', $id)
            ->getQuery()
            ->getOneOrNullResult();
    }
}
