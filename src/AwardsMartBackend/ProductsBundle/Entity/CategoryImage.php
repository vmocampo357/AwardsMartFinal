<?php

namespace AwardsMartBackend\ProductsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CategoryImage
 *
 * @ORM\Table(name="category_image")
 * @ORM\Entity(repositoryClass="AwardsMartBackend\ProductsBundle\Repository\CategoryImageRepository")
 */
class CategoryImage
{

    const THUMBNAIL_ROLE = "PRIMARY";

    const THUMBNAIL_BASE = "http://awards-mart.com/uploads/category/thumbnail/";

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
    private $role = "PRIMARY";

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
     * @ORM\ManyToOne(targetEntity="AwardsMartBackend\ProductsBundle\Entity\Category", inversedBy="categoryImages", cascade={"persist"})
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     */
    private $category;

    public function setCategory( Category $category )
    {
        $this->category = $category;
        $category->addCategoryImage( $this );
    }

    public function removeCategory( Category $category )
    {
        $this->category = null;
        $category->removeCategoryImage( $this );
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

