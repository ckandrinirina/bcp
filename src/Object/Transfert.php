<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Transfert
 *
 * @ORM\Table(name="transfert", indexes={@ORM\Index(name="tfr_vcodesecret", columns={"tfr_vcodesecret"})})
 * @ORM\Entity
 */
class Transfert
{
    /**
     * @var integer
     *
     * @ORM\Column(name="tfr_iindex", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tfrIindex;

    /**
     * @var string
     *
     * @ORM\Column(name="tfr_vref", type="string", length=20, nullable=false)
     */
    private $tfrVref = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="tfr_ddate", type="date", nullable=false)
     */
    private $tfrDdate;

    /**
     * @var string
     *
     * @ORM\Column(name="tfr_vcode", type="string", length=20, nullable=false)
     */
    private $tfrVcode = '';

    /**
     * @var string
     *
     * @ORM\Column(name="tfr_vbanque", type="string", length=10, nullable=false)
     */
    private $tfrVbanque = '';

    /**
     * @var string
     *
     * @ORM\Column(name="tfr_vbranche", type="string", length=20, nullable=false)
     */
    private $tfrVbranche = '';

    /**
     * @var string
     *
     * @ORM\Column(name="tfr_vrib", type="string", length=10, nullable=false)
     */
    private $tfrVrib = '';

    /**
     * @var string
     *
     * @ORM\Column(name="tfr_vnom", type="string", length=100, nullable=false)
     */
    private $tfrVnom = '';

    /**
     * @var string
     *
     * @ORM\Column(name="tfr_vtype_piece", type="string", length=20, nullable=false)
     */
    private $tfrVtypePiece;

    /**
     * @var string
     *
     * @ORM\Column(name="tfr_vnum_piece", type="string", length=20, nullable=false)
     */
    private $tfrVnumPiece;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="tfr_ddate_piece", type="date", nullable=false)
     */
    private $tfrDdatePiece;

    /**
     * @var string
     *
     * @ORM\Column(name="tfr_vadresse", type="string", length=30, nullable=false)
     */
    private $tfrVadresse = '';

    /**
     * @var string
     *
     * @ORM\Column(name="tfr_vnom_benef", type="string", length=30, nullable=false)
     */
    private $tfrVnomBenef = '';

    /**
     * @var string
     *
     * @ORM\Column(name="tfr_vtype_piece_benef", type="string", length=20, nullable=false)
     */
    private $tfrVtypePieceBenef;

    /**
     * @var string
     *
     * @ORM\Column(name="tfr_vnum_piece_benef", type="string", length=20, nullable=false)
     */
    private $tfrVnumPieceBenef;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="tfr_ddpiece_benef", type="date", nullable=false)
     */
    private $tfrDdpieceBenef;

    /**
     * @var string
     *
     * @ORM\Column(name="tfr_vadresse_benef", type="string", length=30, nullable=false)
     */
    private $tfrVadresseBenef = '';

    /**
     * @var float
     *
     * @ORM\Column(name="tfr_fmontant", type="float", precision=15, scale=2, nullable=true)
     */
    private $tfrFmontant;

    /**
     * @var string
     *
     * @ORM\Column(name="tfr_vagence_exp", type="string", length=5, nullable=false)
     */
    private $tfrVagenceExp;

    /**
     * @var string
     *
     * @ORM\Column(name="tfr_vagence_dest", type="string", length=5, nullable=false)
     */
    private $tfrVagenceDest;

    /**
     * @var string
     *
     * @ORM\Column(name="tfr_vagence", type="string", length=20, nullable=false)
     */
    private $tfrVagence;

    /**
     * @var string
     *
     * @ORM\Column(name="tfr_vcodesecret", type="string", length=100, nullable=false)
     */
    private $tfrVcodesecret;

    /**
     * @var string
     *
     * @ORM\Column(name="tfr_vtype", type="string", length=45, nullable=false)
     */
    private $tfrVtype;

    /**
     * @var string
     *
     * @ORM\Column(name="tfr_vstatut", type="string", length=20, nullable=false)
     */
    private $tfrVstatut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="tfr_dsys", type="date", nullable=false)
     */
    private $tfrDsys;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="tfr_tsys", type="time", nullable=false)
     */
    private $tfrTsys;

    /**
     * @var string
     *
     * @ORM\Column(name="tfr_vcodeut", type="string", length=20, nullable=false)
     */
    private $tfrVcodeut;

    /**
     * @var integer
     *
     * @ORM\Column(name="tfr_ivalid", type="integer", nullable=false)
     */
    private $tfrIvalid;

    /**
     * @var integer
     *
     * @ORM\Column(name="tfr_inummvt", type="integer", nullable=false)
     */
    private $tfrInummvt;

    /**
     * @var float
     *
     * @ORM\Column(name="tfr_ffraisht", type="float", precision=15, scale=2, nullable=false)
     */
    private $tfrFfraisht;

    /**
     * @var float
     *
     * @ORM\Column(name="tfr_ffraistaxe", type="float", precision=15, scale=2, nullable=false)
     */
    private $tfrFfraistaxe;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="tfr_dexpire", type="date", nullable=false)
     */
    private $tfrDexpire;


}

