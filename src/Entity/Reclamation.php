<?php

namespace App\Entity;

use App\Repository\ReclamationRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ReclamationRepository::class)]
#[ORM\Table(name: 'reclamation')]
class Reclamation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'Le titre ne peut pas être vide.')]
    #[Assert\Length(
        min: 5,
        max: 255,
        minMessage: 'Le titre doit comporter au moins {{ limit }} caractères.',
        maxMessage: 'Le titre ne peut pas dépasser {{ limit }} caractères.'
    )]
    private ?string $titre = null;

    #[ORM\Column(type: 'text')]
    #[Assert\NotBlank(message: 'La description ne peut pas être vide.')]
    #[Assert\Length(
        min: 10,
        minMessage: 'La description doit comporter au moins {{ limit }} caractères.'
    )]
    private ?string $description = null;

    #[ORM\Column(name: 'date_creation', type: 'datetime')]
    #[Assert\NotNull(message: 'La date de création est requise.')]
    #[Assert\LessThanOrEqual('now', message: 'La date de création ne peut pas être dans le futur.')]
    private ?\DateTimeInterface $dateCreation;

    #[ORM\Column(name: 'type_reclamation', length: 255)]
    #[Assert\NotBlank(message: 'Le type de réclamation ne peut pas être vide.')]
    #[Assert\Choice(
        choices: ['TECHNIQUE', 'SERVICE', 'FACTURATION', 'AUTRE'],
        message: 'Le type choisi n\'est pas valide. Types autorisés: TECHNIQUE, SERVICE, FACTURATION, AUTRE.'
    )]
    private ?string $typeReclamation = null;

    #[ORM\Column(name: 'user_email', length: 255)]
    #[Assert\NotBlank(message: 'L\'email de l\'utilisateur ne peut pas être vide.')]
    #[Assert\Email(
        message: 'L\'adresse email {{ value }} n\'est pas valide.'
    )]
    #[Assert\Length(
        max: 255,
        maxMessage: 'L\'email ne peut pas dépasser {{ limit }} caractères.'
    )]
    private ?string $userEmail = null;

    public function __construct()
    {
        $this->dateCreation = new \DateTime();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function getDateCreation(): ?\DateTimeInterface
    {
        return $this->dateCreation;
    }

    public function setDateCreation(\DateTimeInterface $dateCreation): self
    {
        $this->dateCreation = $dateCreation;
        return $this;
    }

    public function getTypeReclamation(): ?string
    {
        return $this->typeReclamation;
    }

    public function setTypeReclamation(string $typeReclamation): self
    {
        $this->typeReclamation = $typeReclamation;
        return $this;
    }

    public function getUserEmail(): ?string
    {
        return $this->userEmail;
    }

    public function setUserEmail(string $userEmail): self
    {
        $this->userEmail = $userEmail;
        return $this;
    }
}
