<?php

namespace App\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;

#[ORM\Entity(repositoryClass: "App\Repository\UserRepository")]
#[ORM\Table(
    name: "users",
    uniqueConstraints: [
        new ORM\UniqueConstraint(name: "email_idx", columns: ["email"]),
    ]
)]
#[UniqueEntity(fields: ["email"])]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    public const ROLE_USER = 'ROLE_USER';
    public const ROLE_ADMIN = 'ROLE_ADMIN';

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: "id", type: "integer", nullable: false, options: ["unsigned" => true])]
    private ?int $id = null;

    #[ORM\Column(type: "string", length: 180, unique: true)]
    #[Assert\NotBlank]
    #[Assert\Email]
    private ?string $email = null;

    #[ORM\Column(type: "string", length: 255, nullable: true)]
    private ?string $firstName = '';

    #[ORM\Column(type: "string", length: 255, nullable: true)]
    private ?string $lastName = '';

    #[ORM\Column(type: "date", nullable: true)]
    private ?DateTime $birthYear = null;

    #[ORM\Column(type: "json")]
    private ?array $roles = [];

    #[ORM\Column(type: "string")]
    #[Assert\NotBlank]
    #[Assert\Type(type: "string")]
    private ?string $password = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /** @deprecated since Symfony 5.3, use getUserIdentifier() */
    public function getUsername(): string
    {
        return (string) $this->email;
    }

    public function getRoles(): array
    {
        $roles = $this->roles ?? [];
        $roles[] = self::ROLE_USER;

        return array_unique($roles);
    }

    public function setRoles(array $roles): void
    {
        $this->roles = $roles;
    }

    public function getPassword(): string
    {
        return (string) $this->password;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    public function getFirstName(): string
    {
        return (string) $this->firstName;
    }

    public function setFirstName(?string $firstName): void
    {
        $this->firstName = (string) $firstName;
    }

    public function getLastName(): string
    {
        return (string) $this->lastName;
    }

    public function setLastName(?string $lastName): void
    {
        $this->lastName = (string) $lastName;
    }

    public function getBirthYear(): ?DateTime
    {
        return $this->birthYear;
    }

    public function setBirthYear(?DateTime $birthYear): void
    {
        $this->birthYear = $birthYear;
    }

    public function getSalt(): ?string
    {
        // Not needed when using bcrypt or sodium
        return null;
    }

    public function eraseCredentials(): void
    {
        // Clear sensitive data if any
    }
}
