<?php
// src/Entity/Event.php
namespace App\Entity;

use App\Enum\GouvernoratEnum; // Import Enum
use App\Repository\EventRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use DateTimeInterface; // Use DateTimeInterface

#[ORM\Entity(repositoryClass: EventRepository::class)]
#[ORM\Table(name: 'event')]
class Event
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)] // Removed nullable=true, added constraints
    #[Assert\NotBlank(message: "Le titre de l'événement est obligatoire.")]
    #[Assert\Length(min: 5, max: 255, minMessage: "Le titre doit faire entre 5 et 255 caractères.")]
    private ?string $titre = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(name: "dateDebut", type: Types::DATETIME_MUTABLE)] // Removed name, nullable=true, added constraints
    #[Assert\NotNull(message: "La date de début est obligatoire.")]
    #[Assert\Type("\DateTimeInterface")]
    #[Assert\GreaterThanOrEqual("today", message: "La date de début ne peut être dans le passé.")]
    private ?DateTimeInterface $dateDebut = null;

    #[ORM\Column(name: "dateFin", type: Types::DATETIME_MUTABLE)] // Removed name, nullable=true, added constraints
    #[Assert\NotNull(message: "La date de fin est obligatoire.")]
    #[Assert\Type("\DateTimeInterface")]
    #[Assert\GreaterThan(propertyPath: "dateDebut", message: "La date de fin doit être après la date de début.")]
    private ?DateTimeInterface $dateFin = null;

    #[ORM\Column(length: 50, enumType: GouvernoratEnum::class)] // Use EnumType, set length, removed nullable
    #[Assert\NotNull(message: "Le lieu (gouvernorat) est obligatoire.")]
    private ?GouvernoratEnum $state = null;

    #[ORM\Column(type: 'string', length: 50, options: ["default" => "A_VENIR"])] // Define length, use string type
    #[Assert\Choice(choices: ["A_VENIR", "EN_COURS", "TERMINE", "ANNULE"], message: "Statut d'événement invalide.")]
    private string $statut = 'A_VENIR';

    #[ORM\Column(name: "trottinetteMinAutonomie",type: 'integer', nullable: true)] // Removed name, changed type
    #[Assert\PositiveOrZero(message: "L'autonomie minimale doit être un nombre positif ou zéro.")]
    private ?int $trottinetteMinAutonomie = 0; // In km, assume default 0

    #[ORM\OneToMany(mappedBy: 'event', targetEntity: Participation::class, cascade: ['persist', 'remove'], orphanRemoval: true)]
    private Collection $participations;

    // Removed $state and $gouvernorat properties

    public function __construct()
    {
        $this->participations = new ArrayCollection();
    }

    // Getters and Setters (Standard - ensure type hints match)
    public function getId(): ?int { return $this->id; }
    public function getTitre(): ?string { return $this->titre; }
    public function setTitre(?string $titre): static { $this->titre = $titre; return $this; }
    public function getDescription(): ?string { return $this->description; }
    public function setDescription(?string $description): static { $this->description = $description; return $this; }
    public function getDateDebut(): ?DateTimeInterface { return $this->dateDebut; }
    public function setDateDebut(?DateTimeInterface $dateDebut): static { $this->dateDebut = $dateDebut; return $this; }
    public function getDateFin(): ?DateTimeInterface { return $this->dateFin; }
    public function setDateFin(?DateTimeInterface $dateFin): static { $this->dateFin = $dateFin; return $this; }
    public function getState(): ?GouvernoratEnum { return $this->state; } // Return Enum
    public function setState(?GouvernoratEnum $state): static { $this->state = $state; return $this; } // Accept Enum
    public function getStatut(): string { return $this->statut; }
    public function setStatut(string $statut): static { $this->statut = $statut; return $this; }
    public function getTrottinetteMinAutonomie(): ?int { return $this->trottinetteMinAutonomie; }
    public function setTrottinetteMinAutonomie(?int $trottinetteMinAutonomie): static { $this->trottinetteMinAutonomie = $trottinetteMinAutonomie; return $this; }

    /** @return Collection<int, Participation> */
    public function getParticipations(): Collection { return $this->participations; }
    public function addParticipation(Participation $participation): static { if (!$this->participations->contains($participation)) { $this->participations->add($participation); $participation->setEvent($this); } return $this; }
    public function removeParticipation(Participation $participation): static { if ($this->participations->removeElement($participation)) { if ($participation->getEvent() === $this) { $participation->setEvent(null); } } return $this; }

    // Helper for display
    public function getLieuValue(): ?string { return $this->state?->value; }

    public function __toString(): string
    {
        return $this->titre ?? 'Événement Inconnu';
    }
}