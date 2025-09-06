<?php

namespace App\Tests\Repository;

use App\Entity\Photos;
use App\Repository\PhotosRepository;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class PhotosRepositoryTest extends KernelTestCase
{
    private ?PhotosRepository $repository;

    protected function setUp(): void
    {
        self::bootKernel();
        $this->repository = self::$container->get(PhotosRepository::class);
    }

    public function testSaveAndFind(): void
    {
        $photo = new Photos();
        $photo->setTitle('Test Photo');

        $this->repository->save($photo);

        $savedPhoto = $this->repository->find($photo->getId());

        $this->assertNotNull($savedPhoto);
        $this->assertSame('Test Photo', $savedPhoto->getTitle());

        // Clean up
        $this->repository->delete($savedPhoto);
    }

    public function testDelete(): void
    {
        $photo = new Photos();
        $photo->setTitle('Delete Photo');

        $this->repository->save($photo);
        $id = $photo->getId();

        $this->repository->delete($photo);

        $deletedPhoto = $this->repository->find($id);
        $this->assertNull($deletedPhoto);
    }

    public function testQueryAll(): void
    {
        $queryBuilder = $this->repository->queryAll();
        $this->assertNotNull($queryBuilder);
        $this->assertStringContainsString('Photos.updatedAt', $queryBuilder->getDQL());
    }

    public function testGetOneWithComments(): void
    {
        $photo = new Photos();
        $photo->setTitle('Photo With Comments');

        $this->repository->save($photo);

        $result = $this->repository->getOneWithComments($photo->getId());
        $this->assertNotNull($result);
        $this->assertSame('Photo With Comments', $result->getTitle());

        // Clean up
        $this->repository->delete($photo);
    }
}
