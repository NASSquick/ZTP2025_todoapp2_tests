<?php
namespace App\Tests\Entity;

use PHPUnit\Framework\TestCase;
use App\Entity\User;

class UserEntityTest extends TestCase
{
    public function testDefaultValues(): void
    {
        $user = new User();

        $this->assertNull($user->getId());
        $this->assertNull($user->getEmail());
        $this->assertNull($user->getBirthYear());
        $this->assertSame(['ROLE_USER'], $user->getRoles());
        $this->assertSame('', $user->getFirstName());
        $this->assertSame('', $user->getLastName());
        $this->assertSame('', $user->getPassword());
    }

    public function testSettersAndGetters(): void
    {
        $user = new User();
        $birthYear = new \DateTime('2000-01-01');

        $user->setEmail('test@example.com');
        $user->setFirstName('John');
        $user->setLastName('Doe');
        $user->setBirthYear($birthYear);
        $user->setPassword('hashedpassword');
        $user->setRoles(['ROLE_ADMIN']);

        $this->assertSame('test@example.com', $user->getEmail());
        $this->assertSame('John', $user->getFirstName());
        $this->assertSame('Doe', $user->getLastName());
        $this->assertSame($birthYear, $user->getBirthYear());
        $this->assertSame('hashedpassword', $user->getPassword());
        $this->assertContains('ROLE_ADMIN', $user->getRoles());
        $this->assertContains('ROLE_USER', $user->getRoles(), 'ROLE_USER is always added');
    }

    public function testUserIdentifier(): void
    {
        $user = new User();
        $user->setEmail('me@example.com');

        $this->assertSame('me@example.com', $user->getUserIdentifier());
        $this->assertSame('me@example.com', $user->getUsername());
    }

    public function testEraseCredentials(): void
    {
        $user = new User();
        $user->eraseCredentials(); // should not throw
        $this->assertTrue(true); // just to assert method runs
    }

    public function testRolesAlwaysContainsUser(): void
    {
        $user = new User();
        $user->setRoles([]);
        $roles = $user->getRoles();

        $this->assertContains(User::ROLE_USER, $roles);
    }
}
