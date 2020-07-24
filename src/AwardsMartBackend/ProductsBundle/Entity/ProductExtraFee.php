<?php

namespace AwardsMartBackend\ProductsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductExtraFee
 *
 * @ORM\Table(name="product_extra_fee")
 * @ORM\Entity(repositoryClass="AwardsMartBackend\ProductsBundle\Repository\ProductExtraFeeRepository")
 */
class ProductExtraFee
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
     * @ORM\Column(name="fee_amount", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $feeAmount;

    /**
     * @var string
     *
     * @ORM\Column(name="fee_name", type="string", length=255)
     */
    private $feeName;

    /**
     * @var Product
     *
     * @ORM\ManyToOne(targetEntity="AwardsMartBackend\ProductsBundle\Entity\Product", inversedBy="fees")
     */
    private $product;

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
     * Set feeAmount
     *
     * @param string $feeAmount
     *
     * @return ProductExtraFee
     */
    public function setFeeAmount($feeAmount)
    {
        $this->feeAmount = $feeAmount;

        return $this;
    }

    /**
     * Get feeAmount
     *
     * @return string
     */
    public function getFeeAmount()
    {
        return $this->feeAmount;
    }

    /**
     * Set feeName
     *
     * @param string $feeName
     *
     * @return ProductExtraFee
     */
    public function setFeeName($feeName)
    {
        $this->feeName = $feeName;

        return $this;
    }

    /**
     * Get feeName
     *
     * @return string
     */
    public function getFeeName()
    {
        return $this->feeName;
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
    }

    public function removeProduct(){
        $this->product = null;
    }

}

