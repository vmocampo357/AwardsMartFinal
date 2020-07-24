<?php

namespace AwardsMartBackend\CommandBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ReviewCategoryTreeCommand extends ContainerAwareCommand
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this
            ->setName('aw:review-category-tree')
            ->setDescription('Use this to make sure the category tree works right')
            ->addArgument("type", InputArgument::OPTIONAL, '', 1);
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $type = $input->getArgument('type');
        $repo = $this->getContainer()->get('doctrine')->getManager()->getRepository('ProductsBundle:Category');
        $tree = $repo->buildTreeFromType( $type );
        $output->writeln([
            "==========",
            "Showing tree... for TYPE: ".$type,
            "==========",
        ]);
        $output->writeln( print_r($tree,true) );
    }
}
