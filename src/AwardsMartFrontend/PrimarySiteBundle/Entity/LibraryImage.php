<?php

namespace AwardsMartFrontend\PrimarySiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LibraryImage
 *
 * @ORM\Table(name="library_image")
 * @ORM\Entity(repositoryClass="AwardsMartFrontend\PrimarySiteBundle\Repository\LibraryImageRepository")
 */
class LibraryImage
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nickname", type="string", length=255)
     */
    private $nickname = "Site Image";

    /**
     * @var string
     *
     * @ORM\Column(name="source", type="text")
     */
    private $source = "";

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_added", type="datetimetz")
     */
    private $dateAdded;

    /**
     * LibraryImage constructor.
     */
    public function __construct()
    {
        $this->dateAdded = new \DateTime();
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nickname
     *
     * @param string $nickname
     *
     * @return LibraryImage
     */
    public function setNickname($nickname)
    {
        $this->nickname = $nickname;

        return $this;
    }

    /**
     * Get nickname
     *
     * @return string
     */
    public function getNickname()
    {
        return $this->nickname;
    }

    /**
     * Set source
     *
     * @param string $source
     *
     * @return LibraryImage
     */
    public function setSource($source)
    {
        $this->source = $source;

        return $this;
    }

    /**
     * Get source
     *
     * @return string
     */
    public function getSource()
    {
        if( empty($this->source) ) $this->source = "/bundles/assets/images/no-image-found.jpg";
        return $this->source;
    }

    /**
     * Set dateAdded
     *
     * @param \DateTime $dateAdded
     *
     * @return LibraryImage
     */
    public function setDateAdded($dateAdded)
    {
        $this->dateAdded = $dateAdded;

        return $this;
    }

    /**
     * Get dateAdded
     *
     * @return \DateTime
     */
    public function getDateAdded()
    {
        return $this->dateAdded;
    }
}

