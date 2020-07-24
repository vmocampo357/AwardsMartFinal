<?php

namespace AwardsMartBackend\CommandBundle\Command;

use AwardsMartBackend\ProductsBundle\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ShowCategoryProductsCommand extends ContainerAwareCommand
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this
            ->setName('aw:show_category_products_command')
            ->setDescription('Hello PhpStorm');
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $category = $this->getContainer()->get('doctrine')->getManager()->find("ProductsBundle:Category",51);

        dump( $category->products->count() );

    }
}
