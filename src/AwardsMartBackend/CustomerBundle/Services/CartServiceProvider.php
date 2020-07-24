<?php

namespace AwardsMartBackend\CustomerBundle\Services;

use AwardsMartBackend\CustomerBundle\Entity\Cart;
use AwardsMartBackend\CustomerBundle\Entity\CartItem;
use AwardsMartBackend\CustomerBundle\Entity\Customer;
use AwardsMartBackend\ProductsBundle\Entity\CustomerOrder;
use AwardsMartBackend\ProductsBundle\Entity\ProductAddonOption;
use AwardsMartBackend\ProductsBundle\Entity\ProductOption;
use AwardsMartBackend\ProductsBundle\Entity\ProductSize;
use AwardsMartBackend\ProductsBundle\Entity\Product;
use Doctrine\ORM\EntityManager;
use Symfony\Component\HttpFoundation\Session\Session;

class CartServiceProvider
{
    /**
     * @var Session
     */
    private $session;

    /**
     * @var Cart
     */
    private $cart;

    /**
     * @var EntityManager
     */
    private $em;

    /**
     * CartServiceProvider constructor.
     * @param Session $session
     *
     * Creates a new instance of the Cart if it doesn't already exist.
     * This way, addToCart(), updateCustomer() and so forth can
     * utilize the exisitng cart. The cart is not pushed to the database
     * until the user checks out, saving on DB Hard Disk usage.
     */
    public function __construct(Session $session, EntityManager $em)
    {
        $this->session = $session;

        $this->em = $em;

        /*
         * If we don't already have a cart in the session, we
         * create a new one, and add a customer to it.
         */
        if( !$this->session->has('cart') ){

            // Create a customer
            $user = new Customer();
            $user->setName("Anonymous Customer");

            // Create a cart
            $cart = new Cart();

            // Add the customer to the cart (or vice versa)
            $cart->setCustomer($user);

            // Persist and flush the cart, and then set that in
            // this service, and in the local
            $em->persist($cart);

            $em->flush();

            $this->cart = $cart;

            $this->session->set('cart',$cart);

        }else{
            $cart_reference = $this->session->get('cart');
            $this->cart = $this->em->find("CustomerBundle:Cart", $cart_reference->getID());
        }
    }

    /**
     * @param Product $product
     * @param ProductSize $size
     * @param int $quantity
     * @param ProductOption $optionProduct
     * @param $addons
     *
     * Adds a new item to the cart. All of these are required.
     */
    public function addToCart(Product $product, ProductSize $size, ProductOption $optionProduct, $quantity = 0, $addons=array())
    {
        $cartItem = new CartItem();
        $cartItem->setQuantity( $quantity );
        $cartItem->setOption($optionProduct);
        $cartItem->setSize($size);
        $cartItem->setProduct($product);
        if(!empty($addons)){
            /** @var ProductAddonOption $addon */
            foreach($addons as $addon){
                $cartItem->addAddonOption($addon);
            }
        }
        $this->cart->addCartItem( $cartItem );
        $this->saveCart();
    }

    /**
     * Saves the instance of the Cart we updated to the Session.
     */
    public function saveCart()
    {
        $this->em->persist( $this->cart->updateTotal() );
        $this->em->flush();
    }

    /**
     * @return Cart|mixed
     *
     * Gets the last cart known from the Session
     */
    public function getCart()
    {
        return $this->cart;
    }

    /**
     * Eliminates the Cart from the session.
     * @return void
     *
     */
    public function destroyCart()
    {
        $this->cart = null;
        $this->session->remove("cart");
    }

    /**
     * @param float $finalTotal
     * @param Customer $customer
     * @param Cart $cart
     *
     * Creates a new Order in the system, returns an auto-generated PO number.
     */
    public function generateOrder(Customer $customer, Cart $cart)
    {
        // Create the new CustomerOrder
        $CustomerOrder = new CustomerOrder();
        $CustomerOrder->setFinalTotal( $cart->getTotal() );
        $CustomerOrder->setDateSubmitted( new \DateTime() );
        $CustomerOrder->setCart($cart);
        $CustomerOrder->setCustomer($customer);

        // Submit, and flush, to get the ID
        $this->em->persist($CustomerOrder);
        $this->em->flush();

        // OK, now, using the newly created ID..
        $poNumber = $this->generatePONumber( $CustomerOrder->getId() );
        $CustomerOrder->setPurchaseOrderNumber($poNumber);

        // Aaaaand, re save it.
        $this->em->persist($CustomerOrder);
        $this->em->flush();

        // Send back the generated PO number
        return $poNumber;
    }

    /**
     * @param int $id
     *
     * Using the unique ID, create a valid PO number.
     */
    public function generatePONumber($id=0)
    {
        $dateTime = new \DateTime();
        $year = $dateTime->format('Y');
        return sprintf("PO%s-%09d",$year,$id);
    }
}