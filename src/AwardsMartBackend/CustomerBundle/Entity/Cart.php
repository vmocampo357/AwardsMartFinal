<?php

namespace AwardsMartBackend\CustomerBundle\Entity;

use AwardsMartBackend\CustomerBundle\Repository\CartRepository;
use AwardsMartBackend\ProductsBundle\Entity\ProductExtraFee;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bundle\SecurityBundle\Tests\Functional\Bundle\AclBundle\Entity\Car;
use Symfony\Component\Validator\Constraints\DateTime;

/**
 * Cart
 *
 * @ORM\Table(name="cart")
 * @ORM\Entity(repositoryClass="AwardsMartBackend\CustomerBundle\Repository\CartRepository")
 */
class Cart
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
     * @var string
     *
     * @ORM\Column(name="session_id", type="string", length=255)
     */
    private $sessionId = "";

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_created", type="datetimetz")
     */
    private $dateCreated;

    /**
     * @var float
     *
     * @ORM\Column(name="total", type="float")
     */
    private $total = 0;

    /**
     * @var Customer
     * 
     * @ORM\OneToOne(targetEntity="AwardsMartBackend\CustomerBundle\Entity\Customer", inversedBy="cart", cascade={"persist"})
     */
    private $customer;

    /**
     * @var  ArrayCollection|CartItem[]
     *
     * @ORM\OneToMany(targetEntity="AwardsMartBackend\CustomerBundle\Entity\CartItem", mappedBy="cart", cascade={"persist"})
     */
    private $cartItems;

    /**
     * @var array
     *
     */
    private $fees;

    /**
     * @var int
     *
     * This is a dynamic quantity we can use to..
     */
    private $runningQuantity;

    /**
     * @var string
     */
    private $readPath;

    /**
     * Cart constructor.
     */
    public function __construct()
    {
        $this->cartItems = new ArrayCollection();
        $this->dateCreated = new \DateTime();
        $this->fees = array();
        $this->readPath = "/awardsmart/web";
        $this->runningQuantity = 0;
    }

    /**
     * @return int
     */
    public function getRunningQuantity()
    {
        /** @var CartItem $cartItem */
        foreach($this->getCartItems() as $cartItem){
            $this->runningQuantity += $cartItem->getQuantity();
        }
        return $this->runningQuantity;
    }

    /**
     * @param int $runningQuantity
     */
    public function setRunningQuantity($runningQuantity)
    {
        $this->runningQuantity = $runningQuantity;
    }

    /**
     * @param CartItem $item
     */
    public function addCartItem(CartItem $item)
    {
        if($this->cartItems->contains($item)){
            return;
        }

        $this->cartItems->add($item);
        $item->setCart($this);
    }

    /**
     * @param CartItem $item
     */
    public function removeCartItem(CartItem $item)
    {
        if(!$this->cartItems->contains($item)){
            return;
        }

        $this->cartItems->removeElement($item);
        $item->removeCart();
    }

    /**
     * @return CartItem[]|ArrayCollection
     */
    public function getCartItems()
    {
        return $this->cartItems->toArray();
    }

    /**
     * @param CartItem $cartItem
     * @return bool
     * 
     * Checks our CartItems and returns bool
     */
    public function hasCartItem(CartItem $cartItem)
    {
        return $this->cartItems->contains($cartItem);
    }

    /**
     * @return Customer
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * @param Customer $customer
     */
    public function setCustomer(Customer $customer)
    {
        $this->customer = $customer;
    }

    /**
     * @return void
     */
    public function removeCustomer()
    {
        $this->customer = null;
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
     * Set sessionId
     *
     * @param string $sessionId
     *
     * @return Cart
     */
    public function setSessionId($sessionId)
    {
        $this->sessionId = $sessionId;

        return $this;
    }

    /**
     * Get sessionId
     *
     * @return string
     */
    public function getSessionId()
    {
        return $this->sessionId;
    }

    /**
     * Set dateCreated
     *
     * @param \DateTime $dateCreated
     *
     * @return Cart
     */
    public function setDateCreated($dateCreated)
    {
        $this->dateCreated = $dateCreated;

        return $this;
    }

    /**
     * Get dateCreated
     *
     * @return \DateTime
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    /**
     * Set total
     *
     * @param float $total
     *
     * @return Cart
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Get total
     *
     * @return float
     */
    public function getTotal()
    {
        return $this->updateTotal()->total;
    }

    /**
     * @return $this
     *
     * Calculates the total, saves it to the instance, and
     * returns the instance given.
     */
    public function updateTotal()
    {
        /*
         * Start by setting a default 0 cost
         */
        $total = 0;

        /*
         * Go through each CartItem and:
         * 1) Find out the sub total
         * 2) Generate fees (on the fly) based on what we know
         */
        foreach($this->getCartItems() as $item)
        {
            // If they have a logo uploaded, add the fee
            if($item->getLogoUpload()){
                $total += CartRepository::LOGO_FEE;
                $this->addFee( array('name'=>"Artwork Fee (".$item->getProduct()->getName().")", 'cost'=> CartRepository::LOGO_FEE) );
            }

            // If they have a NAMES file uploaded..
            /*if($item->getNamesUpload()){
                $total += CartRepository::ENGRAVING_FEE;
                $this->addFee( array("name"=>"Engraving Fee (".$item->getProduct()->getName().")", "cost"=>CartRepository::ENGRAVING_FEE) );
            }*/

            if( $item->getProduct()->getFees() ){
                /** @var ProductExtraFee $fee */
                foreach($item->getProduct()->getFees() as $fee){
                    $this->addFee( array(
                        "name" => $fee->getFeeName() . " (" . $item->getProduct()->getName() . ")",
                        "cost" => $fee->getFeeAmount()
                    ) );
                    $total += $fee->getFeeAmount();
                }
            }

            // If they made an engraving thing
            if($item->getEngraving()){
                $engraving = $item->getEngraving();
                $lines = explode("\n",$engraving);
                if( count($lines) > CartRepository::ENGRAVING_MAX_LINES ){
                    $total += CartRepository::ENGRAVING_FEE;
                    $this->addFee( array("name"=>"Lines exceed free engraving (".$item->getProduct()->getName().")", "cost"=>CartRepository::ENGRAVING_FEE) );
                }
            }

            // Add the subtotal to the total
            $total += $item->getSubtotal();
        }

        $this->setTotal($total);

        return $this;
    }

    /**
     * @return array
     */
    public function getFees()
    {
        return $this->fees;
    }

    /**
     * @param array $fees
     */
    public function setFees($fees)
    {
        $this->fees = $fees;
    }

    public function addFee(array $fee)
    {
        $this->fees[] = $fee;
    }
}

