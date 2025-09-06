<?php

namespace App\Tests\Service;

use App\Entity\Photos;
use App\Repository\PhotosRepository;
use App\Service\PhotosService;
use App\Service\FileUploader;
use Doctrine\ORM\QueryBuilder;
use Doctrine\ORM\NonUniqueResultException;
use Knp\Component\Pager\PaginatorInterface;
use Knp\Component\Pager\Pagination\PaginationInterface;
use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class PhotosServiceTest extends TestCase
{
    private PhotosRepository $photosRepository;
    private PaginatorInterface $paginator;
    private FileUploader $fileUploader;
    private PhotosService $photosService;

    protected function setUp(): void
    {
        $this->photosRepository = $this->createMock(PhotosRepository::class);
        $this->paginator = $this->createMock(PaginatorInterface::class);
        $this->fileUploader = $this->createMock(FileUploader::class);

        $this->photosService = new PhotosService(
            $this->photosRepository,
            $this->paginator,
            $this->fileUploader
        );
    }

    public function testCreatePaginatedList(): void
    {
        $page = 1;

        $mockQueryBuilder = $this->getMockBuilder(QueryBuilder::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->photosRepository
            ->method('queryAll')
            ->willReturn($mockQueryBuilder);

        $mockPagination = $this->createMock(PaginationInterface::class);
        $mockPagination->method('getItems')->willReturn([new Photos(), new Photos()]);

        $this->paginator
            ->method('paginate')
            ->with($mockQueryBuilder, $page, PhotosService::PAGINATOR_ITEMS_PER_PAGE)
            ->willReturn($mockPagination);

        $pagination = $this->photosService->createPaginatedList($page);

        $this->assertSame($mockPagination, $pagination);
        $this->assertCount(2, $pagination->getItems());
    }

    public function testGetOne(): void
    {
        $photo = new Photos();
        $id = 10;

        $this->photosRepository
            ->method('find')
            ->with($id)
            ->willReturn($photo);

        $this->assertSame($photo, $this->photosService->getOne($id));
    }

    public function testGetOneWithComments(): void
    {
        $photo = new Photos();
        $id = 5;

        $this->photosRepository
            ->method('getOneWithComments')
            ->with($id)
            ->willReturn($photo);

        $this->assertSame($photo, $this->photosService->getOneWithComments($id));
    }

    public function testGetOneWithCommentsReturnsNull(): void
    {
        $id = 99;

        $this->photosRepository
            ->method('getOneWithComments')
            ->with($id)
            ->willReturn(null);

        $this->assertNull($this->photosService->getOneWithComments($id));
    }

    public function testSaveWithoutFile(): void
    {
        $photo = new Photos();

        $this->photosRepository
            ->expects($this->once())
            ->method('save')
            ->with($photo);

        $this->photosService->save($photo);

        $this->assertNotNull($photo->getUpdatedAt());
    }

    public function testSaveWithFile(): void
    {
        $photo = new Photos();
        $file = $this->createMock(UploadedFile::class);

        $this->fileUploader
            ->method('upload')
            ->with($file)
            ->willReturn('uploaded.jpg');

        $this->photosRepository
            ->expects($this->once())
            ->method('save')
            ->with($photo);

        $this->photosService->save($photo, $file);

        $this->assertEquals('uploaded.jpg', $photo->getFilename());
        $this->assertNotNull($photo->getUpdatedAt());
    }

    public function testDelete(): void
    {
        $photo = new Photos();

        $this->photosRepository
            ->expects($this->once())
            ->method('delete')
            ->with($photo);

        $this->photosService->delete($photo);
    }
}
