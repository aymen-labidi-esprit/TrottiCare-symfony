<?php

namespace App\Repository;

use App\Entity\Participation;
use App\Entity\Event;
use App\Entity\Utilisateur;
use App\Enum\ParticipationStatus;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Participation>
 *
 * @method Participation|null find($id, $lockMode = null, $lockVersion = null)
 * @method Participation|null findOneBy(array $criteria, array $orderBy = null)
 * @method Participation[]    findAll()
 * @method Participation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ParticipationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Participation::class);
    }

    /**
     * Finds all participations for a given user, ordered by inscription date descending.
     *
     * @param Utilisateur $user The user entity.
     * @return Participation[] Returns an array of Participation objects.
     */
    public function findByUser(Utilisateur $user): array
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.utilisateur = :user')
            ->setParameter('user', $user)
            ->orderBy('p.dateInscription', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Finds all participations for a given event, ordered by inscription date ascending.
     *
     * @param Event $event The event entity.
     * @return Participation[] Returns an array of Participation objects.
     */
    public function findByEvent(Event $event): array
    {
        return $this->createQueryBuilder('p')
            // Optionally join user if you often need user details with this query
            // ->leftJoin('p.utilisateur', 'u')
            // ->addSelect('u')
            ->andWhere('p.event = :event')
            ->setParameter('event', $event)
            ->orderBy('p.dateInscription', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Finds all participations for a given event and status, ordered by inscription date ascending.
     *
     * @param Event $event The event entity.
     * @param ParticipationStatus $status The desired status.
     * @return Participation[] Returns an array of Participation objects.
     */
    public function findByEventAndStatus(Event $event, ParticipationStatus $status): array
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.event = :event')
            ->andWhere('p.statut = :status')
            ->setParameter('event', $event)
            ->setParameter('status', $status)
            ->orderBy('p.dateInscription', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Finds a single participation record for a specific user and event, if it exists.
     * Useful for checking if a user is already registered (active or cancelled).
     *
     * @param Utilisateur $user The user entity.
     * @param Event $event The event entity.
     * @return Participation|null Returns the Participation object or null if not found.
     */
    public function findOneByUserAndEvent(Utilisateur $user, Event $event): ?Participation
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.utilisateur = :user')
            ->andWhere('p.event = :event')
            ->setParameter('user', $user)
            ->setParameter('event', $event)
            ->setMaxResults(1) // We only need one result
            ->getQuery()
            ->getOneOrNullResult();
    }

    /**
     * Counts the total number of participations for a given event.
     *
     * @param Event $event The event entity.
     * @return int The total count of participations.
     */
    public function countByEvent(Event $event): int
    {
        // Use try-catch for potential NoResultException if needed, though count usually returns 0
        try {
            return (int) $this->createQueryBuilder('p')
                ->select('count(p.id)') // Count primary keys for efficiency
                ->andWhere('p.event = :event')
                ->setParameter('event', $event)
                ->getQuery()
                ->getSingleScalarResult(); // Efficiently gets a single value
        } catch (\Doctrine\ORM\NoResultException | \Doctrine\ORM\NonUniqueResultException $e) {
            // Handle exception or just return 0
            return 0;
        }
    }

    /**
     * Counts the number of participations for a given event with a specific status.
     *
     * @param Event $event The event entity.
     * @param ParticipationStatus $status The status to count.
     * @return int The count of participations with the given status.
     */
    public function countByEventAndStatus(Event $event, ParticipationStatus $status): int
    {
        try {
            return (int) $this->createQueryBuilder('p')
                ->select('count(p.id)')
                ->andWhere('p.event = :event')
                ->andWhere('p.statut = :status') // Add the status condition
                ->setParameter('event', $event)
                ->setParameter('status', $status)
                ->getQuery()
                ->getSingleScalarResult();
        } catch (\Doctrine\ORM\NoResultException | \Doctrine\ORM\NonUniqueResultException $e) {
            return 0;
        }
    }
}