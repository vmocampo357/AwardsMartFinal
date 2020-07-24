<?php

namespace AwardsMartBackend\CommandBundle\Command;

use AwardsMartBackend\ProductsBundle\Entity\ProductAddon;
use AwardsMartBackend\ProductsBundle\Entity\ProductAddonOption;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class AddMaleFemaleCommand extends ContainerAwareCommand
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this
            ->setName('aw:females')
            ->setDescription('Hello PhpStorm');
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln("Starting...");

        $em = $this->getContainer()->get('doctrine')->getManager();

        $addon = new ProductAddon();
        $addon->setName("Figure Gender");
        $addon->setAddonLabel("Figure Gender");
        
        $female = new ProductAddonOption();
        $female->setName("Female");

        $male = new ProductAddonOption();
        $male->setName("Male");

        $addon->addOption($female);
        $addon->addOption($male);

        $em->persist($addon);

        $em->flush();

        $output->writeln("Closing...");
    }
}
