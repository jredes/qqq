<?php

namespace Panel\PanelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LogUsuarios
 */
class LogUsuarios
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $idUsuario;

    /**
     * @var \DateTime
     */
    private $fechaInicioSesion;

    /**
     * @var \DateTime
     */
    private $fechaFinSesion;

    /**
     * @var string
     */
    private $lugarAcceso;

    /**
     * @var string
     */
    private $direccionIp;

    /**
     * @var string
     */
    private $navegador;

    /**
     * @var integer
     */
    private $estado;


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
     * Set idUsuario
     *
     * @param integer $idUsuario
     * @return LogUsuarios
     */
    public function setIdUsuario($idUsuario)
    {
        $this->idUsuario = $idUsuario;
    
        return $this;
    }

    /**
     * Get idUsuario
     *
     * @return integer 
     */
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    /**
     * Set fechaInicioSesion
     *
     * @param \DateTime $fechaInicioSesion
     * @return LogUsuarios
     */
    public function setFechaInicioSesion($fechaInicioSesion)
    {
        $this->fechaInicioSesion = $fechaInicioSesion;
    
        return $this;
    }

    /**
     * Get fechaInicioSesion
     *
     * @return \DateTime 
     */
    public function getFechaInicioSesion()
    {
        return $this->fechaInicioSesion;
    }

    /**
     * Set fechaFinSesion
     *
     * @param \DateTime $fechaFinSesion
     * @return LogUsuarios
     */
    public function setFechaFinSesion($fechaFinSesion)
    {
        $this->fechaFinSesion = $fechaFinSesion;
    
        return $this;
    }

    /**
     * Get fechaFinSesion
     *
     * @return \DateTime 
     */
    public function getFechaFinSesion()
    {
        return $this->fechaFinSesion;
    }

    /**
     * Set lugarAcceso
     *
     * @param string $lugarAcceso
     * @return LogUsuarios
     */
    public function setLugarAcceso($lugarAcceso)
    {
        $this->lugarAcceso = $lugarAcceso;
    
        return $this;
    }

    /**
     * Get lugarAcceso
     *
     * @return string 
     */
    public function getLugarAcceso()
    {
        return $this->lugarAcceso;
    }

    /**
     * Set direccionIp
     *
     * @param string $direccionIp
     * @return LogUsuarios
     */
    public function setDireccionIp($direccionIp)
    {
        $this->direccionIp = $direccionIp;
    
        return $this;
    }

    /**
     * Get direccionIp
     *
     * @return string 
     */
    public function getDireccionIp()
    {
        return $this->direccionIp;
    }

    /**
     * Set navegador
     *
     * @param string $navegador
     * @return LogUsuarios
     */
    public function setNavegador($navegador)
    {
        $this->navegador = $navegador;
    
        return $this;
    }

    /**
     * Get navegador
     *
     * @return string 
     */
    public function getNavegador()
    {
        return $this->navegador;
    }

    /**
     * Set estado
     *
     * @param integer $estado
     * @return LogUsuarios
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;
    
        return $this;
    }

    /**
     * Get estado
     *
     * @return integer 
     */
    public function getEstado()
    {
        return $this->estado;
    }
}
