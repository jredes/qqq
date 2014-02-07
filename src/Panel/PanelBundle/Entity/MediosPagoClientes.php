<?php

namespace Panel\PanelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MediosPagoClientes
 */
class MediosPagoClientes
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
    private $idMedio;


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
     * @return MediosPagoClientes
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
     * Set idMedio
     *
     * @param string $idMedio
     * @return MediosPagoClientes
     */
    public function setIdMedio($idMedio)
    {
        $this->idMedio = $idMedio;
    
        return $this;
    }

    /**
     * Get idMedio
     *
     * @return string 
     */
    public function getIdMedio()
    {
        return $this->idMedio;
    }
}
