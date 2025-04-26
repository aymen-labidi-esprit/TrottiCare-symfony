<?php
// src/Entity/Utilisateur.php
namespace App\Entity;

use App\Repository\UtilisateurRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

#[ORM\Entity(repositoryClass: UtilisateurRepository::class)]
#[ORM\Table(name: 'utilisateurs')]
#[UniqueEntity(fields: ['email'], message: 'Cette adresse email est déjà utilisée.')]
class Utilisateur implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 180, unique: true)]
    #[Assert\NotBlank(message: 'L\'email ne peut pas être vide.')]
    #[Assert\Email(message: 'L\'adresse email {{ value }} n\'est pas valide.')]
    #[Assert\Length(max: 180, maxMessage: 'L\'email ne peut pas dépasser {{ limit }} caractères.')]
    private ?string $email = null;

    /**
     * Internal role representation (simple string) - Corrected column name
     */
    #[ORM\Column(name: "role_interne", length: 50)]
    #[Assert\NotBlank(message: 'Le rôle ne peut pas être vide.')]
    #[Assert\Choice(
        choices: ['admin', 'client', 'partenaire'],
        message: 'Le rôle choisi n\'est pas valide. Rôles autorisés: admin, client, partenaire.'
    )]
    private string $roleInterne = 'client'; // Default role

    /**
     * @var string The hashed password - Corrected column name mapping
     */
    #[ORM\Column(name: "password")] // Map to 'password' column if changed from mot_de_passe_hash
    private ?string $password = null;

    #[ORM\Column(length: 255, name: "nom")]
    #[Assert\NotBlank(message: 'Le nom ne peut pas être vide.')]
    #[Assert\Length(min: 2, max: 255, minMessage: 'Le nom doit comporter au moins {{ limit }} caractères.', maxMessage: 'Le nom ne peut pas dépasser {{ limit }} caractères.')]
    private ?string $nom = null;

    #[ORM\Column(length: 255, name: "prenom")]
    #[Assert\NotBlank(message: 'Le prénom ne peut pas être vide.')]
    #[Assert\Length(min: 2, max: 255, minMessage: 'Le prénom doit comporter au moins {{ limit }} caractères.', maxMessage: 'Le prénom ne peut pas dépasser {{ limit }} caractères.')]
    private ?string $prenom = null;

    #[ORM\Column(length: 50, name: "telephone")]
    #[Assert\NotBlank(message: 'Le numéro de téléphone ne peut pas être vide.')]
    #[Assert\Regex(pattern: '/^[0-9+\s\-().]{8,15}$/', message: 'Le numéro de téléphone n\'est pas valide.')]
    private ?string $telephone = null;

    #[ORM\Column(type: 'boolean')]
    private bool $isVerified = false;

    #[ORM\OneToMany(mappedBy: 'utilisateur', targetEntity: Reservation::class, cascade: ['persist', 'remove'], orphanRemoval: true)]
    private Collection $reservations;

    #[ORM\OneToMany(mappedBy: 'utilisateur', targetEntity: Reclamation::class, cascade: ['persist', 'remove'], orphanRemoval: true)]
    private Collection $reclamations;

    #[ORM\OneToMany(mappedBy: 'utilisateur', targetEntity: Participation::class, cascade: ['persist', 'remove'], orphanRemoval: true)]
    private Collection $participations;

    // Removed Trottinettes collection unless explicit partner relation needed

    public function __construct()
    {
        $this->reservations = new ArrayCollection();
        $this->reclamations = new ArrayCollection();
        $this->participations = new ArrayCollection();
    }

    public function getId(): ?int { return $this->id; }
    public function getEmail(): ?string { return $this->email; }
    public function setEmail(string $email): static { $this->email = $email; return $this; }

    /** @see UserInterface */
    public function getUserIdentifier(): string { return (string) $this->email; }
    #[ORM\Column(type: 'boolean', options: ['default' => true])]
    private bool $isActive = true;

    public function isActive(): bool
    {
        return $this->isActive;
    }

    public function setIsActive(bool $isActive): static
    {
        $this->isActive = $isActive;
        return $this;
    }
    /** @see UserInterface */
    public function getRoles(): array
    {
        $roleMap = [
            'admin' => ['ROLE_ADMIN', 'ROLE_PARTENAIRE', 'ROLE_USER'],
            'partenaire' => ['ROLE_PARTENAIRE', 'ROLE_USER'],
            'client' => ['ROLE_USER']
        ];
        $roles = $roleMap[$this->roleInterne] ?? ['ROLE_USER'];
        $roles[] = 'ROLE_USER'; // Guarantee ROLE_USER
        return array_unique($roles);
    }

    public function getRoleInterne(): string { return $this->roleInterne; }
    public function setRoleInterne(string $roleInterne): static {
        if (!in_array($roleInterne, ['admin', 'client', 'partenaire'])) {
            throw new \InvalidArgumentException("Invalid role");
        }
        $this->roleInterne = $roleInterne;
        return $this;
    }

    /** @see PasswordAuthenticatedUserInterface */
    public function getPassword(): ?string { return $this->password; } // Return nullable
    public function setPassword(string $password): static { $this->password = $password; return $this; }

    /** @see UserInterface */
    public function getSalt(): ?string { return null; } // Not needed

    /** @see UserInterface */
    public function eraseCredentials(): void { /* $this->plainPassword = null; */ }

    public function getNom(): ?string { return $this->nom; }
    public function setNom(string $nom): static { $this->nom = $nom; return $this; }
    public function getPrenom(): ?string { return $this->prenom; }
    public function setPrenom(string $prenom): static { $this->prenom = $prenom; return $this; }
    public function getTelephone(): ?string { return $this->telephone; }
    public function setTelephone(?string $telephone): static { $this->telephone = $telephone; return $this; }
    public function isVerified(): bool { return $this->isVerified; }
    public function setIsVerified(bool $isVerified): static { $this->isVerified = $isVerified; return $this; }
    public function getFullName(): string { return $this->prenom . ' ' . $this->nom; }

    // --- Collection Methods ---
    /** @return Collection<int, Reservation> */
    public function getReservations(): Collection { return $this->reservations; }
    public function addReservation(Reservation $reservation): static { if (!$this->reservations->contains($reservation)) { $this->reservations->add($reservation); $reservation->setUtilisateur($this); } return $this; }
    public function removeReservation(Reservation $reservation): static { if ($this->reservations->removeElement($reservation)) { if ($reservation->getUtilisateur() === $this) { $reservation->setUtilisateur(null); } } return $this; }
    /** @return Collection<int, Reclamation> */
    public function getReclamations(): Collection { return $this->reclamations; }
    public function addReclamation(Reclamation $reclamation): static { if (!$this->reclamations->contains($reclamation)) { $this->reclamations->add($reclamation); $reclamation->setUtilisateur($this); } return $this; }
    public function removeReclamation(Reclamation $reclamation): static { if ($this->reclamations->removeElement($reclamation)) { if ($reclamation->getUtilisateur() === $this) { $reclamation->setUtilisateur(null); } } return $this; }
    /** @return Collection<int, Participation> */
    public function getParticipations(): Collection { return $this->participations; }
    public function addParticipation(Participation $participation): static { if (!$this->participations->contains($participation)) { $this->participations->add($participation); $participation->setUtilisateur($this); } return $this; }
    public function removeParticipation(Participation $participation): static { if ($this->participations->removeElement($participation)) { if ($participation->getUtilisateur() === $this) { $participation->setUtilisateur(null); } } return $this; }
}