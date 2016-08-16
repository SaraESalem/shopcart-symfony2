<?php

namespace Cart\ShopCartBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Cart\ShopCartBundle\Entity\Product;

//use Blogger\BlogBundle\Entity\Blog;

/**
 * Description of ProductFixtures
 *
 * @author Sara E-Salem
 */
class ProductFixtures extends AbstractFixture implements OrderedFixtureInterface {

    public function getOrder() {

        return 1;
    }

    public function load(\Doctrine\Common\Persistence\ObjectManager $manager) {

        //add product1
        $product1 = new Product();
        $product1->setName("prod1");
        $product1->setAmount(5);
        $product1->setAvailable(1);
        $product1->setDescription("Made in egypt by sara salem store");
        $product1->setImage('prod1.jpg');
        $product1->setPrice(100);
        $this->addReference('prod1', $product1); //for fk
        $manager->persist($product1);

        //add product2
        $product2 = new Product();
        $product2->setName("prod2");
        $product2->setAmount(2);
        $product2->setAvailable(1);
        $product2->setDescription("Made in US by sara salem store");
        $product2->setImage('prod2.jpg');
        $product2->setPrice(200);
        $this->addReference('prod2', $product2);
        $manager->persist($product2);

        //add product3
        $product3 = new Product();
        $product3->setName("prod3");
        $product3->setAmount(1);
        $product3->setAvailable(1);
        $product3->setDescription("Made in egypt by sara salem store");
        $product3->setImage('prod3.jpg');
        $product3->setPrice(100);
        $this->addReference('prod3', $product3);
        $manager->persist($product3);

        //add product4
        $product4 = new Product();
        $product4->setName("prod4");
        $product4->setAmount(0);
        $product4->setAvailable(0);
        $product4->setDescription("Made in egypt by sara salem store");
        $product4->setImage('prod4.jpg');
        $product4->setPrice(30);
        $this->addReference('prod4', $product4);
        $manager->persist($product4);

        //add product5
        $product5 = new Product();
        $product5->setName("prod5");
        $product5->setAmount(0);
        $product5->setAvailable(0);
        $product5->setDescription("Made in egypt by sara salem store");
        $product5->setImage('prod5.jpg');
        $product5->setPrice(200);
        $this->addReference('prod5', $product5);
        $manager->persist($product5);

        //add product6
        $product6 = new Product();
        $product6->setName("prod6");
        $product6->setAmount(2);
        $product6->setAvailable(1);
        $product6->setDescription("Made in egypt by sara salem store");
        $product6->setImage('prod6.jpg');
        $product6->setPrice(300);
        $this->addReference('prod6', $product6);
        $manager->persist($product6);

        //flush in db
        $manager->flush();
    }

}
