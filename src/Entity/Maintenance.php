<?php

namespace App\Entity;

use App\Repository\MaintenanceRepository;
use Doctrine\ORM\Mapping as ORM;
use DateTime;

#[ORM\Entity(repositoryClass: MaintenanceRepository::class)]
#[ORM\Table(name: 'maintenance')]
class Maintenance
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(name: "trottinetteId", type: "integer")]
    private ?int $trottinetteId = null;

    #[ORM\ManyToOne(targetEntity: Trottinette::class)]
    #[ORM\JoinColumn(name: 'trottinetteId', referencedColumnName: 'id', nullable: false)]
    private ?Trottinette $trottinette = null;

    #[ORM\Column(type: 'text')]
    private string $description;

    #[ORM\Column(name: 'dateDebut', type: 'datetime')]
    private DateTime $dateDebut;

    #[ORM\Column(name: 'dateFin', type: 'datetime', nullable: true)]
    private ?DateTime $dateFin = null;

    #[ORM\Column(name: "statut", type: "string", columnDefinition: "ENUM('EN_COURS','TERMINEE','ANNULEE')")]
    private ?string $statut = null;

    /**
     * Virtual property for type that is not mapped to database
     * Use this for forms and display but don't persist it
     */
    private ?string $type = null;

    public function __construct()
    {
        $this->dateDebut = new DateTime();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTrottinetteId(): ?int
    {
        return $this->trottinetteId;
    }

    public function setTrottinetteId(?int $trottinetteId): self
    {
        $this->trottinetteId = $trottinetteId;
        return $this;
    }

    public function getTrottinette(): ?Trottinette
    {
        return $this->trottinette;
    }

    public function setTrottinette(?Trottinette $trottinette): self
    {
        $this->trottinette = $trottinette;
        return $this;
    }

    public function getDateDebut(): DateTime
    {
        return $this->dateDebut;
    }

    public function setDateDebut(DateTime $dateDebut): self
    {
        $this->dateDebut = $dateDebut;
        return $this;
    }

    public function getDateFin(): ?DateTime
    {
        return $this->dateFin;
    }

    public function setDateFin(?DateTime $dateFin): self
    {
        $this->dateFin = $dateFin;
        return $this;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): self
    {
        $this->statut = $statut;
        return $this;
    }

    public function getType(): ?string
    {
        return $this->statut;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;
        return $this;
    }
}