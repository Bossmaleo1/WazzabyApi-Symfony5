<?php

namespace App\Repository;

use App\Entity\CategoryProblematic;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CategoryProblematic|null find($id, $lockMode = null, $lockVersion = null)
 * @method CategoryProblematic|null findOneBy(array $criteria, array $orderBy = null)
 * @method CategoryProblematic[]    findAll()
 * @method CategoryProblematic[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CategoryProblematicRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CategoryProblematic::class);
    }

    // /**
    //  * @return CategoryProblematic[] Returns an array of CategoryProblematic objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CategoryProblematic
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
