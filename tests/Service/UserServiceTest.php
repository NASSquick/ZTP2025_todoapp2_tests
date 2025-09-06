<?php

namespace App\Tests\Service;

use App\Entity\User;
use App\Repository\UserRepository;
use App\Service\UserService;
use PHPUnit\Framework\TestCase;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserServiceTest extends TestCase
{
    private UserRepository $userRepository;
    private UserPasswordHasherInterface $passwordHasher;
    private UserService $userService;

    protected function setUp(): void
    {
        $this->userRepository = $this->createMock(UserRepository::class);
        $this->passwordHasher = $this->createMock(UserPasswordHasherInterface::class);

        $this->userService = new UserService(
            $this->userRepository,
            $this->passwordHasher
        );
    }

    public function testSaveWithPlainPassword(): void
    {
        $user = new User();
        $plainPassword = 'secret';
        $hashedPassword = 'hashed-secret';

        $this->passwordHasher
            ->expects($this->once())
            ->method('hashPassword')
            ->with($user, $plainPassword)
            ->willReturn($hashedPassword);

        $this->userRepository
            ->expects($this->once())
            ->method('save')
            ->with($user);

        $this->userService->save($user, $plainPassword);

        $this->assertEquals($hashedPassword, $user->getPassword());
    }

    public function testSaveWithoutPlainPassword(): void
    {
        $user = new User();
        $originalPassword = $user->getPassword(); // likely ''

        // PasswordHasher should NOT be called
        $this->passwordHasher
            ->expects($this->never())
            ->method('hashPassword');

        $this->userRepository
            ->expects($this->once())
            ->method('save')
            ->with($user);

        $this->userService->save($user, null);

        // Password should remain unchanged
        $this->assertSame($originalPassword, $user->getPassword());
    }
}
