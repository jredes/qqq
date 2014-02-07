<?php

namespace Panel\PanelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trm
 */
class Trm
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $trmActual;


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
     * Set trmActual
     *
     * @param string $trmActual
     * @return Trm
     */
    public function setTrmActual($trmActual)
    {
        $this->trmActual = $trmActual;
    
        return $this;
    }

    /**
     * Get trmActual
     *
     * @return string 
     */
    public function getTrmActual()
    {
        return $this->trmActual;
    }
}
