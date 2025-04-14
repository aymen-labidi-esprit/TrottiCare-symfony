<?php

namespace App\Entity;

use App\Repository\UtilisateurRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

#[ORM\Entity(repositoryClass: UtilisateurRepository::class)]
#[ORM\Table(name: 'utilisateurs')]
#[UniqueEntity(fields: ['email'], message: 'Cette adresse email est déjà utilisée par un autre utilisateur.')]
class Utilisateur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 180, unique: true)]
    #[Assert\NotBlank(message: 'L\'email ne peut pas être vide.')]
    #[Assert\Email(
        message: 'L\'adresse email {{ value }} n\'est pas valide.',
    )]
    #[Assert\Length(
        max: 180,
        maxMessage: 'L\'email ne peut pas dépasser {{ limit }} caractères.'
    )]
    private ?string $email = null;

    #[ORM\Column(name: "role")]
    #[Assert\NotBlank(message: 'Le rôle ne peut pas être vide.')]
    #[Assert\Choice(
        choices: ['admin', 'client', 'partenaire'],
        message: 'Le rôle choisi n\'est pas valide. Rôles autorisés: admin, client, partenaire.'
    )]
    private ?string $role = 'client';

    #[ORM\Column(name: "mot_de_passe_hash")]
    #[Assert\NotBlank(message: 'Le mot de passe ne peut pas être vide.')]
    #[Assert\Length(
        min: 6,
        minMessage: 'Le mot de passe doit comporter au moins {{ limit }} caractères.'
    )]
    private ?string $password = null;

    #[ORM\Column(name: "mot_de_passe_sel")]
    private ?string $salt = '';

    #[ORM\Column(length: 255, name: "nom")]
    #[Assert\NotBlank(message: 'Le nom ne peut pas être vide.')]
    #[Assert\Length(
        min: 2,
        max: 255,
        minMessage: 'Le nom doit comporter au moins {{ limit }} caractères.',
        maxMessage: 'Le nom ne peut pas dépasser {{ limit }} caractères.'
    )]
    private ?string $nom = null;

    #[ORM\Column(length: 255, name: "prenom")]
    #[Assert\NotBlank(message: 'Le prénom ne peut pas être vide.')]
    #[Assert\Length(
        min: 2,
        max: 255,
        minMessage: 'Le prénom doit comporter au moins {{ limit }} caractères.',
        maxMessage: 'Le prénom ne peut pas dépasser {{ limit }} caractères.'
    )]
    private ?string $prenom = null;

    #[ORM\Column(length: 50, name: "telephone")]
    #[Assert\NotBlank(message: 'Le numéro de téléphone ne peut pas être vide.')]
    #[Assert\Regex(
        pattern: '/^[0-9+\s\-().]{8,15}$/',
        message: 'Le numéro de téléphone n\'est pas valide.'
    )]
    private ?string $telephone = null;

    #[ORM\OneToMany(mappedBy: 'utilisateur', targetEntity: Trottinette::class)]
    private Collection $trottinettes;

    public function __construct()
    {
        $this->trottinettes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;
        return $this;
    }

    public function getRoles(): array
    {
        // Map the role string to an array of roles
        $roleMap = [
            'admin' => ['ROLE_ADMIN', 'ROLE_USER'],
            'client' => ['ROLE_USER'],
            'partenaire' => ['ROLE_PARTNER', 'ROLE_USER']
        ];

        $roleKey = $this->getRole() ?? 'client';
        return $roleMap[$roleKey] ?? ['ROLE_USER']; // Default to ROLE_USER
    }

    public function setRoles(array $roles): static
    {
        // Convert array to string role
        if (in_array('ROLE_ADMIN', $roles)) {
            $this->role = 'admin';
        } elseif (in_array('ROLE_PARTNER', $roles)) {
            $this->role = 'partenaire';
        } else {
            $this->role = 'client';
        }
        
        return $this;
    }

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(string $role): static
    {
        $this->role = $role;
        return $this;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        // In a real application, you'd hash the password here
        $this->password = $password;
        // You might also set the salt
        $this->salt = bin2hex(random_bytes(16));
        return $this;
    }

    public function getSalt(): ?string
    {
        return $this->salt;
    }

    public function setSalt(string $salt): static
    {
        $this->salt = $salt;
        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;
        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): static
    {
        $this->prenom = $prenom;
        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(?string $telephone): static
    {
        $this->telephone = $telephone;
        return $this;
    }

    public function getTrottinettes(): Collection
    {
        return $this->trottinettes;
    }

    public function addTrottinette(Trottinette $trottinette): static
    {
        if (!$this->trottinettes->contains($trottinette)) {
            $this->trottinettes->add($trottinette);
            $trottinette->setUtilisateur($this);
        }
        return $this;
    }

    public function removeTrottinette(Trottinette $trottinette): static
    {
        if ($this->trottinettes->removeElement($trottinette)) {
            if ($trottinette->getUtilisateur() === $this) {
                $trottinette->setUtilisateur(null);
            }
        }
        return $this;
    }
}