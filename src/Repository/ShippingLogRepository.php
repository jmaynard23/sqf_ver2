<?php

namespace App\Repository;

use App\Entity\ShippingLog;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ShippingLog>
 *
 * @method ShippingLog|null find($id, $lockMode = null, $lockVersion = null)
 * @method ShippingLog|null findOneBy(array $criteria, array $orderBy = null)
 * @method ShippingLog[]    findAll()
 * @method ShippingLog[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ShippingLogRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ShippingLog::class);
    }

    public function save(ShippingLog $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ShippingLog $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function findAllOrderById(): array
    {
        return $this->createQueryBuilder('slog')
            ->orderBy('slog._id', 'DESC')
            ->setMaxResults(19)
            ->getQuery()
            ->getResult()
            ;
    }
}
