<?php

namespace AwardsMartBackend\ProductsBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Category
 *
 * @ORM\Table(name="category")
 * @ORM\Entity(repositoryClass="AwardsMartBackend\ProductsBundle\Repository\CategoryRepository")
 */
class Category
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
    private $name = "";

    /**
     * @var int
     *
     * @ORM\Column(name="type", type="integer")
     */
    private $type = 1;

    /**
     * @var string
     *
     * @ORM\Column(name="meta_title", type="string", length=255)
     */
    private $metaTitle = "";

    /**
     * @var string
     *
     * @ORM\Column(name="meta_description", type="text")
     */
    private $metaDescription = "";

    /**
     * @var int
     *
     * @ORM\Column(name="display_order", type="integer")
     */
    private $displayOrder = 999999;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_active", type="boolean")
     */
    private $isActive = true;

    /**
     * @var ArrayCollection|Product[]
     * @ORM\ManyToMany(targetEntity="AwardsMartBackend\ProductsBundle\Entity\Product", inversedBy="categories", cascade={"persist"})
     * @ORM\JoinTable(name="category_products", joinColumns={
     *          @ORM\JoinColumn(name="category_id", referencedColumnName="id"),
     *      }, inverseJoinColumns={
     *          @ORM\JoinColumn(name="product_id", referencedColumnName="id")
     *      })
     */
    private $products;

    /**
     * @var ArrayCollection|CategoryImage[]
     *
     * @ORM\OneToMany(targetEntity="AwardsMartBackend\ProductsBundle\Entity\CategoryImage", mappedBy="category", cascade={"persist"})
     */
    private $categoryImages;

    /**
     * @var ArrayCollection|Category[]
     *
     * @ORM\OneToMany(targetEntity="AwardsMartBackend\ProductsBundle\Entity\Category", mappedBy="parent")
     */
    private $children;

    /**
     * @var Category
     *
     * @ORM\ManyToOne(targetEntity="AwardsMartBackend\ProductsBundle\Entity\Category", inversedBy="children")
     * @ORM\JoinColumn(name="parent", referencedColumnName="id")
     */
    private $parent;

    /**
     * @var ArrayCollection|ProductOption[]
     * 
     * @ORM\ManyToMany(targetEntity="AwardsMartBackend\ProductsBundle\Entity\ProductOption", cascade={"persist"})
     */
    private $options;

    /**
     * Category constructor.
     * Set up any collections
     */
    public function __construct()
    {
        $this->products = new ArrayCollection();
        $this->categoryImages = new ArrayCollection();
        $this->options = new ArrayCollection();
    }

    /**
     * @param ProductOption $option
     */
    public function addOption( ProductOption $option )
    {
        if( $this->options->contains($option) ){
            return;
        }

        $this->options->add($option);
    }

    /**
     * @param ProductOption $option
     */
    public function removeOption( ProductOption $option )
    {
        if( !$this->options->contains($option) ){
            return;
        }

        $this->options->removeElement($option);
    }

    /**
     * @return array
     */
    public function getOptions()
    {
        return $this->options->toArray();
    }

    /**
     * @param Category $category
     */
    public function addCategory( Category $category )
    {
        if( $this->children->contains($category) ){
            return;
        }

        $this->children->add( $category );
        $category->setParent($this);
    }

    /**
     * @param Category $category
     */
    public function removeCategory( Category $category )
    {
        if( !$this->children->contains($category) ){
            return;
        }

        $this->children->removeElement($category);
        $category->removeParent();
    }

    /**
     * @return Category[]|ArrayCollection
     */
    public function getChildrenCategories()
    {
        return $this->children->toArray();
    }

    /**
     * @param CategoryImage $image
     */
    public function addCategoryImage( CategoryImage $image )
    {
        if( $this->categoryImages->contains($image) ){
            return;
        }

        $this->categoryImages->add( $image );
        $image->setCategory( $this );
    }

    /**
     * @param CategoryImage $image
     */
    public function removeCategoryImage( CategoryImage $image )
    {
        if( !$this->categoryImages->contains($image) ){
            return;
        }

        $this->categoryImages->removeElement( $image );
        $image->removeCategory( $this );
    }

    /**
     * @return array
     */
    public function getProductImages()
    {
        return $this->categoryImages->toArray();
    }

    /**
     * @param Product $product
     */
    public function addProduct( Product $product )
    {
        if( $this->products->contains($product) ){
            return;
        }

        $this->products->add( $product );
        $product->addCategory( $this );
    }

    /**
     * @param Product $product
     */
    public function removeProduct( Product $product )
    {
        if( !$this->products->contains($product) ){
            return;
        }

        $this->products->removeElement( $product );
        $product->removeCategory( $this );
    }

    /**
     * @return array
     */
    public function getProducts()
    {
        return $this->products->toArray();
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
     * @return Category
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
     * Set parent
     *
     * @param integer $parent
     *
     * @return Category
     */
    public function setParent(Category $parent)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get parent
     *
     * @return int
     */
    public function getParent()
    {
        return $this->parent;
    }

    public function removeParent()
    {
        $this->parent = null;
    }

    /**
     * Set type
     *
     * @param integer $type
     *
     * @return Category
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set metaTitle
     *
     * @param string $metaTitle
     *
     * @return Category
     */
    public function setMetaTitle($metaTitle)
    {
        $this->metaTitle = $metaTitle;

        return $this;
    }

    /**
     * Get metaTitle
     *
     * @return string
     */
    public function getMetaTitle()
    {
        return $this->metaTitle;
    }

    /**
     * Set metaDescription
     *
     * @param string $metaDescription
     *
     * @return Category
     */
    public function setMetaDescription($metaDescription)
    {
        $this->metaDescription = $metaDescription;

        return $this;
    }

    /**
     * Get metaDescription
     *
     * @return string
     */
    public function getMetaDescription()
    {
        return $this->metaDescription;
    }

    /**
     * Set displayOrder
     *
     * @param integer $displayOrder
     *
     * @return Category
     */
    public function setDisplayOrder($displayOrder)
    {
        $this->displayOrder = $displayOrder;

        return $this;
    }

    /**
     * Get displayOrder
     *
     * @return int
     */
    public function getDisplayOrder()
    {
        return $this->displayOrder;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     *
     * @return Category
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Get isActive
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    public function getPrimaryImageObject()
    {
        /** @var CategoryImage $categoryImage */
        foreach( $this->categoryImages as $categoryImage )
        {
            if( $categoryImage->getRole() == CategoryImage::THUMBNAIL_ROLE ){
                return $categoryImage;
            }
        }

        return new CategoryImage();
    }

    /**
     * @return string
     */
    public function getPrimaryImage()
    {
        $primary = $this->getPrimaryImageObject();
        if($primary->getSource())
            return $primary->getSource();
        else
            return "/bundles/assets/images/no-image-found.jpg";
    }
}

