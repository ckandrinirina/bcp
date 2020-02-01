<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypePep
 *
 * @ORM\Table(name="type_pep")
 * @ORM\Entity
 */
class TypePep
{
    /**
     * @var string
     *
     * @ORM\Column(name="tpe_vcode", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tpeVcode = '';

    /**
     * @var string
     *
     * @ORM\Column(name="tpe_vlib", type="string", length=100, nullable=false)
     */
    private $tpeVlib = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="tpe_dsys", type="date", nullable=false)
     */
    private $tpeDsys = '0000-00-00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="tpe_tsys", type="time", nullable=false)
     */
    private $tpeTsys = '00:00:00';

    /**
     * @var string
     *
     * @ORM\Column(name="tpe_vcodeut", type="string", length=20, nullable=false)
     */
    private $tpeVcodeut = '';

    /**
     * @var string
     *
     * @ORM\Column(name="tpe_vcodep", type="string", length=20, nullable=false)
     */
    private $tpeVcodep = '';

    /**
     * @var string
     *
     * @ORM\Column(name="tpe_vcptcpt", type="string", length=20, nullable=false)
     */
    private $tpeVcptcpt = '';

    /**
     * @var string
     *
     * @ORM\Column(name="tpe_vcptpenal", type="string", length=20, nullable=false)
     */
    private $tpeVcptpenal = '';

    /**
     * @var string
     *
     * @ORM\Column(name="tpe_vcptcharg", type="string", length=20, nullable=false)
     */
    private $tpeVcptcharg = '';

    /**
     * @var string
     *
     * @ORM\Column(name="tpe_vcontrat", type="string", length=50, nullable=false)
     */
    private $tpeVcontrat;

    /**
     * @var string
     *
     * @ORM\Column(name="tpe_vtype", type="string", length=20, nullable=false)
     */
    private $tpeVtype;

    /**
     * @var string
     *
     * @ORM\Column(name="tpe_vtauxin", type="string", length=20, nullable=false)
     */
    private $tpeVtauxin;

    /**
     * @var string
     *
     * @ORM\Column(name="tpe_vduree", type="string", length=20, nullable=false)
     */
    private $tpeVduree;

    /**
     * @var integer
     *
     * @ORM\Column(name="tpe_inontres_besoin", type="integer", nullable=false)
     */
    private $tpeInontresBesoin;

    /**
     * @var string
     *
     * @ORM\Column(name="tpe_vtauxnet", type="string", length=4, nullable=false)
     */
    private $tpeVtauxnet;

    /**
     * @var string
     *
     * @ORM\Column(name="tpe_vtypeetr", type="string", length=20, nullable=false)
     */
    private $tpeVtypeetr;


}

