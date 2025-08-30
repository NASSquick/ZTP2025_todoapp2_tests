<?php

/**
 * UserService.
 */

namespace App\Service;

use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

/**
 * Class UserService.
 */
class UserService
{
    private UserRepository $userRepository;
    private UserPasswordHasherInterface $passwordHasher;

    /**
     * UserService constructor.
     *
     * @param UserRepository              $userRepository UserRepository
     * @param UserPasswordHasherInterface $passwordHasher Password hasher
     */
    public function __construct(UserRepository $userRepository, UserPasswordHasherInterface $passwordHasher)
    {
        $this->userRepository = $userRepository;
        $this->passwordHasher = $passwordHasher;
    }

    /**
     * Save a user entity and optionally hash a new plain password.
     *
     * @param User        $user          The user entity to save
     * @param string|null $plainPassword The plain password to hash, if any
     */
    public function save(User $user, ?string $plainPassword): void
    {
        if ($plainPassword) {
            $user->setPassword(
                $this->passwordHasher->hashPassword(
                    $user,
                    $plainPassword
                )
            );
        }
        $this->userRepository->save($user);
    }
}
