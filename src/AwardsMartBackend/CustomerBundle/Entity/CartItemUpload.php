<?php

namespace AwardsMartBackend\CustomerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use DateTime;

/**
 * CartItemUpload
 *
 * @ORM\Table(name="cart_item_upload")
 * @ORM\Entity(repositoryClass="AwardsMartBackend\CustomerBundle\Repository\CartItemUploadRepository")
 */
class CartItemUpload
{

    /**
     * The role for any OTHER uploads
     */
    const ROLE_OTHER = 1;

    /**
     * The role for name uploads
     */
    const ROLE_NAMES = 2;

    /**
     * The role int to be used for logo uploads
     */
    const ROLE_LOGO = 3;

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
     * @ORM\Column(name="source", type="text")
     */
    private $source;

    /**
     * @var string
     *
     * @ORM\Column(name="role", type="string", length=255)
     */
    private $role;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreated", type="datetime")
     */
    private $dateCreated;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateUploaded", type="datetime")
     */
    private $dateUploaded;

    /**
     * @var CartItem
     * 
     * @ORM\ManyToOne(targetEntity="AwardsMartBackend\CustomerBundle\Entity\CartItem", inversedBy="uploads")
     */
    private $cartItem;

    public function __construct()
    {
        $this->dateCreated = new DateTime();
        $this->dateUploaded = new DateTime();
    }

    /**
     * @return CartItem
     */
    public function getCartItem()
    {
        return $this->cartItem;
    }

    /**
     * @param CartItem $cartItem
     */
    public function setCartItem($cartItem)
    {
        $this->cartItem = $cartItem;
    }

    /**
     * @return void
     */
    public function removeCartItem()
    {
        $this->cartItem = null;
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
     * Set source
     *
     * @param string $source
     *
     * @return CartItemUpload
     */
    public function setSource($source)
    {
        $this->source = $source;

        return $this;
    }

    /**
     * Get source
     *
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Set role
     *
     * @param string $role
     *
     * @return CartItemUpload
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

    /**
     * Set dateCreated
     *
     * @param string $dateCreated
     *
     * @return CartItemUpload
     */
    public function setDateCreated($dateCreated)
    {
        $this->dateCreated = $dateCreated;

        return $this;
    }

    /**
     * Get dateCreated
     *
     * @return string
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    /**
     * Set dateUploaded
     *
     * @param \DateTime $dateUploaded
     *
     * @return CartItemUpload
     */
    public function setDateUploaded($dateUploaded)
    {
        $this->dateUploaded = $dateUploaded;

        return $this;
    }

    /**
     * Get dateUploaded
     *
     * @return \DateTime
     */
    public function getDateUploaded()
    {
        return $this->dateUploaded;
    }
}

