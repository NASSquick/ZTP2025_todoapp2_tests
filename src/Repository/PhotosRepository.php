<?php

/**
 * Photos repository.
 */

namespace App\Repository;

use App\Entity\Photos;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\NonUniqueResultException;
use Doctrine\ORM\QueryBuilder;
use Doctrine\Persistence\ManagerRegistry;

/**
 * Class PhotosRepository.
 *
 * @method Photos|null find($id, $lockMode = null, $lockVersion = null)
 * @method Photos|null findOneBy(array $criteria, array $orderBy = null)
 * @method Photos[]    findAll()
 * @method Photos[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PhotosRepository extends ServiceEntityRepository
{
    /**
     * Items per page.
     *
     * @constant int
     */
    private const PAGINATOR_PER_PAGE = 10;

    /**
     * PhotosRepository constructor.
     *
     * @param ManagerRegistry $registry The manager registry
     *
     * @return void
     */
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Photos::class);
    }

    /**
     * Query all records.
     *
     * @return QueryBuilder Query builder
     */
    public function queryAll(): QueryBuilder
    {
        return $this->getOrCreateQueryBuilder()
            ->orderBy('Photos.updatedAt', 'DESC');
    }

    /**
     * Get one photo with its comments.
     *
     * @param int $id Photo ID
     *
     * @return Photos|null The photo entity or null if not found
     *
     * @throws NonUniqueResultException
     */
    public function getOneWithComments(int $id): ?Photos
    {
        $qb = $this->createQueryBuilder('Photos')
            ->select('Photos', 'comments')
            ->leftJoin('Photos.comments', 'comments')
            ->where('Photos.id = :id')
            ->setParameter('id', $id);

        return $qb->getQuery()->getOneOrNullResult();
    }

    /**
     * Save a photo entity.
     *
     * @param Photos $photos The photo entity to save
     */
    public function save(Photos $photos): void
    {
        $this->_em->persist($photos);
        $this->_em->flush();
    }

    /**
     * Delete a photo entity.
     *
     * @param Photos $photos The photo entity to delete
     */
    public function delete(Photos $photos): void
    {
        $this->_em->remove($photos);
        $this->_em->flush();
    }

    /**
     * Get or create new query builder.
     *
     * @return QueryBuilder Query builder
     */
    private function getOrCreateQueryBuilder(): QueryBuilder
    {
        return $this->createQueryBuilder('Photos');
    }
}
