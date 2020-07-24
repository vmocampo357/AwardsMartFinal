<?php

namespace AwardsMartBackend\ProductsBundle\Repository;

/**
 * SizeLabelRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class SizeLabelRepository extends \Doctrine\ORM\EntityRepository
{
    /**
     * @return array
     *
     * Used for the auto-complete stuff.
     */
    public function getAutocompleteReadyList()
    {
        $qb = $this->getEntityManager()->createQueryBuilder();
        $qb->select('l')->from('ProductsBundle:SizeLabel','l');
        $return = [];
        foreach( $qb->getQuery()->getArrayResult() as $result ){
            $returnAdd = new \stdClass();
            $returnAdd->data = $result['name'];
            $returnAdd->value = $result['name'];
            $return[] = $returnAdd;
        }
        return $return;
    }
}