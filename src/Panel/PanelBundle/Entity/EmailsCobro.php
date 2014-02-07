<?php

namespace Panel\PanelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EmailsCobro
 */
class EmailsCobro
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
     * @var string
     */
    private $factura;

    /**
     * @var string
     */
    private $estado;

    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var integer
     */
    private $valor;

    /**
     * @var string
     */
    private $moneda;

    /**
     * @var string
     */
    private $extra1;

    /**
     * @var string
     */
    private $extra2;

    /**
     * @var string
     */
    private $extra3;

    /**
     * @var string
     */
    private $tax;

    /**
     * @var string
     */
    private $amountBase;

    /**
     * @var string
     */
    private $pEmail;

    /**
     * @var string
     */
    private $observacionesEmail;


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
     * @return EmailsCobro
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
     * Set factura
     *
     * @param string $factura
     * @return EmailsCobro
     */
    public function setFactura($factura)
    {
        $this->factura = $factura;
    
        return $this;
    }

    /**
     * Get factura
     *
     * @return string 
     */
    public function getFactura()
    {
        return $this->factura;
    }

    /**
     * Set estado
     *
     * @param string $estado
     * @return EmailsCobro
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
     * Set descripcion
     *
     * @param string $descripcion
     * @return EmailsCobro
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

    /**
     * Set valor
     *
     * @param integer $valor
     * @return EmailsCobro
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
     * Set moneda
     *
     * @param string $moneda
     * @return EmailsCobro
     */
    public function setMoneda($moneda)
    {
        $this->moneda = $moneda;
    
        return $this;
    }

    /**
     * Get moneda
     *
     * @return string 
     */
    public function getMoneda()
    {
        return $this->moneda;
    }

    /**
     * Set extra1
     *
     * @param string $extra1
     * @return EmailsCobro
     */
    public function setExtra1($extra1)
    {
        $this->extra1 = $extra1;
    
        return $this;
    }

    /**
     * Get extra1
     *
     * @return string 
     */
    public function getExtra1()
    {
        return $this->extra1;
    }

    /**
     * Set extra2
     *
     * @param string $extra2
     * @return EmailsCobro
     */
    public function setExtra2($extra2)
    {
        $this->extra2 = $extra2;
    
        return $this;
    }

    /**
     * Get extra2
     *
     * @return string 
     */
    public function getExtra2()
    {
        return $this->extra2;
    }

    /**
     * Set extra3
     *
     * @param string $extra3
     * @return EmailsCobro
     */
    public function setExtra3($extra3)
    {
        $this->extra3 = $extra3;
    
        return $this;
    }

    /**
     * Get extra3
     *
     * @return string 
     */
    public function getExtra3()
    {
        return $this->extra3;
    }

    /**
     * Set tax
     *
     * @param string $tax
     * @return EmailsCobro
     */
    public function setTax($tax)
    {
        $this->tax = $tax;
    
        return $this;
    }

    /**
     * Get tax
     *
     * @return string 
     */
    public function getTax()
    {
        return $this->tax;
    }

    /**
     * Set amountBase
     *
     * @param string $amountBase
     * @return EmailsCobro
     */
    public function setAmountBase($amountBase)
    {
        $this->amountBase = $amountBase;
    
        return $this;
    }

    /**
     * Get amountBase
     *
     * @return string 
     */
    public function getAmountBase()
    {
        return $this->amountBase;
    }

    /**
     * Set pEmail
     *
     * @param string $pEmail
     * @return EmailsCobro
     */
    public function setPEmail($pEmail)
    {
        $this->pEmail = $pEmail;
    
        return $this;
    }

    /**
     * Get pEmail
     *
     * @return string 
     */
    public function getPEmail()
    {
        return $this->pEmail;
    }

    /**
     * Set observacionesEmail
     *
     * @param string $observacionesEmail
     * @return EmailsCobro
     */
    public function setObservacionesEmail($observacionesEmail)
    {
        $this->observacionesEmail = $observacionesEmail;
    
        return $this;
    }

    /**
     * Get observacionesEmail
     *
     * @return string 
     */
    public function getObservacionesEmail()
    {
        return $this->observacionesEmail;
    }
}
