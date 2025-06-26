<?php

/**
 * Galleries service.
 */

namespace App\Service;

use App\Service\TaskServiceInterface;
use App\Entity\Galleries;
use App\Repository\GalleriesRepository;
use Doctrine\ORM\NonUniqueResultException;
use Knp\Component\Pager\Pagination\PaginationInterface;
use Knp\Component\Pager\PaginatorInterface;

/**
 * Class GalleriesService.
 */
class GalleriesService implements TaskServiceInterface
{
    /**
     * Galleries repository.
     */
    private GalleriesRepository $galleriesRepository;

    /**
     * Paginator.
     */
    private PaginatorInterface $paginator;

    /**
     * GalleriesService constructor.
     *
     * @param GalleriesRepository $galleriesRepository Galleries repository
     * @param PaginatorInterface  $paginator           Paginator
     */
    public function __construct(GalleriesRepository $galleriesRepository, PaginatorInterface $paginator)
    {
        $this->galleriesRepository = $galleriesRepository;
        $this->paginator = $paginator;
    }

    /**
     * Create paginated list.
     *
     * @param int $page Page number
     *
     * @return PaginationInterface Paginated list
     */
    public function createPaginatedList(int $page): PaginationInterface
    {
        return $this->paginator->paginate(
            $this->galleriesRepository->queryAll(),
            $page,
            GalleriesRepository::PAGINATOR_ITEMS_PER_PAGE
        );
    }

    /**
     * Save Galleries.
     *
     * @param Galleries $galleries Galleries entity
     */
    public function save(Galleries $galleries): void
    {
        $this->galleriesRepository->save($galleries);
    }

    /**
     * Delete Galleries.
     *
     * @param Galleries $galleries Galleries entity
     */
    public function delete(Galleries $galleries): void
    {
        $this->galleriesRepository->delete($galleries);
    }

    /**
     * @param int $id
     *
     * @return Galleries|null
     *
     * @throws NonUniqueResultException
     */
    public function getOneWithPhotos(int $id): ?Galleries
    {
        return $this->galleriesRepository->getOneWithPhotos($id);
    }
}
