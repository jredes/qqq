<?php

namespace Panel\PanelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DetalleClientes
 */
class DetalleClientes
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
     * @var integer
     */
    private $tipocuenta;

    /**
     * @var string
     */
    private $ncuenta;

    /**
     * @var integer
     */
    private $banco;

    /**
     * @var string
     */
    private $titular;

    /**
     * @var string
     */
    private $comisionvisa;

    /**
     * @var string
     */
    private $comisionmaster;

    /**
     * @var string
     */
    private $comisionamerican;

    /**
     * @var string
     */
    private $comisiondiners;

    /**
     * @var string
     */
    private $comisiontransaccion;

    /**
     * @var float
     */
    private $comisionPse;

    /**
     * @var float
     */
    private $comisionTransaccionPse;

    /**
     * @var integer
     */
    private $comisionRetiro;

    /**
     * @var float
     */
    private $saldoCliente;


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
     * @return DetalleClientes
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
     * Set tipocuenta
     *
     * @param integer $tipocuenta
     * @return DetalleClientes
     */
    public function setTipocuenta($tipocuenta)
    {
        $this->tipocuenta = $tipocuenta;
    
        return $this;
    }

    /**
     * Get tipocuenta
     *
     * @return integer 
     */
    public function getTipocuenta()
    {
        return $this->tipocuenta;
    }

    /**
     * Set ncuenta
     *
     * @param string $ncuenta
     * @return DetalleClientes
     */
    public function setNcuenta($ncuenta)
    {
        $this->ncuenta = $ncuenta;
    
        return $this;
    }

    /**
     * Get ncuenta
     *
     * @return string 
     */
    public function getNcuenta()
    {
        return $this->ncuenta;
    }

    /**
     * Set banco
     *
     * @param integer $banco
     * @return DetalleClientes
     */
    public function setBanco($banco)
    {
        $this->banco = $banco;
    
        return $this;
    }

    /**
     * Get banco
     *
     * @return integer 
     */
    public function getBanco()
    {
        return $this->banco;
    }

    /**
     * Set titular
     *
     * @param string $titular
     * @return DetalleClientes
     */
    public function setTitular($titular)
    {
        $this->titular = $titular;
    
        return $this;
    }

    /**
     * Get titular
     *
     * @return string 
     */
    public function getTitular()
    {
        return $this->titular;
    }

    /**
     * Set comisionvisa
     *
     * @param string $comisionvisa
     * @return DetalleClientes
     */
    public function setComisionvisa($comisionvisa)
    {
        $this->comisionvisa = $comisionvisa;
    
        return $this;
    }

    /**
     * Get comisionvisa
     *
     * @return string 
     */
    public function getComisionvisa()
    {
        return $this->comisionvisa;
    }

    /**
     * Set comisionmaster
     *
     * @param string $comisionmaster
     * @return DetalleClientes
     */
    public function setComisionmaster($comisionmaster)
    {
        $this->comisionmaster = $comisionmaster;
    
        return $this;
    }

    /**
     * Get comisionmaster
     *
     * @return string 
     */
    public function getComisionmaster()
    {
        return $this->comisionmaster;
    }

    /**
     * Set comisionamerican
     *
     * @param string $comisionamerican
     * @return DetalleClientes
     */
    public function setComisionamerican($comisionamerican)
    {
        $this->comisionamerican = $comisionamerican;
    
        return $this;
    }

    /**
     * Get comisionamerican
     *
     * @return string 
     */
    public function getComisionamerican()
    {
        return $this->comisionamerican;
    }

    /**
     * Set comisiondiners
     *
     * @param string $comisiondiners
     * @return DetalleClientes
     */
    public function setComisiondiners($comisiondiners)
    {
        $this->comisiondiners = $comisiondiners;
    
        return $this;
    }

    /**
     * Get comisiondiners
     *
     * @return string 
     */
    public function getComisiondiners()
    {
        return $this->comisiondiners;
    }

    /**
     * Set comisiontransaccion
     *
     * @param string $comisiontransaccion
     * @return DetalleClientes
     */
    public function setComisiontransaccion($comisiontransaccion)
    {
        $this->comisiontransaccion = $comisiontransaccion;
    
        return $this;
    }

    /**
     * Get comisiontransaccion
     *
     * @return string 
     */
    public function getComisiontransaccion()
    {
        return $this->comisiontransaccion;
    }

    /**
     * Set comisionPse
     *
     * @param float $comisionPse
     * @return DetalleClientes
     */
    public function setComisionPse($comisionPse)
    {
        $this->comisionPse = $comisionPse;
    
        return $this;
    }

    /**
     * Get comisionPse
     *
     * @return float 
     */
    public function getComisionPse()
    {
        return $this->comisionPse;
    }

    /**
     * Set comisionTransaccionPse
     *
     * @param float $comisionTransaccionPse
     * @return DetalleClientes
     */
    public function setComisionTransaccionPse($comisionTransaccionPse)
    {
        $this->comisionTransaccionPse = $comisionTransaccionPse;
    
        return $this;
    }

    /**
     * Get comisionTransaccionPse
     *
     * @return float 
     */
    public function getComisionTransaccionPse()
    {
        return $this->comisionTransaccionPse;
    }

    /**
     * Set comisionRetiro
     *
     * @param integer $comisionRetiro
     * @return DetalleClientes
     */
    public function setComisionRetiro($comisionRetiro)
    {
        $this->comisionRetiro = $comisionRetiro;
    
        return $this;
    }

    /**
     * Get comisionRetiro
     *
     * @return integer 
     */
    public function getComisionRetiro()
    {
        return $this->comisionRetiro;
    }

    /**
     * Set saldoCliente
     *
     * @param float $saldoCliente
     * @return DetalleClientes
     */
    public function setSaldoCliente($saldoCliente)
    {
        $this->saldoCliente = $saldoCliente;
    
        return $this;
    }

    /**
     * Get saldoCliente
     *
     * @return float 
     */
    public function getSaldoCliente()
    {
        return $this->saldoCliente;
    }
}
