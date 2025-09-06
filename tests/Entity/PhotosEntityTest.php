<?php
namespace App\Tests\Entity;

use PHPUnit\Framework\TestCase;
use App\Entity\Photos;
use App\Entity\Galleries;
use App\Entity\Comments;
use Doctrine\Common\Collections\ArrayCollection;

class PhotosEntityTest extends TestCase
{
    public function testDefaultConstructor(): void
    {
        $photo = new Photos();

        // CreatedAt should be initialized
        $this->assertInstanceOf(\DateTimeInterface::class, $photo->getCreatedAt());

        // ID, updatedAt, title, text, filename, gallery should be null
        $this->assertNull($photo->getId());
        $this->assertNull($photo->getUpdatedAt());
        $this->assertNull($photo->getTitle());
        $this->assertNull($photo->getText());
        $this->assertNull($photo->getFilename());
        $this->assertNull($photo->getGallery());

        // Comments collection should be initialized
        $this->assertInstanceOf(ArrayCollection::class, $photo->getComments());
        $this->assertCount(0, $photo->getComments());
    }

    public function testSettersAndGetters(): void
    {
        $photo = new Photos();
        $gallery = $this->createMock(Galleries::class);

        $now = new \DateTimeImmutable();

        $photo->setTitle('My Photo');
        $photo->setText('Photo description');
        $photo->setFilename('photo.jpg');
        $photo->setGallery($gallery);
        $photo->setCreatedAt($now);
        $photo->setUpdatedAt($now);

        $this->assertSame('My Photo', $photo->getTitle());
        $this->assertSame('Photo description', $photo->getText());
        $this->assertSame('photo.jpg', $photo->getFilename());
        $this->assertSame($gallery, $photo->getGallery());
        $this->assertSame($now, $photo->getCreatedAt());
        $this->assertSame($now, $photo->getUpdatedAt());
    }

    public function testAddAndRemoveComments(): void
    {
        $photo = new Photos();
        $comment1 = $this->createMock(Comments::class);
        $comment2 = $this->createMock(Comments::class);

        $photo->addComment($comment1);
        $photo->addComment($comment2);

        $this->assertCount(2, $photo->getComments());

        $photo->removeComment($comment1);
        $this->assertCount(1, $photo->getComments());
        $this->assertSame($comment2, $photo->getComments()->first());
    }
}
