<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Util
 *
 * @ORM\Table(name="util", uniqueConstraints={@ORM\UniqueConstraint(name="login_UNIQUE", columns={"login"})})
 * @ORM\Entity
 */
class Util
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
     * @ORM\Column(name="login", type="string", length=45, nullable=true)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="pwd", type="string", length=45, nullable=true)
     */
    private $pwd;


}

