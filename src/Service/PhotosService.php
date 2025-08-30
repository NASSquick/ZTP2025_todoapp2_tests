<?php

/*
 This work, including the code samples, is licensed under a Creative Commons BY-SA 3.0 license.
 */

namespace App\Service;

use App\Entity\Photos;
use App\Repository\PhotosRepository;
use Doctrine\ORM\NonUniqueResultException;
use Knp\Component\Pager\Pagination\PaginationInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Class PhotosService.
 *
 * Provides methods to manage Photos entities.
 */
class PhotosService implements TaskServiceInterface
{
    public const PAGINATOR_ITEMS_PER_PAGE = 10;

    private PhotosRepository $photosRepository;
    private PaginatorInterface $paginator;
    private FileUploader $fileUploader;

    /**
     * PhotosService constructor.
     *
     * @param PhotosRepository   $photosRepository Photos repository
     * @param PaginatorInterface $paginator        Paginator service
     * @param FileUploader       $fileUploader     File uploader service
     */
    public function __construct(PhotosRepository $photosRepository, PaginatorInterface $paginator, FileUploader $fileUploader)
    {
        $this->photosRepository = $photosRepository;
        $this->paginator = $paginator;
        $this->fileUploader = $fileUploader;
    }

    /**
     * Create a paginated list of Photos.
     *
     * @param int $page Page number
     *
     * @return PaginationInterface Paginated list of photos
     */
    public function createPaginatedList(int $page): PaginationInterface
    {
        return $this->paginator->paginate(
            $this->photosRepository->queryAll(),
            $page,
            self::PAGINATOR_ITEMS_PER_PAGE
        );
    }

    /**
     * Get a single Photos entity by ID.
     *
     * @param int $id Photo ID
     *
     * @return Photos|null The Photos entity or null if not found
     */
    public function getOne(int $id): ?Photos
    {
        return $this->photosRepository->findOneById($id);
    }

    /**
     * Get a single Photos entity with its comments.
     *
     * @param int $id Photo ID
     *
     * @return Photos|null The Photos entity with comments, or null if not found
     *
     * @throws NonUniqueResultException
     */
    public function getOneWithComments(int $id): ?Photos
    {
        return $this->photosRepository->getOneWithComments($id);
    }

    /**
     * Save a Photos entity and optionally upload a file.
     *
     * @param Photos            $photos Photos entity
     * @param UploadedFile|null $file   Optional uploaded file
     */
    public function save(Photos $photos, ?UploadedFile $file = null): void
    {
        if ($file) {
            $filename = $this->fileUploader->upload($file);
            $photos->setFilename($filename);
        }

        $photos->setUpdatedAt(new \DateTime());
        $this->photosRepository->save($photos);
    }

    /**
     * Delete a Photos entity.
     *
     * @param Photos $photos Photos entity
     */
    public function delete(Photos $photos): void
    {
        $this->photosRepository->delete($photos);
    }
}
