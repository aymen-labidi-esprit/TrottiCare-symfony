<?php

namespace App\Entity;

use App\Repository\TrottinetteRepository;
use Doctrine\ORM\Mapping as ORM;
use DateTime;
use App\Enum\TrottinetteStatus;

#[ORM\Entity(repositoryClass: TrottinetteRepository::class)]
#[ORM\Table(name: 'trottinette')]
class Trottinette
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: Utilisateur::class)]
    #[ORM\JoinColumn(name: 'idUser', referencedColumnName: 'id')]
    private ?Utilisateur $utilisateur = null;

    #[ORM\Column(name: 'modele', length: 100, nullable: true)]
    private ?string $modele = null;

    #[ORM\Column(name: 'numeroSerie', length: 100, nullable: true)]
    private ?string $numeroSerie = null;

    #[ORM\Column(name: 'etat', type: 'string', enumType: TrottinetteStatus::class)]
    private TrottinetteStatus $etat = TrottinetteStatus::DISPONIBLE;

    #[ORM\Column(name: 'batterie', nullable: true)]
    private ?int $batterie = null;

    #[ORM\Column(name: 'localisation', length: 100, nullable: true)]
    private ?string $localisation = null;

    #[ORM\Column(name: 'dateAjout', type: 'datetime', nullable: true)]
    private ?DateTime $dateAjout = null;

    #[ORM\Column(name: 'pointRelaisId', nullable: true)]
    private ?int $pointRelaisId = null;

    #[ORM\Column(name: 'autonomie', length: 45, nullable: true)]
    private ?string $autonomie = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUtilisateur(): ?Utilisateur
    {
        return $this->utilisateur;
    }

    public function setUtilisateur(?Utilisateur $utilisateur): self
    {
        $this->utilisateur = $utilisateur;
        return $this;
    }

    public function getModele(): ?string
    {
        return $this->modele;
    }

    public function setModele(?string $modele): self
    {
        $this->modele = $modele;
        return $this;
    }

    public function getNumeroSerie(): ?string
    {
        return $this->numeroSerie;
    }

    public function setNumeroSerie(?string $numeroSerie): self
    {
        $this->numeroSerie = $numeroSerie;
        return $this;
    }

    public function getEtat(): TrottinetteStatus
    {
        return $this->etat;
    }

    public function setEtat(TrottinetteStatus $etat): self
    {
        $this->etat = $etat;
        return $this;
    }

    public function getBatterie(): ?int
    {
        return $this->batterie;
    }

    public function setBatterie(?int $batterie): self
    {
        $this->batterie = $batterie;
        return $this;
    }

    public function getLocalisation(): ?string
    {
        return $this->localisation;
    }

    public function setLocalisation(?string $localisation): self
    {
        $this->localisation = $localisation;
        return $this;
    }

    public function getDateAjout(): ?DateTime
    {
        return $this->dateAjout;
    }

    public function setDateAjout(?DateTime $dateAjout): self
    {
        $this->dateAjout = $dateAjout;
        return $this;
    }

    public function getPointRelaisId(): ?int
    {
        return $this->pointRelaisId;
    }

    public function setPointRelaisId(?int $pointRelaisId): self
    {
        $this->pointRelaisId = $pointRelaisId;
        return $this;
    }

    public function getAutonomie(): ?string
    {
        return $this->autonomie;
    }

    public function setAutonomie(?string $autonomie): self
    {
        $this->autonomie = $autonomie;
        return $this;
    }
}