<?php

/*
 This work, including the code samples, is licensed under a Creative Commons BY-SA 3.0 license.
 */

namespace App\Entity;

use App\Repository\CommentsRepository;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Timestampable\Traits\TimestampableEntity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class Comments.
 *
 * Represents a comment on a photo, including email, nickname, text, and related photo.
 */
#[ORM\Entity(repositoryClass: CommentsRepository::class)]
class Comments
{
    use TimestampableEntity;

    /**
     * Comments constructor.
     *
     * Initializes fields with empty strings to avoid null values.
     */
    public function __construct()
    {
        $this->text = '';
        $this->nick = '';
        $this->email = '';
    }

    /**
     * Primary key.
     *
     * @var int|null ID of the comment
     */
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    /**
     * Email of the comment author.
     */
    #[ORM\Column(type: 'string', length: 255)]
    #[Assert\NotBlank(
        message: 'Email is required.',
        normalizer: 'trim'
    )]
    #[Assert\Email(message: 'Please provide a valid email address.')]
    private ?string $email = null;

    /**
     * Nickname of the comment author.
     */
    #[ORM\Column(type: 'string', length: 255)]
    #[Assert\NotBlank(
        message: 'Nickname is required.',
        normalizer: 'trim'
    )]
    private ?string $nick = null;

    /**
     * Text of the comment.
     */
    #[ORM\Column(type: 'string', length: 255)]
    #[Assert\NotBlank(
        message: 'Comment text is required.',
        normalizer: 'trim'
    )]
    private ?string $text = null;

    /**
     * Photo the comment belongs to.
     *
     * @var Photos|null Related Photos entity
     */
    #[ORM\ManyToOne(targetEntity: Photos::class, inversedBy: 'comments')]
    #[ORM\JoinColumn(name: 'photos_id', referencedColumnName: 'id')]
    private ?Photos $photos = null;

    /**
     * Get the comment ID.
     *
     * @return int|null ID of the comment
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Get the author's email.
     *
     * @return string|null Email of the comment author
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * Set the author's email.
     *
     * @param string $email Email of the comment author
     *
     * @return self Returns the current Comments instance
     */
    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the author's nickname.
     *
     * @return string|null Nickname of the comment author
     */
    public function getNick(): ?string
    {
        return $this->nick;
    }

    /**
     * Set the author's nickname.
     *
     * @param string $nick Nickname of the comment author
     *
     * @return self Returns the current Comments instance
     */
    public function setNick(string $nick): self
    {
        $this->nick = $nick;

        return $this;
    }

    /**
     * Get the comment text.
     *
     * @return string|null Text content of the comment
     */
    public function getText(): ?string
    {
        return $this->text;
    }

    /**
     * Set the comment text.
     *
     * @param string $text Text content of the comment
     *
     * @return self Returns the current Comments instance
     */
    public function setText(string $text): self
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get the related photo.
     *
     * @return Photos|null The Photos entity this comment belongs to
     */
    public function getPhotos(): ?Photos
    {
        return $this->photos;
    }

    /**
     * Set the related photo.
     *
     * @param Photos|null $photos The Photos entity to relate this comment to
     *
     * @return self Returns the current Comments instance
     */
    public function setPhotos(?Photos $photos): self
    {
        $this->photos = $photos;

        return $this;
    }
}
