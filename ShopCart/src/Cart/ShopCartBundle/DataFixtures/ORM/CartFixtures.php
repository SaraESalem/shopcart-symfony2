<?php

namespace Cart\ShopCartBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Cart\ShopCartBundle\Entity\Cart;

/**
 * Description of CartFixtures
 *
 * @author Sara E-Salem
 */
class CartFixtures extends AbstractFixture implements OrderedFixtureInterface {

    public function getOrder() {
        return 2;
    }

    public function load(\Doctrine\Common\Persistence\ObjectManager $manager) {

        //order cart  type = 1
        $cart1 = new Cart();
        $cart1->setCarttype(1);
        $cart1->setProdid($this->getReference('prod1'));
        $cart1->setProdquantity(2);
        $cart1->setTotalprice(200);
        $manager->persist($cart1);

        $cart1 = new Cart();
        $cart1->setCarttype(1);
        $cart1->setProdid($this->getReference('prod3'));
        $cart1->setProdquantity(1);
        $cart1->setTotalprice(100);
        $manager->persist($cart1);

        //wishlist cart type = 10
        //wishlist for product that not available
        $cart2 = new Cart();
        $cart2->setCarttype(10);
        $cart2->setProdid($this->getReference('prod4'));
        $cart2->setProdquantity(0);
        $cart2->setTotalprice(0);
        $manager->persist($cart2);

        $cart2 = new Cart();
        $cart2->setCarttype(10);
        $cart2->setProdid($this->getReference('prod5'));
        $cart2->setProdquantity(0);
        $cart2->setTotalprice(0);
        $manager->persist($cart2);

        //flush in db
        $manager->flush();
    }

}
