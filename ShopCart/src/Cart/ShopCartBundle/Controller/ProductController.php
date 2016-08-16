<?php

namespace Cart\ShopCartBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use Cart\ShopCartBundle\Entity\Product;

class ProductController extends Controller {

    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $products = $em->getRepository('CartShopCartBundle:Product')->getAllProducts();

        return $this->render('CartShopCartBundle:Product:index.html.twig', array(
                    'products' => $products
        ));
    }
    
    public function showAction($productId) {

        $em = $this->getDoctrine()->getManager();

        $productID = $em->getRepository('CartShopCartBundle:Product')->find($productId);

        if (!$productID) {
            throw $this->createNotFoundException('Unable to find this product.');
        }
        //var_dump($productID);
        //die();
        
        return $this->render('CartShopCartBundle:Product:show.html.twig', array(
            'productID' => $productID 
        ));
    }

}
