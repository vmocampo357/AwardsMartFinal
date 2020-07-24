<?php

namespace AwardsMartBackend\CommandBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use PDO;

class ImportAddonOptionsCommand extends ContainerAwareCommand
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this
            ->setName('aw:import_addon_options_command')
            ->setDescription('Hello PhpStorm');
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln("Starting...");

        $pdo = $this->getContainer()->get('doctrine.dbal.default_connection');

        $results = $pdo->query("SELECT * FROM tpt_special_group_options")->fetchAll(PDO::FETCH_OBJ);

        foreach( $results as $result )
        {
            $pdo->insert("product_addon_option",array(
                "id" => $result->sgo_id,
                "image" => $result->sgo_image,
                "is_active" => ( $result->sgo_deleted == "0" ) ? 1 : 0,
                "price" => $result->sgo_price,
                "product_addon_id" => $result->sg_id,
                "name" => $result->sgo_name
            ));
        }

        $output->writeln("Finished...!");
    }
}
