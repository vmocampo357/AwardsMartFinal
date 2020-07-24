<?php

namespace AwardsMartBackend\CommandBundle\Command;

use AwardsMartBackend\ProductsBundle\Entity\ProductSize;
use AwardsMartBackend\ProductsBundle\Entity\SizePrice;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class AddProductSizePriceCommand extends ContainerAwareCommand
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this
            ->setName('aw:add_product_size')
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

        $size = new ProductSize();
        $size->setSize("6")->setUnits("Inches");

        $price_a = new SizePrice();
        $price_a->setIsSingle(true)->setMax(1)->setMin(1)->setPrice(10.05);

        $price_b = new SizePrice();
        $price_b->setIsSingle(false)->setMax(10)->setMin(2)->setPrice(05.01);

        $size->addPrice($price_a);
        $size->addPrice($price_b);

        $product->addProductSize($size);

        $em->persist($product);
        $em->flush();

        $output->writeln("Ending...");
    }
}
