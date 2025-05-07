<?php
// src/Repository/ResetPasswordRequestRepository.php
namespace App\Repository;

use App\Entity\ResetPasswordRequest; // Ensure correct entity path
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use SymfonyCasts\Bundle\ResetPassword\Model\ResetPasswordRequestInterface;
use SymfonyCasts\Bundle\ResetPassword\Persistence\Repository\ResetPasswordRequestRepositoryTrait; // <-- Make sure this line exists
use SymfonyCasts\Bundle\ResetPassword\Persistence\ResetPasswordRequestRepositoryInterface;

/**
 * @extends ServiceEntityRepository<ResetPasswordRequest>
 */
class ResetPasswordRequestRepository extends ServiceEntityRepository implements ResetPasswordRequestRepositoryInterface
{
    use ResetPasswordRequestRepositoryTrait; // <-- Make sure this line exists

    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ResetPasswordRequest::class);
    }

    public function createResetPasswordRequest(object $user, \DateTimeInterface $expiresAt, string $selector, string $hashedToken): ResetPasswordRequestInterface
    {
        // Ensure the user is a UserInterface before creating the request object
        if (!$user instanceof \Symfony\Component\Security\Core\User\UserInterface) {
            throw new \InvalidArgumentException(sprintf('The first argument of %s() must be an instance of %s, "%s" given.', __METHOD__, \Symfony\Component\Security\Core\User\UserInterface::class, get_debug_type($user)));
        }

        return new ResetPasswordRequest( // Use the correct entity
            $user,
            $expiresAt,
            $selector,
            $hashedToken
        );
    }
}