<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProduitEpargne
 *
 * @ORM\Table(name="produit_epargne")
 * @ORM\Entity
 */
class ProduitEpargne
{
    /**
     * @var string
     *
     * @ORM\Column(name="pep_vcode", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pepVcode = '';

    /**
     * @var string
     *
     * @ORM\Column(name="pep_vlib", type="string", length=100, nullable=false)
     */
    private $pepVlib = '';

    /**
     * @var float
     *
     * @ORM\Column(name="pep_fduree", type="float", precision=6, scale=2, nullable=false)
     */
    private $pepFduree = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="pep_fduree2", type="float", precision=15, scale=2, nullable=false)
     */
    private $pepFduree2 = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="pep_fti", type="float", precision=11, scale=7, nullable=false)
     */
    private $pepFti = '0.0000000';

    /**
     * @var float
     *
     * @ORM\Column(name="pep_ftt", type="float", precision=6, scale=2, nullable=false)
     */
    private $pepFtt = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="pep_ftbonifie", type="float", precision=11, scale=7, nullable=false)
     */
    private $pepFtbonifie = '0.0000000';

    /**
     * @var float
     *
     * @ORM\Column(name="pep_fmntmin", type="float", precision=15, scale=2, nullable=false)
     */
    private $pepFmntmin = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="pep_fmntmax", type="float", precision=15, scale=2, nullable=false)
     */
    private $pepFmntmax = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="pep_vperioech", type="string", length=20, nullable=false)
     */
    private $pepVperioech = '';

    /**
     * @var string
     *
     * @ORM\Column(name="pep_vperioint", type="string", length=20, nullable=false)
     */
    private $pepVperioint = '';

    /**
     * @var string
     *
     * @ORM\Column(name="pep_vsortint", type="string", length=20, nullable=false)
     */
    private $pepVsortint = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pep_dsys", type="date", nullable=false)
     */
    private $pepDsys = '0000-00-00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pep_tsys", type="time", nullable=false)
     */
    private $pepTsys = '00:00:00';

    /**
     * @var string
     *
     * @ORM\Column(name="pep_vcodeut", type="string", length=20, nullable=false)
     */
    private $pepVcodeut = '';

    /**
     * @var string
     *
     * @ORM\Column(name="pep_vcodetpe", type="string", length=20, nullable=false)
     */
    private $pepVcodetpe = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pep_dvaliddeb", type="date", nullable=false)
     */
    private $pepDvaliddeb = '0000-00-00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pep_dvalidfin", type="date", nullable=false)
     */
    private $pepDvalidfin = '0000-00-00';

    /**
     * @var float
     *
     * @ORM\Column(name="pep_fpentx", type="float", precision=6, scale=2, nullable=false)
     */
    private $pepFpentx = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="pep_fpenfo", type="float", precision=15, scale=2, nullable=false)
     */
    private $pepFpenfo = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="pep_vdefaut", type="string", length=3, nullable=false)
     */
    private $pepVdefaut = '';

    /**
     * @var string
     *
     * @ORM\Column(name="pep_vcalcdur", type="string", length=20, nullable=false)
     */
    private $pepVcalcdur = '';

    /**
     * @var string
     *
     * @ORM\Column(name="pep_vnegatif", type="string", length=3, nullable=false)
     */
    private $pepVnegatif = '';

    /**
     * @var string
     *
     * @ORM\Column(name="pep_vcptcpt", type="string", length=20, nullable=false)
     */
    private $pepVcptcpt = '';

    /**
     * @var string
     *
     * @ORM\Column(name="pep_vcptcharg", type="string", length=20, nullable=false)
     */
    private $pepVcptcharg = '';

    /**
     * @var string
     *
     * @ORM\Column(name="pep_vcptpenal", type="string", length=20, nullable=false)
     */
    private $pepVcptpenal = '';

    /**
     * @var string
     *
     * @ORM\Column(name="pep_vcpt_ircm", type="string", length=20, nullable=false)
     */
    private $pepVcptIrcm;

    /**
     * @var string
     *
     * @ORM\Column(name="pep_vcpt_taxe", type="string", length=20, nullable=false)
     */
    private $pepVcptTaxe;

    /**
     * @var integer
     *
     * @ORM\Column(name="pep_inbjinactif", type="integer", nullable=false)
     */
    private $pepInbjinactif = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="pep_vblocage", type="string", length=3, nullable=false)
     */
    private $pepVblocage = '';

    /**
     * @var string
     *
     * @ORM\Column(name="pep_vjoint", type="string", length=3, nullable=false)
     */
    private $pepVjoint = '';

    /**
     * @var string
     *
     * @ORM\Column(name="pep_vnatblocage", type="string", length=20, nullable=false)
     */
    private $pepVnatblocage = '';

    /**
     * @var string
     *
     * @ORM\Column(name="pep_vindatpal", type="string", length=20, nullable=false)
     */
    private $pepVindatpal;

    /**
     * @var float
     *
     * @ORM\Column(name="pep_fdecouvertmax", type="float", precision=15, scale=2, nullable=false)
     */
    private $pepFdecouvertmax;

    /**
     * @var string
     *
     * @ORM\Column(name="pep_vfincontrat", type="string", length=60, nullable=false)
     */
    private $pepVfincontrat;

    /**
     * @var string
     *
     * @ORM\Column(name="pep_vviredat", type="string", length=3, nullable=false)
     */
    private $pepVviredat;

    /**
     * @var string
     *
     * @ORM\Column(name="pep_vsinviredat", type="string", length=60, nullable=false)
     */
    private $pepVsinviredat;

    /**
     * @var string
     *
     * @ORM\Column(name="pep_vechmode", type="string", length=20, nullable=false)
     */
    private $pepVechmode;

    /**
     * @var integer
     *
     * @ORM\Column(name="pep_inbdec", type="integer", nullable=false)
     */
    private $pepInbdec;

    /**
     * @var string
     *
     * @ORM\Column(name="pep_varrondi", type="string", length=20, nullable=false)
     */
    private $pepVarrondi;

    /**
     * @var string
     *
     * @ORM\Column(name="pep_vrupture", type="string", length=3, nullable=false)
     */
    private $pepVrupture;

    /**
     * @var string
     *
     * @ORM\Column(name="pep_vpaiein", type="string", length=3, nullable=false)
     */
    private $pepVpaiein;

    /**
     * @var string
     *
     * @ORM\Column(name="pep_vcpt_chargeapayer", type="string", length=20, nullable=false)
     */
    private $pepVcptChargeapayer;

    /**
     * @var string
     *
     * @ORM\Column(name="pep_vtype", type="string", length=20, nullable=false)
     */
    private $pepVtype;

    /**
     * @var float
     *
     * @ORM\Column(name="pep_fdepotmin", type="float", precision=15, scale=2, nullable=false)
     */
    private $pepFdepotmin;

    /**
     * @var float
     *
     * @ORM\Column(name="pep_fsoldemin", type="float", precision=15, scale=2, nullable=false)
     */
    private $pepFsoldemin;

    /**
     * @var float
     *
     * @ORM\Column(name="pep_fclot", type="float", precision=15, scale=2, nullable=false)
     */
    private $pepFclot;

    /**
     * @var string
     *
     * @ORM\Column(name="pep_vtauxin", type="string", length=20, nullable=false)
     */
    private $pepVtauxin;

    /**
     * @var string
     *
     * @ORM\Column(name="pep_vpaldvaldep", type="string", length=20, nullable=false)
     */
    private $pepVpaldvaldep;

    /**
     * @var string
     *
     * @ORM\Column(name="pep_vpaldvalret", type="string", length=20, nullable=false)
     */
    private $pepVpaldvalret;

    /**
     * @var string
     *
     * @ORM\Column(name="pep_vin_negatif", type="string", length=3, nullable=false)
     */
    private $pepVinNegatif;

    /**
     * @var string
     *
     * @ORM\Column(name="pep_vmnt_calcin", type="string", length=30, nullable=true)
     */
    private $pepVmntCalcin;

    /**
     * @var string
     *
     * @ORM\Column(name="pep_vduree", type="string", length=20, nullable=false)
     */
    private $pepVduree;

    /**
     * @var float
     *
     * @ORM\Column(name="pep_fmntmaxdep", type="float", precision=15, scale=2, nullable=false)
     */
    private $pepFmntmaxdep;

    /**
     * @var float
     *
     * @ORM\Column(name="pep_fmntmaxret", type="float", precision=15, scale=2, nullable=false)
     */
    private $pepFmntmaxret;

    /**
     * @var float
     *
     * @ORM\Column(name="pep_fti_neg", type="float", precision=11, scale=7, nullable=false)
     */
    private $pepFtiNeg = '0.0000000';

    /**
     * @var float
     *
     * @ORM\Column(name="pep_fmntmin_renum", type="float", precision=15, scale=2, nullable=false)
     */
    private $pepFmntminRenum;

    /**
     * @var string
     *
     * @ORM\Column(name="pep_vcpt_inactif", type="string", length=20, nullable=false)
     */
    private $pepVcptInactif;

    /**
     * @var string
     *
     * @ORM\Column(name="pep_vperio_calcint", type="string", length=20, nullable=false)
     */
    private $pepVperioCalcint;

    /**
     * @var string
     *
     * @ORM\Column(name="pep_vanccode", type="string", length=20, nullable=false)
     */
    private $pepVanccode;

    /**
     * @var float
     *
     * @ORM\Column(name="pep_ffg_forfait", type="float", precision=15, scale=2, nullable=false)
     */
    private $pepFfgForfait;

    /**
     * @var string
     *
     * @ORM\Column(name="pep_vfg_perio", type="string", length=20, nullable=false)
     */
    private $pepVfgPerio;

    /**
     * @var float
     *
     * @ORM\Column(name="pep_ffg_tt", type="float", precision=6, scale=2, nullable=false)
     */
    private $pepFfgTt;

    /**
     * @var integer
     *
     * @ORM\Column(name="pep_ifg_slddebit", type="integer", nullable=false)
     */
    private $pepIfgSlddebit;

    /**
     * @var integer
     *
     * @ORM\Column(name="pep_ifg_jour", type="integer", nullable=false)
     */
    private $pepIfgJour;

    /**
     * @var float
     *
     * @ORM\Column(name="pep_ftircm", type="float", precision=6, scale=2, nullable=false)
     */
    private $pepFtircm;

    /**
     * @var string
     *
     * @ORM\Column(name="pep_vversin_neg", type="string", length=3, nullable=false)
     */
    private $pepVversinNeg;

    /**
     * @var integer
     *
     * @ORM\Column(name="pep_inontres_besoin", type="integer", nullable=false)
     */
    private $pepInontresBesoin;

    /**
     * @var integer
     *
     * @ORM\Column(name="pep_iage", type="integer", nullable=false)
     */
    private $pepIage;

    /**
     * @var integer
     *
     * @ORM\Column(name="pep_iage2", type="integer", nullable=false)
     */
    private $pepIage2;

    /**
     * @var integer
     *
     * @ORM\Column(name="pep_iagemandataire", type="integer", nullable=false)
     */
    private $pepIagemandataire;

    /**
     * @var integer
     *
     * @ORM\Column(name="pep_inbechrupt", type="integer", nullable=false)
     */
    private $pepInbechrupt;

    /**
     * @var string
     *
     * @ORM\Column(name="pep_vfgmdeduitrupt", type="string", length=3, nullable=false)
     */
    private $pepVfgmdeduitrupt;

    /**
     * @var integer
     *
     * @ORM\Column(name="pep_inon_fgmembre", type="integer", nullable=false)
     */
    private $pepInonFgmembre;

    /**
     * @var string
     *
     * @ORM\Column(name="pep_vechnp_succ_tot", type="string", length=20, nullable=false)
     */
    private $pepVechnpSuccTot;

    /**
     * @var string
     *
     * @ORM\Column(name="pep_vmntperio", type="string", length=20, nullable=false)
     */
    private $pepVmntperio;

    /**
     * @var string
     *
     * @ORM\Column(name="pep_vsortsldrupt", type="string", length=20, nullable=false)
     */
    private $pepVsortsldrupt;

    /**
     * @var string
     *
     * @ORM\Column(name="pep_vtauxnet", type="string", length=4, nullable=false)
     */
    private $pepVtauxnet;

    /**
     * @var string
     *
     * @ORM\Column(name="pep_vpalddispdep", type="string", length=20, nullable=false)
     */
    private $pepVpalddispdep;

    /**
     * @var string
     *
     * @ORM\Column(name="pep_vpalddispret", type="string", length=20, nullable=false)
     */
    private $pepVpalddispret;

    /**
     * @var float
     *
     * @ORM\Column(name="pep_fti_neg_sdpe", type="float", precision=11, scale=7, nullable=false)
     */
    private $pepFtiNegSdpe;

    /**
     * @var string
     *
     * @ORM\Column(name="pep_vperio_drotation", type="string", length=20, nullable=false)
     */
    private $pepVperioDrotation;

    /**
     * @var string
     *
     * @ORM\Column(name="pep_vechmode_drotation", type="string", length=20, nullable=false)
     */
    private $pepVechmodeDrotation;


}

