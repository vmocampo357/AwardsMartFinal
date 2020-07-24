<?php

namespace AwardsMartBackend\CommandBundle\Command;

use AwardsMartBackend\CustomerBundle\Entity\Cart;
use AwardsMartBackend\CustomerBundle\Entity\CartItem;
use AwardsMartBackend\CustomerBundle\Entity\Customer;
use AwardsMartBackend\CustomerBundle\Entity\CustomerAddress;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class TestCartCommand extends ContainerAwareCommand
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this
            ->setName('aw:carttest')
            ->setDescription('Hello PhpStorm');
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln("Starting CART test...");

        $em = $this->getContainer()->get('doctrine')->getManager();

        $customer = $em->find("CustomerBundle:Customer",1);

        $cart = new Cart();
        $cart->setSessionId("JustATest");
        
        $cartItem = new CartItem();
        $cartItem->setAddonTotal("No addons.");
        $cartItem->setProduct($em->find("ProductsBundle:Product",465));
        $cartItem->setOption($em->find("ProductsBundle:ProductOption",1));
        $cartItem->setSize($em->find("ProductsBundle:ProductSize",782));
        $cartItem->setQuantity(20);
        $cartItem->setSubtotal(22.44);

        $cart->addCartItem($cartItem);
        
        $cart->setCustomer($customer);

        /*
        /** @var Customer $customer
        $customer = new Customer();
        $customer->setName("Victor Mayorga");
        $customer->setEmail("victor@vndx.com");

        /** @var CustomerAddress $shippingAddress
        $shippingAddress = new CustomerAddress();
        $shippingAddress->setFirstName("Victor");
        $shippingAddress->setLastName("Mayorga");

        $customer->addAddress($shippingAddress);
        */

        $em->persist($cart);

        $em->flush();

        $output->writeln("Closing out...");
    }
}
