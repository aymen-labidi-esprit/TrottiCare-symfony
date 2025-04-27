<?php

namespace App\Entity;

use App\Enum\GouvernoratEnum;
use App\Repository\EventRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: EventRepository::class)]
#[ORM\Table(name: 'event')]
class Event
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Assert\NotBlank(message: "Le titre est requis.")]
    private ?string $titre = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    #[Assert\NotBlank(message: "La description est requise.")]
    private ?string $description = null;

    #[ORM\Column(name: 'dateDebut', type: Types::DATETIME_MUTABLE, nullable: true)]
    #[Assert\NotNull(message: "La date de début est requise.")]
    #[Assert\Type(type: \DateTimeInterface::class)]
    #[Assert\GreaterThan('now', message: "La date de début doit être dans le futur.")]
    private ?\DateTimeInterface $dateDebut = null;

    #[ORM\Column(name: 'dateFin', type: Types::DATETIME_MUTABLE, nullable: true)]
    #[Assert\NotNull(message: "La date de fin est requise.")]
    #[Assert\Type(type: \DateTimeInterface::class)]
    #[Assert\GreaterThan(propertyPath: 'dateDebut', message: "La date de fin doit être après la date de début.")]
    private ?\DateTimeInterface $dateFin = null;

    #[ORM\Column(length: 255, nullable: true, enumType: GouvernoratEnum::class)]
    #[Assert\NotNull(message: "Le lieu est requis.")]
    private ?GouvernoratEnum $lieu = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Le statut est requis.")]
    private string $statut = 'A_VENIR';

    #[ORM\Column(length: 250)]
    #[Assert\NotBlank(message: "L'état est requis.")]
    private string $state;

    #[ORM\Column(name: 'trottinetteMinAutonomie', nullable: true)]
    #[Assert\NotNull(message: "L'autonomie minimale est requise.")]
    #[Assert\GreaterThanOrEqual(0, message: "L'autonomie minimale doit être ≥ 0.")]
    private ?int $trottinetteMinAutonomie = 0;

    #[ORM\OneToMany(mappedBy: 'event', targetEntity: Participation::class, orphanRemoval: true)]
    private Collection $participations;

    public function __construct()
    {
        $this->participations = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(?string $titre): static
    {
        $this->titre = $titre;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;
        return $this;
    }

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->dateDebut;
    }

    public function setDateDebut(?\DateTimeInterface $dateDebut): static
    {
        $this->dateDebut = $dateDebut;
        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->dateFin;
    }

    public function setDateFin(?\DateTimeInterface $dateFin): static
    {
        $this->dateFin = $dateFin;
        return $this;
    }

    public function getLieu(): ?GouvernoratEnum
    {
        return $this->lieu;
    }

    public function setLieu(?GouvernoratEnum $lieu): static
    {
        $this->lieu = $lieu;
        return $this;
    }

    public function getStatut(): string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): static
    {
        $this->statut = $statut;
        return $this;
    }

    public function getState(): string
    {
        return $this->state;
    }

    public function setState(string $state): static
    {
        $this->state = $state;
        return $this;
    }

    public function getTrottinetteMinAutonomie(): ?int
    {
        return $this->trottinetteMinAutonomie;
    }

    public function setTrottinetteMinAutonomie(?int $trottinetteMinAutonomie): static
    {
        $this->trottinetteMinAutonomie = $trottinetteMinAutonomie;
        return $this;
    }

    /**
     * @return Collection<int, Participation>
     */
    public function getParticipations(): Collection
    {
        return $this->participations;
    }

    public function addParticipation(Participation $participation): static
    {
        if (!$this->participations->contains($participation)) {
            $this->participations->add($participation);
            $participation->setEvent($this);
        }

        return $this;
    }

    public function removeParticipation(Participation $participation): static
    {
        if ($this->participations->removeElement($participation)) {
            if ($participation->getEvent() === $this) {
                $participation->setEvent(null);
            }
        }

        return $this;
    }

    public function getLieuAsString(): ?string
    {
        return $this->lieu?->value;
    }

    public function __toString(): string
    {
        return $this->getLieuAsString() ?? '';
    }
}

