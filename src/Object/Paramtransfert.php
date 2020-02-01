<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Paramtransfert
 *
 * @ORM\Table(name="paramtransfert", indexes={@ORM\Index(name="tmd_vjournal", columns={"tmd_vjournal"})})
 * @ORM\Entity
 */
class Paramtransfert
{
    /**
     * @var integer
     *
     * @ORM\Column(name="tmd_inum", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tmdInum;

    /**
     * @var string
     *
     * @ORM\Column(name="tmd_vbanque", type="string", length=10, nullable=false)
     */
    private $tmdVbanque;

    /**
     * @var string
     *
     * @ORM\Column(name="tmd_vtype", type="string", length=10, nullable=false)
     */
    private $tmdVtype;

    /**
     * @var string
     *
     * @ORM\Column(name="tmd_vjournal", type="string", length=20, nullable=false)
     */
    private $tmdVjournal;

    /**
     * @var float
     *
     * @ORM\Column(name="tmd_fmnt_min", type="float", precision=15, scale=2, nullable=false)
     */
    private $tmdFmntMin;

    /**
     * @var float
     *
     * @ORM\Column(name="tmd_fmnt_max", type="float", precision=15, scale=2, nullable=false)
     */
    private $tmdFmntMax;

    /**
     * @var integer
     *
     * @ORM\Column(name="tmd_iduree", type="integer", nullable=false)
     */
    private $tmdIduree;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="tmd_dsys", type="date", nullable=false)
     */
    private $tmdDsys;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="tmd_tsys", type="time", nullable=false)
     */
    private $tmdTsys;

    /**
     * @var string
     *
     * @ORM\Column(name="tmd_vcodeut", type="string", length=20, nullable=false)
     */
    private $tmdVcodeut;


}

