<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * D6tdata
 *
 * @ORM\Table(name="d6tData", indexes={@ORM\Index(name="fk_d6tData_1_idx", columns={"siteId"})})
 * @ORM\Entity
 */
class D6tdata
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="siteId", type="integer", nullable=false)
     */
    private $siteid;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="datetime", type="datetime", nullable=true)
     */
    private $datetime;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rawData", type="string", length=1024, nullable=true)
     */
    private $rawdata;


}
