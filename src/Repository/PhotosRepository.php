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
 * @method             findOneById(int $id)
 */
class PhotosRepository extends ServiceEntityRepository
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

    /**
     * PhotosRepository constructor.
     *
     * @param ManagerRegistry $registry
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
     * @param int $id
     *
     * @return Photos|null
     *
     * @throws NonUniqueResultException
     */
    public function getOneWithComments(int $id): ?Photos
    {
        $qb = $this->createQueryBuilder('Photos')
            ->select('Photos', 'comments')
            ->leftJoin('Photos.comments', 'comments')
            ->where('Photos.id = :id')
            ->setParameter('id', $id)
        ;

        return $qb->getQuery()->getOneOrNullResult();
    }

    /**
     * Save record.
     *
     * @param Photos $photos
     */
    public function save(Photos $photos): void
    {
        $this->_em->persist($photos);
        $this->_em->flush();
    }

    /**
     * Delete record.
     *
     * @param Photos $photos
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
        return null ?? $this->createQueryBuilder('Photos');
    }
}
