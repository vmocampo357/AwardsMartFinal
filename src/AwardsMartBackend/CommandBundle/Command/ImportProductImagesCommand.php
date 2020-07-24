<?php

namespace AwardsMartBackend\CommandBundle\Command;

use AwardsMartBackend\ProductsBundle\Entity\ProductImage;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use \PDO;

class ImportProductImagesCommand extends ContainerAwareCommand
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this
            ->setName('aw:import_product_images_command')
            ->setDescription('Hello PhpStorm');
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln("Starting...");

        /*
         * 1) OK. Let's start by seeing if we can't connect to the OLD database,
         * which we'll hardcode the information for, and see if we can't make a big ol
         * query on the old stuff. If not, we'll have to use what we already have.
         */
        $pdo = new PDO("mysql:host=localhost;dbname=awardsmart_old_better",'root','');

        /*
         * 2) If we get a chance to connect, we can go ahead and make the first query, which
         * is to select all CATEGORIES, and find out how many need to process.
         */
        $results = $pdo->query("
          SELECT 
              ProductID, 
              ProductImage, 
              ProductMainImage, 
              ProductZoomImage, 
              ProductMainImage2, 
              ProductZoomImage2 
          FROM awards_products");

        $output->writeln([
            "==========",
            sprintf("Found %d results in the OLD database",$results->rowCount()),
            "=========="
        ]);

        /*
         * 3) Go through each CATEGORY returned by the result set, then, using the entity
         * manager, start creating the different CATEGORY entities, persisting, and then
         * flushing.
         */
        $dbal = $this->getContainer()->get('doctrine.dbal.default_connection');

        foreach( $results->fetchAll(PDO::FETCH_OBJ) as $op ){
            $dbal->insert("product_image",array(
                "source" => $op->ProductMainImage,
                "role" => "PRIMARY","sort_order" => 1,"date_added" => date('Y-m-d H:i:s'),"product_id" => $op->ProductID
            ));
            $dbal->insert("product_image",array(
                "source" => $op->ProductImage,
                "role" => "SECONDARY","sort_order" => 1,"date_added" => date('Y-m-d H:i:s'),"product_id" => $op->ProductID
            ));
            $dbal->insert("product_image",array(
                "source" => $op->ProductZoomImage,
                "role" => "ZOOM","sort_order" => 1,"date_added" => date('Y-m-d H:i:s'),"product_id" => $op->ProductID
            ));
            $dbal->insert("product_image",array(
                "source" => $op->ProductMainImage2,
                "role" => "SECONDARY_MAIN","sort_order" => 1,"date_added" => date('Y-m-d H:i:s'),"product_id" => $op->ProductID
            ));
            $dbal->insert("product_image",array(
                "source" => $op->ProductZoomImage2,
                "role" => "SECONDARY_ZOOM","sort_order" => 1,"date_added" => date('Y-m-d H:i:s'),"product_id" => $op->ProductID
            ));
        }

        $output->writeln("Ending...");

    }
}
