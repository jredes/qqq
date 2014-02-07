<?php

namespace Panel\PanelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Retiros
 */
class Retiros
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
    private $fecharetiro;

    /**
     * @var \DateTime
     */
    private $fechapago;

    /**
     * @var integer
     */
    private $saldoanterior;

    /**
     * @var string
     */
    private $dinerosolicitado;

    /**
     * @var string
     */
    private $comision;

    /**
     * @var string
     */
    private $iva;

    /**
     * @var string
     */
    private $saldodisponible;

    /**
     * @var integer
     */
    private $saldorestante;

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
     * Set idCliente
     *
     * @param integer $idCliente
     * @return Retiros
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
     * Set fecharetiro
     *
     * @param \DateTime $fecharetiro
     * @return Retiros
     */
    public function setFecharetiro($fecharetiro)
    {
        $this->fecharetiro = $fecharetiro;
    
        return $this;
    }

    /**
     * Get fecharetiro
     *
     * @return \DateTime 
     */
    public function getFecharetiro()
    {
        return $this->fecharetiro;
    }

    /**
     * Set fechapago
     *
     * @param \DateTime $fechapago
     * @return Retiros
     */
    public function setFechapago($fechapago)
    {
        $this->fechapago = $fechapago;
    
        return $this;
    }

    /**
     * Get fechapago
     *
     * @return \DateTime 
     */
    public function getFechapago()
    {
        return $this->fechapago;
    }

    /**
     * Set saldoanterior
     *
     * @param integer $saldoanterior
     * @return Retiros
     */
    public function setSaldoanterior($saldoanterior)
    {
        $this->saldoanterior = $saldoanterior;
    
        return $this;
    }

    /**
     * Get saldoanterior
     *
     * @return integer 
     */
    public function getSaldoanterior()
    {
        return $this->saldoanterior;
    }

    /**
     * Set dinerosolicitado
     *
     * @param string $dinerosolicitado
     * @return Retiros
     */
    public function setDinerosolicitado($dinerosolicitado)
    {
        $this->dinerosolicitado = $dinerosolicitado;
    
        return $this;
    }

    /**
     * Get dinerosolicitado
     *
     * @return string 
     */
    public function getDinerosolicitado()
    {
        return $this->dinerosolicitado;
    }

    /**
     * Set comision
     *
     * @param string $comision
     * @return Retiros
     */
    public function setComision($comision)
    {
        $this->comision = $comision;
    
        return $this;
    }

    /**
     * Get comision
     *
     * @return string 
     */
    public function getComision()
    {
        return $this->comision;
    }

    /**
     * Set iva
     *
     * @param string $iva
     * @return Retiros
     */
    public function setIva($iva)
    {
        $this->iva = $iva;
    
        return $this;
    }

    /**
     * Get iva
     *
     * @return string 
     */
    public function getIva()
    {
        return $this->iva;
    }

    /**
     * Set saldodisponible
     *
     * @param string $saldodisponible
     * @return Retiros
     */
    public function setSaldodisponible($saldodisponible)
    {
        $this->saldodisponible = $saldodisponible;
    
        return $this;
    }

    /**
     * Get saldodisponible
     *
     * @return string 
     */
    public function getSaldodisponible()
    {
        return $this->saldodisponible;
    }

    /**
     * Set saldorestante
     *
     * @param integer $saldorestante
     * @return Retiros
     */
    public function setSaldorestante($saldorestante)
    {
        $this->saldorestante = $saldorestante;
    
        return $this;
    }

    /**
     * Get saldorestante
     *
     * @return integer 
     */
    public function getSaldorestante()
    {
        return $this->saldorestante;
    }

    /**
     * Set estado
     *
     * @param integer $estado
     * @return Retiros
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
