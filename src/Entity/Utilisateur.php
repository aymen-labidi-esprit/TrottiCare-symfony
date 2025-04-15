<?php

namespace App\Entity;

use App\Repository\UtilisateurRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UtilisateurRepository::class)]
#[ORM\Table(name: 'utilisateurs')]
class Utilisateur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 180, unique: true)]
    private ?string $email = null;

    #[ORM\Column(name: "role")]
    private ?string $role = 'client';

    #[ORM\Column(name: "mot_de_passe_hash")]
    private ?string $password = null;

    #[ORM\Column(name: "mot_de_passe_sel")]
    private ?string $salt = '';

    #[ORM\Column(length: 255, name: "nom")]
    private ?string $nom = null;

    #[ORM\Column(length: 255, name: "prenom")]
    private ?string $prenom = null;

    #[ORM\Column(length: 50, name: "telephone")]
    private ?string $telephone = null;

    #[ORM\OneToMany(mappedBy: 'utilisateur', targetEntity: Participation::class)]
    private Collection $participations;

    public function __construct()
    {
        $this->participations = new ArrayCollection();
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

    public function getParticipations(): Collection
    {
        return $this->participations;
    }

    public function addParticipation(Participation $participation): static
    {
        if (!$this->participations->contains($participation)) {
            $this->participations->add($participation);
            $participation->setUtilisateur($this);
        }
        return $this;
    }

    public function removeParticipation(Participation $participation): static
    {
        if ($this->participations->removeElement($participation)) {
            if ($participation->getUtilisateur() === $this) {
                $participation->setUtilisateur(null);
            }
        }
        return $this;
    }
}