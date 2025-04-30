<?php

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
     * Trouver toutes les réclamations, triées par date de création (plus récentes d'abord)
     */
    public function findAllOrderedByDate()
    {
        return $this->createQueryBuilder('r')
            ->orderBy('r.date_creation', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Trouver une réclamation par son ID
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
     * Trouver les réclamations par email de l'utilisateur
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
     * Trouver toutes les réclamations d'un type spécifique
     */
    public function findByType($type)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.type_reclamation = :type')
            ->setParameter('type', $type)
            ->getQuery()
            ->getResult();
    }

    /**
     * Trouver les réclamations en fonction de l'utilisateur (relation utilisateur)
     */
    public function findByUtilisateur($utilisateurId)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.utilisateur = :utilisateur')
            ->setParameter('utilisateur', $utilisateurId)
            ->getQuery()
            ->getResult();
    }

    /**
     * Trouver les réclamations liées à une trottinette (relation trottinette)
     */
    public function findByTrottinette($trottinetteId)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.trottinette = :trottinette')
            ->setParameter('trottinette', $trottinetteId)
            ->getQuery()
            ->getResult();
    }

    public function findByCriteriaQuery(\App\Dto\ReclamationSearchCriteria $criteria)
{
    $qb = $this->createQueryBuilder('r');

    if ($criteria->dateDebut) {
        $qb->andWhere('r.date_creation >= :dateDebut')
           ->setParameter('dateDebut', $criteria->dateDebut);
    }

    if ($criteria->dateFin) {
        $qb->andWhere('r.date_creation <= :dateFin')
           ->setParameter('dateFin', $criteria->dateFin);
    }

    if ($criteria->typeReclamation) {
        $qb->andWhere('r.type_reclamation LIKE :type')
           ->setParameter('type', '%' . $criteria->typeReclamation . '%');
    }

    if ($criteria->userEmail) {
        $qb->andWhere('r.user_email LIKE :email')
           ->setParameter('email', '%' . $criteria->userEmail . '%');
    }

    return $qb->orderBy('r.date_creation', 'DESC')->getQuery();
}

}
