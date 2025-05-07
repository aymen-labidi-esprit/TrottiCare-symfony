<?php

namespace App\Repository;

use App\Entity\Reservation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Reservation>
 */
class ReservationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Reservation::class);
    }

    // src/Repository/ReservationRepository.php
    public function findByCriteriaQuery(\App\Dto\ReservationSearchCriteria $criteria)
    {
        $qb = $this->createQueryBuilder('r');
    
        if ($criteria->dateDebut) {
            $qb->andWhere('r.dateDebut >= :dateDebut')
               ->setParameter('dateDebut', $criteria->dateDebut);
        }
    
        if ($criteria->dateFin) {
            $qb->andWhere('r.dateFin <= :dateFin')
               ->setParameter('dateFin', $criteria->dateFin);
        }
    
        if ($criteria->status) {
            $qb->andWhere('r.status = :status')
               ->setParameter('status', $criteria->status);
        }
    
        if ($criteria->paiement) {
            $qb->andWhere('r.paiement = :paiement')
               ->setParameter('paiement', $criteria->paiement);
        }
    
        if ($criteria->montantMin) {
            $qb->andWhere('r.montant >= :montantMin')
               ->setParameter('montantMin', $criteria->montantMin);
        }
    
        if ($criteria->montantMax) {
            $qb->andWhere('r.montant <= :montantMax')
               ->setParameter('montantMax', $criteria->montantMax);
        }
    
        return $qb->orderBy('r.dateCreation', 'DESC')
                  ->getQuery(); // return Query, not results
    }

    public function countByStatus(): array
    {
        $qb = $this->createQueryBuilder('r')
            ->select('r.status AS status, COUNT(r.id) AS total')
            ->groupBy('r.status');
    
        $results = $qb->getQuery()->getResult();
    
        $formatted = [];
        foreach ($results as $row) {
            $status = $row['status'];
            
            // if status is an enum or object, convert it to a string:
            if (is_object($status)) {
                if (method_exists($status, 'label')) {
                    $status = $status->label();
                } else {
                    $status = (string) $status;
                }
            }
    
            $formatted[$status] = (int) $row['total'];
        }
    
        return $formatted;
    }
    


    //    /**
    //     * @return Reservation[] Returns an array of Reservation objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('r')
    //            ->andWhere('r.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('r.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Reservation
    //    {
    //        return $this->createQueryBuilder('r')
    //            ->andWhere('r.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
