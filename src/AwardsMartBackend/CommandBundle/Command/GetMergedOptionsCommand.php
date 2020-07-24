<?php

namespace AwardsMartBackend\CommandBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class GetMergedOptionsCommand extends ContainerAwareCommand
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this
            ->setName('command:get_merged_options_command')
            ->setDescription('Hello PhpStorm');
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $Product = $this->getContainer()->get('doctrine')->getManager()->find("ProductsBundle:Product",835);
        $Category = $this->getContainer()->get('doctrine')->getManager()->find("ProductsBundle:Category",198);

        $options = $this
                    ->getContainer()
                    ->get('doctrine')
                    ->getManager()
                    ->getRepository("ProductsBundle:ProductOption")
                    ->getMergedOptions($Category,$Product);

        dump( $options );
    }
}
