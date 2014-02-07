<?php

namespace Panel\PanelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlanesTerminal
 */
class PlanesTerminal
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $plan;

    /**
     * @var integer
     */
    private $valorPlan;

    /**
     * @var integer
     */
    private $cantidadTransacciones;

    /**
     * @var integer
     */
    private $valorTransaccionAdicional;


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
     * Set plan
     *
     * @param string $plan
     * @return PlanesTerminal
     */
    public function setPlan($plan)
    {
        $this->plan = $plan;
    
        return $this;
    }

    /**
     * Get plan
     *
     * @return string 
     */
    public function getPlan()
    {
        return $this->plan;
    }

    /**
     * Set valorPlan
     *
     * @param integer $valorPlan
     * @return PlanesTerminal
     */
    public function setValorPlan($valorPlan)
    {
        $this->valorPlan = $valorPlan;
    
        return $this;
    }

    /**
     * Get valorPlan
     *
     * @return integer 
     */
    public function getValorPlan()
    {
        return $this->valorPlan;
    }

    /**
     * Set cantidadTransacciones
     *
     * @param integer $cantidadTransacciones
     * @return PlanesTerminal
     */
    public function setCantidadTransacciones($cantidadTransacciones)
    {
        $this->cantidadTransacciones = $cantidadTransacciones;
    
        return $this;
    }

    /**
     * Get cantidadTransacciones
     *
     * @return integer 
     */
    public function getCantidadTransacciones()
    {
        return $this->cantidadTransacciones;
    }

    /**
     * Set valorTransaccionAdicional
     *
     * @param integer $valorTransaccionAdicional
     * @return PlanesTerminal
     */
    public function setValorTransaccionAdicional($valorTransaccionAdicional)
    {
        $this->valorTransaccionAdicional = $valorTransaccionAdicional;
    
        return $this;
    }

    /**
     * Get valorTransaccionAdicional
     *
     * @return integer 
     */
    public function getValorTransaccionAdicional()
    {
        return $this->valorTransaccionAdicional;
    }
}
