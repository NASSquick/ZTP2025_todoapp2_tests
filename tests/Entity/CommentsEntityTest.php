<?php
namespace App\Tests\Entity;

use PHPUnit\Framework\TestCase;
use App\Entity\Comments;
use App\Entity\Photos;

class CommentsEntityTest extends TestCase
{
    public function testDefaultConstructor(): void
    {
        $comment = new Comments();

        // Defaults set in constructor
        $this->assertSame('', $comment->getText());
        $this->assertSame('', $comment->getNick());
        $this->assertSame('', $comment->getEmail());

        // ID and photos should be null initially
        $this->assertNull($comment->getId());
        $this->assertNull($comment->getPhotos());
    }

    public function testSettersAndGetters(): void
    {
        $comment = new Comments();
        $photo = $this->createMock(Photos::class);

        $comment->setText('Hello world');
        $comment->setNick('Tester');
        $comment->setEmail('test@example.com');
        $comment->setPhotos($photo);

        $this->assertSame('Hello world', $comment->getText());
        $this->assertSame('Tester', $comment->getNick());
        $this->assertSame('test@example.com', $comment->getEmail());
        $this->assertSame($photo, $comment->getPhotos());
    }

    public function testCanUnsetPhoto(): void
    {
        $comment = new Comments();
        $comment->setPhotos(null);
        $this->assertNull($comment->getPhotos());
    }
}
