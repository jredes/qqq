<?php

namespace Panel\PanelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BotonesDonacion
 */
class BotonesDonacion
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
    private $tax;

    /**
     * @var string
     */
    private $amountBase;

    /**
     * @var string
     */
    private $pUrlRespuesta;


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
     * @return BotonesDonacion
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
     * Set descripcion
     *
     * @param string $descripcion
     * @return BotonesDonacion
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
     * @return BotonesDonacion
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
     * @return BotonesDonacion
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
     * Set tax
     *
     * @param string $tax
     * @return BotonesDonacion
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
     * @return BotonesDonacion
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
     * Set pUrlRespuesta
     *
     * @param string $pUrlRespuesta
     * @return BotonesDonacion
     */
    public function setPUrlRespuesta($pUrlRespuesta)
    {
        $this->pUrlRespuesta = $pUrlRespuesta;
    
        return $this;
    }

    /**
     * Get pUrlRespuesta
     *
     * @return string 
     */
    public function getPUrlRespuesta()
    {
        return $this->pUrlRespuesta;
    }
}
