<?php

namespace AppBundle\Repository;

/**
 * OffreRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class OffreRepository extends \Doctrine\ORM\EntityRepository
{
    
    public function listAll($_sSort = 'id') {
        $qb = $this->createQueryBuilder('o')
            ->andWhere('o.id > 0')
            ->orderBy('o.'.$_sSort, 'ASC');
       return $qb;
    }
}
