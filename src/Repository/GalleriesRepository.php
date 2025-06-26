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
     * Use constants to define configuration options that rarely change instead
     * of specifying them in app/config/config.yml.
     * See https://symfony.com/doc/current/best_practices.html#configuration
     *
     * @constant int
     */
    public const PAGINATOR_ITEMS_PER_PAGE = 10;

    /**
     * GalleriesRepository constructor.
     *
     * @param ManagerRegistry $registry
     */
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Galleries::class);
    }

    /**
     * Save record.
     *
     * @param Galleries $galleries
     */
    public function save(Galleries $galleries): void
    {
        $this->_em->persist($galleries);
        $this->_em->flush();
    }

    /**
     * Delete record.
     *
     * @param Galleries $galleries
     */
    public function delete(Galleries $galleries): void
    {
        $this->_em->remove($galleries);
        $this->_em->flush();
    }

    /**
     * Query all records.
     *
     * @return QueryBuilder
     */
    public function queryAll(): QueryBuilder
    {
        return $this->getOrCreateQueryBuilder()
            ->orderBy('Galleries.updatedAt', 'DESC');
    }

    /**
     * Get or create new query builder.
     *
     * @param int|null $id
     *
     * @return float|int|mixed|string|null
     *
     * @throws NonUniqueResultException
     */
    public function getOneWithPhotos(int $id = null)
    {
        $qb = $this->createQueryBuilder('Galleries')
            ->select('Galleries', 'Photos')
            ->leftJoin('Galleries.photos', 'Photos')
            ->where('Galleries.id = :id')
            ->setParameter('id', $id)
        ;

        return $qb->getQuery()->getOneOrNullResult();
    }

    /**
     * Get or create new query builder.
     *
     * @return QueryBuilder Query builder
     */
    public function getOrCreateQueryBuilder(): QueryBuilder
    {
        return null ?? $this->createQueryBuilder('Galleries');
    }
}
