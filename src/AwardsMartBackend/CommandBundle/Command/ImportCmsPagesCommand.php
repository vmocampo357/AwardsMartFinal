<?php

namespace AwardsMartBackend\CommandBundle\Command;

use AwardsMartFrontend\PrimarySiteBundle\Entity\HtmlPage;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ImportCmsPagesCommand extends ContainerAwareCommand
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this
            ->setName('aw:import_cms_pages_command')
            ->setDescription('Hello PhpStorm');
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln("Starting .. CMS PAGES");

        $pdo = $this->getContainer()->get('doctrine.dbal.default_connection');

        $results = $pdo->query("SELECT * FROM cms_pages")->fetchAll(\PDO::FETCH_ASSOC);

        $em = $this->getContainer()->get('doctrine')->getManager();

        foreach( $results as $result ){
            $page = new HtmlPage();
            $page->setContent( $result['CONTENT'] );
            $page->setMetaTitle( $result['BrowserTitle'] );
            $page->setTitle( $result['Title'] );
            $page->setIsActive(1);
            $em->persist($page);
        }

        $em->flush();

        $output->writeln("Ending ..");
    }
}
