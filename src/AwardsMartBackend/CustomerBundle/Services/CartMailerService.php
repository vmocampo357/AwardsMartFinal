<?php

namespace AwardsMartBackend\CustomerBundle\Services;

use AwardsMartBackend\CustomerBundle\Entity\Cart;
use AwardsMartBackend\CustomerBundle\Entity\CartItem;
use AwardsMartBackend\CustomerBundle\Entity\Customer;
use AwardsMartBackend\CustomerBundle\Entity\CustomerAddress;
use AwardsMartBackend\ProductsBundle\Entity\ProductAddonOption;
use AwardsMartBackend\ProductsBundle\Entity\ProductOption;
use AwardsMartBackend\ProductsBundle\Entity\ProductSize;
use AwardsMartBackend\ProductsBundle\Entity\Product;
use Doctrine\ORM\EntityManager;
use Symfony\Component\HttpFoundation\Session\Session;
use Swift_Mailer;

class CartMailerService
{
    /**
     * @var array
     *
     * These are the recipients when a new Cart is checked-out
     */
    private $recipients = [];

    /**
     * @var Swift_Mailer
     */
    private $mailer;

    /**
     * @var \Twig_Environment
     */
    private $twig;

    /**
     * CartMailerService constructor.
     *
     * Set up the Recipients, mailer
     * @param $swift_Mailer Swift_Mailer
     * @param $twig \Twig_Environment
     */
    public function __construct(Swift_Mailer $swift_Mailer, \Twig_Environment $twig)
    {
        $this->recipients = array(
            "awards@awards-mart.com",
            "sales@awards-mart.com"
        );

        $this->mailer = $swift_Mailer;

        $this->twig = $twig;

        if( !$this->mailer->getTransport()->isStarted() ){
            $this->mailer->getTransport()->start();
        }
    }

    /**
     * @param $recipient
     *
     * Use for testing
     */
    public function testEmail($recipient)
    {

        $mailLogger = new \Swift_Plugins_Loggers_ArrayLogger();
        $this->mailer->registerPlugin(new \Swift_Plugins_LoggerPlugin($mailLogger));

        /*
         * Start the mail spool
         */
        if( !$this->mailer->getTransport()->isStarted() ){
            $this->mailer->getTransport()->start();
        }

        /** @var \Swift_Message $msg */
        $msg = \Swift_Message::newInstance()
            ->setFrom("root@awards-mart.com","AwardMart System")
            ->setSubject("A new order was placed!")
            ->setBody("JUST TESTING MAILER")
            ->setContentType("text/html");

        $msg->addTo($recipient, "Test User");

        /*
         * Send the e-mail
         */
        $this->mailer->getTransport()->send( $msg );

        /*
         * Close and flush the spool
         */
        $this->mailer->getTransport()->stop();

        return $mailLogger->dump();

    }

    /**
     * @param Cart $cart
     * @param Customer $customer
     *
     * Sends a notification to the known recipients
     */
    public function notify(Cart $cart, Customer $customer, $poNumber="anonymous")
    {
        /*
         * Start the mail spool
         */
        if( !$this->mailer->getTransport()->isStarted() ){
            $this->mailer->getTransport()->start();
        }

        /*
         * Add the customer to the list of recipients.
         */
        if( $customer->getEmail() ){
            $this->recipients[] = $customer->getEmail();
        }

        /*
         * Create the message using the Cart and Customer data
         */
        $body = $this->twig->render('@PrimarySite/default/order-mail.html.twig',[
            "ponum"     => $poNumber,
            "cart"      => $cart,
            "customer"  => $customer,
            "shipping"  => $customer->getShippingAddress(),
            "billing"   => $customer->getBillingAddress()]);

        $msg = \Swift_Message::newInstance()
            ->setFrom("root@awards-mart.com","AwardMart System")
            ->setSubject("A new order was placed!")
            ->setBody($body)
            ->setContentType("text/html");

        foreach($this->recipients as $recipient){
            $msg->addTo($recipient,"AwardsMart Customer");
        }

        /*
         * Send the e-mail
         */
        $this->mailer->getTransport()->send( $msg );

        /*
         * Close and flush the spool
         */
        $this->mailer->getTransport()->stop();
    }
}