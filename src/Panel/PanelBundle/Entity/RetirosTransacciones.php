<?php

namespace Panel\PanelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RetirosTransacciones
 */
class RetirosTransacciones
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $idTransaccion;

    /**
     * @var integer
     */
    private $idRetiro;

    /**
     * @var float
     */
    private $gananciaCliente;

    /**
     * @var float
     */
    private $dineroRetirado;

    /**
     * @var float
     */
    private $saldo;

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
     * Set idTransaccion
     *
     * @param integer $idTransaccion
     * @return RetirosTransacciones
     */
    public function setIdTransaccion($idTransaccion)
    {
        $this->idTransaccion = $idTransaccion;
    
        return $this;
    }

    /**
     * Get idTransaccion
     *
     * @return integer 
     */
    public function getIdTransaccion()
    {
        return $this->idTransaccion;
    }

    /**
     * Set idRetiro
     *
     * @param integer $idRetiro
     * @return RetirosTransacciones
     */
    public function setIdRetiro($idRetiro)
    {
        $this->idRetiro = $idRetiro;
    
        return $this;
    }

    /**
     * Get idRetiro
     *
     * @return integer 
     */
    public function getIdRetiro()
    {
        return $this->idRetiro;
    }

    /**
     * Set gananciaCliente
     *
     * @param float $gananciaCliente
     * @return RetirosTransacciones
     */
    public function setGananciaCliente($gananciaCliente)
    {
        $this->gananciaCliente = $gananciaCliente;
    
        return $this;
    }

    /**
     * Get gananciaCliente
     *
     * @return float 
     */
    public function getGananciaCliente()
    {
        return $this->gananciaCliente;
    }

    /**
     * Set dineroRetirado
     *
     * @param float $dineroRetirado
     * @return RetirosTransacciones
     */
    public function setDineroRetirado($dineroRetirado)
    {
        $this->dineroRetirado = $dineroRetirado;
    
        return $this;
    }

    /**
     * Get dineroRetirado
     *
     * @return float 
     */
    public function getDineroRetirado()
    {
        return $this->dineroRetirado;
    }

    /**
     * Set saldo
     *
     * @param float $saldo
     * @return RetirosTransacciones
     */
    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;
    
        return $this;
    }

    /**
     * Get saldo
     *
     * @return float 
     */
    public function getSaldo()
    {
        return $this->saldo;
    }

    /**
     * Set estado
     *
     * @param integer $estado
     * @return RetirosTransacciones
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
