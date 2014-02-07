<?php

namespace Panel\PanelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Clientes
 */
class Clientes
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $keyCli;

    /**
     * @var integer
     */
    private $idRegimen;

    /**
     * @var string
     */
    private $documento;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $idPais;

    /**
     * @var integer
     */
    private $idCiudad;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $contrasena;

    /**
     * @var string
     */
    private $telefono;

    /**
     * @var string
     */
    private $celular;

    /**
     * @var string
     */
    private $direccion;

    /**
     * @var string
     */
    private $pagweb;

    /**
     * @var string
     */
    private $servicio;

    /**
     * @var string
     */
    private $actividad;

    /**
     * @var integer
     */
    private $idPlan;

    /**
     * @var integer
     */
    private $idEstado;

    /**
     * @var string
     */
    private $observaciones;

    /**
     * @var integer
     */
    private $idReseller;

    /**
     * @var string
     */
    private $reseller;

    /**
     * @var string
     */
    private $logo;

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
     * Set keyCli
     *
     * @param string $keyCli
     * @return Clientes
     */
    public function setKeyCli($keyCli)
    {
        $this->keyCli = $keyCli;
    
        return $this;
    }

    /**
     * Get keyCli
     *
     * @return string 
     */
    public function getKeyCli()
    {
        return $this->keyCli;
    }

    /**
     * Set idRegimen
     *
     * @param integer $idRegimen
     * @return Clientes
     */
    public function setIdRegimen($idRegimen)
    {
        $this->idRegimen = $idRegimen;
    
        return $this;
    }

    /**
     * Get idRegimen
     *
     * @return integer 
     */
    public function getIdRegimen()
    {
        return $this->idRegimen;
    }

    /**
     * Set documento
     *
     * @param string $documento
     * @return Clientes
     */
    public function setDocumento($documento)
    {
        $this->documento = $documento;
    
        return $this;
    }

    /**
     * Get documento
     *
     * @return string 
     */
    public function getDocumento()
    {
        return $this->documento;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Clientes
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    
        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set idPais
     *
     * @param string $idPais
     * @return Clientes
     */
    public function setIdPais($idPais)
    {
        $this->idPais = $idPais;
    
        return $this;
    }

    /**
     * Get idPais
     *
     * @return string 
     */
    public function getIdPais()
    {
        return $this->idPais;
    }

    /**
     * Set idCiudad
     *
     * @param integer $idCiudad
     * @return Clientes
     */
    public function setIdCiudad($idCiudad)
    {
        $this->idCiudad = $idCiudad;
    
        return $this;
    }

    /**
     * Get idCiudad
     *
     * @return integer 
     */
    public function getIdCiudad()
    {
        return $this->idCiudad;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Clientes
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set contrasena
     *
     * @param string $contrasena
     * @return Clientes
     */
    public function setContrasena($contrasena)
    {
        $this->contrasena = $contrasena;
    
        return $this;
    }

    /**
     * Get contrasena
     *
     * @return string 
     */
    public function getContrasena()
    {
        return $this->contrasena;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     * @return Clientes
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
     * Set celular
     *
     * @param string $celular
     * @return Clientes
     */
    public function setCelular($celular)
    {
        $this->celular = $celular;
    
        return $this;
    }

    /**
     * Get celular
     *
     * @return string 
     */
    public function getCelular()
    {
        return $this->celular;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     * @return Clientes
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
     * Set pagweb
     *
     * @param string $pagweb
     * @return Clientes
     */
    public function setPagweb($pagweb)
    {
        $this->pagweb = $pagweb;
    
        return $this;
    }

    /**
     * Get pagweb
     *
     * @return string 
     */
    public function getPagweb()
    {
        return $this->pagweb;
    }

    /**
     * Set servicio
     *
     * @param string $servicio
     * @return Clientes
     */
    public function setServicio($servicio)
    {
        $this->servicio = $servicio;
    
        return $this;
    }

    /**
     * Get servicio
     *
     * @return string 
     */
    public function getServicio()
    {
        return $this->servicio;
    }

    /**
     * Set actividad
     *
     * @param string $actividad
     * @return Clientes
     */
    public function setActividad($actividad)
    {
        $this->actividad = $actividad;
    
        return $this;
    }

    /**
     * Get actividad
     *
     * @return string 
     */
    public function getActividad()
    {
        return $this->actividad;
    }

    /**
     * Set idPlan
     *
     * @param integer $idPlan
     * @return Clientes
     */
    public function setIdPlan($idPlan)
    {
        $this->idPlan = $idPlan;
    
        return $this;
    }

    /**
     * Get idPlan
     *
     * @return integer 
     */
    public function getIdPlan()
    {
        return $this->idPlan;
    }

    /**
     * Set idEstado
     *
     * @param integer $idEstado
     * @return Clientes
     */
    public function setIdEstado($idEstado)
    {
        $this->idEstado = $idEstado;
    
        return $this;
    }

    /**
     * Get idEstado
     *
     * @return integer 
     */
    public function getIdEstado()
    {
        return $this->idEstado;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     * @return Clientes
     */
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;
    
        return $this;
    }

    /**
     * Get observaciones
     *
     * @return string 
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }

    /**
     * Set idReseller
     *
     * @param integer $idReseller
     * @return Clientes
     */
    public function setIdReseller($idReseller)
    {
        $this->idReseller = $idReseller;
    
        return $this;
    }

    /**
     * Get idReseller
     *
     * @return integer 
     */
    public function getIdReseller()
    {
        return $this->idReseller;
    }

    /**
     * Set reseller
     *
     * @param string $reseller
     * @return Clientes
     */
    public function setReseller($reseller)
    {
        $this->reseller = $reseller;
    
        return $this;
    }

    /**
     * Get reseller
     *
     * @return string 
     */
    public function getReseller()
    {
        return $this->reseller;
    }

    /**
     * Set logo
     *
     * @param string $logo
     * @return Clientes
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;
    
        return $this;
    }

    /**
     * Get logo
     *
     * @return string 
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Set saldoCliente
     *
     * @param float $saldoCliente
     * @return Clientes
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
