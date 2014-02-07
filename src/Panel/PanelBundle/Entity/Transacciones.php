<?php

namespace Panel\PanelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Transacciones
 */
class Transacciones
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $idFactura;

    /**
     * @var integer
     */
    private $idCliente;

    /**
     * @var \DateTime
     */
    private $fecha;

    /**
     * @var string
     */
    private $tarjeta;

    /**
     * @var string
     */
    private $moneda;

    /**
     * @var string
     */
    private $dolares;

    /**
     * @var float
     */
    private $valortotal;

    /**
     * @var float
     */
    private $valorneto;

    /**
     * @var string
     */
    private $ivaCliente;

    /**
     * @var string
     */
    private $baseIvaCliente;

    /**
     * @var string
     */
    private $comisionBanco;

    /**
     * @var string
     */
    private $comisionTarjeta;

    /**
     * @var string
     */
    private $ivaComisionTarjeta;

    /**
     * @var string
     */
    private $retefuente;

    /**
     * @var string
     */
    private $comisionTransaccion;

    /**
     * @var string
     */
    private $ivaTransaccion;

    /**
     * @var string
     */
    private $ivaLineapagos;

    /**
     * @var string
     */
    private $gananciaLineapagos;

    /**
     * @var string
     */
    private $gananciaCliente;

    /**
     * @var string
     */
    private $estado;

    /**
     * @var string
     */
    private $franquicia;

    /**
     * @var string
     */
    private $nombreBanco;

    /**
     * @var string
     */
    private $respuesta;

    /**
     * @var string
     */
    private $autorizacion;

    /**
     * @var string
     */
    private $recibo;

    /**
     * @var string
     */
    private $descripcionProducto;

    /**
     * @var string
     */
    private $ipTransaccion;

    /**
     * @var integer
     */
    private $codRespuesta;


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
     * @param string $idFactura
     * @return Transacciones
     */
    public function setIdFactura($idFactura)
    {
        $this->idFactura = $idFactura;
    
        return $this;
    }

    /**
     * Get idFactura
     *
     * @return string 
     */
    public function getIdFactura()
    {
        return $this->idFactura;
    }

    /**
     * Set idCliente
     *
     * @param integer $idCliente
     * @return Transacciones
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
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Transacciones
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
     * Set tarjeta
     *
     * @param string $tarjeta
     * @return Transacciones
     */
    public function setTarjeta($tarjeta)
    {
        $this->tarjeta = $tarjeta;
    
        return $this;
    }

    /**
     * Get tarjeta
     *
     * @return string 
     */
    public function getTarjeta()
    {
        return $this->tarjeta;
    }

    /**
     * Set moneda
     *
     * @param string $moneda
     * @return Transacciones
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
     * Set dolares
     *
     * @param string $dolares
     * @return Transacciones
     */
    public function setDolares($dolares)
    {
        $this->dolares = $dolares;
    
        return $this;
    }

    /**
     * Get dolares
     *
     * @return string 
     */
    public function getDolares()
    {
        return $this->dolares;
    }

    /**
     * Set valortotal
     *
     * @param float $valortotal
     * @return Transacciones
     */
    public function setValortotal($valortotal)
    {
        $this->valortotal = $valortotal;
    
        return $this;
    }

    /**
     * Get valortotal
     *
     * @return float 
     */
    public function getValortotal()
    {
        return $this->valortotal;
    }

    /**
     * Set valorneto
     *
     * @param float $valorneto
     * @return Transacciones
     */
    public function setValorneto($valorneto)
    {
        $this->valorneto = $valorneto;
    
        return $this;
    }

    /**
     * Get valorneto
     *
     * @return float 
     */
    public function getValorneto()
    {
        return $this->valorneto;
    }

    /**
     * Set ivaCliente
     *
     * @param string $ivaCliente
     * @return Transacciones
     */
    public function setIvaCliente($ivaCliente)
    {
        $this->ivaCliente = $ivaCliente;
    
        return $this;
    }

    /**
     * Get ivaCliente
     *
     * @return string 
     */
    public function getIvaCliente()
    {
        return $this->ivaCliente;
    }

    /**
     * Set baseIvaCliente
     *
     * @param string $baseIvaCliente
     * @return Transacciones
     */
    public function setBaseIvaCliente($baseIvaCliente)
    {
        $this->baseIvaCliente = $baseIvaCliente;
    
        return $this;
    }

    /**
     * Get baseIvaCliente
     *
     * @return string 
     */
    public function getBaseIvaCliente()
    {
        return $this->baseIvaCliente;
    }

    /**
     * Set comisionBanco
     *
     * @param string $comisionBanco
     * @return Transacciones
     */
    public function setComisionBanco($comisionBanco)
    {
        $this->comisionBanco = $comisionBanco;
    
        return $this;
    }

    /**
     * Get comisionBanco
     *
     * @return string 
     */
    public function getComisionBanco()
    {
        return $this->comisionBanco;
    }

    /**
     * Set comisionTarjeta
     *
     * @param string $comisionTarjeta
     * @return Transacciones
     */
    public function setComisionTarjeta($comisionTarjeta)
    {
        $this->comisionTarjeta = $comisionTarjeta;
    
        return $this;
    }

    /**
     * Get comisionTarjeta
     *
     * @return string 
     */
    public function getComisionTarjeta()
    {
        return $this->comisionTarjeta;
    }

    /**
     * Set ivaComisionTarjeta
     *
     * @param string $ivaComisionTarjeta
     * @return Transacciones
     */
    public function setIvaComisionTarjeta($ivaComisionTarjeta)
    {
        $this->ivaComisionTarjeta = $ivaComisionTarjeta;
    
        return $this;
    }

    /**
     * Get ivaComisionTarjeta
     *
     * @return string 
     */
    public function getIvaComisionTarjeta()
    {
        return $this->ivaComisionTarjeta;
    }

    /**
     * Set retefuente
     *
     * @param string $retefuente
     * @return Transacciones
     */
    public function setRetefuente($retefuente)
    {
        $this->retefuente = $retefuente;
    
        return $this;
    }

    /**
     * Get retefuente
     *
     * @return string 
     */
    public function getRetefuente()
    {
        return $this->retefuente;
    }

    /**
     * Set comisionTransaccion
     *
     * @param string $comisionTransaccion
     * @return Transacciones
     */
    public function setComisionTransaccion($comisionTransaccion)
    {
        $this->comisionTransaccion = $comisionTransaccion;
    
        return $this;
    }

    /**
     * Get comisionTransaccion
     *
     * @return string 
     */
    public function getComisionTransaccion()
    {
        return $this->comisionTransaccion;
    }

    /**
     * Set ivaTransaccion
     *
     * @param string $ivaTransaccion
     * @return Transacciones
     */
    public function setIvaTransaccion($ivaTransaccion)
    {
        $this->ivaTransaccion = $ivaTransaccion;
    
        return $this;
    }

    /**
     * Get ivaTransaccion
     *
     * @return string 
     */
    public function getIvaTransaccion()
    {
        return $this->ivaTransaccion;
    }

    /**
     * Set ivaLineapagos
     *
     * @param string $ivaLineapagos
     * @return Transacciones
     */
    public function setIvaLineapagos($ivaLineapagos)
    {
        $this->ivaLineapagos = $ivaLineapagos;
    
        return $this;
    }

    /**
     * Get ivaLineapagos
     *
     * @return string 
     */
    public function getIvaLineapagos()
    {
        return $this->ivaLineapagos;
    }

    /**
     * Set gananciaLineapagos
     *
     * @param string $gananciaLineapagos
     * @return Transacciones
     */
    public function setGananciaLineapagos($gananciaLineapagos)
    {
        $this->gananciaLineapagos = $gananciaLineapagos;
    
        return $this;
    }

    /**
     * Get gananciaLineapagos
     *
     * @return string 
     */
    public function getGananciaLineapagos()
    {
        return $this->gananciaLineapagos;
    }

    /**
     * Set gananciaCliente
     *
     * @param string $gananciaCliente
     * @return Transacciones
     */
    public function setGananciaCliente($gananciaCliente)
    {
        $this->gananciaCliente = $gananciaCliente;
    
        return $this;
    }

    /**
     * Get gananciaCliente
     *
     * @return string 
     */
    public function getGananciaCliente()
    {
        return $this->gananciaCliente;
    }

    /**
     * Set estado
     *
     * @param string $estado
     * @return Transacciones
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
     * Set franquicia
     *
     * @param string $franquicia
     * @return Transacciones
     */
    public function setFranquicia($franquicia)
    {
        $this->franquicia = $franquicia;
    
        return $this;
    }

    /**
     * Get franquicia
     *
     * @return string 
     */
    public function getFranquicia()
    {
        return $this->franquicia;
    }

    /**
     * Set nombreBanco
     *
     * @param string $nombreBanco
     * @return Transacciones
     */
    public function setNombreBanco($nombreBanco)
    {
        $this->nombreBanco = $nombreBanco;
    
        return $this;
    }

    /**
     * Get nombreBanco
     *
     * @return string 
     */
    public function getNombreBanco()
    {
        return $this->nombreBanco;
    }

    /**
     * Set respuesta
     *
     * @param string $respuesta
     * @return Transacciones
     */
    public function setRespuesta($respuesta)
    {
        $this->respuesta = $respuesta;
    
        return $this;
    }

    /**
     * Get respuesta
     *
     * @return string 
     */
    public function getRespuesta()
    {
        return $this->respuesta;
    }

    /**
     * Set autorizacion
     *
     * @param string $autorizacion
     * @return Transacciones
     */
    public function setAutorizacion($autorizacion)
    {
        $this->autorizacion = $autorizacion;
    
        return $this;
    }

    /**
     * Get autorizacion
     *
     * @return string 
     */
    public function getAutorizacion()
    {
        return $this->autorizacion;
    }

    /**
     * Set recibo
     *
     * @param string $recibo
     * @return Transacciones
     */
    public function setRecibo($recibo)
    {
        $this->recibo = $recibo;
    
        return $this;
    }

    /**
     * Get recibo
     *
     * @return string 
     */
    public function getRecibo()
    {
        return $this->recibo;
    }

    /**
     * Set descripcionProducto
     *
     * @param string $descripcionProducto
     * @return Transacciones
     */
    public function setDescripcionProducto($descripcionProducto)
    {
        $this->descripcionProducto = $descripcionProducto;
    
        return $this;
    }

    /**
     * Get descripcionProducto
     *
     * @return string 
     */
    public function getDescripcionProducto()
    {
        return $this->descripcionProducto;
    }

    /**
     * Set ipTransaccion
     *
     * @param string $ipTransaccion
     * @return Transacciones
     */
    public function setIpTransaccion($ipTransaccion)
    {
        $this->ipTransaccion = $ipTransaccion;
    
        return $this;
    }

    /**
     * Get ipTransaccion
     *
     * @return string 
     */
    public function getIpTransaccion()
    {
        return $this->ipTransaccion;
    }

    /**
     * Set codRespuesta
     *
     * @param integer $codRespuesta
     * @return Transacciones
     */
    public function setCodRespuesta($codRespuesta)
    {
        $this->codRespuesta = $codRespuesta;
    
        return $this;
    }

    /**
     * Get codRespuesta
     *
     * @return integer 
     */
    public function getCodRespuesta()
    {
        return $this->codRespuesta;
    }
}
