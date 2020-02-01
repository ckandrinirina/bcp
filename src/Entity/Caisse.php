<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Caisse
 *
 * @ORM\Table(name="caisse", indexes={@ORM\Index(name="cai_vcodeum", columns={"cai_vcodeum"}), @ORM\Index(name="cai_vcodeur", columns={"cai_vcodeur"}), @ORM\Index(name="cai_vcodejou", columns={"cai_vcodejou"}), @ORM\Index(name="cai_ddatevaleur", columns={"cai_ddatevaleur"})})
 * @ORM\Entity
 */
class Caisse
{
    /**
     * @var string
     *
     * @ORM\Column(name="cai_vjournal", type="string", length=40, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $caiVjournal;

    /**
     * @var string
     *
     * @ORM\Column(name="cai_vcodeute", type="string", length=30, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $caiVcodeute = '';

    /**
     * @var string
     *
     * @ORM\Column(name="cai_vjournaldif", type="string", length=20, nullable=false)
     */
    private $caiVjournaldif;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="cai_ddate", type="date", nullable=false)
     */
    private $caiDdate = '0000-00-00';

    /**
     * @var float
     *
     * @ORM\Column(name="cai_fsoldei", type="float", precision=15, scale=2, nullable=false)
     */
    private $caiFsoldei = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="cai_fsld_avcloture", type="float", precision=15, scale=2, nullable=false)
     */
    private $caiFsldAvcloture;

    /**
     * @var float
     *
     * @ORM\Column(name="cai_fsoldef", type="float", precision=15, scale=2, nullable=false)
     */
    private $caiFsoldef = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="cai_ftotdebit", type="float", precision=15, scale=2, nullable=false)
     */
    private $caiFtotdebit;

    /**
     * @var float
     *
     * @ORM\Column(name="cai_ftotcredit", type="float", precision=15, scale=2, nullable=false)
     */
    private $caiFtotcredit;

    /**
     * @var string
     *
     * @ORM\Column(name="cai_vcodeut", type="string", length=20, nullable=false)
     */
    private $caiVcodeut = '';

    /**
     * @var string
     *
     * @ORM\Column(name="cai_vcaissier", type="string", length=20, nullable=false)
     */
    private $caiVcaissier;

    /**
     * @var string
     *
     * @ORM\Column(name="cai_vcloture", type="string", length=3, nullable=false)
     */
    private $caiVcloture = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="cai_dsys", type="date", nullable=false)
     */
    private $caiDsys = '0000-00-00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="cai_tsys", type="time", nullable=false)
     */
    private $caiTsys = '00:00:00';

    /**
     * @var float
     *
     * @ORM\Column(name="cai_fdifference", type="float", precision=10, scale=0, nullable=false)
     */
    private $caiFdifference;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="cai_dcloture", type="date", nullable=false)
     */
    private $caiDcloture;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="cai_tcloture", type="time", nullable=false)
     */
    private $caiTcloture;

    /**
     * @var string
     *
     * @ORM\Column(name="cai_vcodeum", type="string", length=20, nullable=false)
     */
    private $caiVcodeum;

    /**
     * @var string
     *
     * @ORM\Column(name="cai_vcodeur", type="string", length=20, nullable=false)
     */
    private $caiVcodeur;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="cai_ddatevaleur", type="date", nullable=false)
     */
    private $caiDdatevaleur;

    /**
     * @var string
     *
     * @ORM\Column(name="cai_vcodejou", type="string", length=20, nullable=false)
     */
    private $caiVcodejou;

    /**
     * @var string
     *
     * @ORM\Column(name="cai_vcodecof", type="string", length=20, nullable=false)
     */
    private $caiVcodecof;

    /**
     * @var integer
     *
     * @ORM\Column(name="cai_inummvt", type="integer", nullable=false)
     */
    private $caiInummvt;

    /**
     * @var string
     *
     * @ORM\Column(name="cai_vcodemp", type="string", length=20, nullable=false)
     */
    private $caiVcodemp;

    /**
     * @var string
     *
     * @ORM\Column(name="cai_vcodecofc", type="string", length=20, nullable=false)
     */
    private $caiVcodecofc;


}

