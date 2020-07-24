<?php

namespace AwardsMartBackend\CommandBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use PDO;

class ImportProductOptionJoinCommand extends ContainerAwareCommand
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this
            ->setName('aw:import_product_options')
            ->setDescription('Hello PhpStorm');
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        ini_set('memory_limit','1024M');

        $query = "SELECT * FROM awards_productcolorlinking";

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
        $results = $pdo->query($query);

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
        $new_pdo = $this->getContainer()->get('doctrine.dbal.default_connection');

        // Start by building a structured insert array
        $output->writeln("Setting initial inserts...");
        foreach($results->fetchAll(PDO::FETCH_OBJ) as $option){
            $new_pdo->insert("product_product_option",array(
                "product_id" => $option->ProductID,
                "product_option_id" => $option->ColorID
            ));
        }

        $output->write("Finished! ...");
    }
}
