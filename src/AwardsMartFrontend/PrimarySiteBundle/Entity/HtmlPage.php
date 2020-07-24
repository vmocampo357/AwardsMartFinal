<?php

namespace AwardsMartFrontend\PrimarySiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HtmlPage
 *
 * @ORM\Table(name="html_page")
 * @ORM\Entity(repositoryClass="AwardsMartFrontend\PrimarySiteBundle\Repository\HtmlPageRepository")
 */
class HtmlPage
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
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title = "";

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text")
     */
    private $content = "";

    /**
     * @var string
     *
     * @ORM\Column(name="metaTitle", type="text")
     */
    private $metaTitle = "";

    /**
     * @var bool
     *
     * @ORM\Column(name="isActive", type="boolean")
     */
    private $isActive = 1;


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
     * Set title
     *
     * @param string $title
     *
     * @return HtmlPage
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return HtmlPage
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return html_entity_decode($this->content);
    }

    /**
     * Set metaTitle
     *
     * @param string $metaTitle
     *
     * @return HtmlPage
     */
    public function setMetaTitle($metaTitle)
    {
        $this->metaTitle = $metaTitle;

        return $this;
    }

    /**
     * Get metaTitle
     *
     * @return string
     */
    public function getMetaTitle()
    {
        return $this->metaTitle;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     *
     * @return HtmlPage
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Get isActive
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->isActive;
    }
}

