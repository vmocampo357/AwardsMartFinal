<?php

namespace AwardsMartBackend\CommandBundle\Command;

use AwardsMartBackend\ProductsBundle\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use PDO;

class ImportProductsCommand extends ContainerAwareCommand
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this
            ->setName('aw:import_products_command')
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
        $results = $pdo->query("SELECT * FROM awards_products");

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
        $em = $this->getContainer()->get('doctrine')->getManager();

        $new_pdo = $this->getContainer()->get('doctrine.dbal.default_connection');

        foreach( $results->fetchAll(PDO::FETCH_OBJ) as $old_product ){
            # Set a type int that we can use for Products, and Themes
            $gender     = ( $old_product->IsGender == "Y" )     ? 1 : 0;
            $active     = ( $old_product->IsActive == "Y" )     ? 1 : 0;
            $featured   = ( $old_product->IsFeature == "Y" )    ? 1 : 0;

            # Create and persist the new category
            /*$newProduct = new Product();
            $newProduct->setIsGender( $gender );
            $newProduct->setIsActive( $active );
            $newProduct->setName( $old_product->ProductName );
            $newProduct->setDescription( $old_product->ProductDesc );
            $newProduct->setMetaDescription( $old_product->MetaDesc );
            $newProduct->setMetaTitle( $old_product->MetaTitle );
            $newProduct->setSku( $old_product->ProductNumber );
            $newProduct->setIsFeatured( $featured );*/

            $new_pdo->insert("product",array(
                "id" => $old_product->ProductID,
                "is_gender" => $gender,
                "is_active" => $active,
                "name" => $old_product->ProductName,
                "description" => $old_product->ProductDesc ,
                "meta_description" => $old_product->MetaDesc,
                "meta_title" => $old_product->MetaTitle,
                "sku" => $old_product->ProductNumber,
                "is_featured" => $featured
            ));
        }

        # 4) Finally, flush, and hope everything went well
        $output->writeln("Succesfully imported all records!");
    }
}
