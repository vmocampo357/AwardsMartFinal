<?php

namespace AwardsMartBackend\ProductsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductImage
 *
 * @ORM\Table(name="product_image")
 * @ORM\Entity(repositoryClass="AwardsMartBackend\ProductsBundle\Repository\ProductImageRepository")
 */
class ProductImage
{

    const BASE = "http://awards-mart.com/uploads/products";

    const THUMBNAIL_BASE = "http://awards-mart.com/uploads/products/thumbnail/";

    const ZOOM_BASE = "http://awards-mart.com/uploads/products/zoom/";

    const MAIN_BASE = "http://awards-mart.com/uploads/products/enlarge/";

    const THUMBNAIL_ROLE = "SECONDARY";

    const MEDIUM_ROLE = "PRIMARY";

    const LARGE_ROLE = "ZOOM";

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
     * @var int
     *
     * @ORM\Column(name="sort_order", type="integer")
     */
    private $sortOrder = 0;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_added", type="datetimetz")
     */
    private $dateAdded;

    /**
     * @var Product
     *
     * @ORM\ManyToOne(targetEntity="AwardsMartBackend\ProductsBundle\Entity\Product", inversedBy="productImages", cascade={"persist"})
     * @ORM\JoinColumn(name="product_id", referencedColumnName="id")
     */
    private $product;

    public function __construct()
    {
        $this->dateAdded = new \DateTime();
    }

    public function setProduct( Product $product )
    {
        $this->product = $product;
        $product->addProductImage( $this );
    }

    public function removeProduct( Product $product )
    {
        $this->product = null;
        $product->removeProductImage( $this );
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
     * @return ProductImage
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
     * @return ProductImage
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
     * Set sortOrder
     *
     * @param integer $sortOrder
     *
     * @return ProductImage
     */
    public function setSortOrder($sortOrder)
    {
        $this->sortOrder = $sortOrder;

        return $this;
    }

    /**
     * Get sortOrder
     *
     * @return int
     */
    public function getSortOrder()
    {
        return $this->sortOrder;
    }

    /**
     * Set dateAdded
     *
     * @param \DateTime $dateAdded
     *
     * @return ProductImage
     */
    public function setDateAdded($dateAdded)
    {
        $this->dateAdded = $dateAdded;

        return $this;
    }

    /**
     * Get dateAdded
     *
     * @return \DateTime
     */
    public function getDateAdded()
    {
        return $this->dateAdded;
    }
}

