<?php

namespace NAO\ObservationsBundle\Utilities;

class PreObservation{


private $observerId;
private $latitude;
private $longitude;
private $codeTaille;
private $codePlumes;
private $codePattes;
private $codeBec;
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
    public function getCodeTaille()
    {
        return $this->codeTaille;
    }

    /**
     * @param mixed $codeTaille
     */
    public function setCodeTaille($codeTaille)
    {
        $this->codeTaille = $codeTaille;
    }

    /**
     * @return mixed
     */
    public function getCodePlumes()
    {
        return $this->codePlumes;
    }

    /**
     * @param mixed $codePlumes
     */
    public function setCodePlumes($codePlumes)
    {
        $this->codePlumes = $codePlumes;
    }

    /**
     * @return mixed
     */
    public function getCodePattes()
    {
        return $this->codePattes;
    }

    /**
     * @param mixed $codePattes
     */
    public function setCodePattes($codePattes)
    {
        $this->codePattes = $codePattes;
    }

    /**
     * @return mixed
     */
    public function getCodeBec()
    {
        return $this->codeBec;
    }

    /**
     * @param mixed $codeBec
     */
    public function setCodeBec($codeBec)
    {
        $this->codeBec = $codeBec;
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
