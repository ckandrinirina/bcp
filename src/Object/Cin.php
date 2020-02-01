<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cin
 *
 * @ORM\Table(name="cin")
 * @ORM\Entity
 */
class Cin
{
    /**
     * @var string
     *
     * @ORM\Column(name="cin_vcode", type="string", length=40, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cinVcode = '';

    /**
     * @var string
     *
     * @ORM\Column(name="cin_vcaisse", type="string", length=12, nullable=false)
     */
    private $cinVcaisse = '';

    /**
     * @var string
     *
     * @ORM\Column(name="cin_vcli", type="string", length=20, nullable=false)
     */
    private $cinVcli = '';

    /**
     * @var string
     *
     * @ORM\Column(name="cin_vnom", type="string", length=100, nullable=false)
     */
    private $cinVnom = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="cin_dsys", type="date", nullable=false)
     */
    private $cinDsys = '0000-00-00';


}

