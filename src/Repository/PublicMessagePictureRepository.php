<?php

namespace App\Repository;

use App\Entity\PublicMessagePicture;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method PublicMessagePicture|null find($id, $lockMode = null, $lockVersion = null)
 * @method PublicMessagePicture|null findOneBy(array $criteria, array $orderBy = null)
 * @method PublicMessagePicture[]    findAll()
 * @method PublicMessagePicture[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PublicMessagePictureRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PublicMessagePicture::class);
    }

    // /**
    //  * @return PublicMessagePicture[] Returns an array of PublicMessagePicture objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?PublicMessagePicture
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
