<?php

/**
 * Comments service.
 */

namespace App\Service;

use App\Entity\Comments;
use App\Repository\CommentsRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Knp\Component\Pager\Pagination\PaginationInterface;
use Knp\Component\Pager\PaginatorInterface;

/**
 * Class CommentsService.
 *
 * Provides methods to manage Comments entities.
 */
class CommentsService implements TaskServiceInterface
{
    public const PAGINATOR_ITEMS_PER_PAGE = 10;

    private CommentsRepository $commentsRepository;
    private PaginatorInterface $paginator;

    /**
     * CommentsService constructor.
     *
     * @param CommentsRepository $commentsRepository Repository for comments
     * @param PaginatorInterface $paginator          Paginator service
     */
    public function __construct(CommentsRepository $commentsRepository, PaginatorInterface $paginator)
    {
        $this->commentsRepository = $commentsRepository;
        $this->paginator = $paginator;
    }

    /**
     * Create a paginated list of comments.
     *
     * @param int $page Page number
     *
     * @return PaginationInterface Paginated list of comments
     */
    public function createPaginatedList(int $page): PaginationInterface
    {
        return $this->paginator->paginate(
            $this->commentsRepository->queryAll(),
            $page,
            self::PAGINATOR_ITEMS_PER_PAGE
        );
    }

    /**
     * Save a comment entity.
     *
     * @param Comments $comment The comment entity to save
     *
     * @throws OptimisticLockException
     * @throws ORMException
     */
    public function save(Comments $comment): void
    {
        $this->commentsRepository->save($comment);
    }

    /**
     * Delete a comment entity.
     *
     * @param Comments $comment The comment entity to delete
     *
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function delete(Comments $comment): void
    {
        $this->commentsRepository->delete($comment);
    }
}
