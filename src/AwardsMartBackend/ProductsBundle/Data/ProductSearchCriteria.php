<?php

namespace AwardsMartBackend\ProductsBundle\Data;

class ProductSearchCriteria
{
    const SORT_BY_NOTHING       = 0;

    const SORT_DESC_PRICE       = 1;

    const SORT_ASC_PRICE        = 2;

    const SORT_ASC_PRODUCT_NAME = 3;

    const SORT_DESC_PRODUCT_NAME = 4;

    /**
     * @return boolean
     */
    public function isByMaxId()
    {
        return $this->byMaxId;
    }

    /**
     * @param boolean $byMaxId
     */
    public function setByMaxId($byMaxId)
    {
        $this->byMaxId = $byMaxId;
    }

    /**
     * @var bool
     */
    private $byMaxId = false;

    /**
     * @var string
     */
    private $bySku = "";

    /**
     * @var array
     */
    private $byCategoryId = array();

    /**
     * @return int
     */
    public function getSortBy()
    {
        return $this->sortBy;
    }

    /**
     * @param int $sortBy
     */
    public function setSortBy($sortBy)
    {
        $this->sortBy = $sortBy;
    }

    /**
     * @var string
     */
    private $byText = "";

    /**
     * @var float
     */
    private $byPriceMin = 0.0;

    /**
     * @var float
     */
    private $byPriceMax = 0.0;

    /**
     * @var int
     *
     * Enumerated from constants
     */
    private $sortBy = 0;

    /**
     * @return boolean
     */
    public function isActive()
    {
        return $this->active;
    }

    /**
     * @param boolean $active
     */
    public function setActive($active)
    {
        $this->active = $active;
    }

    /**
     * @var bool
     */
    private $active = true;

    /**
     * @return string
     */
    public function getBySku()
    {
        return $this->bySku;
    }

    /**
     * @param string $bySku
     */
    public function setBySku($bySku)
    {
        $this->bySku = $bySku;
    }

    /**
     * @return array
     */
    public function getByCategoryId()
    {
        return $this->byCategoryId;
    }

    /**
     * @param array $byCategoryId
     */
    public function setByCategoryId($byCategoryId)
    {
        $this->byCategoryId = $byCategoryId;
    }

    /**
     * @return string
     */
    public function getByText()
    {
        return $this->byText;
    }

    /**
     * @param string $byText
     */
    public function setByText($byText)
    {
        $this->byText = $byText;
    }

    /**
     * @return float
     */
    public function getByPriceMin()
    {
        return $this->byPriceMin;
    }

    /**
     * @param float $byPriceMin
     */
    public function setByPriceMin($byPriceMin)
    {
        $this->byPriceMin = $byPriceMin;
    }

    /**
     * @return float
     */
    public function getByPriceMax()
    {
        return $this->byPriceMax;
    }

    /**
     * @param float $byPriceMax
     */
    public function setByPriceMax($byPriceMax)
    {
        $this->byPriceMax = $byPriceMax;
    }
    
    
}