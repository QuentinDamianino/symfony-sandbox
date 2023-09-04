<?php

namespace App\Repository;

use App\Entity\TransportProvider;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TransportProvider>
 *
 * @method TransportProvider|null find($id, $lockMode = null, $lockVersion = null)
 * @method TransportProvider|null findOneBy(array $criteria, array $orderBy = null)
 * @method TransportProvider[]    findAll()
 * @method TransportProvider[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TransportProviderRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TransportProvider::class);
    }

//    /**
//     * @return TransportProvider[] Returns an array of TransportProvider objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('t.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?TransportProvider
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
