<?php

namespace App\Entity;

use App\Repository\TrottinetteRepository;
use Doctrine\ORM\Mapping as ORM;
use DateTime;
use App\Enum\TrottinetteStatus;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

#[ORM\Entity(repositoryClass: TrottinetteRepository::class)]
#[ORM\Table(name: 'trottinette')]
#[UniqueEntity(fields: ['numeroSerie'], message: 'Ce numéro de série est déjà utilisé par une autre trottinette.')]
class Trottinette
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: Utilisateur::class)]
    #[ORM\JoinColumn(name: 'idUser', referencedColumnName: 'id')]
    #[Assert\Valid]
    private ?Utilisateur $utilisateur = null;

    #[ORM\Column(name: 'modele', length: 100, nullable: true)]
    #[Assert\NotBlank(message: 'Le modèle est obligatoire')]
    #[Assert\Length(
        min: 2,
        max: 100,
        minMessage: 'Le modèle doit contenir au moins {{ limit }} caractères',
        maxMessage: 'Le modèle ne peut pas dépasser {{ limit }} caractères.'
    )]
    #[Assert\Regex(
        pattern: '/^[A-Za-z0-9\s\-\.]+$/',
        message: 'Le modèle ne peut contenir que des lettres, des chiffres, des espaces, des points et des tirets.'
    )]
    private ?string $modele = null;

    #[ORM\Column(name: 'numeroSerie', length: 100, nullable: true)]
    #[Assert\NotBlank(message: 'Le numéro de série est obligatoire')]
    #[Assert\Length(
        min: 4,
        max: 100,
        minMessage: 'Le numéro de série doit contenir au moins {{ limit }} caractères',
        maxMessage: 'Le numéro de série ne peut pas dépasser {{ limit }} caractères.'
    )]
    #[Assert\Regex(
        pattern: '/^[A-Za-z0-9\-]+$/',
        message: 'Le numéro de série ne peut contenir que des lettres, des chiffres et des tirets'
    )]
    private ?string $numeroSerie = null;

    #[ORM\Column(name: 'etat', type: 'string', enumType: TrottinetteStatus::class)]
    #[Assert\NotBlank(message: 'L\'état est obligatoire')]
    private TrottinetteStatus $etat = TrottinetteStatus::DISPONIBLE;

    #[ORM\Column(name: 'batterie', nullable: true)]
    #[Assert\NotBlank(message: 'batterie est obligatoire')]
    #[Assert\Type(
        type: 'integer',
        message: 'La valeur {{ value }} n\'est pas un nombre entier valide.'
    )]
    #[Assert\Range(
        min: 0,
        max: 100,
        notInRangeMessage: 'La batterie doit être comprise entre {{ min }}% et {{ max }}%'
    )]
    private ?int $batterie = null;

    #[ORM\Column(name: 'localisation', length: 100, nullable: true)]
    #[Assert\NotBlank(message: 'La localisation est obligatoire')]
    #[Assert\Length(
        max: 100,
        maxMessage: 'La localisation ne peut pas dépasser {{ limit }} caractères.'
    )]
    private ?string $localisation = null;

    #[ORM\Column(name: 'dateAjout', type: 'datetime', nullable: true)]
    #[Assert\Type("\DateTime", message: 'La valeur {{ value }} n\'est pas une date valide.')]
    #[Assert\LessThanOrEqual('now', message: 'La date d\'ajout ne peut pas être dans le futur.')]
    private ?DateTime $dateAjout = null;

    #[ORM\Column(name: 'pointRelaisId', nullable: true)]
    #[Assert\Type(
        type: 'integer',
        message: 'La valeur {{ value }} n\'est pas un nombre entier valide.'
    )]
    #[Assert\Positive(message: 'L\'identifiant du point relais doit être un nombre positif.')]
    private ?int $pointRelaisId = null;

    #[ORM\Column(name: 'autonomie', length: 45, nullable: true)]
    #[Assert\NotBlank(message: 'L\'autonomie est obligatoire')]
    #[Assert\Length(
        max: 45,
        maxMessage: 'L\'autonomie ne peut pas dépasser {{ limit }} caractères.'
    )]
    #[Assert\Regex(
        pattern: '/^\d+\s*(km|heures?)$/i',
        message: 'Le format d\'autonomie doit être comme "25 km" ou "2 heures"'
    )]
    private ?string $autonomie = null;

    #[Assert\Callback]
    public function validateBatteryAndAutonomy($context)
    {
        if ($this->batterie !== null && $this->batterie < 10 && $this->etat === TrottinetteStatus::DISPONIBLE) {
            $context->buildViolation('Une trottinette disponible doit avoir au moins 10% de batterie.')
                ->atPath('batterie')
                ->addViolation();
        }

        if ($this->etat === TrottinetteStatus::EN_MAINTENANCE && $this->batterie > 95) {
            $context->buildViolation('Une trottinette en maintenance ne devrait pas avoir une batterie presque pleine.')
                ->atPath('batterie')
                ->addViolation();
        }
    }

    // ======== GETTERS & SETTERS ========

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

    public function setEtat($etat): self
    {
        if (is_string($etat)) {
            $this->etat = TrottinetteStatus::from($etat);
        } else {
            $this->etat = $etat;
        }
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
