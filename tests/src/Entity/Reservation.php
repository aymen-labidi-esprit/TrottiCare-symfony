<?php
// src/Entity/Reservation.php
namespace App\Entity;

use App\Repository\ReservationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Enum\Paiement;
use App\Enum\ReservationStatus;
use Symfony\Component\Validator\Constraints as Assert;
use DateTimeInterface;

#[ORM\Entity(repositoryClass: ReservationRepository::class)]
#[ORM\Table(name: 'reservation')] // Explicit table name
class Reservation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: Utilisateur::class, inversedBy: 'reservations')]
    #[ORM\JoinColumn(name: 'utilisateur_id', referencedColumnName: 'id', nullable: false)]
    #[Assert\NotNull(message: 'L\'utilisateur est requis.')]
    private ?Utilisateur $utilisateur = null;

    #[ORM\ManyToOne(targetEntity: Trottinette::class, inversedBy: 'reservations')]
    #[ORM\JoinColumn(name: 'trottinette_id', referencedColumnName: 'id', nullable: false)]
    #[Assert\NotNull(message: 'La trottinette est requise.')]
    private ?Trottinette $trottinette = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)] // Changed name
    #[Assert\NotNull(message: 'La date de début de réservation est obligatoire.')]
    #[Assert\Type("\DateTimeInterface")]
    #[Assert\GreaterThanOrEqual("today", message: "La date de début ne peut pas être dans le passé.")]
    private ?DateTimeInterface $dateDebut = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)] // Added dateFin
    #[Assert\NotNull(message: 'La date de fin de réservation est obligatoire.')]
    #[Assert\Type("\DateTimeInterface")]
    #[Assert\GreaterThan(propertyPath: "dateDebut", message: "La date de fin doit être postérieure à la date de début.")]
    private ?DateTimeInterface $dateFin = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)] // Use scale 2 for currency
    #[Assert\NotBlank(message: 'Le montant est requis.')]
    #[Assert\PositiveOrZero(message: 'Le montant doit être positif ou nul.')] // Changed to PositiveOrZero
    private ?string $montant = null;

    #[ORM\Column(type: Types::STRING, enumType: ReservationStatus::class)]
    #[Assert\NotNull(message: 'Le statut est requis.')]
    private ?ReservationStatus $status = ReservationStatus::PENDING; // Default

    #[ORM\Column(type: Types::STRING, enumType: Paiement::class)]
    #[Assert\NotNull(message: 'Le mode de paiement est requis.')]
    private ?Paiement $paiement = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)] // Added dateCreation
    private ?DateTimeInterface $dateCreation;

    public function __construct()
    {
        $this->dateCreation = new \DateTime(); // Set dateCreation
    }

    // Getters & Setters (Standard for all properties)
    public function getId(): ?int { return $this->id; }
    public function getUtilisateur(): ?Utilisateur { return $this->utilisateur; }
    public function setUtilisateur(?Utilisateur $utilisateur): static { $this->utilisateur = $utilisateur; return $this; }
    public function getTrottinette(): ?Trottinette { return $this->trottinette; }
    public function setTrottinette(?Trottinette $trottinette): static { $this->trottinette = $trottinette; return $this; }
    public function getDateDebut(): ?DateTimeInterface { return $this->dateDebut; }
    public function setDateDebut(?DateTimeInterface $dateDebut): static { $this->dateDebut = $dateDebut; return $this; }
    public function getDateFin(): ?DateTimeInterface { return $this->dateFin; }
    public function setDateFin(?DateTimeInterface $dateFin): static { $this->dateFin = $dateFin; return $this; }
    public function getMontant(): ?string { return $this->montant; }
    public function setMontant(?string $montant): static { $this->montant = $montant; return $this; }
    public function getStatus(): ?ReservationStatus { return $this->status; }
    public function setStatus(?ReservationStatus $status): self { $this->status = $status; return $this; }
    public function getPaiement(): ?Paiement { return $this->paiement; }
    public function setPaiement(?Paiement $paiement): self { $this->paiement = $paiement; return $this; }
    public function getDateCreation(): ?DateTimeInterface { return $this->dateCreation; }
    public function setDateCreation(DateTimeInterface $dateCreation): static { $this->dateCreation = $dateCreation; return $this; }
}