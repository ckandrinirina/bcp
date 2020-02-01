<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Etablissement
 *
 * @ORM\Table(name="etablissement")
 * @ORM\Entity
 */
class Etablissement
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
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255, nullable=true)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="fixe", type="string", length=255, nullable=true)
     */
    private $fixe;

    /**
     * @var string
     *
     * @ORM\Column(name="autre", type="string", length=255, nullable=true)
     */
    private $autre;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="site", type="string", length=255, nullable=true)
     */
    private $site;

    /**
     * @var string
     *
     * @ORM\Column(name="specialite", type="string", length=255, nullable=true)
     */
    private $specialite;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float", precision=10, scale=0, nullable=true)
     */
    private $prix;

    /**
     * @var integer
     *
     * @ORM\Column(name="note", type="integer", nullable=true)
     */
    private $note;

    /**
     * @var string
     *
     * @ORM\Column(name="etablissement_type", type="string", length=255, nullable=true)
     */
    private $etablissementType;


}

