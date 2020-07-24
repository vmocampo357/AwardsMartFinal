<?php

namespace AwardsMartBackend\CommandBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class GetProductOptionsCommand extends ContainerAwareCommand
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this
            ->setName('aw:get_product_options')
            ->setDescription('Hello PhpStorm')
            ->addOption("product","p",InputOption::VALUE_OPTIONAL,"",451);
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $product_id = $input->getOption("product");
        $em = $this->getContainer()->get('doctrine')->getManager();
        $product = $em->find('ProductsBundle:Product',$product_id);
        dump($product->getOptions());
    }
}
