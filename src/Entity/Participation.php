<?php

namespace App\Entity;

use App\Repository\ParticipationRepository;
use App\Enum\ParticipationStatus;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use DateTime;
use DateTimeInterface;

#[ORM\Entity(repositoryClass: ParticipationRepository::class)]
#[ORM\Table(name: 'participation')]
class Participation
{
    #[ORM\Id]
    #[ORM\Column(name: 'id')]
    #[Assert\NotBlank(message: "L'identifiant est obligatoire")]
    private ?string $id = null;

    #[ORM\Id]
    #[ORM\ManyToOne(targetEntity: Event::class, inversedBy: 'participations')]
    #[ORM\JoinColumn(name: 'eventId', referencedColumnName: 'id', nullable: false)]
    #[Assert\NotNull(message: "L'événement est obligatoire")]
    private ?Event $event = null;

    #[ORM\Column(name: 'dateInscription', type: 'datetime', nullable: true)]
    #[Assert\Type("\DateTimeInterface", message: "La date d'inscription doit être une date valide")]
    private ?DateTimeInterface $dateInscription = null;

    #[ORM\Column(name: 'statut', type: 'string', enumType: ParticipationStatus::class)]
    #[Assert\NotNull(message: "Le statut est obligatoire")]
    private ?ParticipationStatus $statut = null;

    #[ORM\ManyToOne(targetEntity: Utilisateur::class)]
    #[ORM\JoinColumn(name: 'utilisateurId', referencedColumnName: 'id', nullable: true)]
    private ?Utilisateur $utilisateur = null;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(string $id): static
    {
        $this->id = $id;
        return $this;
    }

    public function getEvent(): ?Event
    {
        return $this->event;
    }

    public function setEvent(?Event $event): static
    {
        $this->event = $event;
        return $this;
    }

    public function getDateInscription(): ?DateTimeInterface
    {
        return $this->dateInscription;
    }

    public function setDateInscription(?DateTimeInterface $dateInscription): static
    {
        $this->dateInscription = $dateInscription;
        return $this;
    }

    public function getStatut(): ?ParticipationStatus
    {
        return $this->statut;
    }

    public function setStatut(ParticipationStatus $statut): static
    {
        $this->statut = $statut;
        return $this;
    }

    public function getUtilisateur(): ?Utilisateur
    {
        return $this->utilisateur;
    }

    public function setUtilisateur(?Utilisateur $utilisateur): static
    {
        $this->utilisateur = $utilisateur;
        return $this;
    }
}