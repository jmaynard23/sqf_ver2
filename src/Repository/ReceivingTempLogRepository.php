<?php

namespace App\Repository;

use App\Entity\ReceivingTempLog;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ReceivingTempLog>
 *
 * @method ReceivingTempLog|null find($id, $lockMode = null, $lockVersion = null)
 * @method ReceivingTempLog|null findOneBy(array $criteria, array $orderBy = null)
 * @method ReceivingTempLog[]    findAll()
 * @method ReceivingTempLog[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReceivingTempLogRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ReceivingTempLog::class);
    }

    public function save(ReceivingTempLog $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ReceivingTempLog $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ReceivingTempLog[] Returns an array of ReceivingTempLog objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('r.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?ReceivingTempLog
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
