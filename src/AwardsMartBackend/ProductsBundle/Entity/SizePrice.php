<?php

namespace AwardsMartBackend\ProductsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SizePrice
 *
 * @ORM\Table(name="size_price")
 * @ORM\Entity(repositoryClass="AwardsMartBackend\ProductsBundle\Repository\SizePriceRepository")
 */
class SizePrice
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
     * @var int
     *
     * @ORM\Column(name="min", type="integer")
     */
    private $min = 1;

    /**
     * @var int
     *
     * @ORM\Column(name="max", type="integer")
     */
    private $max = 1;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_single", type="boolean")
     */
    private $isSingle = false;

    /**
     * @var float
     *
     * @ORM\Column(name="price", type="float")
     */
    private $price = 0;

    /**
     * @var ProductSize
     *
     * @ORM\ManyToOne(targetEntity="AwardsMartBackend\ProductsBundle\Entity\ProductSize", inversedBy="prices")
     * @ORM\JoinColumn(name="size_id", referencedColumnName="id")
     */
    private $size;

    /**
     * @return ProductSize
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param ProductSize $size
     */
    public function setSize($size)
    {
        $this->size = $size;
    }

    public function removeSize()
    {
        $this->size = null;
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
     * Set min
     *
     * @param integer $min
     *
     * @return SizePrice
     */
    public function setMin($min)
    {
        $this->min = $min;

        return $this;
    }

    /**
     * Get min
     *
     * @return int
     */
    public function getMin()
    {
        return $this->min;
    }

    /**
     * Set max
     *
     * @param integer $max
     *
     * @return SizePrice
     */
    public function setMax($max)
    {
        $this->max = $max;

        return $this;
    }

    /**
     * Get max
     *
     * @return int
     */
    public function getMax()
    {
        return $this->max;
    }

    /**
     * Set isSingle
     *
     * @param boolean $isSingle
     *
     * @return SizePrice
     */
    public function setIsSingle($isSingle)
    {
        $this->isSingle = $isSingle;

        return $this;
    }

    /**
     * Get isSingle
     *
     * @return bool
     */
    public function getIsSingle()
    {
        return $this->isSingle;
    }

    /**
     * Set price
     *
     * @param float $price
     *
     * @return SizePrice
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }
}

