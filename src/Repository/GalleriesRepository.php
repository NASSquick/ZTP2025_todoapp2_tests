<?php

/**
 * Galleries repository.
 */

namespace App\Repository;

use App\Entity\Galleries;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\NonUniqueResultException;
use Doctrine\ORM\QueryBuilder;
use Doctrine\Persistence\ManagerRegistry;

/**
 * Class GalleriesRepository.
 *
 * @method Galleries|null find($id, $lockMode = null, $lockVersion = null)
 * @method Galleries|null findOneBy(array $criteria, array $orderBy = null)
 * @method Galleries[]    findAll()
 * @method Galleries[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GalleriesRepository extends ServiceEntityRepository
{
    /**
     * Items per page.
     *
     * @constant int
     */
    public const PAGINATOR_ITEMS_PER_PAGE = 10;

    /**
     * GalleriesRepository constructor.
     *
     * @param ManagerRegistry $registry the manager registry
     */
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Galleries::class);
    }

    /**
     * Save a gallery entity.
     *
     * @param Galleries $galleries the gallery entity
     */
    public function save(Galleries $galleries): void
    {
        $this->_em->persist($galleries);
        $this->_em->flush();
    }

    /**
     * Delete a gallery entity.
     *
     * @param Galleries $galleries the gallery entity
     */
    public function delete(Galleries $galleries): void
    {
        $this->_em->remove($galleries);
        $this->_em->flush();
    }

    /**
     * Query all galleries.
     *
     * @return QueryBuilder query builder
     */
    public function queryAll(): QueryBuilder
    {
        return $this->getOrCreateQueryBuilder()
            ->orderBy('Galleries.updatedAt', 'DESC');
    }

    /**
     * Get one gallery with its photos.
     *
     * @param int|null $id Gallery ID
     *
     * @return Galleries|null The gallery entity or null if not found
     *
     * @throws NonUniqueResultException
     */
    public function getOneWithPhotos(?int $id = null): ?Galleries
    {
        $qb = $this->createQueryBuilder('Galleries')
            ->select('Galleries', 'Photos')
            ->leftJoin('Galleries.photos', 'Photos')
            ->where('Galleries.id = :id')
            ->setParameter('id', $id);

        return $qb->getQuery()->getOneOrNullResult();
    }

    /**
     * Get or create a query builder.
     *
     * @return QueryBuilder query builder
     */
    public function getOrCreateQueryBuilder(): QueryBuilder
    {
        return $this->createQueryBuilder('Galleries');
    }
}
