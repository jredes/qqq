<?php

namespace Panel\PanelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DetalleFacturas
 */
class DetalleFacturas
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $idFactura;

    /**
     * @var integer
     */
    private $cantidad;

    /**
     * @var integer
     */
    private $valorUnitario;

    /**
     * @var integer
     */
    private $subtotal;


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
     * Set idFactura
     *
     * @param integer $idFactura
     * @return DetalleFacturas
     */
    public function setIdFactura($idFactura)
    {
        $this->idFactura = $idFactura;
    
        return $this;
    }

    /**
     * Get idFactura
     *
     * @return integer 
     */
    public function getIdFactura()
    {
        return $this->idFactura;
    }

    /**
     * Set cantidad
     *
     * @param integer $cantidad
     * @return DetalleFacturas
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;
    
        return $this;
    }

    /**
     * Get cantidad
     *
     * @return integer 
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Set valorUnitario
     *
     * @param integer $valorUnitario
     * @return DetalleFacturas
     */
    public function setValorUnitario($valorUnitario)
    {
        $this->valorUnitario = $valorUnitario;
    
        return $this;
    }

    /**
     * Get valorUnitario
     *
     * @return integer 
     */
    public function getValorUnitario()
    {
        return $this->valorUnitario;
    }

    /**
     * Set subtotal
     *
     * @param integer $subtotal
     * @return DetalleFacturas
     */
    public function setSubtotal($subtotal)
    {
        $this->subtotal = $subtotal;
    
        return $this;
    }

    /**
     * Get subtotal
     *
     * @return integer 
     */
    public function getSubtotal()
    {
        return $this->subtotal;
    }
}
