<?php

namespace Cart\ShopCartBundle\Controller;

use Symfony\Component\HttpKernel\Exception;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Cart\ShopCartBundle\Entity\Cart;

class CartController extends Controller {

    public function addOrderAction($cartprodId, $carttype) {
        //echo $cartprodId; //id of product table
        //die();
        $em = $this->getDoctrine()->getManager();
        $prd = $em->getRepository('CartShopCartBundle:Product')->find($cartprodId); //return obj from Product class
        $prdx = $em->getRepository('CartShopCartBundle:Cart')->getProductID($prd->getId());
        //var_dump($prdx); 
        //echo $prd->getId();
        //die();
        if ($prdx) {
            $response = $this->forward('CartShopCartBundle:Cart:showCart', array(
                'carttype' => $carttype
            ));
            return $response;
        } else {
            try {
                $cart1 = new Cart();
                $cart1->setCarttype(1);
                $cart1->setProdid($prd);
                $cart1->setProdquantity(1);
                $cart1->setTotalprice($prd->getPrice());
                $em->persist($cart1);
                $em->flush();
                $test = 1;
            } catch (Exception $e) {
                $test = 0;
            }
            $response = $this->forward('CartShopCartBundle:Cart:showCart', array(
                'carttype' => $carttype
            ));
            return $response;
        }
    }

    public function addWishAction($wishprodId, $carttype) {

        $em = $this->getDoctrine()->getManager();
        $prd = $em->getRepository('CartShopCartBundle:Product')->find($wishprodId);
        $prdx = $em->getRepository('CartShopCartBundle:Cart')->getProductID($prd->getId());
        if ($prdx) {
            $response = $this->forward('CartShopCartBundle:Cart:showCart', array(
                'carttype' => $carttype
            ));
            return $response;
        } else {
            try {
                $cart1 = new Cart();
                $cart1->setCarttype(10);
                $cart1->setProdid($prd);
                $cart1->setProdquantity(0);
                $cart1->setTotalprice(0);
                $em->persist($cart1);
                $em->flush();
                $test = 1;
            } catch (Exception $e) {
                $test = 0;
            }
            $response = $this->forward('CartShopCartBundle:Cart:showCart', array(
                'carttype' => $carttype
            ));

            return $response;
        }
    }

    public function showCartAction($carttype) {
        
        $em = $this->getDoctrine()->getManager();

        $products = $em->getRepository('CartShopCartBundle:Cart')->getAllProductsFromCart($carttype);
        //var_dump($cart);
        //die();
        return $this->render('CartShopCartBundle:Cart:showCart.html.twig', array(
                    'products' => $products,
                    'carttype' => $carttype
        ));
    }

    public function deleteAction($prodId, $carttype) {
        $em = $this->getDoctrine()->getManager();

        $del = $em->getRepository('CartShopCartBundle:Cart')->deleteProductFromCart($prodId);

        $response = $this->forward('CartShopCartBundle:Cart:showCart', array(
            'carttype' => $carttype
        ));

        return $response;
    }

    public function emptyAction($carttype) {

        $em = $this->getDoctrine()->getManager();

        $del = $em->getRepository('CartShopCartBundle:Cart')->deleteAllProductsFromCart($carttype);
        $response = $this->forward('CartShopCartBundle:Cart:showCart', array(
            'carttype' => $carttype
        ));
        return $response;
    }

    public function editAction() {
        //update totalprice , prodquantity
        //{carttype}/{newquantity}/{price}/{cartID}

        $cartID = $this->get('request')->request->get('cartID');
        $carttype = $this->get('request')->request->get('carttype');
        $price = $this->get('request')->request->get('price'); //product price
        $newquantity = $this->get('request')->request->get('newquantity');

        $em = $this->getDoctrine()->getManager();
        $total_price = $price * $newquantity;
        $update = $em->getRepository('CartShopCartBundle:Cart')->updateCart($cartID,$total_price,$newquantity);
        
        //to refresh
        $response = $this->forward('CartShopCartBundle:Cart:showCart', array(
            'carttype' => $carttype
        ));
        return $response;
//        return $this->render('CartShopCartBundle:Cart:showCart.html.twig', array(
//                    
//                    'carttype' => $carttype
//        ));
        
    }

}
