<?php

namespace App\Tests\Service;

use App\Entity\Comments;
use App\Repository\CommentsRepository;
use App\Service\CommentsService;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\QueryBuilder;
use Knp\Component\Pager\PaginatorInterface;
use Knp\Component\Pager\Pagination\PaginationInterface;
use PHPUnit\Framework\TestCase;

class CommentsServiceTest extends TestCase
{
    private CommentsRepository $commentsRepository;
    private PaginatorInterface $paginator;
    private CommentsService $commentsService;

    protected function setUp(): void
    {
        $this->commentsRepository = $this->createMock(CommentsRepository::class);
        $this->paginator = $this->createMock(PaginatorInterface::class);

        $this->commentsService = new CommentsService(
            $this->commentsRepository,
            $this->paginator
        );
    }

    public function testCreatePaginatedList(): void
    {
        $page = 1;

        // Mock QueryBuilder (required by queryAll return type)
        $mockQueryBuilder = $this->getMockBuilder(QueryBuilder::class)
            ->disableOriginalConstructor()
            ->onlyMethods(['getQuery'])
            ->getMock();

        // repository queryAll returns mocked QueryBuilder
        $this->commentsRepository
            ->method('queryAll')
            ->willReturn($mockQueryBuilder);

        // Mock PaginationInterface
        $mockPagination = $this->createMock(PaginationInterface::class);
        $mockPagination->method('getItems')->willReturn([new Comments(), new Comments()]);

        // paginator->paginate returns mocked pagination
        $this->paginator
            ->method('paginate')
            ->with($mockQueryBuilder, $page, CommentsService::PAGINATOR_ITEMS_PER_PAGE)
            ->willReturn($mockPagination);

        $pagination = $this->commentsService->createPaginatedList($page);

        $this->assertSame($mockPagination, $pagination);
        $this->assertCount(2, $pagination->getItems());
    }

    public function testSave(): void
    {
        $comment = new Comments();
        $comment->setNick('Unit Test');

        // Expect save() to be called exactly once with this comment
        $this->commentsRepository
            ->expects($this->once())
            ->method('save')
            ->with($comment);

        $this->commentsService->save($comment);
    }

    public function testDelete(): void
    {
        $comment = new Comments();
        $comment->setNick('Unit Test');

        // Expect delete() to be called exactly once with this comment
        $this->commentsRepository
            ->expects($this->once())
            ->method('delete')
            ->with($comment);

        $this->commentsService->delete($comment);
    }
}
