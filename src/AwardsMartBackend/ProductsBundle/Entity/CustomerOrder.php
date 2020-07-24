<?php

namespace AwardsMartBackend\ProductsBundle\Entity;

use AwardsMartBackend\CustomerBundle\Entity\Cart;
use AwardsMartBackend\CustomerBundle\Entity\Customer;
use Doctrine\ORM\Mapping as ORM;

/**
 * CustomerOrder
 *
 * @ORM\Table(name="customer_order")
 * @ORM\Entity(repositoryClass="AwardsMartBackend\ProductsBundle\Repository\CustomerOrderRepository")
 */
class CustomerOrder
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
     * @ORM\Column(name="poNumber", type="string")
     */
    private $purchaseOrderNumber = "anonymous";

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateSubmitted", type="datetimetz")
     */
    private $dateSubmitted;

    /**
     * @var float
     *
     * @ORM\Column(name="finalTotal", type="float")
     */
    private $finalTotal = 0.0;

    /**
     * @var Cart
     *
     * @ORM\ManyToOne(targetEntity="AwardsMartBackend\CustomerBundle\Entity\Cart")
     */
    private $cart;

    /**
     * @var Customer
     *
     * @ORM\ManyToOne(targetEntity="AwardsMartBackend\CustomerBundle\Entity\Customer")
     */
    private $customer;

    /**
     * CustomerOrder constructor.
     *
     * Creates some initial vars.
     */
    public function __construct()
    {
        $this->dateSubmitted = new \DateTime();
    }

    /**
     * @return string
     */
    public function getPurchaseOrderNumber()
    {
        return $this->purchaseOrderNumber;
    }

    /**
     * @param string $purchaseOrderNumber
     */
    public function setPurchaseOrderNumber($purchaseOrderNumber)
    {
        $this->purchaseOrderNumber = $purchaseOrderNumber;
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
    public function setCustomer($customer)
    {
        $this->customer = $customer;
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
     * Set dateSubmitted
     *
     * @param \DateTime $dateSubmitted
     *
     * @return CustomerOrder
     */
    public function setDateSubmitted($dateSubmitted)
    {
        $this->dateSubmitted = $dateSubmitted;

        return $this;
    }

    /**
     * Get dateSubmitted
     *
     * @return \DateTime
     */
    public function getDateSubmitted()
    {
        return $this->dateSubmitted;
    }

    /**
     * Set finalTotal
     *
     * @param float $finalTotal
     *
     * @return CustomerOrder
     */
    public function setFinalTotal($finalTotal)
    {
        $this->finalTotal = $finalTotal;

        return $this;
    }

    /**
     * Get finalTotal
     *
     * @return float
     */
    public function getFinalTotal()
    {
        return $this->finalTotal;
    }
}

