<?php

namespace App\Tests\Repository;

use App\Entity\Galleries;
use App\Repository\GalleriesRepository;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class GalleriesRepositoryTest extends KernelTestCase
{
    private ?GalleriesRepository $repository;

    protected function setUp(): void
    {
        self::bootKernel();
        $this->repository = self::$container->get(GalleriesRepository::class);
    }

    public function testSaveAndFind(): void
    {
        $gallery = new Galleries();
        $gallery->setTitle('Test Gallery');

        $this->repository->save($gallery);

        $savedGallery = $this->repository->find($gallery->getId());

        $this->assertNotNull($savedGallery);
        $this->assertSame('Test Gallery', $savedGallery->getTitle());

        // Clean up
        $this->repository->delete($savedGallery);
    }

    public function testDelete(): void
    {
        $gallery = new Galleries();
        $gallery->setTitle('Delete Gallery');

        $this->repository->save($gallery);
        $id = $gallery->getId();

        $this->repository->delete($gallery);

        $deletedGallery = $this->repository->find($id);
        $this->assertNull($deletedGallery);
    }

    public function testQueryAll(): void
    {
        $queryBuilder = $this->repository->queryAll();
        $this->assertNotNull($queryBuilder);
        $this->assertStringContainsString('Galleries.updatedAt', $queryBuilder->getDQL());
    }

    public function testGetOneWithPhotos(): void
    {
        $gallery = new Galleries();
        $gallery->setTitle('Gallery With Photos');
        $this->repository->save($gallery);

        $result = $this->repository->getOneWithPhotos($gallery->getId());
        $this->assertNotNull($result);
        $this->assertSame('Gallery With Photos', $result->getTitle());

        // Clean up
        $this->repository->delete($gallery);
    }
}
