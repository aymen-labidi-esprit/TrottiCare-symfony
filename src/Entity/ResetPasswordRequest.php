<?php
// src/Entity/ResetPasswordRequest.php
namespace App\Entity;

use App\Repository\ResetPasswordRequestRepository; // Make sure namespace is correct
use Doctrine\ORM\Mapping as ORM;
use SymfonyCasts\Bundle\ResetPassword\Model\ResetPasswordRequestInterface;
use SymfonyCasts\Bundle\ResetPassword\Model\ResetPasswordRequestTrait;
use Symfony\Component\Security\Core\User\UserInterface; // Use the interface

#[ORM\Entity(repositoryClass: ResetPasswordRequestRepository::class)]
class ResetPasswordRequest implements ResetPasswordRequestInterface
{
    // Add the trait provided by the bundle
    use ResetPasswordRequestTrait;

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    // Define the relationship to your User entity
    #[ORM\ManyToOne(targetEntity: Utilisateur::class)] // Use YOUR User entity class here (Utilisateur seems correct based on your files)
    #[ORM\JoinColumn(nullable: false)]
    private object $user; // Store the User object

    // Constructor required by the trait and repository
    public function __construct(object $user, \DateTimeInterface $expiresAt, string $selector, string $hashedToken)
    {
        // Ensure the user is compatible before setting
        if (!$user instanceof UserInterface) {
            throw new \InvalidArgumentException(sprintf('The first argument of %s() must be an instance of %s, "%s" given.', __METHOD__, UserInterface::class, get_debug_type($user)));
        }
        $this->user = $user;
        $this->initialize($expiresAt, $selector, $hashedToken); // Call the trait's initializer
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUser(): object // Return type matches property
    {
        return $this->user;
    }
}