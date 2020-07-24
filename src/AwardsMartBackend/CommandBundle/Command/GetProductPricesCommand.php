<?php

namespace AwardsMartBackend\CommandBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class GetProductPricesCommand extends ContainerAwareCommand
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this
            ->setName('aw:get_product_prices')
            ->setDescription('Hello PhpStorm');
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln("Starting...");

        $em = $this->getContainer()->get('doctrine')->getManager();
        $product = $em->find('ProductsBundle:Product',12);

        foreach($product->getProductSizes() as $size){
            foreach($size->getPrices() as $price){
                if($price->getIsSingle()){
                    $output->writeln("Single price for product is ...".$price->getPrice());
                }
            }
        }
    }
}
