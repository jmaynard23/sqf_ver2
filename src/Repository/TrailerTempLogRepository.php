<?php

namespace App\Repository;

use App\Entity\TrailerTempLog;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TrailerTempLog>
 *
 * @method TrailerTempLog|null find($id, $lockMode = null, $lockVersion = null)
 * @method TrailerTempLog|null findOneBy(array $criteria, array $orderBy = null)
 * @method TrailerTempLog[]    findAll()
 * @method TrailerTempLog[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TrailerTempLogRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TrailerTempLog::class);
    }

    public function save(TrailerTempLog $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(TrailerTempLog $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return TrailerTempLog[] Returns an array of TrailerTempLog objects
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

//    public function findOneBySomeField($value): ?TrailerTempLog
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
