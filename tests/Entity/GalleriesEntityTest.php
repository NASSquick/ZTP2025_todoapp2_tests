<?php
namespace App\Tests\Entity;

use PHPUnit\Framework\TestCase;
use App\Entity\Galleries;
use App\Entity\Photos;
use Doctrine\Common\Collections\ArrayCollection;

class GalleriesEntityTest extends TestCase
{
    public function testDefaultConstructor(): void
    {
        $gallery = new Galleries();

        // Photos collection should be initialized
        $this->assertInstanceOf(ArrayCollection::class, $gallery->getPhotos());

        // ID and code should be null initially
        $this->assertNull($gallery->getId());
        $this->assertNull($gallery->getCode());

        // Title and timestamps should be null initially
        $this->assertNull($gallery->getTitle());
        $this->assertNull($gallery->getCreatedAt());
        $this->assertNull($gallery->getUpdatedAt());
    }

    public function testSettersAndGetters(): void
    {
        $gallery = new Galleries();
        $photo = $this->createMock(Photos::class);

        $now = new \DateTimeImmutable();

        $gallery->setTitle('My Gallery');
        $gallery->setCode('my-gallery');
        $gallery->setCreatedAt($now);
        $gallery->setUpdatedAt($now);

        $gallery->getPhotos()->add($photo);

        $this->assertSame('My Gallery', $gallery->getTitle());
        $this->assertSame('my-gallery', $gallery->getCode());
        $this->assertSame($now, $gallery->getCreatedAt());
        $this->assertSame($now, $gallery->getUpdatedAt());

        $this->assertCount(1, $gallery->getPhotos());
        $this->assertSame($photo, $gallery->getPhotos()->first());
    }

    public function testCanAddAndRemovePhotos(): void
    {
        $gallery = new Galleries();
        $photo1 = $this->createMock(Photos::class);
        $photo2 = $this->createMock(Photos::class);

        $gallery->getPhotos()->add($photo1);
        $gallery->getPhotos()->add($photo2);

        $this->assertCount(2, $gallery->getPhotos());

        $gallery->getPhotos()->removeElement($photo1);
        $this->assertCount(1, $gallery->getPhotos());
        $this->assertSame($photo2, $gallery->getPhotos()->first());
    }
}
