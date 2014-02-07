<?php

namespace Panel\PanelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Renovaciones
 */
class Renovaciones
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $idCliente;

    /**
     * @var \DateTime
     */
    private $fechai;

    /**
     * @var \DateTime
     */
    private $fechaf;

    /**
     * @var integer
     */
    private $valor;

    /**
     * @var integer
     */
    private $idEstado;

    /**
     * @var string
     */
    private $imagen;


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
     * Set idCliente
     *
     * @param integer $idCliente
     * @return Renovaciones
     */
    public function setIdCliente($idCliente)
    {
        $this->idCliente = $idCliente;
    
        return $this;
    }

    /**
     * Get idCliente
     *
     * @return integer 
     */
    public function getIdCliente()
    {
        return $this->idCliente;
    }

    /**
     * Set fechai
     *
     * @param \DateTime $fechai
     * @return Renovaciones
     */
    public function setFechai($fechai)
    {
        $this->fechai = $fechai;
    
        return $this;
    }

    /**
     * Get fechai
     *
     * @return \DateTime 
     */
    public function getFechai()
    {
        return $this->fechai;
    }

    /**
     * Set fechaf
     *
     * @param \DateTime $fechaf
     * @return Renovaciones
     */
    public function setFechaf($fechaf)
    {
        $this->fechaf = $fechaf;
    
        return $this;
    }

    /**
     * Get fechaf
     *
     * @return \DateTime 
     */
    public function getFechaf()
    {
        return $this->fechaf;
    }

    /**
     * Set valor
     *
     * @param integer $valor
     * @return Renovaciones
     */
    public function setValor($valor)
    {
        $this->valor = $valor;
    
        return $this;
    }

    /**
     * Get valor
     *
     * @return integer 
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Set idEstado
     *
     * @param integer $idEstado
     * @return Renovaciones
     */
    public function setIdEstado($idEstado)
    {
        $this->idEstado = $idEstado;
    
        return $this;
    }

    /**
     * Get idEstado
     *
     * @return integer 
     */
    public function getIdEstado()
    {
        return $this->idEstado;
    }

    /**
     * Set imagen
     *
     * @param string $imagen
     * @return Renovaciones
     */
    public function setImagen($imagen)
    {
        $this->imagen = $imagen;
    
        return $this;
    }

    /**
     * Get imagen
     *
     * @return string 
     */
    public function getImagen()
    {
        return $this->imagen;
    }
}
