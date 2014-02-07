<?php

namespace Panel\PanelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Respuestas
 */
class Respuestas
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $idTipo;

    /**
     * @var string
     */
    private $respuesta;

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
     * Set idTipo
     *
     * @param integer $idTipo
     * @return Respuestas
     */
    public function setIdTipo($idTipo)
    {
        $this->idTipo = $idTipo;
    
        return $this;
    }

    /**
     * Get idTipo
     *
     * @return integer 
     */
    public function getIdTipo()
    {
        return $this->idTipo;
    }

    /**
     * Set respuesta
     *
     * @param string $respuesta
     * @return Respuestas
     */
    public function setRespuesta($respuesta)
    {
        $this->respuesta = $respuesta;
    
        return $this;
    }

    /**
     * Get respuesta
     *
     * @return string 
     */
    public function getRespuesta()
    {
        return $this->respuesta;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Respuestas
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
