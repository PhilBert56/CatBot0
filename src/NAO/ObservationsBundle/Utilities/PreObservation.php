<?php

namespace NAO\ObservationsBundle\Utilities;

class PreObservation{


private $observerId;
private $latitude;
private $longitude;
private $taille;
private $couleurPlumes;
private $couleurPattes;
private $couleurBec;
private $nomVernFr;

    /**
     * @return mixed
     */
    public function getObserverId()
    {
        return $this->observerId;
    }

    /**
     * @param mixed $observerId
     */
    public function setObserverId($observerId)
    {
        $this->observerId = $observerId;
    }

    /**
     * @return mixed
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @param mixed $latitude
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    }

    /**
     * @return mixed
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @param mixed $longitude
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    }

    /**
     * @return mixed
     */
    public function getTaille()
    {
        return $this->taille;
    }

    /**
     * @param mixed $codeTaille
     */
    public function setTaille($taille)
    {
        $this->taille = $taille;
    }

    /**
     * @return mixed
     */
    public function getCouleurPlumes()
    {
        return $this->couleurPlumes;
    }

    /**
     * @param mixed $codePlumes
     */
    public function setCouleurPlumes($couleurPlumes)
    {
        $this->couleurPlumes = $couleurPlumes;
    }

    /**
     * @return mixed
     */
    public function getCouleurPattes()
    {
        return $this->couleurPattes;
    }

    /**
     * @param mixed $codePattes
     */
    public function setCouleurPattes($couleurPattes)
    {
        $this->couleurPattes = $couleurPattes;
    }

    /**
     * @return mixed
     */
    public function getCouleurBec()
    {
        return $this->couleurBec;
    }

    /**
     * @param mixed $codeBec
     */
    public function setCouleurBec($couleurBec)
    {
        $this->couleurBec = $couleurBec;
    }


    /**
     * @return mixed
     */
    public function getNomVernFr()
    {
        return $this->nomVernFr;
    }

    /**
     * @param mixed $nomVernFr
     */
    public function setNomVernFr($nomVernFr)
    {
        $this->nomVerFr = $nomVernFr;
    }





}
