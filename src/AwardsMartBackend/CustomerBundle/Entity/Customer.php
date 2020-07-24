<?php

namespace AwardsMartBackend\CustomerBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints\DateTime;

/**
 * Customer
 *
 * @ORM\Table(name="customer")
 * @ORM\Entity(repositoryClass="AwardsMartBackend\CustomerBundle\Repository\CustomerRepository")
 */
class Customer
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email = "none";

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=255)
     */
    private $phone = "none";

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="event_date", type="datetime")
     */
    private $eventDate;

    /**
     * @var string
     *
     * @ORM\Column(name="time", type="string", length=255)
     */
    private $time = "";

    /**
     * @var string
     *
     * @ORM\Column(name="callback_time", type="string", length=255)
     */
    private $callbackTime = "";

    /**
     * @var Cart
     *
     * @ORM\OneToOne(targetEntity="AwardsMartBackend\CustomerBundle\Entity\Cart",mappedBy="customer",cascade={"persist"})
     */
    private $cart;

    /**
     * @var ArrayCollection|CustomerAddress[]
     * 
     * @ORM\OneToMany(targetEntity="AwardsMartBackend\CustomerBundle\Entity\CustomerAddress", mappedBy="customer", cascade={"persist"})
     */
    private $addresses;

    /**
     * Customer constructor.
     */
    public function __construct()
    {
        $this->setEventDate(new \DateTime());
        $this->addresses = new ArrayCollection();
    }

    /**
     * @param CustomerAddress $addr
     */
    public function addAddress(CustomerAddress $addr)
    {
        if( $this->addresses->contains($addr) ){
            return;
        }

        $this->addresses->add($addr);
        $addr->setCustomer($this);
    }

    /**
     * @param CustomerAddress $addr
     */
    public function removeAddress(CustomerAddress $addr)
    {
        if( !$this->addresses->contains($addr) ){
            return;
        }

        $this->addresses->removeElement($addr);
        $addr->removeCustomer();
    }

    /**
     * @return array
     */
    public function getAddresses()
    {
        return $this->addresses->toArray();
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
    public function setCart(Cart $cart)
    {
        $this->cart = $cart;
    }

    /**
     * @return void
     */
    public function removeCart()
    {
        $this->cart = null;
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
     * Set name
     *
     * @param string $name
     *
     * @return Customer
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Customer
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set phone
     *
     * @param string $phone
     *
     * @return Customer
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set eventDate
     *
     * @param \DateTime $eventDate
     *
     * @return Customer
     */
    public function setEventDate($eventDate)
    {
        $this->eventDate = $eventDate;

        return $this;
    }

    /**
     * Get eventDate
     *
     * @return \DateTime
     */
    public function getEventDate()
    {
        return $this->eventDate->format("m/d/Y");
    }

    /**
     * Set time
     *
     * @param string $time
     *
     * @return Customer
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Get time
     *
     * @return string
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Set callbackTime
     *
     * @param string $callbackTime
     *
     * @return Customer
     */
    public function setCallbackTime($callbackTime)
    {
        $this->callbackTime = $callbackTime;

        return $this;
    }

    /**
     * Get callbackTime
     *
     * @return string
     */
    public function getCallbackTime()
    {
        return $this->callbackTime;
    }
    
    public function getShippingAddress()
    {
        /** @var CustomerAddress $address */
        foreach($this->getAddresses() as $address){
            if($address->getRole() == CustomerAddress::SHIPPING_ADDR){
                return $address;
            }
        }
        $return = new CustomerAddress();
        $return->setRole(CustomerAddress::SHIPPING_ADDR);
        return $return;
    }
    
    public function getBillingAddress()
    {
        /** @var CustomerAddress $address */
        foreach($this->getAddresses() as $address){
            if($address->getRole() == CustomerAddress::BILLING_ADDR){
                return $address;
            }
        }
        $return = new CustomerAddress();
        $return->setRole(CustomerAddress::BILLING_ADDR);
        return $return;
    }
}

