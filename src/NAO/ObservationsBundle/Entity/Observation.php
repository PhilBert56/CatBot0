<?php

namespace NAO\ObservationsBundle\Entity;

/**
 * Observation
 */
class Observation
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $observerId;

    /**
     * @var int
     */
    private $birdId;

    /**
     * @var float
     */
    private $latitude;

    /**
     * @var float
     */
    private $longitude;

    /**
     * @var bool
     */
    private $isValidated;

    /**
     * @var string
     */
    private $validatorId;


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
     * Set observerId
     *
     * @param string $observerId
     *
     * @return Observation
     */
    public function setObserverId($observerId)
    {
        $this->observerId = $observerId;

        return $this;
    }

    /**
     * Get observerId
     *
     * @return string
     */
    public function getObserverId()
    {
        return $this->observerId;
    }

    /**
     * Set birdId
     *
     * @param integer $birdId
     *
     * @return Observation
     */
    public function setBirdId($birdId)
    {
        $this->birdId = $birdId;

        return $this;
    }

    /**
     * Get birdId
     *
     * @return int
     */
    public function getBirdId()
    {
        return $this->birdId;
    }

    /**
     * Set latitude
     *
     * @param float $latitude
     *
     * @return Observation
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return float
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set longitude
     *
     * @param float $longitude
     *
     * @return Observation
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return float
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set isValidated
     *
     * @param boolean $isValidated
     *
     * @return Observation
     */
    public function setIsValidated($isValidated)
    {
        $this->isValidated = $isValidated;

        return $this;
    }

    /**
     * Get isValidated
     *
     * @return bool
     */
    public function getIsValidated()
    {
        return $this->isValidated;
    }

    /**
     * Set validatorId
     *
     * @param string $validatorId
     *
     * @return Observation
     */
    public function setValidatorId($validatorId)
    {
        $this->validatorId = $validatorId;

        return $this;
    }

    /**
     * Get validatorId
     *
     * @return string
     */
    public function getValidatorId()
    {
        return $this->validatorId;
    }
}

