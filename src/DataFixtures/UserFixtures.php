<?php

/**
 * This file is part of the TODO App project.
 *
 * (c) Hlib Ivanov.
 *
 * For license information, see the LICENSE file.
 */

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

/**
 * Data fixtures for creating initial User entities.
 */
class UserFixtures extends AbstractBaseFixtures
{
    private UserPasswordHasherInterface $passwordHasher;

    /**
     * UserFixtures constructor.
     *
     * @param UserPasswordHasherInterface $passwordHasher password hasher service
     */
    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }

    /**
     * Load user fixture data into the database.
     *
     * @param ObjectManager $manager the object manager
     */
    public function loadData(ObjectManager $manager): void
    {
        $this->createMany(1, 'admins', function ($i) {
            $user = new User();
            $user->setEmail(sprintf('admin%d@example.com', $i));
            $user->setRoles([User::ROLE_USER, User::ROLE_ADMIN]);
            $user->setPassword(
                $this->passwordHasher->hashPassword(
                    $user,
                    'admin1234'
                )
            );

            return $user;
        });

        $manager->flush();
    }
}
