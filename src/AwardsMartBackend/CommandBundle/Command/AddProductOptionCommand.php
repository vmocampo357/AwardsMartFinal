<?php

namespace AwardsMartBackend\CommandBundle\Command;

use AwardsMartBackend\ProductsBundle\Entity\ProductOption;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class AddProductOptionCommand extends ContainerAwareCommand
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this
            ->setName('aw:add_product_option_command')
            ->setDescription('Hello PhpStorm');
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln("Starting...");
        $em = $this->getContainer()->get('doctrine')->getManager();
        $product = $em->find('ProductsBundle:Product',451);
        
        $option = new ProductOption();
        $option->setName("Green");
        $option->setCode("Grn");

        $product->addOption($option);

        $em->persist($product);
        $em->flush();

        $output->writeln("Closing...");
    }
}
