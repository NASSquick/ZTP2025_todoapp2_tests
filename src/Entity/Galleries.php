<?php

/*
 This work, including the code samples, is licensed under a Creative Commons BY-SA 3.0 license.
 */

namespace App\Entity;

use App\Repository\GalleriesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class Galleries.
 *
 * Represents a gallery which contains multiple photos.
 */
#[ORM\Entity(repositoryClass: GalleriesRepository::class)]
#[ORM\Table(name: 'Galleries')]
class Galleries
{
    /**
     * Primary key (Gallery ID).
     *
     * @var int|null The unique identifier of the gallery
     */
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    /**
     * Creation timestamp of the gallery.
     *
     * @var \DateTimeInterface|null The date and time when the gallery was created
     */
    #[ORM\Column(type: 'datetime')]
    #[Assert\Type(type: \DateTimeInterface::class)]
    #[Gedmo\Timestampable(on: 'create')]
    private ?\DateTimeInterface $createdAt = null;

    /**
     * Last update timestamp of the gallery.
     *
     * @var \DateTimeInterface|null The date and time when the gallery was last updated
     */
    #[ORM\Column(type: 'datetime')]
    #[Assert\Type(type: \DateTimeInterface::class)]
    #[Gedmo\Timestampable(on: 'update')]
    private ?\DateTimeInterface $updatedAt = null;

    /**
     * Gallery title.
     *
     * @var string|null The human-readable title of the gallery
     */
    #[ORM\Column(type: 'string', length: 64)]
    #[Assert\Type(type: 'string')]
    #[Assert\NotBlank]
    #[Assert\Length(min: 3, max: 64)]
    private ?string $title = null;

    /**
     * Photos contained in this gallery.
     *
     * @var Collection<int, Photos> Collection of Photos objects associated with this gallery
     */
    #[ORM\OneToMany(mappedBy: 'gallery', targetEntity: Photos::class, fetch: 'EXTRA_LAZY', cascade: ['remove'])]
    private Collection $photos;

    /**
     * Slug code derived from title.
     *
     * @var string|null The slug representation of the gallery title
     */
    #[ORM\Column(type: 'string', length: 64)]
    #[Assert\Type(type: 'string')]
    #[Assert\Length(min: 3, max: 64)]
    #[Gedmo\Slug(fields: ['title'])]
    private ?string $code = null;

    /**
     * Galleries constructor.
     *
     * Initializes the photos collection.
     */
    public function __construct()
    {
        $this->photos = new ArrayCollection();
    }

    /**
     * Get the gallery ID.
     *
     * @return int|null The unique identifier of the gallery
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Get the creation timestamp.
     *
     * @return \DateTimeInterface|null The date and time when the gallery was created
     */
    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    /**
     * Set the creation timestamp.
     *
     * @param \DateTimeInterface $createdAt The date and time to set as creation time
     */
    public function setCreatedAt(\DateTimeInterface $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * Get the last update timestamp.
     *
     * @return \DateTimeInterface|null The date and time when the gallery was last updated
     */
    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    /**
     * Set the last update timestamp.
     *
     * @param \DateTimeInterface $updatedAt The date and time to set as last update time
     */
    public function setUpdatedAt(\DateTimeInterface $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * Get the gallery title.
     *
     * @return string|null The title of the gallery
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * Set the gallery title.
     *
     * @param string|null $title The title to assign to the gallery
     */
    public function setTitle(?string $title): void
    {
        $this->title = $title;
    }

    /**
     * Get all photos in the gallery.
     *
     * @return Collection<int, Photos> Collection of Photos objects
     */
    public function getPhotos(): Collection
    {
        return $this->photos;
    }

    /**
     * Get the slug code of the gallery.
     *
     * @return string|null Slug derived from the title
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * Set the slug code of the gallery.
     *
     * @param string $code Slug to assign
     *
     * @return self The current gallery object
     */
    public function setCode(string $code): self
    {
        $this->code = $code;

        return $this;
    }
}
