<?php

namespace AwardsMartBackend\ProductsBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Product
 *
 * @ORM\Table(name="product")
 * @ORM\Entity(repositoryClass="AwardsMartBackend\ProductsBundle\Repository\ProductRepository")
 */
class Product
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
     * @ORM\Column(name="name", type="text")
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="sku", type="string", length=255)
     */
    private $sku = "";

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description = "";

    /**
     * @var bool
     *
     * @ORM\Column(name="is_active", type="boolean")
     */
    private $isActive = true;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_featured", type="boolean")
     */
    private $isFeatured = false;

    /**
     * @var string
     *
     * @ORM\Column(name="meta_title", type="text")
     */
    private $metaTitle = "";

    /**
     * @var string
     *
     * @ORM\Column(name="meta_description", type="text")
     */
    private $metaDescription = "";

    /**
     * @var bool
     *
     * @ORM\Column(name="is_gender", type="boolean")
     */
    private $isGender = false;

    /**
     * @var int
     *
     * @ORM\Column(name="order_index_num", type="integer")
     */
    private $orderIndexNum = 0;

    /**
     * @var ArrayCollection|Category
     *
     * @ORM\ManyToMany(targetEntity="AwardsMartBackend\ProductsBundle\Entity\Category",mappedBy="products", cascade={"persist"})
     */
    private $categories;

    /**
     * @var ArrayCollection|ProductImage[]
     * 
     * @ORM\OneToMany(targetEntity="AwardsMartBackend\ProductsBundle\Entity\ProductImage", mappedBy="product", cascade={"persist"})
     */
    private $productImages;

    /**
     * @var ArrayCollection|ProductOption[]
     * 
     * @ORM\ManyToMany(targetEntity="AwardsMartBackend\ProductsBundle\Entity\ProductOption", cascade={"persist"})
     */
    private $options;

    /**
     * @var ArrayCollection|ProductAddon[]
     *
     * @ORM\ManyToMany(targetEntity="AwardsMartBackend\ProductsBundle\Entity\ProductAddon", cascade={"persist"})
     */
    private $addons;

    /**
     * @var ArrayCollection|ProductSize[]
     *
     * @ORM\OneToMany(targetEntity="AwardsMartBackend\ProductsBundle\Entity\ProductSize", mappedBy="product", cascade={"persist"})
     * @ORM\OrderBy({ "size" = "ASC" })
     */
    private $productSizes;

    /**
     * @var ArrayCollection|ProductExtraFee[]
     *
     * @ORM\OneToMany(targetEntity="AwardsMartBackend\ProductsBundle\Entity\ProductExtraFee", mappedBy="product", cascade={"persist"})
     */
    private $fees;

    /**
     * Product constructor.
     * This will set up any collections up front.
     */
    public function __construct()
    {
        # Set the categories it belongs to
        $this->categories = new ArrayCollection();

        # Set the images
        $this->productImages = new ArrayCollection();

        # Set the sizes
        $this->productSizes = new ArrayCollection();

        # Set the options
        $this->options = new ArrayCollection();

        # Set the addons
        $this->addons = new ArrayCollection();

        # Set the fees
        $this->fees = new ArrayCollection();
    }

    /**
     * @return int
     */
    public function getOrderIndexNum()
    {
        return $this->orderIndexNum;
    }

    /**
     * @param int $orderIndexNum
     */
    public function setOrderIndexNum($orderIndexNum)
    {
        $this->orderIndexNum = $orderIndexNum;
    }

    /**
     * Resets the Addons
     */
    public function resetAddons()
    {
        $this->addons = new ArrayCollection();
    }

    /**
     * 
     */
    public function resetFees()
    {
        foreach($this->fees as $fee){
            $fee->removeProduct();
        }
        $this->fees = new ArrayCollection();
    }

    public function resetSizes()
    {
        /** @var ProductSize $size */
        foreach($this->productSizes as $size){
            $size->removeProduct();
        }
        $this->productSizes = new ArrayCollection();
    }

    /**
     * Resets the Categories
     */
    public function resetCategories()
    {
        /** @var Category $category */
        foreach( $this->categories as $category ){
            $category->removeProduct( $this );
        }
        $this->categories = new ArrayCollection();
    }

    /**
     * Resets the Options
     */
    public function resetOptions()
    {
        $this->options = new ArrayCollection();
    }

    /**
     * @param ProductAddon $addon
     */
    public function addAddon( ProductAddon $addon )
    {
        if( $this->addons->contains($addon) ){
            return;
        }

        $this->addons->add($addon);
    }

    /**
     * @param ProductAddon $addon
     */
    public function removeAddon( ProductAddon $addon )
    {
        if( !$this->addons->contains($addon) ){
            return;
        }

        $this->addons->removeElement($addon);
    }

    /**
     * @return array
     */
    public function getFees()
    {
        return (!is_null($this->fees)) ? $this->fees->toArray() : array();
    }

    /**
     * @param ProductExtraFee $fee
     */
    public function addFee( ProductExtraFee $fee ){
        if( $this->fees->contains($fee) ){
            return;
        }

        $this->fees->add($fee);        
    }

    /**
     * @param ProductExtraFee $fee
     */
    public function removeFee( ProductExtraFee $fee ){
        if( !$this->fees->contains($fee) ){
            return;
        }

        $this->fees->removeElement($fee);
    }

    /**
     * @return array
     */
    public function getAddons()
    {
        return $this->addons->toArray();
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
     * @param ProductSize $size
     */
    public function addProductSize( ProductSize $size)
    {
        if( $this->productSizes->contains( $size ) ){
            return;
        }

        $this->productSizes->add($size);
        $size->setProduct($this);
    }

    /**
     * @param ProductSize $size
     */
    public function removeProductSize( ProductSize $size )
    {
        if( !$this->productSizes->contains( $size ) ){
            return;
        }

        $this->productSizes->removeElement($size);
        $size->removeProduct();
    }

    /**
     * @return ProductSize[]|ArrayCollection
     */
    public function getProductSizes()
    {
        return $this->productSizes->toArray();
    }

    /**
     * @param ProductImage $image
     */
    public function addProductImage( ProductImage $image )
    {
        if( $this->productImages->contains($image) ){
            return;
        }

        $this->productImages->add( $image );
        $image->setProduct( $this );
    }

    /**
     * @param ProductImage $image
     */
    public function removeProductImage( ProductImage $image )
    {
        if( !$this->productImages->contains($image) ){
            return;
        }

        $this->productImages->removeElement( $image );
        $image->removeProduct( $this );
    }

    /**
     * @return array
     */
    public function getProductImages()
    {
        return $this->productImages->toArray();
    }

    /**
     * @param Category $category
     */
    public function addCategory(Category $category)
    {
        if( $this->categories->contains($category) ){
            return;
        }

        $this->categories->add( $category );
        $category->addProduct( $this );
    }

    /**
     * @param Category $category
     */
    public function removeCategory(Category $category)
    {
        if( !$this->categories->contains($category) ){
            return;
        }

        $this->categories->removeElement( $category );
        $category->removeProduct( $this );
    }

    /**
     * @return Category|ArrayCollection
     */
    public function getCategories()
    {
        return $this->categories;
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
     * @return Product
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
     * Set sku
     *
     * @param string $sku
     *
     * @return Product
     */
    public function setSku($sku)
    {
        $this->sku = $sku;

        return $this;
    }

    /**
     * Get sku
     *
     * @return string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Product
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return html_entity_decode($this->description);
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     *
     * @return Product
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

    /**
     * Set isFeatured
     *
     * @param boolean $isFeatured
     *
     * @return Product
     */
    public function setIsFeatured($isFeatured)
    {
        $this->isFeatured = $isFeatured;

        return $this;
    }

    /**
     * Get isFeatured
     *
     * @return bool
     */
    public function getIsFeatured()
    {
        return $this->isFeatured;
    }

    /**
     * Set metaTitle
     *
     * @param string $metaTitle
     *
     * @return Product
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
     * @return Product
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
     * Set isGender
     *
     * @param boolean $isGender
     *
     * @return Product
     */
    public function setIsGender($isGender)
    {
        $this->isGender = $isGender;

        return $this;
    }

    /**
     * Get isGender
     *
     * @return bool
     */
    public function getIsGender()
    {
        return $this->isGender;
    }

    /**
     * @return string
     */
    public function getZoomImage()
    {
        $zoom = $this->getZoomImageObject();
        if($zoom->getSource())
            return $zoom->getSource();
        else
            return "/bundles/assets/images/no-image-found.jpg";
    }

    /**
     * @return ProductImage
     */
    public function getZoomImageObject()
    {
        /** @var ProductImage $productImage */
        foreach( $this->productImages as $productImage ){
            if($productImage->getRole() == ProductImage::LARGE_ROLE){
                return $productImage;
            }
        }
        return new ProductImage();
    }

    /**
     * @return ProductImage
     */
    public function getPageImageObject()
    {
        /** @var ProductImage $productImage */
        foreach( $this->productImages as $productImage ){
            if($productImage->getRole() == ProductImage::MEDIUM_ROLE){
                return $productImage;
            }
        }

        return new ProductImage();
    }

    /**
     * @return string
     */
    public function getPageImage()
    {
        $page = $this->getPageImageObject();
        if($page->getSource())
            return $page->getSource();
        else
            return "/bundles/assets/images/no-image-found.jpg";
    }

    /**
     * @return ProductImage
     */
    public function getPrimaryImageObject()
    {
        /** @var ProductImage $productImage */
        foreach( $this->getProductImages() as $productImage ){
            if($productImage->getRole() == ProductImage::THUMBNAIL_ROLE){
                return $productImage;
            }
        }

        return new ProductImage();
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

