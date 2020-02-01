<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MvtCpt
 *
 * @ORM\Table(name="mvt_cpt", indexes={@ORM\Index(name="mouvement_FKIndex2", columns={"mvt_vcodedo"}), @ORM\Index(name="mouvement_FKIndex3", columns={"mvt_vcodepr"}), @ORM\Index(name="mvt_vcodecpt", columns={"mvt_vcodecpt"}), @ORM\Index(name="mvt_vbranchecpt", columns={"mvt_vbranchecpt"}), @ORM\Index(name="mvt_vbanquecpt", columns={"mvt_vbanquecpt"}), @ORM\Index(name="mvt_vcodeent", columns={"mvt_vcodeent"}), @ORM\Index(name="mvt_vcodetra", columns={"mvt_vcodetra"}), @ORM\Index(name="mvt_ddatevaleur", columns={"mvt_ddatevaleur"}), @ORM\Index(name="mvt_ddate", columns={"mvt_ddate"}), @ORM\Index(name="mvt_vbranchepr", columns={"mvt_vbranchepr"}), @ORM\Index(name="mvt_vbanquepr", columns={"mvt_vbanquepr"}), @ORM\Index(name="mvt_vcodeclt", columns={"mvt_vcodeclt"}), @ORM\Index(name="mvt_vcodedav", columns={"mvt_vcodedav"}), @ORM\Index(name="mvt_vbanquedav", columns={"mvt_vbanquedav"}), @ORM\Index(name="mvt_vbranchedav", columns={"mvt_vbranchedav"}), @ORM\Index(name="mvt_vrecu", columns={"mvt_vrecu"}), @ORM\Index(name="mvt_vjournal", columns={"mvt_vjournal"}), @ORM\Index(name="mvt_vcodeut", columns={"mvt_vcodeut"}), @ORM\Index(name="mvt_vcodemp", columns={"mvt_vcodemp"}), @ORM\Index(name="mvt_vcodeum", columns={"mvt_vcodeum"}), @ORM\Index(name="mvt_vcodeur", columns={"mvt_vcodeur"})})
 * @ORM\Entity
 */
class MvtCpt
{
    /**
     * @var integer
     *
     * @ORM\Column(name="mvt_inum", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $mvtInum = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="mvt_vcodeute", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $mvtVcodeute = '';

    /**
     * @var string
     *
     * @ORM\Column(name="mvt_vcodepr", type="string", length=20, nullable=false)
     */
    private $mvtVcodepr = '';

    /**
     * @var string
     *
     * @ORM\Column(name="mvt_vbanquepr", type="string", length=10, nullable=false)
     */
    private $mvtVbanquepr;

    /**
     * @var string
     *
     * @ORM\Column(name="mvt_vbranchepr", type="string", length=20, nullable=false)
     */
    private $mvtVbranchepr;

    /**
     * @var string
     *
     * @ORM\Column(name="mvt_vribpr", type="string", length=10, nullable=false)
     */
    private $mvtVribpr;

    /**
     * @var string
     *
     * @ORM\Column(name="mvt_vcodedo", type="string", length=20, nullable=false)
     */
    private $mvtVcodedo = '';

    /**
     * @var float
     *
     * @ORM\Column(name="mvt_fmontant", type="float", precision=15, scale=2, nullable=true)
     */
    private $mvtFmontant;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="mvt_ddate", type="date", nullable=true)
     */
    private $mvtDdate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="mvt_ddatevaleur", type="date", nullable=true)
     */
    private $mvtDdatevaleur;

    /**
     * @var float
     *
     * @ORM\Column(name="mvt_fmontantsigne", type="float", precision=15, scale=2, nullable=true)
     */
    private $mvtFmontantsigne;

    /**
     * @var string
     *
     * @ORM\Column(name="mvt_vcodeclt", type="string", length=20, nullable=true)
     */
    private $mvtVcodeclt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="mvt_dsys", type="date", nullable=true)
     */
    private $mvtDsys;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="mvt_tsys", type="time", nullable=true)
     */
    private $mvtTsys;

    /**
     * @var string
     *
     * @ORM\Column(name="mvt_vcodeut", type="string", length=20, nullable=true)
     */
    private $mvtVcodeut;

    /**
     * @var string
     *
     * @ORM\Column(name="mvt_vcodetra", type="string", length=20, nullable=true)
     */
    private $mvtVcodetra;

    /**
     * @var string
     *
     * @ORM\Column(name="mvt_vrecu", type="string", length=20, nullable=true)
     */
    private $mvtVrecu;

    /**
     * @var string
     *
     * @ORM\Column(name="mvt_vrecumanuel", type="string", length=20, nullable=true)
     */
    private $mvtVrecumanuel;

    /**
     * @var string
     *
     * @ORM\Column(name="mvt_vcodemp", type="string", length=20, nullable=true)
     */
    private $mvtVcodemp;

    /**
     * @var string
     *
     * @ORM\Column(name="mvt_vcodeent", type="string", length=20, nullable=true)
     */
    private $mvtVcodeent;

    /**
     * @var string
     *
     * @ORM\Column(name="mvt_vcodeban", type="string", length=20, nullable=false)
     */
    private $mvtVcodeban = '';

    /**
     * @var string
     *
     * @ORM\Column(name="mvt_vvalid", type="string", length=3, nullable=false)
     */
    private $mvtVvalid = '';

    /**
     * @var string
     *
     * @ORM\Column(name="mvt_vannul", type="string", length=3, nullable=false)
     */
    private $mvtVannul = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="mvt_iech", type="integer", nullable=false)
     */
    private $mvtIech = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="mvt_vrecuannul", type="string", length=20, nullable=false)
     */
    private $mvtVrecuannul = '';

    /**
     * @var string
     *
     * @ORM\Column(name="mvt_vcodecpt", type="string", length=20, nullable=false)
     */
    private $mvtVcodecpt = '';

    /**
     * @var string
     *
     * @ORM\Column(name="mvt_vbanquecpt", type="string", length=10, nullable=false)
     */
    private $mvtVbanquecpt;

    /**
     * @var string
     *
     * @ORM\Column(name="mvt_vbranchecpt", type="string", length=20, nullable=false)
     */
    private $mvtVbranchecpt;

    /**
     * @var string
     *
     * @ORM\Column(name="mvt_vribcpt", type="string", length=10, nullable=false)
     */
    private $mvtVribcpt;

    /**
     * @var string
     *
     * @ORM\Column(name="mvt_vcodedav", type="string", length=20, nullable=false)
     */
    private $mvtVcodedav = '';

    /**
     * @var string
     *
     * @ORM\Column(name="mvt_vbanquedav", type="string", length=10, nullable=false)
     */
    private $mvtVbanquedav;

    /**
     * @var string
     *
     * @ORM\Column(name="mvt_vbranchedav", type="string", length=20, nullable=false)
     */
    private $mvtVbranchedav;

    /**
     * @var string
     *
     * @ORM\Column(name="mvt_vribdav", type="string", length=10, nullable=false)
     */
    private $mvtVribdav;

    /**
     * @var string
     *
     * @ORM\Column(name="mvt_venreg", type="string", length=20, nullable=false)
     */
    private $mvtVenreg = '';

    /**
     * @var string
     *
     * @ORM\Column(name="mvt_vlib", type="text", length=65535, nullable=false)
     */
    private $mvtVlib;

    /**
     * @var string
     *
     * @ORM\Column(name="mvt_vanticipe", type="string", length=3, nullable=false)
     */
    private $mvtVanticipe = '';

    /**
     * @var string
     *
     * @ORM\Column(name="mvt_vcompta", type="string", length=1, nullable=false)
     */
    private $mvtVcompta = '';

    /**
     * @var string
     *
     * @ORM\Column(name="mvt_vjournal", type="string", length=40, nullable=false)
     */
    private $mvtVjournal;

    /**
     * @var integer
     *
     * @ORM\Column(name="mvt_iproindex", type="integer", nullable=false)
     */
    private $mvtIproindex = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="mvt_vcodejou", type="string", length=20, nullable=false)
     */
    private $mvtVcodejou = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="mvt_inumdebl", type="integer", nullable=false)
     */
    private $mvtInumdebl = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="mvt_fk", type="float", precision=15, scale=2, nullable=false)
     */
    private $mvtFk = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="mvt_fi", type="float", precision=15, scale=2, nullable=false)
     */
    private $mvtFi = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="mvt_fir", type="float", precision=15, scale=2, nullable=false)
     */
    private $mvtFir = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="mvt_fkext", type="float", precision=15, scale=2, nullable=false)
     */
    private $mvtFkext = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="mvt_fiext", type="float", precision=15, scale=2, nullable=false)
     */
    private $mvtFiext = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="mvt_firext", type="float", precision=15, scale=2, nullable=false)
     */
    private $mvtFirext = '0.00';

    /**
     * @var integer
     *
     * @ORM\Column(name="mvt_inumext", type="integer", nullable=false)
     */
    private $mvtInumext = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="mvt_vkext", type="string", length=20, nullable=false)
     */
    private $mvtVkext = '';

    /**
     * @var string
     *
     * @ORM\Column(name="mvt_viext", type="string", length=20, nullable=false)
     */
    private $mvtViext = '';

    /**
     * @var string
     *
     * @ORM\Column(name="mvt_virext", type="string", length=20, nullable=false)
     */
    private $mvtVirext = '';

    /**
     * @var string
     *
     * @ORM\Column(name="mvt_vkobserv", type="text", length=65535, nullable=false)
     */
    private $mvtVkobserv;

    /**
     * @var string
     *
     * @ORM\Column(name="mvt_viobserv", type="text", length=65535, nullable=false)
     */
    private $mvtViobserv;

    /**
     * @var string
     *
     * @ORM\Column(name="mvt_virobserv", type="text", length=65535, nullable=false)
     */
    private $mvtVirobserv;

    /**
     * @var float
     *
     * @ORM\Column(name="mvt_fikr", type="float", precision=15, scale=2, nullable=false)
     */
    private $mvtFikr = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="mvt_fiir", type="float", precision=15, scale=2, nullable=false)
     */
    private $mvtFiir = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="mvt_fikrext", type="float", precision=15, scale=2, nullable=false)
     */
    private $mvtFikrext = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="mvt_fiirext", type="float", precision=15, scale=2, nullable=false)
     */
    private $mvtFiirext = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="mvt_vikrext", type="string", length=20, nullable=false)
     */
    private $mvtVikrext = '';

    /**
     * @var string
     *
     * @ORM\Column(name="mvt_viirext", type="string", length=20, nullable=false)
     */
    private $mvtViirext = '';

    /**
     * @var string
     *
     * @ORM\Column(name="mvt_vikrobserv", type="text", length=65535, nullable=false)
     */
    private $mvtVikrobserv;

    /**
     * @var string
     *
     * @ORM\Column(name="mvt_viirobserv", type="text", length=65535, nullable=false)
     */
    private $mvtViirobserv;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="mvt_dech", type="date", nullable=false)
     */
    private $mvtDech = '0000-00-00';

    /**
     * @var float
     *
     * @ORM\Column(name="mvt_fmontantext", type="float", precision=15, scale=2, nullable=false)
     */
    private $mvtFmontantext = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="mvt_fmontantsigneext", type="float", precision=15, scale=2, nullable=false)
     */
    private $mvtFmontantsigneext = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="mvt_vextourne", type="string", length=3, nullable=false)
     */
    private $mvtVextourne = '';

    /**
     * @var float
     *
     * @ORM\Column(name="mvt_facompte", type="float", precision=15, scale=2, nullable=false)
     */
    private $mvtFacompte = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="mvt_fqte", type="float", precision=15, scale=2, nullable=false)
     */
    private $mvtFqte;

    /**
     * @var float
     *
     * @ORM\Column(name="mvt_fqtesigne", type="float", precision=15, scale=2, nullable=false)
     */
    private $mvtFqtesigne;

    /**
     * @var string
     *
     * @ORM\Column(name="mvt_vcodetpe", type="string", length=10, nullable=false)
     */
    private $mvtVcodetpe;

    /**
     * @var integer
     *
     * @ORM\Column(name="mvt_idavauto", type="integer", nullable=false)
     */
    private $mvtIdavauto;

    /**
     * @var string
     *
     * @ORM\Column(name="mvt_vcodeper", type="string", length=20, nullable=true)
     */
    private $mvtVcodeper;

    /**
     * @var string
     *
     * @ORM\Column(name="mvt_vcodeanal", type="string", length=10, nullable=false)
     */
    private $mvtVcodeanal;

    /**
     * @var string
     *
     * @ORM\Column(name="mvt_vcodeum", type="string", length=20, nullable=false)
     */
    private $mvtVcodeum;

    /**
     * @var string
     *
     * @ORM\Column(name="mvt_vcodeur", type="string", length=20, nullable=false)
     */
    private $mvtVcodeur;

    /**
     * @var string
     *
     * @ORM\Column(name="mvt_vcodecof", type="string", length=20, nullable=false)
     */
    private $mvtVcodecof;

    /**
     * @var string
     *
     * @ORM\Column(name="mvt_vcofcaidiv", type="string", length=20, nullable=false)
     */
    private $mvtVcofcaidiv;

    /**
     * @var string
     *
     * @ORM\Column(name="mvt_vchq", type="string", length=40, nullable=false)
     */
    private $mvtVchq;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="mvt_dchq", type="date", nullable=false)
     */
    private $mvtDchq;

    /**
     * @var float
     *
     * @ORM\Column(name="mvt_ffarc", type="float", precision=15, scale=2, nullable=false)
     */
    private $mvtFfarc;

    /**
     * @var float
     *
     * @ORM\Column(name="mvt_ffarcdb", type="float", precision=15, scale=2, nullable=false)
     */
    private $mvtFfarcdb;

    /**
     * @var integer
     *
     * @ORM\Column(name="mvt_iancnum", type="integer", nullable=false)
     */
    private $mvtIancnum;

    /**
     * @var integer
     *
     * @ORM\Column(name="mvt_iranti_nbech", type="integer", nullable=false)
     */
    private $mvtIrantiNbech;

    /**
     * @var string
     *
     * @ORM\Column(name="mvt_vcalc_in", type="string", length=3, nullable=false)
     */
    private $mvtVcalcIn;

    /**
     * @var string
     *
     * @ORM\Column(name="mvt_vcodetie", type="string", length=20, nullable=false)
     */
    private $mvtVcodetie;

    /**
     * @var string
     *
     * @ORM\Column(name="mvt_vancute", type="string", length=20, nullable=false)
     */
    private $mvtVancute;

    /**
     * @var string
     *
     * @ORM\Column(name="mvt_vautorisation", type="string", length=40, nullable=false)
     */
    private $mvtVautorisation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="mvt_dttt", type="date", nullable=false)
     */
    private $mvtDttt;

    /**
     * @var string
     *
     * @ORM\Column(name="mvt_vdistant_bqe", type="string", length=20, nullable=false)
     */
    private $mvtVdistantBqe;

    /**
     * @var string
     *
     * @ORM\Column(name="mvt_vdistant_ute", type="string", length=20, nullable=false)
     */
    private $mvtVdistantUte;

    /**
     * @var string
     *
     * @ORM\Column(name="mvt_vid_session", type="string", length=20, nullable=false)
     */
    private $mvtVidSession;

    /**
     * @var string
     *
     * @ORM\Column(name="mvt_vid_origine", type="string", length=20, nullable=false)
     */
    private $mvtVidOrigine;

    /**
     * @var string
     *
     * @ORM\Column(name="mvt_vcarte", type="string", length=20, nullable=false)
     */
    private $mvtVcarte;

    /**
     * @var integer
     *
     * @ORM\Column(name="mvt_iret", type="integer", nullable=false)
     */
    private $mvtIret;

    /**
     * @var integer
     *
     * @ORM\Column(name="mvt_inum_fraisproduit", type="integer", nullable=false)
     */
    private $mvtInumFraisproduit;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="mvt_ddatedisp", type="date", nullable=false)
     */
    private $mvtDdatedisp;

    /**
     * @var string
     *
     * @ORM\Column(name="mvt_vlib_anc", type="text", length=65535, nullable=false)
     */
    private $mvtVlibAnc;

    /**
     * @var integer
     *
     * @ORM\Column(name="mvt_iprofil", type="integer", nullable=false)
     */
    private $mvtIprofil;

    /**
     * @var string
     *
     * @ORM\Column(name="mvt_vcodelde", type="string", length=20, nullable=false)
     */
    private $mvtVcodelde;

    /**
     * @var string
     *
     * @ORM\Column(name="mvt_vdev_compta", type="string", length=1, nullable=false)
     */
    private $mvtVdevCompta;

    /**
     * @var integer
     *
     * @ORM\Column(name="mvt_ipm", type="integer", nullable=false)
     */
    private $mvtIpm;

    /**
     * @var string
     *
     * @ORM\Column(name="mvt_vpm_pin", type="string", length=5, nullable=false)
     */
    private $mvtVpmPin;

    /**
     * @var integer
     *
     * @ORM\Column(name="mvt_ipm_valid", type="integer", nullable=false)
     */
    private $mvtIpmValid;


}

