<?php

namespace Panel\PanelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ciudades
 */
class Ciudades
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $codigoPais;

    /**
     * @var string
     */
    private $nombreCiudad;


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
     * Set codigoPais
     *
     * @param string $codigoPais
     * @return Ciudades
     */
    public function setCodigoPais($codigoPais)
    {
        $this->codigoPais = $codigoPais;
    
        return $this;
    }

    /**
     * Get codigoPais
     *
     * @return string 
     */
    public function getCodigoPais()
    {
        return $this->codigoPais;
    }

    /**
     * Set nombreCiudad
     *
     * @param string $nombreCiudad
     * @return Ciudades
     */
    public function setNombreCiudad($nombreCiudad)
    {
        $this->nombreCiudad = $nombreCiudad;
    
        return $this;
    }

    /**
     * Get nombreCiudad
     *
     * @return string 
     */
    public function getNombreCiudad()
    {
        return $this->nombreCiudad;
    }
}
