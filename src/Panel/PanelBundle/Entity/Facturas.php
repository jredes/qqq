<?php

namespace Panel\PanelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Facturas
 */
class Facturas
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $fecha;

    /**
     * @var integer
     */
    private $idCliente;

    /**
     * @var string
     */
    private $consecutivo;

    /**
     * @var string
     */
    private $concepto;

    /**
     * @var integer
     */
    private $total;

    /**
     * @var integer
     */
    private $iva;

    /**
     * @var integer
     */
    private $descuento;

    /**
     * @var integer
     */
    private $idEstado;

    /**
     * @var integer
     */
    private $valorDescuento;

    /**
     * @var integer
     */
    private $totalNeto;

    /**
     * @var string
     */
    private $observaciones;


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
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Facturas
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    
        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set idCliente
     *
     * @param integer $idCliente
     * @return Facturas
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
     * Set consecutivo
     *
     * @param string $consecutivo
     * @return Facturas
     */
    public function setConsecutivo($consecutivo)
    {
        $this->consecutivo = $consecutivo;
    
        return $this;
    }

    /**
     * Get consecutivo
     *
     * @return string 
     */
    public function getConsecutivo()
    {
        return $this->consecutivo;
    }

    /**
     * Set concepto
     *
     * @param string $concepto
     * @return Facturas
     */
    public function setConcepto($concepto)
    {
        $this->concepto = $concepto;
    
        return $this;
    }

    /**
     * Get concepto
     *
     * @return string 
     */
    public function getConcepto()
    {
        return $this->concepto;
    }

    /**
     * Set total
     *
     * @param integer $total
     * @return Facturas
     */
    public function setTotal($total)
    {
        $this->total = $total;
    
        return $this;
    }

    /**
     * Get total
     *
     * @return integer 
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Set iva
     *
     * @param integer $iva
     * @return Facturas
     */
    public function setIva($iva)
    {
        $this->iva = $iva;
    
        return $this;
    }

    /**
     * Get iva
     *
     * @return integer 
     */
    public function getIva()
    {
        return $this->iva;
    }

    /**
     * Set descuento
     *
     * @param integer $descuento
     * @return Facturas
     */
    public function setDescuento($descuento)
    {
        $this->descuento = $descuento;
    
        return $this;
    }

    /**
     * Get descuento
     *
     * @return integer 
     */
    public function getDescuento()
    {
        return $this->descuento;
    }

    /**
     * Set idEstado
     *
     * @param integer $idEstado
     * @return Facturas
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
     * Set valorDescuento
     *
     * @param integer $valorDescuento
     * @return Facturas
     */
    public function setValorDescuento($valorDescuento)
    {
        $this->valorDescuento = $valorDescuento;
    
        return $this;
    }

    /**
     * Get valorDescuento
     *
     * @return integer 
     */
    public function getValorDescuento()
    {
        return $this->valorDescuento;
    }

    /**
     * Set totalNeto
     *
     * @param integer $totalNeto
     * @return Facturas
     */
    public function setTotalNeto($totalNeto)
    {
        $this->totalNeto = $totalNeto;
    
        return $this;
    }

    /**
     * Get totalNeto
     *
     * @return integer 
     */
    public function getTotalNeto()
    {
        return $this->totalNeto;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     * @return Facturas
     */
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;
    
        return $this;
    }

    /**
     * Get observaciones
     *
     * @return string 
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }
}
