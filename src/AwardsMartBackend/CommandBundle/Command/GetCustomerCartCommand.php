<?php

namespace AwardsMartBackend\CommandBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class GetCustomerCartCommand extends ContainerAwareCommand
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this
            ->setName('aw:customer_cart')
            ->setDescription('Hello PhpStorm');
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $customer = $this->getContainer()->get('doctrine')->getManager()->find("CustomerBundle:Customer",1);
        $cart = $customer->getCart();
        dump($cart->updateTotal()->getTotal());
        $this->getContainer()->get('doctrine')->getManager()->persist($cart);
        $this->getContainer()->get('doctrine')->getManager()->flush();
    }
}
