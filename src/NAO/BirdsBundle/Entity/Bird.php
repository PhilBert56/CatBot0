<?php

namespace NAO\BirdsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bird
 * 
 * @ORM\Table(name="bird")
 * @ORM\Entity(repositoryClass="NAO\BirdsBundle\Repository\BirdRepository")
 */
class Bird
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="ordre", type="string", length=255)
     */
    private $ordre;

    /**
     * @var string
     *
     * @ORM\Column(name="famille", type="string", length=255, nullable=true)
     */
    private $famille;

    /**
     * @var int
     *
     * @ORM\Column(name="cdNom", type="integer", nullable=true)
     */
    private $cdNom;

    /**
     * @var int
     *
     * @ORM\Column(name="cdTaxsup", type="integer", nullable=true)
     */
    private $cdTaxsup;

    /**
     * @var int
     *
     * @ORM\Column(name="cdSup", type="integer")
     */
    private $cdSup;

    /**
     * @var int
     *
     * @ORM\Column(name="cdRef", type="integer", nullable=true)
     */
    private $cdRef;

    /**
     * @var string
     *
     * @ORM\Column(name="rang", type="string", length=255, nullable=true)
     */
    private $rang;

    /**
     * @var string
     *
     * @ORM\Column(name="lbNom", type="string", length=255, nullable=true)
     */
    private $lbNom;

    /**
     * @var string
     *
     * @ORM\Column(name="lbAuteur", type="string", length=255, nullable=true)
     */
    private $lbAuteur;

    /**
     * @var string
     *
     * @ORM\Column(name="nomComplet", type="string", length=255, nullable=true)
     */
    private $nomComplet;

    /**
     * @var string
     *
     * @ORM\Column(name="nomCompletHtml", type="string", length=255, nullable=true)
     */
    private $nomCompletHtml;

    /**
     * @var string
     *
     * @ORM\Column(name="nomVernFr", type="string", length=255, nullable=true)
     */
    private $nomVernFr;

    /**
     * @var string
     *
     * @ORM\Column(name="nomVernEn", type="string", length=255, nullable=true)
     */
    private $nomVernEn;

    /**
     * @var int
     *
     * @ORM\Column(name="codeHabitat", type="integer", nullable=true)
     */
    private $codeHabitat;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=true)
     */
    private $url;

    /**
     * @var int
     *
     * @ORM\Column(name="codeTaille", type="integer", nullable=true)
     */
    private $codeTaille;

    /**
     * @var int
     *
     * @ORM\Column(name="codePlume", type="integer", nullable=true)
     */
    private $codePlumes;

    /**
     * @var int
     *
     * @ORM\Column(name="codeBec", type="integer", nullable=true)
     */
    private $codeBec;

    /**
     * @var int
     *
     * @ORM\Column(name="codePatte", type="integer", nullable=true)
     */
    private $codePattes;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set ordre
     *
     * @param string $ordre
     *
     * @return Bird
     */
    public function setOrdre($ordre)
    {
        $this->ordre = $ordre;

        return $this;
    }

    /**
     * Get ordre
     *
     * @return string
     */
    public function getOrdre()
    {
        return $this->ordre;
    }

    /**
     * Set famille
     *
     * @param string $famille
     *
     * @return Bird
     */
    public function setFamille($famille)
    {
        $this->famille = $famille;

        return $this;
    }

    /**
     * Get famille
     *
     * @return string
     */
    public function getFamille()
    {
        return $this->famille;
    }

    /**
     * Set cdNom
     *
     * @param integer $cdNom
     *
     * @return Bird
     */
    public function setCdNom($cdNom)
    {
        $this->cdNom = $cdNom;

        return $this;
    }

    /**
     * Get cdNom
     *
     * @return int
     */
    public function getCdNom()
    {
        return $this->cdNom;
    }

    /**
     * Set cdTaxsup
     *
     * @param integer $cdTaxsup
     *
     * @return Bird
     */
    public function setCdTaxsup($cdTaxsup)
    {
        $this->cdTaxsup = $cdTaxsup;

        return $this;
    }

    /**
     * Get cdTaxsup
     *
     * @return int
     */
    public function getCdTaxsup()
    {
        return $this->cdTaxsup;
    }

    /**
     * Set cdSup
     *
     * @param integer $cdSup
     *
     * @return Bird
     */
    public function setCdSup($cdSup)
    {
        $this->cdSup = $cdSup;

        return $this;
    }

    /**
     * Get cdSup
     *
     * @return int
     */
    public function getCdSup()
    {
        return $this->cdSup;
    }

    /**
     * Set cdRef
     *
     * @param integer $cdRef
     *
     * @return Bird
     */
    public function setCdRef($cdRef)
    {
        $this->cdRef = $cdRef;

        return $this;
    }

    /**
     * Get cdRef
     *
     * @return int
     */
    public function getCdRef()
    {
        return $this->cdRef;
    }

    /**
     * Set rang
     *
     * @param string $rang
     *
     * @return Bird
     */
    public function setRang($rang)
    {
        $this->rang = $rang;

        return $this;
    }

    /**
     * Get rang
     *
     * @return string
     */
    public function getRang()
    {
        return $this->rang;
    }

    /**
     * Set lbNom
     *
     * @param string $lbNom
     *
     * @return Bird
     */
    public function setLbNom($lbNom)
    {
        $this->lbNom = $lbNom;

        return $this;
    }

    /**
     * Get lbNom
     *
     * @return string
     */
    public function getLbNom()
    {
        return $this->lbNom;
    }

    /**
     * Set lbAuteur
     *
     * @param string $lbAuteur
     *
     * @return Bird
     */
    public function setLbAuteur($lbAuteur)
    {
        $this->lbAuteur = $lbAuteur;

        return $this;
    }

    /**
     * Get lbAuteur
     *
     * @return string
     */
    public function getLbAuteur()
    {
        return $this->lbAuteur;
    }

    /**
     * Set nomComplet
     *
     * @param string $nomComplet
     *
     * @return Bird
     */
    public function setNomComplet($nomComplet)
    {
        $this->nomComplet = $nomComplet;

        return $this;
    }

    /**
     * Get nomComplet
     *
     * @return string
     */
    public function getNomComplet()
    {
        return $this->nomComplet;
    }

    /**
     * Set nomCompletHtml
     *
     * @param string $nomCompletHtml
     *
     * @return Bird
     */
    public function setNomCompletHtml($nomCompletHtml)
    {
        $this->nomCompletHtml = $nomCompletHtml;

        return $this;
    }

    /**
     * Get nomCompletHtml
     *
     * @return string
     */
    public function getNomCompletHtml()
    {
        return $this->nomCompletHtml;
    }

    /**
     * Set nomVernFr
     *
     * @param string $nomVernFr
     *
     * @return Bird
     */
    public function setNomVernFr($nomVernFr)
    {
        $this->nomVernFr = $nomVernFr;

        return $this;
    }

    /**
     * Get nomVernFr
     *
     * @return string
     */
    public function getNomVernFr()
    {
        return $this->nomVernFr;
    }

    /**
     * Set nomVernEn
     *
     * @param string $nomVernEn
     *
     * @return Bird
     */
    public function setNomVernEn($nomVernEn)
    {
        $this->nomVernEn = $nomVernEn;

        return $this;
    }

    /**
     * Get nomVernEn
     *
     * @return string
     */
    public function getNomVernEn()
    {
        return $this->nomVernEn;
    }

    /**
     * Set codeHabitat
     *
     * @param integer $codeHabitat
     *
     * @return Bird
     */
    public function setCodeHabitat($codeHabitat)
    {
        $this->codeHabitat = $codeHabitat;

        return $this;
    }

    /**
     * Get codeHabitat
     *
     * @return int
     */
    public function getCodeHabitat()
    {
        return $this->codeHabitat;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return Bird
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set codeTaille
     *
     * @param integer $codeTaille
     *
     * @return Bird
     */
    public function setCodeTaille($codeTaille)
    {
        $this->codeTaille = $codeTaille;

        return $this;
    }

    /**
     * Get codeTaille
     *
     * @return int
     */
    public function getCodeTaille()
    {
        return $this->codeTaille;
    }

    /**
     * Set codePlumes
     *
     * @param integer $codePlumes
     *
     * @return Bird
     */
    public function setCodePlumes($codePlumes)
    {
        $this->codePlumes = $codePlumes;

        return $this;
    }

    /**
     * Get codePlumes
     *
     * @return int
     */
    public function getCodePlumes()
    {
        return $this->codePlumes;
    }

    /**
     * Set codeBec
     *
     * @param integer $codeBec
     *
     * @return Bird
     */
    public function setCodeBec($codeBec)
    {
        $this->codeBec = $codeBec;

        return $this;
    }

    /**
     * Get codeBec
     *
     * @return int
     */
    public function getCodeBec()
    {
        return $this->codeBec;
    }

    /**
     * Set codePattes
     *
     * @param integer $codePattes
     *
     * @return Bird
     */
    public function setCodePattes($codePattes)
    {
        $this->codePattes = $codePattes;

        return $this;
    }

    /**
     * Get codePattes
     *
     * @return int
     */
    public function getCodePattes()
    {
        return $this->codePattes;
    }
}
