<?php

namespace App\Tests\Service;

use App\Entity\Galleries;
use App\Repository\GalleriesRepository;
use App\Service\GalleriesService;
use Doctrine\ORM\QueryBuilder;
use Knp\Component\Pager\PaginatorInterface;
use Knp\Component\Pager\Pagination\PaginationInterface;
use PHPUnit\Framework\TestCase;
use Doctrine\ORM\NonUniqueResultException;

class GalleriesServiceTest extends TestCase
{
    private GalleriesRepository $galleriesRepository;
    private PaginatorInterface $paginator;
    private GalleriesService $galleriesService;

    protected function setUp(): void
    {
        $this->galleriesRepository = $this->createMock(GalleriesRepository::class);
        $this->paginator = $this->createMock(PaginatorInterface::class);

        $this->galleriesService = new GalleriesService(
            $this->galleriesRepository,
            $this->paginator
        );
    }

    public function testCreatePaginatedList(): void
    {
        $page = 1;

        // Mock QueryBuilder (repository queryAll must return QueryBuilder)
        $mockQueryBuilder = $this->getMockBuilder(QueryBuilder::class)
            ->disableOriginalConstructor()
            ->onlyMethods(['getQuery'])
            ->getMock();

        $this->galleriesRepository
            ->method('queryAll')
            ->willReturn($mockQueryBuilder);

        // Mock pagination
        $mockPagination = $this->createMock(PaginationInterface::class);
        $mockPagination->method('getItems')->willReturn([new Galleries(), new Galleries()]);

        $this->paginator
            ->method('paginate')
            ->with($mockQueryBuilder, $page, GalleriesRepository::PAGINATOR_ITEMS_PER_PAGE)
            ->willReturn($mockPagination);

        $pagination = $this->galleriesService->createPaginatedList($page);

        $this->assertSame($mockPagination, $pagination);
        $this->assertCount(2, $pagination->getItems());
    }

    public function testSave(): void
    {
        $gallery = new Galleries();

        $this->galleriesRepository
            ->expects($this->once())
            ->method('save')
            ->with($gallery);

        $this->galleriesService->save($gallery);
    }

    public function testDelete(): void
    {
        $gallery = new Galleries();

        $this->galleriesRepository
            ->expects($this->once())
            ->method('delete')
            ->with($gallery);

        $this->galleriesService->delete($gallery);
    }

    public function testGetOneWithPhotos(): void
    {
        $gallery = new Galleries();
        $id = 42;

        $this->galleriesRepository
            ->method('getOneWithPhotos')
            ->with($id)
            ->willReturn($gallery);

        $result = $this->galleriesService->getOneWithPhotos($id);

        $this->assertSame($gallery, $result);
    }

    public function testGetOneWithPhotosReturnsNull(): void
    {
        $id = 99;

        $this->galleriesRepository
            ->method('getOneWithPhotos')
            ->with($id)
            ->willReturn(null);

        $result = $this->galleriesService->getOneWithPhotos($id);

        $this->assertNull($result);
    }
}
