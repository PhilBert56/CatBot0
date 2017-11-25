<?php

namespace NAO\BirdsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VisualBird
 *
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="NAO\BirdsBundle\Repository\VisualBirdRepository")
 */
class VisualBird
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
     * @ORM\Column(name="cdNom", type="string", length=255)
     */
    private $cdNom;

    /**
     * @var string
     *
     *@ORM\Column(name="taille", type="string", length=255)
     */
    private $taille;

    /**
     * @var string
     */
    private $couleursPlumes;

    /**
     * @var string
     */
    private $couleursPattes;

    /**
     * @var string
     */
    private $couleursBec;

    /**
     * @var string
     */
    private $longueurBec;

    /**
     * @var string
     */
    private $formeBec;

    /**
     * @var string
     */
    private $epaisseurBec;

    /**
     * @var string
     *
     * * @ORM\Column(name="nomCommun", type="string", length=255)
     */
    private $nomCommun;

    /**
     * @var string
     */
    private $imageFile;

    /**
     * @var string
     */
    private $fileExtension;


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
     * Set cdNom
     *
     * @param string $cdNom
     *
     * @return VisualBird
     */
    public function setCdNom($cdNom)
    {
        $this->cdNom = $cdNom;

        return $this;
    }

    /**
     * Get cdNom
     *
     * @return string
     */
    public function getCdNom()
    {
        return $this->cdNom;
    }

    /**
     * Set taille
     *
     * @param string $taille
     *
     * @return VisualBird
     */
    public function setTaille($taille)
    {
        $this->taille = $taille;

        return $this;
    }

    /**
     * Get taille
     *
     * @return string
     */
    public function getTaille()
    {
        return $this->taille;
    }

    /**
     * Set couleursPlumes
     *
     * @param string $couleursPlumes
     *
     * @return VisualBird
     */
    public function setCouleursPlumes($couleursPlumes)
    {
        $this->couleursPlumes = $couleursPlumes;

        return $this;
    }

    /**
     * Get couleursPlumes
     *
     * @return string
     */
    public function getCouleursPlumes()
    {
        return $this->couleursPlumes;
    }

    /**
     * Set couleursPattes
     *
     * @param string $couleursPattes
     *
     * @return VisualBird
     */
    public function setCouleursPattes($couleursPattes)
    {
        $this->couleursPattes = $couleursPattes;

        return $this;
    }

    /**
     * Get couleursPattes
     *
     * @return string
     */
    public function getCouleursPattes()
    {
        return $this->couleursPattes;
    }

    /**
     * Set couleursBec
     *
     * @param string $couleursBec
     *
     * @return VisualBird
     */
    public function setCouleursBec($couleursBec)
    {
        $this->couleursBec = $couleursBec;

        return $this;
    }

    /**
     * Get couleursBec
     *
     * @return string
     */
    public function getCouleursBec()
    {
        return $this->couleursBec;
    }

    /**
     * Set longueurBec
     *
     * @param string $longueurBec
     *
     * @return VisualBird
     */
    public function setLongueurBec($longueurBec)
    {
        $this->longueurBec = $longueurBec;

        return $this;
    }

    /**
     * Get longueurBec
     *
     * @return string
     */
    public function getLongueurBec()
    {
        return $this->longueurBec;
    }

    /**
     * Set formeBec
     *
     * @param string $formeBec
     *
     * @return VisualBird
     */
    public function setFormeBec($formeBec)
    {
        $this->formeBec = $formeBec;

        return $this;
    }

    /**
     * Get formeBec
     *
     * @return string
     */
    public function getFormeBec()
    {
        return $this->formeBec;
    }

    /**
     * Set epaisseurBec
     *
     * @param string $epaisseurBec
     *
     * @return VisualBird
     */
    public function setEpaisseurBec($epaisseurBec)
    {
        $this->epaisseurBec = $epaisseurBec;

        return $this;
    }

    /**
     * Get epaisseurBec
     *
     * @return string
     */
    public function getEpaisseurBec()
    {
        return $this->epaisseurBec;
    }

    /**
     * Set nomCommun
     *
     * @param string $nomCommun
     *
     * @return VisualBird
     */
    public function setNomCommun($nomCommun)
    {
        $this->nomCommun = $nomCommun;

        return $this;
    }

    /**
     * Get nomCommun
     *
     * @return string
     */
    public function getNomCommun()
    {
        return $this->nomCommun;
    }

    /**
     * Set imageFile
     *
     * @param string $imageFile
     *
     * @return VisualBird
     */
    public function setImageFile($imageFile)
    {
        $this->imageFile = $imageFile;

        return $this;
    }

    /**
     * Get imageFile
     *
     * @return string
     */
    public function getImageFile()
    {
        return $this->imageFile;
    }

    /**
     * Set fileExtension
     *
     * @param string $fileExtension
     *
     * @return VisualBird
     */
    public function setFileExtension($fileExtension)
    {
        $this->fileExtension = $fileExtension;

        return $this;
    }

    /**
     * Get fileExtension
     *
     * @return string
     */
    public function getFileExtension()
    {
        return $this->fileExtension;
    }
}
