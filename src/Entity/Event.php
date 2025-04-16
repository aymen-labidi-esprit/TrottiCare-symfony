<?php

namespace App\Entity;

use App\Enum\GouvernoratEnum;
use App\Repository\EventRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EventRepository::class)]
#[ORM\Table(name: 'event')]
class Event
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $titre = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(name: 'dateDebut', type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateDebut = null;

    #[ORM\Column(name: 'dateFin', type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateFin = null;

    #[ORM\Column(length: 255, nullable: true, enumType: GouvernoratEnum::class)]
    private ?GouvernoratEnum $lieu = null;

    #[ORM\Column(length: 255)]
    private string $statut = 'A_VENIR';

    #[ORM\Column(length: 250)]
    private string $state;

    #[ORM\Column(name: 'trottinetteMinAutonomie', nullable: true)]
    private ?int $trottinetteMinAutonomie = 0;

    #[ORM\OneToMany(mappedBy: 'event', targetEntity: Participation::class, orphanRemoval: true)]
    private Collection $participations;

    private ?GouvernoratEnum $gouvernorat = null;

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
            // set the owning side to null (unless already changed)
            if ($participation->getEvent() === $this) {
                $participation->setEvent(null);
            }
        }

        return $this;
    }

    public function getGouvernorat(): ?GouvernoratEnum
    {
        return $this->gouvernorat;
    }

    public function setGouvernorat(?GouvernoratEnum $gouvernorat): self
    {
        $this->gouvernorat = $gouvernorat;
        return $this;
    }

    /**
     * Helper method to get gouvernorat as string
     */
    public function getGouvernoratAsString(): ?string
    {
        return $this->gouvernorat ? $this->gouvernorat->value : null;
    }
    
    /**
     * Helper method to get lieu as string
     */
    public function getLieuAsString(): ?string
    {
        return $this->lieu ? $this->lieu->value : null;
    }
    
    /**
     * Make sure the lieu can be properly converted to string
     */
    public function __toString(): string
    {
        return $this->getLieuAsString() ?? '';
    }
}