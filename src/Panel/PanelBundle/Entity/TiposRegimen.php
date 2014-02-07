<?php

namespace Panel\PanelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TiposRegimen
 */
class TiposRegimen
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $regimen;

    /**
     * @var string
     */
    private $descripcion;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set regimen
     *
     * @param string $regimen
     * @return TiposRegimen
     */
    public function setRegimen($regimen)
    {
        $this->regimen = $regimen;
    
        return $this;
    }

    /**
     * Get regimen
     *
     * @return string 
     */
    public function getRegimen()
    {
        return $this->regimen;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return TiposRegimen
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    
        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }
}
