<?php

namespace AwardsMartBackend\CustomerBundle\Entity;

use AwardsMartBackend\ProductsBundle\Entity\ProductAddonOption;
use AwardsMartBackend\ProductsBundle\Entity\ProductOption;
use AwardsMartBackend\ProductsBundle\Entity\ProductSize;
use AwardsMartBackend\ProductsBundle\Entity\SizePrice;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use AwardsMartBackend\ProductsBundle\Entity\Product;

/**
 * CartItem
 *
 * @ORM\Table(name="cart_item")
 * @ORM\Entity(repositoryClass="AwardsMartBackend\CustomerBundle\Repository\CartItemRepository")
 */
class CartItem
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="quantity", type="integer")
     */
    private $quantity = 0;

    /**
     * @var float
     *
     * @ORM\Column(name="subtotal", type="float")
     */
    private $subtotal = 0;

    /**
     * @var float
     *
     * @ORM\Column(name="addon_total", type="float")
     */
    private $addonTotal = 0;

    /**
     * @var string
     *
     * @ORM\Column(name="cart_item_engraving", type="text")
     */
    private $engraving = "";

    /**
     * @var Cart
     *
     * @ORM\ManyToOne(targetEntity="AwardsMartBackend\CustomerBundle\Entity\Cart", inversedBy="cartItems", cascade={"persist"})
     */
    private $cart;

    /**
     * @var Product
     *
     * @ORM\ManyToOne(targetEntity="AwardsMartBackend\ProductsBundle\Entity\Product")
     */
    private $product;

    /**
     * @var ProductOption
     *
     * @ORM\ManyToOne(targetEntity="AwardsMartBackend\ProductsBundle\Entity\ProductOption", cascade={"persist"})
     */
    private $option;

    /**
     * @return string
     */
    public function getEngraving()
    {
        return $this->engraving;
    }

    /**
     * @param string $engraving
     */
    public function setEngraving($engraving)
    {
        $this->engraving = $engraving;
    }

    /**
     * @var ArrayCollection|ProductAddonOption[]
     *
     * @ORM\ManyToMany(targetEntity="AwardsMartBackend\ProductsBundle\Entity\ProductAddonOption", cascade={"persist"})
     */
    private $addonOptions;

    /**
     * @var ProductSize
     *
     * @ORM\ManyToOne(targetEntity="AwardsMartBackend\ProductsBundle\Entity\ProductSize")
     */
    private $size;

    /**
     * @var SizePrice
     */
    private $chosenPrice;

    /**
     * @var ArrayCollection|CartItemUpload[]
     *
     * @ORM\OneToMany(targetEntity="AwardsMartBackend\CustomerBundle\Entity\CartItemUpload", mappedBy="cartItem", cascade={"persist"})
     */
    private $uploads;

    /**
     * CartItem constructor.
     */
    public function __construct()
    {
        $this->addonOptions = new ArrayCollection();
        $this->uploads = new ArrayCollection();
    }

    /**
     * @param CartItemUpload $upload
     *
     */
    public function addUpload(CartItemUpload $upload)
    {
        if($this->uploads->contains($upload)){
            return;
        }
        $this->uploads->add($upload);
        $upload->setCartItem($this);
    }

    /**
     * @param CartItemUpload $upload
     *
     */
    public function removeUpload(CartItemUpload $upload)
    {
        if(!$this->uploads->contains($upload)){
            return;
        }
        $this->uploads->removeElement($upload);
        $upload->removeCartItem();
    }

    public function getUploads()
    {
        return $this->uploads->toArray();
    }

    /**
     * @param ProductAddonOption $option
     */
    public function addAddonOption(ProductAddonOption $option)
    {
        if( $this->addonOptions->contains($option) ){
            return;
        }

        $this->addonOptions->add($option);
    }

    /**
     * @param ProductAddonOption $option
     */
    public function removeAddonOption(ProductAddonOption $option)
    {
        if( !$this->addonOptions->contains($option) ){
            return;
        }

        $this->addonOptions->removeElement($option);
    }

    /**
     * @return array
     */
    public function getAddonOptions()
    {
        return $this->addonOptions->toArray();
    }

    /**
     * @return Cart
     */
    public function getCart()
    {
        return $this->cart;
    }

    /**
     * @param Cart $cart
     */
    public function setCart($cart)
    {
        $this->cart = $cart;
        $cart->addCartItem($this);
    }

    /**
     * @return void
     */
    public function removeCart()
    {
        $this->cart = null;
    }

    /**
     * @return Product
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @param Product $product
     */
    public function setProduct($product)
    {
        $this->product = $product;
    }

    /**
     * @return ProductOption
     */
    public function getOption()
    {
        return $this->option;
    }

    /**
     * @param ProductOption $option
     */
    public function setOption($option)
    {
        $this->option = $option;
    }

    /**
     * @return ProductSize
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param ProductSize $size
     */
    public function setSize($size)
    {
        $this->size = $size;
    }

    
    
    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set quantity
     *
     * @param integer $quantity
     *
     * @return CartItem
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set subtotal
     *
     * @param float $subtotal
     *
     * @return CartItem
     */
    public function setSubtotal($subtotal)
    {
        $this->subtotal = $subtotal;

        return $this;
    }

    /**
     * Get subtotal
     *
     * @return float
     */
    public function getSubtotal()
    {
        $chosen_price = new SizePrice();
        $chosen_price->setPrice(-1);

        /*
         * Find out which price to use based on the Quantity we have.
         */
        /** @var SizePrice $price */
        foreach($this->getSize()->getPrices() as $price){
            if($this->quantity > 0){
                if( $this->quantity >= $price->getMin() && $this->quantity <= $price->getMax() || $price->getMax() == 0){
                    $chosen_price = $price;
                }
            }
        }

        /*
         * If we don't have a price set, the quantity was probably outside the max.
         * Use the last one and hope it's fine!
         */
        if($chosen_price->getPrice() == -1){
            $prices = array_reverse($this->getSize()->getPrices());
            $chosen_price = $prices[0];
        }

        $this->chosenPrice = $chosen_price;

        $this->subtotal = ($chosen_price->getPrice() * $this->quantity);

        /*
         * If we have addons, go through each, add up the price, and also return this.
         */

        if($this->addonOptions->count() > 0){
            $addon_total = 0;
            /** @var ProductAddonOption $addonOption */
            foreach($this->addonOptions->toArray() as $addonOption){
                $addon_total += $addonOption->getPrice();
            }
            $this->addonTotal = $addon_total * $this->getQuantity();
            $this->subtotal = floatval($this->subtotal) + floatval($this->addonTotal);
        }

        return $this->subtotal;
    }

    /**
     * Set addonTotal
     *
     * @param string $addonTotal
     *
     * @return CartItem
     */
    public function setAddonTotal($addonTotal)
    {
        $this->addonTotal = $addonTotal;

        return $this;
    }

    /**
     * Get addonTotal
     *
     * @return string
     */
    public function getAddonTotal()
    {
        return $this->addonTotal;
    }

    /**
     * @param int
     * @return bool
     */
    public function containsAddonOption($option_id)
    {
        /** @var ProductAddonOption $option */
        foreach( $this->getAddonOptions() as $option ){
            if($option_id == $option->getId()){
                return true;
            }
        }
        return false;
    }

    /**
     * Removes all Addons associated with this item
     */
    public function clearAddons()
    {
        $this->addonOptions = new ArrayCollection();
    }

    /**
     * @return SizePrice
     *
     * Grabs the price we selected for the quantity
     */
    public function getChosenPrice()
    {
        $this->getSubtotal();
        return $this->chosenPrice;
    }

    /**
     * @return CartItemUpload|bool
     *
     */
    public function getNamesUpload()
    {
        /** @var CartItemUpload $upload */
        foreach($this->getUploads() as $upload){
            if($upload->getRole() == CartItemUpload::ROLE_NAMES){
                return $upload;
            }
        }
        return false;
    }

    /**
     * @return CartItemUpload|bool
     *
     */
    public function getLogoUpload()
    {
        /** @var CartItemUpload $upload */
        foreach($this->getUploads() as $upload){
            if($upload->getRole() == CartItemUpload::ROLE_LOGO){
                return $upload;
            }
        }
        return false;
    }

    /**
     * @return CartItemUpload|bool
     * 
     */
    public function getOtherUpload()
    {
        /** @var CartItemUpload $upload */
        foreach($this->getUploads() as $upload){
            if($upload->getRole() == CartItemUpload::ROLE_OTHER){
                return $upload;
            }
        }
        return false;
    }
}

