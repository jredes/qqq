<?php

namespace Panel\PanelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TiposRespuestas
 */
class TiposRespuestas
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $respuestaTipo;

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
     * Set respuestaTipo
     *
     * @param string $respuestaTipo
     * @return TiposRespuestas
     */
    public function setRespuestaTipo($respuestaTipo)
    {
        $this->respuestaTipo = $respuestaTipo;
    
        return $this;
    }

    /**
     * Get respuestaTipo
     *
     * @return string 
     */
    public function getRespuestaTipo()
    {
        return $this->respuestaTipo;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return TiposRespuestas
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
