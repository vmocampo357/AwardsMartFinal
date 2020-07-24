<?php

namespace AwardsMartBackend\CommandBundle\Command;

use AwardsMartBackend\ProductsBundle\Entity\Category;
use AwardsMartBackend\ProductsBundle\Repository\CategoryRepository;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use PDO;

class ImportCategoryOrdersCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName("aw:update-order-categories")
            ->setDescription("Use this to migrate products from the OLD DB to the new DB");

    }

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
        $results = $pdo->query("SELECT * FROM awards_categories");

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

        foreach( $results->fetchAll(PDO::FETCH_OBJ) as $old_category ){
            $new_pdo->update("category",array(
                "display_order" => $old_category->DisplayOrder
            ),array("id"=>$old_category->CategoryID));
            /*$new_pdo->insert("category",array(
                "id" => $old_category->CategoryID,
                "name" => $old_category->CategoryName,
                "parent" => $old_category->RefCategoryID,
                "type" => ( $old_category->CatType == "P" ) ? CategoryRepository::PRODUCTS_TYPE : CategoryRepository::THEMES_TYPE,
                "meta_title" => $old_category->MetaTitle,
                "meta_description" => $old_category->MetaDesc,
                "display_order" => 0,
                "is_active" => ( $old_category->IsActive == "Y" ) ? 1 : 0
            ));*/
        }

        # 4) Finally, flush, and hope everything went well

        $output->writeln("Succesfully imported all records!");
    }
}