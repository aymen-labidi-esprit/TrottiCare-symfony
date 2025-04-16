<?php

namespace App\Entity;

use App\Repository\MaintenanceRepository;
use Doctrine\ORM\Mapping as ORM;
use DateTime;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: MaintenanceRepository::class)]
#[ORM\Table(name: 'maintenance')]
class Maintenance
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(name: "trottinetteId", type: "integer")]
    #[Assert\NotBlank(message: 'Une trottinette doit être sélectionnée.')]
    #[Assert\Positive(message: 'L\'identifiant de la trottinette doit être un nombre positif.')]
    private ?int $trottinetteId = null;

    #[ORM\ManyToOne(targetEntity: Trottinette::class)]
    #[ORM\JoinColumn(name: 'trottinetteId', referencedColumnName: 'id', nullable: false)]
    #[Assert\NotNull(message: 'Une trottinette doit être associée à la maintenance.')]
    private ?Trottinette $trottinette = null;

    #[ORM\Column(type: 'text')]
    #[Assert\NotBlank(message: 'La description ne peut pas être vide.')]
    #[Assert\Length(
        min: 10,
        minMessage: 'La description doit comporter au moins {{ limit }} caractères.'
    )]
    private string $description;

    #[ORM\Column(name: 'dateDebut', type: 'datetime')]
    #[Assert\NotNull(message: 'La date de début est requise.')]
    #[Assert\Type("\DateTime", message: 'La valeur {{ value }} n\'est pas une date valide.')]
    private DateTime $dateDebut;

    #[ORM\Column(name: 'dateFin', type: 'datetime', nullable: true)]
    #[Assert\Type("\DateTime", message: 'La valeur {{ value }} n\'est pas une date valide.')]
    #[Assert\GreaterThan(
        propertyPath: "dateDebut",
        message: "La date de fin doit être postérieure à la date de début."
    )]
    private ?DateTime $dateFin = null;

    #[ORM\Column(name: "statut", type: "string", columnDefinition: "ENUM('EN_COURS','TERMINEE','ANNULEE')")]
    #[Assert\NotBlank(message: 'Le statut ne peut pas être vide.')]
    #[Assert\Choice(
        choices: ['EN_COURS', 'TERMINEE', 'ANNULEE'],
        message: 'Le statut choisi n\'est pas valide. Statuts autorisés: EN_COURS, TERMINEE, ANNULEE.'
    )]
    private ?string $statut = null;

    /**
     * Virtual property for type that is not mapped to database
     * Use this for forms and display but don't persist it
     */
    #[Assert\Choice(
        choices: ['REPARATION', 'ENTRETIEN', 'VERIFICATION'],
        message: 'Le type choisi n\'est pas valide. Types autorisés: REPARATION, ENTRETIEN, VERIFICATION.'
    )]
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