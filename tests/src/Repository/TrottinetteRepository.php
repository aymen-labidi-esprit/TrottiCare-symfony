<?php
// src/Repository/TrottinetteRepository.php
namespace App\Repository;

use App\Entity\Trottinette;
use App\Entity\PointRelais;
use App\Enum\TrottinetteStatus;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\Tools\Pagination\Paginator;

/**
 * @extends ServiceEntityRepository<Trottinette>
 */
class TrottinetteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Trottinette::class);
    }

    public function save(Trottinette $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);
        if ($flush) { $this->getEntityManager()->flush(); }
    }

    public function remove(Trottinette $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);
        if ($flush) { $this->getEntityManager()->flush(); }
    }

    public function findAvailable(): array
    {
        return $this->createQueryBuilder('t')
            ->where('t.etat = :etat')
            ->andWhere('t.pointRelais IS NOT NULL')
            ->setParameter('etat', 'DISPONIBLE')  // Bind the string 'DISPONIBLE' to the query parameter
            ->getQuery()
            ->getResult();
    }

    /**
     * Find trottinettes based on criteria for listing/searching.
     * @param array $criteria ['search' => string, 'etat' => TrottinetteStatus , 'batterie' => int]
     * @param int $page
     * @param int $limit
     * @return Paginator
     */
    public function findByCriteria(array $criteria = [], int $page = 1, int $limit = 15): Paginator
    {
        $qb = $this->createQueryBuilder('t')
            ->leftJoin('t.pointRelais', 'pr')  // Use 't.pointRelais' instead of 't.pointRelaisId'
            ->orderBy('t.dateAjout', 'DESC');
    
        if (!empty($criteria['search'])) {
            $searchTerm = '%' . $criteria['search'] . '%';
            $qb->andWhere($qb->expr()->orX(
                $qb->expr()->like('t.modele', ':search'),
                $qb->expr()->like('t.numeroSerie', ':search'),
                $qb->expr()->like('t.localisation', ':search'),
                $qb->expr()->like('pr.nom', ':search')  // Search in point relais name
            ))
            ->setParameter('search', $searchTerm);
        }
    
        // Additional criteria filtering...
    
        $query = $qb->getQuery()
            ->setFirstResult(($page - 1) * $limit)
            ->setMaxResults($limit);
    
        return new Paginator($query, true);
    }
}