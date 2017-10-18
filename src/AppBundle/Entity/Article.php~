<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Article
 *
 * @ORM\Table(name="article", indexes={@ORM\Index(name="fk_article_util_idx", columns={"util_id"})})
 * @ORM\Entity
 */
class Article
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="theTitle", type="string", length=150, nullable=true)
     */
    private $thetitle;

    /**
     * @var string
     *
     * @ORM\Column(name="theText", type="text", length=65535, nullable=true)
     */
    private $thetext;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="theDate", type="datetime", nullable=true)
     */
    private $thedate;

    /**
     * @var \Util
     *
     * @ORM\ManyToOne(targetEntity="Util")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="util_id", referencedColumnName="id")
     * })
     */
    private $util;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Section", inversedBy="article")
     * @ORM\JoinTable(name="article_has_section",
     *   joinColumns={
     *     @ORM\JoinColumn(name="article_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="section_id", referencedColumnName="id")
     *   }
     * )
     */
    private $section;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->section = new \Doctrine\Common\Collections\ArrayCollection();
    }

}

