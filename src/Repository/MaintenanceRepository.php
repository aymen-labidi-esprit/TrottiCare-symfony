<?php

namespace App\Repository;

use App\Entity\Maintenance;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\QueryBuilder; // <-- Import QueryBuilder
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\Tools\Pagination\Paginator; // <-- Import Paginator

/**
 * @extends ServiceEntityRepository<Maintenance>
 *
 * @method Maintenance|null find($id, $lockMode = null, $lockVersion = null)
 * @method Maintenance|null findOneBy(array $criteria, array $orderBy = null)
 * @method Maintenance[]    findAll()
 * @method Maintenance[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MaintenanceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Maintenance::class);
    }
    /**
     * Creates a QueryBuilder for filtering maintenances.
     * Used by KnpPaginatorBundle in the controller.
     *
     * @param array $criteria Filter criteria
     * @return QueryBuilder
     */
    public function createFilteredQueryBuilder(array $criteria): QueryBuilder
    {
        $qb = $this->createQueryBuilder('m')
            ->select('m', 't') // Select both entities if needed
            ->leftJoin('m.trottinette', 't');

        // Apply filters (same logic as findFilteredPaginated)
        if (!empty($criteria['statut'])) {
            $qb->andWhere('m.statut = :statut')
                ->setParameter('statut', $criteria['statut']);
        }

        // Filter by Trottinette ID
        if (!empty($criteria['trottinette']) && is_numeric($criteria['trottinette'])) {
            $qb->andWhere('t.id = :trottinetteId')
                ->setParameter('trottinetteId', $criteria['trottinette']);
        }
        // Filter by Search Term (add if your filter form has 'search')
        if (!empty($criteria['search'])) {
            $searchTerm = '%' . $criteria['search'] . '%';
            $qb->andWhere($qb->expr()->orX(
                $qb->expr()->like('m.description', ':search'),
                $qb->expr()->like('t.numeroSerie', ':search'), // Example: Search trottinette serial
                $qb->expr()->like('t.modele', ':search')      // Example: Search trottinette model
            // Add other searchable fields
            ))
                ->setParameter('search', $searchTerm);
        }


        // Filter by date range
        if (!empty($criteria['dateDebutFrom']) && $criteria['dateDebutFrom'] instanceof \DateTimeInterface) {
            $qb->andWhere('m.dateDebut >= :dateDebutFrom')
                ->setParameter('dateDebutFrom', $criteria['dateDebutFrom']);
        }
        if (!empty($criteria['dateDebutTo']) && $criteria['dateDebutTo'] instanceof \DateTimeInterface) {
            $dateTo = (clone $criteria['dateDebutTo'])->setTime(23, 59, 59);
            $qb->andWhere('m.dateDebut <= :dateDebutTo')
                ->setParameter('dateDebutTo', $dateTo);
        }

        // Default order
        $qb->orderBy('m.dateDebut', 'DESC');

        return $qb; // Return the QueryBuilder
    }

    /**
     * Finds maintenances based on filter criteria with pagination.
     * Mirrors the structure of UtilisateurRepository::findByCriteria.
     *
     * @param array $criteria Associative array of filter criteria (e.g., ['statut' => 'EN_COURS', 'trottinette' => 5])
     * @param int $page The current page number (starting from 1)
     * @param int $limit The number of items per page
     * @return Paginator The paginator object containing the results
     */
    public function findFilteredPaginated(array $criteria, int $page = 1, int $limit = 15): Paginator // Default values optional
    {
        // 1. Create QueryBuilder
        $qb = $this->createQueryBuilder('m') // 'm' is the alias for Maintenance
        ->select('m', 't')               // Select Maintenance and associated Trottinette
        ->leftJoin('m.trottinette', 't'); // Join Trottinette using 't' alias

        // 2. Apply filter criteria dynamically
        if (!empty($criteria['statut'])) {
            $qb->andWhere('m.statut = :statut')
                ->setParameter('statut', $criteria['statut']);
        }

        // Filter by Trottinette ID (assuming filter returns an ID)
        if (!empty($criteria['trottinette'])) {
            // Ensure it's a numeric ID before using it
            if (is_numeric($criteria['trottinette'])) {
                $qb->andWhere('t.id = :trottinetteId')
                    ->setParameter('trottinetteId', $criteria['trottinette']);
            }
            // Alternative: if your filter form returns the full Trottinette entity:
            /* elseif ($criteria['trottinette'] instanceof Trottinette) {
                 $qb->andWhere('m.trottinette = :trottinetteEntity')
                    ->setParameter('trottinetteEntity', $criteria['trottinette']);
             } */
        }

        // Filter by date range (assuming filter form keys 'dateDebutFrom'/'dateDebutTo')
        if (!empty($criteria['dateDebutFrom']) && $criteria['dateDebutFrom'] instanceof \DateTimeInterface) {
            $qb->andWhere('m.dateDebut >= :dateDebutFrom')
                ->setParameter('dateDebutFrom', $criteria['dateDebutFrom']);
        }
        if (!empty($criteria['dateDebutTo']) && $criteria['dateDebutTo'] instanceof \DateTimeInterface) {
            // Add time to include the whole day
            $dateTo = clone $criteria['dateDebutTo'];
            $dateTo = $dateTo->setTime(23, 59, 59);
            $qb->andWhere('m.dateDebut <= :dateDebutTo')
                ->setParameter('dateDebutTo', $dateTo);
        }

        // Add other filters as needed based on your MaintenanceFilterType form...

        // 3. Add Ordering (optional but good practice)
        $qb->orderBy('m.dateDebut', 'DESC'); // Example: Order by start date, newest first
        // $qb->addOrderBy('t.modele', 'ASC'); // Example: Add secondary ordering

        // 4. Set Pagination Limits
        $query = $qb->getQuery()
            ->setFirstResult(($page - 1) * $limit)
            ->setMaxResults($limit);

        // 5. Create and return Paginator
        // 'true' fetches the join collection (Trottinette) efficiently
        return new Paginator($query, true);
    }

    /**
     * Counts maintenances by a specific status.
     *
     * @param string $status The status value (e.g., 'EN_COURS')
     * @return int The count of maintenances with that status
     */
    public function countByStatus(string $status): int
    {
        return (int) $this->createQueryBuilder('m')
            ->select('count(m.id)')
            ->where('m.statut = :status')
            ->setParameter('status', $status)
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function save(Maintenance $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Maintenance $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
}