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
        $this->thedate = new \DateTime();
        $this->section = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function __toString()
    {
        return $this->thetitle;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set thetitle
     *
     * @param string $thetitle
     *
     * @return Article
     */
    public function setThetitle($thetitle)
    {
        $this->thetitle = $thetitle;

        return $this;
    }

    /**
     * Get thetitle
     *
     * @return string
     */
    public function getThetitle()
    {
        return $this->thetitle;
    }

    /**
     * Set thetext
     *
     * @param string $thetext
     *
     * @return Article
     */
    public function setThetext($thetext)
    {
        $this->thetext = $thetext;

        return $this;
    }

    /**
     * Get thetext
     *
     * @return string
     */
    public function getThetext()
    {
        return $this->thetext;
    }

    /**
     * Set thedate
     *
     * @param \DateTime $thedate
     *
     * @return Article
     */
    public function setThedate($thedate)
    {
        $this->thedate = $thedate;

        return $this;
    }

    /**
     * Get thedate
     *
     * @return \DateTime
     */
    public function getThedate()
    {
        return $this->thedate;
    }

    /**
     * Set util
     *
     * @param \AppBundle\Entity\Util $util
     *
     * @return Article
     */
    public function setUtil(\AppBundle\Entity\Util $util = null)
    {
        $this->util = $util;

        return $this;
    }

    /**
     * Get util
     *
     * @return \AppBundle\Entity\Util
     */
    public function getUtil()
    {
        return $this->util;
    }

    /**
     * Add section
     *
     * @param \AppBundle\Entity\Section $section
     *
     * @return Article
     */
    public function addSection(\AppBundle\Entity\Section $section)
    {
        $this->section[] = $section;

        return $this;
    }

    /**
     * Remove section
     *
     * @param \AppBundle\Entity\Section $section
     */
    public function removeSection(\AppBundle\Entity\Section $section)
    {
        $this->section->removeElement($section);
    }

    /**
     * Get section
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSection()
    {
        return $this->section;
    }
}
