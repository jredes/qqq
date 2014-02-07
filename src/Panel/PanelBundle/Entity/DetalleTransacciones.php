<?php

namespace Panel\PanelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DetalleTransacciones
 */
class DetalleTransacciones
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $detCliente;

    /**
     * @var string
     */
    private $cedula;

    /**
     * @var string
     */
    private $nombres;

    /**
     * @var string
     */
    private $apellidos;

    /**
     * @var string
     */
    private $compania;

    /**
     * @var string
     */
    private $direccion;

    /**
     * @var string
     */
    private $telefono;

    /**
     * @var string
     */
    private $fax;

    /**
     * @var string
     */
    private $pais;

    /**
     * @var string
     */
    private $ciudad;

    /**
     * @var string
     */
    private $estado;

    /**
     * @var string
     */
    private $codigoArea;

    /**
     * @var string
     */
    private $pago;

    /**
     * @var string
     */
    private $emaild;


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
     * Set detCliente
     *
     * @param string $detCliente
     * @return DetalleTransacciones
     */
    public function setDetCliente($detCliente)
    {
        $this->detCliente = $detCliente;
    
        return $this;
    }

    /**
     * Get detCliente
     *
     * @return string 
     */
    public function getDetCliente()
    {
        return $this->detCliente;
    }

    /**
     * Set cedula
     *
     * @param string $cedula
     * @return DetalleTransacciones
     */
    public function setCedula($cedula)
    {
        $this->cedula = $cedula;
    
        return $this;
    }

    /**
     * Get cedula
     *
     * @return string 
     */
    public function getCedula()
    {
        return $this->cedula;
    }

    /**
     * Set nombres
     *
     * @param string $nombres
     * @return DetalleTransacciones
     */
    public function setNombres($nombres)
    {
        $this->nombres = $nombres;
    
        return $this;
    }

    /**
     * Get nombres
     *
     * @return string 
     */
    public function getNombres()
    {
        return $this->nombres;
    }

    /**
     * Set apellidos
     *
     * @param string $apellidos
     * @return DetalleTransacciones
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;
    
        return $this;
    }

    /**
     * Get apellidos
     *
     * @return string 
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set compania
     *
     * @param string $compania
     * @return DetalleTransacciones
     */
    public function setCompania($compania)
    {
        $this->compania = $compania;
    
        return $this;
    }

    /**
     * Get compania
     *
     * @return string 
     */
    public function getCompania()
    {
        return $this->compania;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     * @return DetalleTransacciones
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    
        return $this;
    }

    /**
     * Get direccion
     *
     * @return string 
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     * @return DetalleTransacciones
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    
        return $this;
    }

    /**
     * Get telefono
     *
     * @return string 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set fax
     *
     * @param string $fax
     * @return DetalleTransacciones
     */
    public function setFax($fax)
    {
        $this->fax = $fax;
    
        return $this;
    }

    /**
     * Get fax
     *
     * @return string 
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set pais
     *
     * @param string $pais
     * @return DetalleTransacciones
     */
    public function setPais($pais)
    {
        $this->pais = $pais;
    
        return $this;
    }

    /**
     * Get pais
     *
     * @return string 
     */
    public function getPais()
    {
        return $this->pais;
    }

    /**
     * Set ciudad
     *
     * @param string $ciudad
     * @return DetalleTransacciones
     */
    public function setCiudad($ciudad)
    {
        $this->ciudad = $ciudad;
    
        return $this;
    }

    /**
     * Get ciudad
     *
     * @return string 
     */
    public function getCiudad()
    {
        return $this->ciudad;
    }

    /**
     * Set estado
     *
     * @param string $estado
     * @return DetalleTransacciones
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;
    
        return $this;
    }

    /**
     * Get estado
     *
     * @return string 
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set codigoArea
     *
     * @param string $codigoArea
     * @return DetalleTransacciones
     */
    public function setCodigoArea($codigoArea)
    {
        $this->codigoArea = $codigoArea;
    
        return $this;
    }

    /**
     * Get codigoArea
     *
     * @return string 
     */
    public function getCodigoArea()
    {
        return $this->codigoArea;
    }

    /**
     * Set pago
     *
     * @param string $pago
     * @return DetalleTransacciones
     */
    public function setPago($pago)
    {
        $this->pago = $pago;
    
        return $this;
    }

    /**
     * Get pago
     *
     * @return string 
     */
    public function getPago()
    {
        return $this->pago;
    }

    /**
     * Set emaild
     *
     * @param string $emaild
     * @return DetalleTransacciones
     */
    public function setEmaild($emaild)
    {
        $this->emaild = $emaild;
    
        return $this;
    }

    /**
     * Get emaild
     *
     * @return string 
     */
    public function getEmaild()
    {
        return $this->emaild;
    }
}
