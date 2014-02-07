<?php

namespace Panel\PanelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TiposTransacciones
 */
class TiposTransacciones
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $transaccion;

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
     * Set transaccion
     *
     * @param string $transaccion
     * @return TiposTransacciones
     */
    public function setTransaccion($transaccion)
    {
        $this->transaccion = $transaccion;
    
        return $this;
    }

    /**
     * Get transaccion
     *
     * @return string 
     */
    public function getTransaccion()
    {
        return $this->transaccion;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return TiposTransacciones
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
