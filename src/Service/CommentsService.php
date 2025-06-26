<?php

/**
 * CommentsService.
 */

namespace App\Service;

use App\Service\TaskServiceInterface;
use App\Entity\Comments;
use App\Repository\CommentsRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Knp\Component\Pager\Pagination\PaginationInterface;
use Knp\Component\Pager\PaginatorInterface;

/**
 * Class CommentsService.
 *
 * @param $commentsRepository
 * @param $paginator
 */
class CommentsService implements TaskServiceInterface
{
    public const PAGINATOR_ITEMS_PER_PAGE = 10;

    private CommentsRepository $commentsRepository;

    private PaginatorInterface $paginator;

    /**
     * CommentsService constructor.
     *
     * @param CommentsRepository $commentsRepository
     * @param PaginatorInterface $paginator
     */
    public function __construct(CommentsRepository $commentsRepository, PaginatorInterface $paginator)
    {
        $this->commentsRepository = $commentsRepository;
        $this->paginator = $paginator;
    }

    /**
     * @param int $page
     *
     * @return PaginationInterface
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
     * @param Comments $comment
     *
     * @throws OptimisticLockException
     * @throws ORMException
     */
    public function save(Comments $comment): void
    {
        $this->commentsRepository->save($comment);
    }

    /**
     * @param Comments $comment
     *
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function delete(Comments $comment): void
    {
        $this->commentsRepository->delete($comment);
    }
}
