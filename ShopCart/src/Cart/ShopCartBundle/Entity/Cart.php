<?php

namespace Cart\ShopCartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Cart\ShopCartBundle\Repository\CartRepository")
 * @ORM\Table(name="cart")
 * @ORM\HasLifecycleCallbacks()
 */
class Cart
{
    /**
     * @var integer
     */
    private $prodquantity;

    /**
     * @var float
     */
    private $totalprice;

    /**
     * @var integer
     */
    private $carttype;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Cart\ShopCartBundle\Entity\Product
     */
    private $prodid;


    /**
     * Set prodquantity
     *
     * @param integer $prodquantity
     * @return Cart
     */
    public function setProdquantity($prodquantity)
    {
        $this->prodquantity = $prodquantity;

        return $this;
    }

    /**
     * Get prodquantity
     *
     * @return integer 
     */
    public function getProdquantity()
    {
        return $this->prodquantity;
    }

    /**
     * Set totalprice
     *
     * @param float $totalprice
     * @return Cart
     */
    public function setTotalprice($totalprice)
    {
        $this->totalprice = $totalprice;

        return $this;
    }

    /**
     * Get totalprice
     *
     * @return float 
     */
    public function getTotalprice()
    {
        return $this->totalprice;
    }

    /**
     * Set carttype
     *
     * @param boolean $carttype
     * @return Cart
     */
    public function setCarttype($carttype)
    {
        $this->carttype = $carttype;

        return $this;
    }

    /**
     * Get carttype
     *
     * @return boolean 
     */
    public function getCarttype()
    {
        return $this->carttype;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set prodid
     *
     * @param \Cart\ShopCartBundle\Entity\Product $prodid
     * @return Cart
     */
    public function setProdid(\Cart\ShopCartBundle\Entity\Product $prodid = null)
    {
        $this->prodid = $prodid;

        return $this;
    }

    /**
     * Get prodid
     *
     * @return \Cart\ShopCartBundle\Entity\Product 
     */
    public function getProdid()
    {
        return $this->prodid;
    }
}
