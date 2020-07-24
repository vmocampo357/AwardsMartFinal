<?php

namespace AwardsMartBackend\CommandBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use PDO;

class ImportProductAddonsCommand extends ContainerAwareCommand
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this
            ->setName('aw:import_product_addons')
            ->setDescription('Hello PhpStorm');
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln("Starting...");

        $pdo = $this->getContainer()->get('doctrine.dbal.default_connection');

        $results = $pdo->query("SELECT * FROM tpt_product_to_special_groups")->fetchAll(PDO::FETCH_OBJ);

        foreach( $results as $result )
        {
            $pdo->insert("product_product_addon",array(
                "product_id" => $result->product_id,
                "product_addon_id" => $result->sg_id
            ));
        }

        $output->writeln("Finished...!");
    }
}
