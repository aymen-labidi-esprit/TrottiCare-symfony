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

    public function findByUser(Utilisateur $user): array
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.utilisateur = :user')
            ->setParameter('user', $user)
            ->orderBy('p.dateInscription', 'DESC')
            ->getQuery()
            ->getResult();
    }

    public function findByEvent(Event $event): array
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.event = :event')
            ->setParameter('event', $event)
            ->orderBy('p.dateInscription', 'ASC')
            ->getQuery()
            ->getResult();
    }

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
}