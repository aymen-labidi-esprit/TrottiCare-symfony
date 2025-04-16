<?php
// src/Repository/ReclamationRepository.php

namespace App\Repository;

use App\Entity\Reclamation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class ReclamationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Reclamation::class);
    }

    /**
     * Find all reclamations ordered by date of creation (most recent first)
     */
    public function findAllOrderedByDate()
    {
        return $this->createQueryBuilder('r')
            ->orderBy('r.date_creation', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Find a reclamation by its ID
     */
    public function findById($id)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.id = :id')
            ->setParameter('id', $id)
            ->getQuery()
            ->getOneOrNullResult();
    }

    /**
     * Find reclamations by user email
     */
    public function findByUserEmail($email)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.user_email = :email')
            ->setParameter('email', $email)
            ->getQuery()
            ->getResult();
    }

    /**
     * Find all reclamations of a specific type
     */
    public function findByType($type)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.type_reclamation = :type')
            ->setParameter('type', $type)
            ->getQuery()
            ->getResult();
    }
}
