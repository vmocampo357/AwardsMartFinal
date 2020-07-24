<?php

namespace AwardsMartBackend\ProductsBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * ProductAddon
 *
 * @ORM\Table(name="product_addon")
 * @ORM\Entity(repositoryClass="AwardsMartBackend\ProductsBundle\Repository\ProductAddonRepository")
 */
class ProductAddon
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
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="text")
     */
    private $image = "";

    /**
     * @var string
     *
     * @ORM\Column(name="addon_label", type="text")
     */
    private $addonLabel;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_active", type="boolean")
     */
    private $isActive = true;

    /**
     * @var ArrayCollection|ProductAddonOption[]
     *
     * @ORM\OneToMany(targetEntity="AwardsMartBackend\ProductsBundle\Entity\ProductAddonOption", mappedBy="addon", cascade={"persist"})
     */
    private $options;

    /**
     * @param ProductAddonOption $option
     */
    public function addOption( ProductAddonOption $option )
    {
        if( $this->options->contains($option) ){
            return;
        }

        $this->options->add($option);
        $option->setAddon($this);
    }

    /**
     * @param ProductAddonOption $option
     */
    public function removeOption( ProductAddonOption $option )
    {
        if( !$this->options->contains($option) ){
            return;
        }

        $this->options->removeElement($option);
        $option->removeAddon();
    }

    /**
     * @return array
     */
    public function getOptions()
    {
        return $this->options->toArray();
    }

    /**
     * ProductAddon constructor.
     */
    public function __construct()
    {
        $this->options = new ArrayCollection();
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
     * @return ProductAddon
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
     * Set image
     *
     * @param string $image
     *
     * @return ProductAddon
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set addonLabel
     *
     * @param string $addonLabel
     *
     * @return ProductAddon
     */
    public function setAddonLabel($addonLabel)
    {
        $this->addonLabel = $addonLabel;

        return $this;
    }

    /**
     * Get addonLabel
     *
     * @return string
     */
    public function getAddonLabel()
    {
        return $this->addonLabel;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     *
     * @return ProductAddon
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
}

