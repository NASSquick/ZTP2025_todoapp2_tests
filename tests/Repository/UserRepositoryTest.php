<?php

namespace App\Tests\Repository;

use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;

class UserRepositoryTest extends KernelTestCase
{
    private ?UserRepository $repository;

    protected function setUp(): void
    {
        self::bootKernel();
        $this->repository = self::$container->get(UserRepository::class);
    }

    public function testSaveAndFind(): void
    {
        $user = new User();
        $user->setEmail('test@example.com');
        $user->setPassword('initialPassword');

        $this->repository->save($user);

        $savedUser = $this->repository->find($user->getId());
        $this->assertNotNull($savedUser);
        $this->assertSame('test@example.com', $savedUser->getEmail());

        // Clean up
        $this->_em = $this->repository->getEntityManager();
        $this->_em->remove($savedUser);
        $this->_em->flush();
    }

    public function testUpgradePassword(): void
    {
        $user = new User();
        $user->setEmail('password@example.com');
        $user->setPassword('oldPassword');

        $this->repository->save($user);

        $newPassword = 'newHashedPassword';
        $this->repository->upgradePassword($user, $newPassword);

        $updatedUser = $this->repository->find($user->getId());
        $this->assertSame($newPassword, $updatedUser->getPassword());

        // Clean up
        $this->_em = $this->repository->getEntityManager();
        $this->_em->remove($updatedUser);
        $this->_em->flush();
    }
}
