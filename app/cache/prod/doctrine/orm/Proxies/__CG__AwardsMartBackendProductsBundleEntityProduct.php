<?php

namespace Proxies\__CG__\AwardsMartBackend\ProductsBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Product extends \AwardsMartBackend\ProductsBundle\Entity\Product implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'AwardsMartBackend\\ProductsBundle\\Entity\\Product' . "\0" . 'id', '' . "\0" . 'AwardsMartBackend\\ProductsBundle\\Entity\\Product' . "\0" . 'name', '' . "\0" . 'AwardsMartBackend\\ProductsBundle\\Entity\\Product' . "\0" . 'sku', '' . "\0" . 'AwardsMartBackend\\ProductsBundle\\Entity\\Product' . "\0" . 'description', '' . "\0" . 'AwardsMartBackend\\ProductsBundle\\Entity\\Product' . "\0" . 'isActive', '' . "\0" . 'AwardsMartBackend\\ProductsBundle\\Entity\\Product' . "\0" . 'isFeatured', '' . "\0" . 'AwardsMartBackend\\ProductsBundle\\Entity\\Product' . "\0" . 'metaTitle', '' . "\0" . 'AwardsMartBackend\\ProductsBundle\\Entity\\Product' . "\0" . 'metaDescription', '' . "\0" . 'AwardsMartBackend\\ProductsBundle\\Entity\\Product' . "\0" . 'isGender', '' . "\0" . 'AwardsMartBackend\\ProductsBundle\\Entity\\Product' . "\0" . 'categories', '' . "\0" . 'AwardsMartBackend\\ProductsBundle\\Entity\\Product' . "\0" . 'productImages', '' . "\0" . 'AwardsMartBackend\\ProductsBundle\\Entity\\Product' . "\0" . 'options', '' . "\0" . 'AwardsMartBackend\\ProductsBundle\\Entity\\Product' . "\0" . 'addons', '' . "\0" . 'AwardsMartBackend\\ProductsBundle\\Entity\\Product' . "\0" . 'productSizes'];
        }

        return ['__isInitialized__', '' . "\0" . 'AwardsMartBackend\\ProductsBundle\\Entity\\Product' . "\0" . 'id', '' . "\0" . 'AwardsMartBackend\\ProductsBundle\\Entity\\Product' . "\0" . 'name', '' . "\0" . 'AwardsMartBackend\\ProductsBundle\\Entity\\Product' . "\0" . 'sku', '' . "\0" . 'AwardsMartBackend\\ProductsBundle\\Entity\\Product' . "\0" . 'description', '' . "\0" . 'AwardsMartBackend\\ProductsBundle\\Entity\\Product' . "\0" . 'isActive', '' . "\0" . 'AwardsMartBackend\\ProductsBundle\\Entity\\Product' . "\0" . 'isFeatured', '' . "\0" . 'AwardsMartBackend\\ProductsBundle\\Entity\\Product' . "\0" . 'metaTitle', '' . "\0" . 'AwardsMartBackend\\ProductsBundle\\Entity\\Product' . "\0" . 'metaDescription', '' . "\0" . 'AwardsMartBackend\\ProductsBundle\\Entity\\Product' . "\0" . 'isGender', '' . "\0" . 'AwardsMartBackend\\ProductsBundle\\Entity\\Product' . "\0" . 'categories', '' . "\0" . 'AwardsMartBackend\\ProductsBundle\\Entity\\Product' . "\0" . 'productImages', '' . "\0" . 'AwardsMartBackend\\ProductsBundle\\Entity\\Product' . "\0" . 'options', '' . "\0" . 'AwardsMartBackend\\ProductsBundle\\Entity\\Product' . "\0" . 'addons', '' . "\0" . 'AwardsMartBackend\\ProductsBundle\\Entity\\Product' . "\0" . 'productSizes'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Product $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function resetAddons()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'resetAddons', []);

        return parent::resetAddons();
    }

    /**
     * {@inheritDoc}
     */
    public function resetSizes()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'resetSizes', []);

        return parent::resetSizes();
    }

    /**
     * {@inheritDoc}
     */
    public function resetCategories()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'resetCategories', []);

        return parent::resetCategories();
    }

    /**
     * {@inheritDoc}
     */
    public function resetOptions()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'resetOptions', []);

        return parent::resetOptions();
    }

    /**
     * {@inheritDoc}
     */
    public function addAddon(\AwardsMartBackend\ProductsBundle\Entity\ProductAddon $addon)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addAddon', [$addon]);

        return parent::addAddon($addon);
    }

    /**
     * {@inheritDoc}
     */
    public function removeAddon(\AwardsMartBackend\ProductsBundle\Entity\ProductAddon $addon)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeAddon', [$addon]);

        return parent::removeAddon($addon);
    }

    /**
     * {@inheritDoc}
     */
    public function getAddons()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAddons', []);

        return parent::getAddons();
    }

    /**
     * {@inheritDoc}
     */
    public function addOption(\AwardsMartBackend\ProductsBundle\Entity\ProductOption $option)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addOption', [$option]);

        return parent::addOption($option);
    }

    /**
     * {@inheritDoc}
     */
    public function removeOption(\AwardsMartBackend\ProductsBundle\Entity\ProductOption $option)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeOption', [$option]);

        return parent::removeOption($option);
    }

    /**
     * {@inheritDoc}
     */
    public function getOptions()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOptions', []);

        return parent::getOptions();
    }

    /**
     * {@inheritDoc}
     */
    public function addProductSize(\AwardsMartBackend\ProductsBundle\Entity\ProductSize $size)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addProductSize', [$size]);

        return parent::addProductSize($size);
    }

    /**
     * {@inheritDoc}
     */
    public function removeProductSize(\AwardsMartBackend\ProductsBundle\Entity\ProductSize $size)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeProductSize', [$size]);

        return parent::removeProductSize($size);
    }

    /**
     * {@inheritDoc}
     */
    public function getProductSizes()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProductSizes', []);

        return parent::getProductSizes();
    }

    /**
     * {@inheritDoc}
     */
    public function addProductImage(\AwardsMartBackend\ProductsBundle\Entity\ProductImage $image)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addProductImage', [$image]);

        return parent::addProductImage($image);
    }

    /**
     * {@inheritDoc}
     */
    public function removeProductImage(\AwardsMartBackend\ProductsBundle\Entity\ProductImage $image)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeProductImage', [$image]);

        return parent::removeProductImage($image);
    }

    /**
     * {@inheritDoc}
     */
    public function getProductImages()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProductImages', []);

        return parent::getProductImages();
    }

    /**
     * {@inheritDoc}
     */
    public function addCategory(\AwardsMartBackend\ProductsBundle\Entity\Category $category)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addCategory', [$category]);

        return parent::addCategory($category);
    }

    /**
     * {@inheritDoc}
     */
    public function removeCategory(\AwardsMartBackend\ProductsBundle\Entity\Category $category)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeCategory', [$category]);

        return parent::removeCategory($category);
    }

    /**
     * {@inheritDoc}
     */
    public function getCategories()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCategories', []);

        return parent::getCategories();
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setSku($sku)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSku', [$sku]);

        return parent::setSku($sku);
    }

    /**
     * {@inheritDoc}
     */
    public function getSku()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSku', []);

        return parent::getSku();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsActive($isActive)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsActive', [$isActive]);

        return parent::setIsActive($isActive);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsActive()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsActive', []);

        return parent::getIsActive();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsFeatured($isFeatured)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsFeatured', [$isFeatured]);

        return parent::setIsFeatured($isFeatured);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsFeatured()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsFeatured', []);

        return parent::getIsFeatured();
    }

    /**
     * {@inheritDoc}
     */
    public function setMetaTitle($metaTitle)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMetaTitle', [$metaTitle]);

        return parent::setMetaTitle($metaTitle);
    }

    /**
     * {@inheritDoc}
     */
    public function getMetaTitle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMetaTitle', []);

        return parent::getMetaTitle();
    }

    /**
     * {@inheritDoc}
     */
    public function setMetaDescription($metaDescription)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMetaDescription', [$metaDescription]);

        return parent::setMetaDescription($metaDescription);
    }

    /**
     * {@inheritDoc}
     */
    public function getMetaDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMetaDescription', []);

        return parent::getMetaDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsGender($isGender)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsGender', [$isGender]);

        return parent::setIsGender($isGender);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsGender()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsGender', []);

        return parent::getIsGender();
    }

    /**
     * {@inheritDoc}
     */
    public function getZoomImage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getZoomImage', []);

        return parent::getZoomImage();
    }

    /**
     * {@inheritDoc}
     */
    public function getZoomImageObject()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getZoomImageObject', []);

        return parent::getZoomImageObject();
    }

    /**
     * {@inheritDoc}
     */
    public function getPageImageObject()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPageImageObject', []);

        return parent::getPageImageObject();
    }

    /**
     * {@inheritDoc}
     */
    public function getPageImage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPageImage', []);

        return parent::getPageImage();
    }

    /**
     * {@inheritDoc}
     */
    public function getPrimaryImageObject()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrimaryImageObject', []);

        return parent::getPrimaryImageObject();
    }

    /**
     * {@inheritDoc}
     */
    public function getPrimaryImage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrimaryImage', []);

        return parent::getPrimaryImage();
    }

}