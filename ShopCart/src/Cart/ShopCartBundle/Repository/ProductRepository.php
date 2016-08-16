<?php

namespace Cart\ShopCartBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * Description of ProductRepository
 *
 * @author Sara E-Salem
 */
class ProductRepository extends EntityRepository {

    //to get all product from db to index Action
    public function getAllProducts() {
        $prod = $this->createQueryBuilder('p');

        return $prod
                        ->select('p')
                        ->orderBy('p.id', 'DESC')
                        ->setMaxResults(25)
                        ->getQuery()
                        ->getResult()
        ;
    }
      public function getProductPrice($cartprodIdx) {
        $price = $this->createQueryBuilder('p');

        return $price
                        ->select('p.price')
                        ->where('p.id = :id')
                        ->setParameter('id', $cartprodIdx)
                        ->getQuery()
                        ->getResult()
        ;
    }

   

}
