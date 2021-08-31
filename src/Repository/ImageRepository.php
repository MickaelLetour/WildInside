<?php

namespace App\Repository;

use App\Entity\Image;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Image|null find($id, $lockMode = null, $lockVersion = null)
 * @method Image|null findOneBy(array $criteria, array $orderBy = null)
 * @method Image[]    findAll()
 * @method Image[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ImageRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Image::class);
    }

    /**
     * @return Image[] Returns an array of Image objects
     */
    public function findMoodboard($id, $value, $nb) :array{
        return $this->createQueryBuilder('p')
            ->Where('p.article = :id')
            ->setParameter('id', $id)
            ->AndWhere('p.position = :val')
            ->setParameter('val', $value)
            ->setMaxResults($nb)
            ->orderBy('p.id', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * @return Image[] Returns an array of Image objects
     */
    public function findAllImageByArticle($id) :array{
        return $this->createQueryBuilder('p')
            ->Where('p.article = :id')
            ->setParameter('id', $id)
            ->getQuery()
            ->getResult();
    }

    public function findThumbnailByArticle($id) : array{
        return $this->createQueryBuilder('p')
            ->Where('p.article = :id')
            ->setParameter('id', $id)
            ->AndWhere('p.thumbnail = :thumbnail')
            ->setParameter('thumbnail', 1)
            ->getQuery()
            ->getResult();
    }

    public function findByDESCArticle($id)
    {
        return $this->createQueryBuilder('p')
            ->Where('p.article = :val')
            ->setParameter('val', $id)
            ->orderBy('p.id', 'DESC')
            ->getQuery()
            ->getResult()
            //->getOneOrNullResult()
        ;
    }

}
