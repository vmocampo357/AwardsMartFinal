<?php

namespace AwardsMartBackend\CustomerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CustomerAddress
 *
 * @ORM\Table(name="customer_address")
 * @ORM\Entity(repositoryClass="AwardsMartBackend\CustomerBundle\Repository\CustomerAddressRepository")
 */
class CustomerAddress
{

    const SHIPPING_ADDR = "SHIPPING";

    const BILLING_ADDR = "BILLING";

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
     * @ORM\Column(name="first_name", type="string", length=255)
     */
    private $firstName = "";

    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", length=255)
     */
    private $lastName = "";

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="text")
     */
    private $address = "";

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=255)
     */
    private $city = "";

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=255)
     */
    private $phone = "none";

    /**
     * @var string
     *
     * @ORM\Column(name="phone_alt", type="string", length=255)
     */
    private $phoneAlt = "none";

    /**
     * @var string
     *
     * @ORM\Column(name="zip_code", type="string", length=255)
     */
    private $zipCode = "";

    /**
     * @var string
     *
     * @ORM\Column(name="state", type="string", length=255)
     */
    private $state = "";

    /**
     * @var string
     *
     * @ORM\Column(name="role", type="string", length=255)
     */
    private $role = "SHIPPING";

    /**
     * @var Customer
     *
     * @ORM\ManyToOne(targetEntity="AwardsMartBackend\CustomerBundle\Entity\Customer",inversedBy="addresses")
     */
    private $customer;

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
        $customer->addAddress($this);
    }

    /**
     * @return void
     */
    public function removeCustomer()
    {
        $this->customer = null;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     *
     * @return CustomerAddress
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     *
     * @return CustomerAddress
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return CustomerAddress
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return CustomerAddress
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set phone
     *
     * @param string $phone
     *
     * @return CustomerAddress
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
     * Set phoneAlt
     *
     * @param string $phoneAlt
     *
     * @return CustomerAddress
     */
    public function setPhoneAlt($phoneAlt)
    {
        $this->phoneAlt = $phoneAlt;

        return $this;
    }

    /**
     * Get phoneAlt
     *
     * @return string
     */
    public function getPhoneAlt()
    {
        return $this->phoneAlt;
    }

    /**
     * Set zipCode
     *
     * @param string $zipCode
     *
     * @return CustomerAddress
     */
    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;

        return $this;
    }

    /**
     * Get zipCode
     *
     * @return string
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }

    /**
     * Set state
     *
     * @param string $state
     *
     * @return CustomerAddress
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set role
     *
     * @param string $role
     *
     * @return CustomerAddress
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }
}

