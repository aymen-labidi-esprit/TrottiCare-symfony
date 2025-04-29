<?php
// src/Entity/Reponse.php
namespace App\Entity;

use App\Repository\ReponseRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use DateTimeInterface;

#[ORM\Entity(repositoryClass: ReponseRepository::class)]
#[ORM\Table(name: 'reponse_reclamation')] // Nom spécifique de la table
class Reponse
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: Reclamation::class, inversedBy: 'reponses')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Reclamation $reclamation = null;

    #[ORM\ManyToOne(targetEntity: Utilisateur::class)]
    #[ORM\JoinColumn(name: 'auteur_id', referencedColumnName: 'id', nullable: false)]
    #[Assert\NotNull(message: "L'auteur de la réponse est requis.")]
    private ?Utilisateur $auteur = null;

    #[ORM\Column(type: 'text')]
    #[Assert\NotBlank(message: 'Le message ne peut pas être vide.')]
    #[Assert\Length(min: 5, minMessage: 'La réponse doit faire au moins {{ limit }} caractères.')]
    private ?string $message = null;

    #[ORM\Column(type: 'datetime')]
    private ?DateTimeInterface $dateReponse = null;

    public function __construct()
    {
        $this->dateReponse = new \DateTime(); // Date de création par défaut
    }

    // Getters and Setters
    public function getId(): ?int { return $this->id; }
    public function getReclamation(): ?Reclamation { return $this->reclamation; }
    public function setReclamation(?Reclamation $reclamation): self { $this->reclamation = $reclamation; return $this; }

    public function getAuteur(): ?Utilisateur { return $this->auteur; }
    public function setAuteur(?Utilisateur $auteur): self { $this->auteur = $auteur; return $this; }

    public function getMessage(): ?string { return $this->message; }
    public function setMessage(string $message): self { $this->message = $message; return $this; }

    public function getDateReponse(): ?DateTimeInterface { return $this->dateReponse; }
    public function setDateReponse(DateTimeInterface $dateReponse): self { $this->dateReponse = $dateReponse; return $this; }
}
