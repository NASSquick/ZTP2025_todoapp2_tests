<?php

/*
 This work, including the code samples, is licensed under a Creative Commons BY-SA 3.0 license.
*/

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * User entity.
 *
 * Represents a user in the system.
 */
#[ORM\Entity(repositoryClass: "App\Repository\UserRepository")]
#[ORM\Table(
    name: 'users',
    uniqueConstraints: [
        new ORM\UniqueConstraint(name: 'email_idx', columns: ['email']),
    ]
)]
#[UniqueEntity(fields: ['email'])]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    public const ROLE_USER = 'ROLE_USER';
    public const ROLE_ADMIN = 'ROLE_ADMIN';

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'id', type: 'integer', nullable: false, options: ['unsigned' => true])]
    private ?int $id = null;

    #[ORM\Column(type: 'string', length: 180, unique: true)]
    #[Assert\NotBlank]
    #[Assert\Email]
    private ?string $email = null;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private ?string $firstName = '';

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private ?string $lastName = '';

    #[ORM\Column(type: 'date', nullable: true)]
    private ?\DateTime $birthYear = null;

    #[ORM\Column(type: 'json')]
    private ?array $roles = [];

    #[ORM\Column(type: 'string')]
    #[Assert\NotBlank]
    #[Assert\Type(type: 'string')]
    private ?string $password = null;

    /**
     * Get user ID.
     *
     * @return int|null The unique identifier of the user, or null if not yet persisted
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Get user email.
     *
     * @return string|null The email address of the user
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * Set user email.
     *
     * @param string $email The email address to set for the user
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * Get unique user identifier.
     *
     * @return string The unique identifier used by Symfony security
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * Get username (deprecated, use getUserIdentifier).
     *
     * @return string The username (email) of the user
     *
     * @deprecated since Symfony 5.3
     */
    public function getUsername(): string
    {
        return (string) $this->email;
    }

    /**
     * Get user roles.
     *
     * @return string[] Array of roles assigned to the user
     */
    public function getRoles(): array
    {
        $roles = $this->roles ?? [];
        $roles[] = self::ROLE_USER;

        return array_unique($roles);
    }

    /**
     * Set user roles.
     *
     * @param string[] $roles Array of roles to assign to the user
     */
    public function setRoles(array $roles): void
    {
        $this->roles = $roles;
    }

    /**
     * Get user password hash.
     *
     * @return string The hashed password of the user
     */
    public function getPassword(): string
    {
        return (string) $this->password;
    }

    /**
     * Set user password hash.
     *
     * @param string $password The hashed password to set
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    /**
     * Get first name.
     *
     * @return string The first name of the user
     */
    public function getFirstName(): string
    {
        return (string) $this->firstName;
    }

    /**
     * Set first name.
     *
     * @param string|null $firstName The first name to set
     */
    public function setFirstName(?string $firstName): void
    {
        $this->firstName = (string) $firstName;
    }

    /**
     * Get last name.
     *
     * @return string The last name of the user
     */
    public function getLastName(): string
    {
        return (string) $this->lastName;
    }

    /**
     * Set last name.
     *
     * @param string|null $lastName The last name to set
     */
    public function setLastName(?string $lastName): void
    {
        $this->lastName = (string) $lastName;
    }

    /**
     * Get birth year.
     *
     * @return \DateTime|null The user's birth year as a DateTime object, or null
     */
    public function getBirthYear(): ?\DateTime
    {
        return $this->birthYear;
    }

    /**
     * Set birth year.
     *
     * @param \DateTime|null $birthYear The birth year to set
     */
    public function setBirthYear(?\DateTime $birthYear): void
    {
        $this->birthYear = $birthYear;
    }

    /**
     * Get salt (not needed for modern password algorithms).
     *
     * @return string|null Always returns null
     */
    public function getSalt(): ?string
    {
        return null;
    }

    /**
     * Erase credentials for security.
     */
    public function eraseCredentials(): void
    {
        // Clear any temporary sensitive data if present
    }
}
