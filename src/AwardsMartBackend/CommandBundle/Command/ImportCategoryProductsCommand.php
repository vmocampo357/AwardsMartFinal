<?php

namespace AwardsMartBackend\CommandBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use PDO;

class ImportCategoryProductsCommand extends ContainerAwareCommand
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this
            ->setName('aw:import_category_products_command')
            ->setDescription('Hello PhpStorm');
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
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
            $results = $pdo->query("SELECT * FROM awards_categoryproductlinking");

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

            foreach( $results->fetchAll(PDO::FETCH_OBJ) as $old_relationship ){

            $category_id = $old_relationship->CategoryID;

            $product_id = $old_relationship->ProductID;

            $dbal->insert("category_products",array(
                "category_id" => $category_id,
                "product_id" => $product_id
            ));

        }

        # 4) Finally, flush, and hope everything went well
        $output->writeln("Succesfully imported all records!");
    }
}
