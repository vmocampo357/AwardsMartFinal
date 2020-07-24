<?php

namespace AwardsMartBackend\ProductsBundle\Data;

class OrderSearchCriteria
{
    /**
     * @var string
     */
    private $text = "";

    /**
     * @var float
     */
    private $total = 0.0;

    /**
     * @var bool
     */
    private $gte = false;

    /**
     * @var bool
     */
    private $lte = false;

    /**
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param string $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }

    /**
     * @return float
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @param float $total
     */
    public function setTotal($total)
    {
        $this->total = $total;
    }

    /**
     * @return boolean
     */
    public function isGte()
    {
        return $this->gte;
    }

    /**
     * @param boolean $gte
     */
    public function setGte($gte)
    {
        $this->gte = $gte;
    }

    /**
     * @return boolean
     */
    public function isLte()
    {
        return $this->lte;
    }

    /**
     * @param boolean $lte
     */
    public function setLte($lte)
    {
        $this->lte = $lte;
    }

}