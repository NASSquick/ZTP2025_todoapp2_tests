<?php

namespace App\Tests\Repository;

use App\Entity\Comments;
use App\Repository\CommentsRepository;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class CommentsRepositoryTest extends KernelTestCase
{
    private ?CommentsRepository $repository;

    protected function setUp(): void
    {
        self::bootKernel();
        $this->repository = self::$container->get(CommentsRepository::class);
    }

    public function testSaveAndFind(): void
    {
        $comment = new Comments();
        $comment->setNick('TestNick')
            ->setEmail('test@example.com')
            ->setText('Test comment text');

        $this->repository->save($comment);

        $savedComment = $this->repository->find($comment->getId());

        $this->assertNotNull($savedComment);
        $this->assertSame('TestNick', $savedComment->getNick());
        $this->assertSame('test@example.com', $savedComment->getEmail());
        $this->assertSame('Test comment text', $savedComment->getText());

        // Clean up
        $this->repository->delete($savedComment);
    }

    public function testDelete(): void
    {
        $comment = new Comments();
        $comment->setNick('DeleteNick')
            ->setEmail('delete@example.com')
            ->setText('Delete this comment');

        $this->repository->save($comment);
        $id = $comment->getId();

        $this->repository->delete($comment);

        $deletedComment = $this->repository->find($id);
        $this->assertNull($deletedComment);
    }

    public function testQueryAll(): void
    {
        $queryBuilder = $this->repository->queryAll();
        $this->assertNotNull($queryBuilder);
        $this->assertStringContainsString('Comments.updatedAt', $queryBuilder->getDQL());
    }
}
