<?php

namespace Panel\PanelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Paises
 */
class Paises
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
    private $nombrePais;


    /**
     * Set id
     *
     * @param integer $id
     * @return Paises
     */
    public function setId($id)
    {
        $this->id = $id;
    
        return $this;
    }

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
     * @return Paises
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
     * Set nombrePais
     *
     * @param string $nombrePais
     * @return Paises
     */
    public function setNombrePais($nombrePais)
    {
        $this->nombrePais = $nombrePais;
    
        return $this;
    }

    /**
     * Get nombrePais
     *
     * @return string 
     */
    public function getNombrePais()
    {
        return $this->nombrePais;
    }
}
