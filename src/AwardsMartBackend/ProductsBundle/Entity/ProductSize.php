<?php

namespace AwardsMartBackend\ProductsBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\DependencyInjection\Tests\Compiler\A;

/**
 * ProductSize
 *
 * @ORM\Table(name="product_size")
 * @ORM\Entity(repositoryClass="AwardsMartBackend\ProductsBundle\Repository\ProductSizeRepository")
 */
class ProductSize
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
     * @ORM\Column(name="size", type="decimal", length=255, precision=10, scale=4)
     */
    private $size = "";

    /**
     * @var string
     *
     * @ORM\Column(name="units", type="string", length=255)
     */
    private $units = "";

    /**
     * @var Product
     *
     * @ORM\ManyToOne(targetEntity="AwardsMartBackend\ProductsBundle\Entity\Product", inversedBy="productSizes", fetch="EXTRA_LAZY")
     * @ORM\JoinColumn(name="product_id", referencedColumnName="id")
     */
    private $product;

    /**
     * @var ArrayCollection|SizePrice[]
     *
     * @ORM\OneToMany(targetEntity="AwardsMartBackend\ProductsBundle\Entity\SizePrice", mappedBy="size", cascade={"persist"})
     */
    private $prices;

    public function __construct()
    {
        $this->prices = new ArrayCollection();
    }

    public function resetPrices()
    {
        foreach($this->prices as $price){
            $price->removeSize();
        }
        $this->prices = new ArrayCollection();
    }

    /**
     * @param SizePrice $price
     */
    public function addPrice( SizePrice $price )
    {
        if( $this->prices->contains($price) ){
            return;
        }

        $this->prices->add($price);
        $price->setSize($this);
    }

    /**
     * @param SizePrice $price
     */
    public function removePrice( SizePrice $price )
    {
        if( !$this->prices->contains($price) ){
            return;
        }

        $this->prices->removeElement($price);
        $price->removeSize();
    }

    /**
     * @return SizePrice[]|ArrayCollection
     */
    public function getPrices()
    {
        $prices = $this->prices->toArray();

        usort($prices,function($a, $b){
            /** @var SizePrice $a */
            /** @var SizePrice $b */
            if($a->getMax() == 0){
                return 1;
            }
            if($a->getMax() > $b->getMax()){
                return 1;
            }else{
                return -1;
            }
        });

        return $prices;
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
        $product->addProductSize($this);
    }

    /**
     * @return void
     *
     * Removes the Product reference from this size
     */
    public function removeProduct()
    {
        $this->product->removeProductSize($this);
        $this->product = null;
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
     * Set size
     *
     * @param string $size
     *
     * @return ProductSize
     */
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Get size
     *
     * @return string
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set units
     *
     * @param string $units
     *
     * @return ProductSize
     */
    public function setUnits($units)
    {
        $this->units = $units;

        return $this;
    }

    /**
     * Get units
     *
     * @return string
     */
    public function getUnits()
    {
        return $this->units;
    }
}

