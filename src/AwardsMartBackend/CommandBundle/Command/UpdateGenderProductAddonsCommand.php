<?php

namespace AwardsMartBackend\CommandBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class UpdateGenderProductAddonsCommand extends ContainerAwareCommand
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this
            ->setName('aw:product_females')
            ->setDescription('Hello PhpStorm');
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln("Starting...");
        $em = $this->getContainer()->get('doctrine')->getManager();
        $products = $em->getRepository('ProductsBundle:Product')->findBy(
            array("isGender"=>1)
        );
        $gender = $em->find("ProductsBundle:ProductAddon",16);
        foreach($products as $product){
            $product->addAddon( $gender );
        }
        $em->persist($product);
        $em->flush();
        $output->writeln("Finshing...");
    }
}
