<?php

namespace App\Entity;

use App\Repository\PhotosRepository;
use DateTime;
use DateTimeInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class Photos.
 */
#[ORM\Entity(repositoryClass: PhotosRepository::class)]
#[ORM\Table(name: "Photos")]
class Photos
{
    /**
     * Primary key.
     */
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    private ?int $id = null;

    /**
     * Created at.
     */
    #[ORM\Column(type: "datetime")]
    #[Gedmo\Timestampable(on: 'create')]
    private DateTimeInterface $createdAt;

    /**
     * Updated at.
     */
    #[ORM\Column(type: "datetime")]
    #[Gedmo\Timestampable(on: 'update')]
    private ?DateTimeInterface $updatedAt = null;

    /**
     * Title.
     */
    #[ORM\Column(type: "string", length: 64)]
    #[Assert\NotBlank]
    #[Assert\Length(min: 3, max: 64)]
    private ?string $title = null;

    /**
     * Text.
     */
    #[ORM\Column(type: "string", length: 255, nullable: false)]
    #[Assert\NotBlank]
    #[Assert\Length(min: 3, max: 255)]
    private ?string $text = null;

    /**
     * Filename.
     */
    #[ORM\Column(type: "string", length: 191)]
    #[Assert\Type(type: "string")]
    private ?string $filename = null;

    /**
     * Gallery this photo belongs to.
     */
    #[ORM\ManyToOne(targetEntity: Galleries::class, inversedBy: "photos")]
    #[ORM\JoinColumn(name: "gallery_id", referencedColumnName: "id")]
    private ?Galleries $gallery = null;

    /**
     * Comments related to this photo.
     */
    #[ORM\OneToMany(targetEntity: Comments::class, mappedBy: "photos", cascade: ["remove"])]
    private Collection $comments;

    /**
     * Photos constructor.
     */
    public function __construct()
    {
        $this->createdAt = new DateTime();
        $this->comments = new ArrayCollection();
    }

    /**
     * Getter for Id.
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Getter for Created At.
     */
    public function getCreatedAt(): ?DateTimeInterface
    {
        return $this->createdAt;
    }

    /**
     * Setter for Created at.
     */
    public function setCreatedAt(DateTimeInterface $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * Getter for Updated at.
     */
    public function getUpdatedAt(): ?DateTimeInterface
    {
        return $this->updatedAt;
    }

    /**
     * Setter for Updated at.
     */
    public function setUpdatedAt(DateTimeInterface $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * Getter for Title.
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * Setter for Title.
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * Getter for Text.
     */
    public function getText(): ?string
    {
        return $this->text;
    }

    /**
     * Setter for Text.
     */
    public function setText(?string $text): void
    {
        $this->text = $text;
    }

    /**
     * Getter for Gallery.
     */
    public function getGallery(): ?Galleries
    {
        return $this->gallery;
    }

    /**
     * Setter for Gallery.
     */
    public function setGallery(?Galleries $gallery): void
    {
        $this->gallery = $gallery;
    }

    /**
     * Getter for Filename.
     */
    public function getFilename(): ?string
    {
        return $this->filename;
    }

    /**
     * Setter for Filename.
     */
    public function setFilename(string $filename): void
    {
        $this->filename = $filename;
    }

    /**
     * Getter for Comments.
     */
    public function getComments(): Collection
    {
        return $this->comments;
    }

    /**
     * Add Comment.
     */
    public function addComment(Comments $comment): self
    {
        if (!$this->comments->contains($comment)) {
            $this->comments[] = $comment;
            $comment->setPhotos($this);
        }

        return $this;
    }

    /**
     * Remove Comment.
     */
    public function removeComment(Comments $comment): self
    {
        if ($this->comments->removeElement($comment)) {
            if ($comment->getPhotos() === $this) {
                $comment->setPhotos(null);
            }
        }

        return $this;
    }
}
