<?php

namespace Cart\ShopCartBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Cart\ShopCartBundle\Entity\Cart;
use Cart\ShopCartBundle\Entity\Product;

/**
 * Description of CartRepository
 *
 * @author Sara E-Salem
 */
class CartRepository extends EntityRepository {

    //get products from cart
    public function getAllProductsFromCart($carttype) {
        if ($carttype == 1) {
            $prod = $this->createQueryBuilder('c');

            return $prod
                            ->select('c')
                            ->where('c.carttype = :type')
                            ->setParameter('type', $carttype)
                            ->getQuery()
                            ->getResult()
            ;
        } else if ($carttype == 10) {
            $prod = $this->createQueryBuilder('c');
            return $prod
                            ->select('c')
                            ->where('c.carttype = :type')
                            ->setParameter('type', $carttype)
                            ->getQuery()
                            ->getResult()
            ;
        }
    }

    public function deleteProductFromCart($prodId) {
        $pro = $this->createQueryBuilder('c');
//DELETE FROM `cart` WHERE `prodid` = 6
        return $pro
                        ->delete()
                        ->where('c.prodid = :id')
                        ->setParameter('id', $prodId)
                        ->getQuery()
                        ->getResult()
        ;
    }

    public function getProductID($cartprodIdx) {
        $id = $this->createQueryBuilder('c');

        return $id
                        ->select('c')
                        ->where('c.prodid = :id')
                        ->setParameter('id', $cartprodIdx)
                        ->getQuery()
                        ->getResult()
        ;
        getResult()
        ;
    }

    public function deleteAllProductsFromCart($carttype) {
        $pro = $this->createQueryBuilder('c');
//delete from cart
        return $pro
                        ->delete()
                        ->where('c.carttype = :type')
                        ->setParameter('type', $carttype)
                        ->getQuery()
                        ->getResult()
        ;
    }

    public function updateCart($cartID, $total_price, $newquantity) {
        $pro = $this->createQueryBuilder('c');
        return $pro
                        ->update()
                        ->set('c.prodquantity', '?1')
                        ->set('c.totalprice', '?2')
                        ->where('c.id = ?3')
                        ->setParameter(1, $newquantity)
                        ->setParameter(2, $total_price)
                        ->setParameter(3, $cartID)
                        ->getQuery()
                        ->getResult()
        ;
    }

}
