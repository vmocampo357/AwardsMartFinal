<?php

namespace AwardsMartBackend\CommandBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use PDO;

class ImportAddonsCommand extends ContainerAwareCommand
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this
            ->setName('aw:import_addons_command')
            ->setDescription('Hello PhpStorm');
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln("Starting...");

        $pdo = $this->getContainer()->get('doctrine.dbal.default_connection');

        $results = $pdo->query("SELECT * FROM tpt_special_groups")->fetchAll(PDO::FETCH_OBJ);

        foreach( $results as $result )
        {
            $pdo->insert("product_addon",array(
                "id" => $result->sg_id,
                "image" => $result->sg_image,
                "addon_label" => $result->sg_label,
                "name" => $result->sg_name,
                "is_active" => ($result->sg_deleted = 0) ? 1 : 0
            ));
        }

        $output->writeln("Finished...!");
    }
}
