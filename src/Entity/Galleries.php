<?php

namespace App\Entity;

use App\Repository\GalleriesRepository;
use DateTimeInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: GalleriesRepository::class)]
#[ORM\Table(name: "Galleries")]
class Galleries
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    private ?int $id = null;

    #[ORM\Column(type: "datetime")]
    #[Assert\Type(type: DateTimeInterface::class)]
    #[Gedmo\Timestampable(on: "create")]
    private ?DateTimeInterface $createdAt = null;

    #[ORM\Column(type: "datetime")]
    #[Assert\Type(type: DateTimeInterface::class)]
    #[Gedmo\Timestampable(on: "update")]
    private ?DateTimeInterface $updatedAt = null;

    #[ORM\Column(type: "string", length: 64)]
    #[Assert\Type(type: "string")]
    #[Assert\NotBlank]
    #[Assert\Length(min: 3, max: 64)]
    private ?string $title = null;

    /**
     * @var Collection<int, Photos>
     */
    #[ORM\OneToMany(mappedBy: "gallery", targetEntity: Photos::class, fetch: "EXTRA_LAZY", cascade: ["remove"])]
    private Collection $photos;

    #[ORM\Column(type: "string", length: 64)]
    #[Assert\Type(type: "string")]
    #[Assert\Length(min: 3, max: 64)]
    #[Gedmo\Slug(fields: ["title"])]
    private ?string $code = null;

    public function __construct()
    {
        $this->photos = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCreatedAt(): ?DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(DateTimeInterface $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    public function getUpdatedAt(): ?DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(DateTimeInterface $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): void
    {
        $this->title = $title;
    }

    public function getPhotos(): Collection
    {
        return $this->photos;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(string $code): self
    {
        $this->code = $code;

        return $this;
    }
}
