<?php

namespace Comun\ComunBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TgarUbicacion
 *
 * @ORM\Table(name="tgar_ubicacion"))
 * @ORM\Entity
 */
class TgarUbicacion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ubicacion_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")     
     */
    private $ubicacionId;

    /**
     * @var string
     *
     * @ORM\Column(name="ubicacion_calle_principal", type="string", length=100, nullable=false)
     */
    private $ubicacionCallePrincipal;

    /**
     * @var string
     *
     * @ORM\Column(name="ubicacion_calle_secundaria", type="string", length=100, nullable=false)
     */
    private $ubicacionCalleSecundaria;

    /**
     * @var string
     *
     * @ORM\Column(name="ubicacion_numero", type="string", length=10, nullable=true)
     */
    private $ubicacionNumero;

    /**
     * @var string
     *
     * @ORM\Column(name="ubicacion_edificio", type="string", length=50, nullable=true)
     */
    private $ubicacionEdificio;

    /**
     * @var string
     *
     * @ORM\Column(name="ubicacion_departamento", type="string", length=50, nullable=true)
     */
    private $ubicacionDepartamento;

    /**
     * @var string
     *
     * @ORM\Column(name="ubicacion_oficina", type="string", length=10, nullable=true)
     */
    private $ubicacionOficina;

    /**
     * @var string
     *
     * @ORM\Column(name="ubicacion_parroquia", type="string", length=100, nullable=false)
     */
    private $ubicacionParroquia;

    /**
     * @var string
     *
     * @ORM\Column(name="ubicacion_canton", type="string", length=100, nullable=false)
     */
    private $ubicacionCanton;

    /**
     * @var string
     *
     * @ORM\Column(name="ubicacion_provincia", type="string", length=100, nullable=false)
     */
    private $ubicacionProvincia;

    /**
     * @var string
     *
     * @ORM\Column(name="ubicacion_pais", type="string", length=80, nullable=false)
     */
    private $ubicacionPais;
    

    /**
     * Get ubicacionId
     *
     * @return integer 
     */
    public function getUbicacionId()
    {
        return $this->ubicacionId;
    }

    /**
     * Set ubicacionCallePrincipal
     *
     * @param string $ubicacionCallePrincipal
     * @return TgarUbicacion
     */
    public function setUbicacionCallePrincipal($ubicacionCallePrincipal)
    {
        $this->ubicacionCallePrincipal = $ubicacionCallePrincipal;

        return $this;
    }

    /**
     * Get ubicacionCallePrincipal
     *
     * @return string 
     */
    public function getUbicacionCallePrincipal()
    {
        return $this->ubicacionCallePrincipal;
    }

    /**
     * Set ubicacionCalleSecundaria
     *
     * @param string $ubicacionCalleSecundaria
     * @return TgarUbicacion
     */
    public function setUbicacionCalleSecundaria($ubicacionCalleSecundaria)
    {
        $this->ubicacionCalleSecundaria = $ubicacionCalleSecundaria;

        return $this;
    }

    /**
     * Get ubicacionCalleSecundaria
     *
     * @return string 
     */
    public function getUbicacionCalleSecundaria()
    {
        return $this->ubicacionCalleSecundaria;
    }

    /**
     * Set ubicacionNumero
     *
     * @param string $ubicacionNumero
     * @return TgarUbicacion
     */
    public function setUbicacionNumero($ubicacionNumero)
    {
        $this->ubicacionNumero = $ubicacionNumero;

        return $this;
    }

    /**
     * Get ubicacionNumero
     *
     * @return string 
     */
    public function getUbicacionNumero()
    {
        return $this->ubicacionNumero;
    }

    /**
     * Set ubicacionEdificio
     *
     * @param string $ubicacionEdificio
     * @return TgarUbicacion
     */
    public function setUbicacionEdificio($ubicacionEdificio)
    {
        $this->ubicacionEdificio = $ubicacionEdificio;

        return $this;
    }

    /**
     * Get ubicacionEdificio
     *
     * @return string 
     */
    public function getUbicacionEdificio()
    {
        return $this->ubicacionEdificio;
    }

    /**
     * Set ubicacionDepartamento
     *
     * @param string $ubicacionDepartamento
     * @return TgarUbicacion
     */
    public function setUbicacionDepartamento($ubicacionDepartamento)
    {
        $this->ubicacionDepartamento = $ubicacionDepartamento;

        return $this;
    }

    /**
     * Get ubicacionDepartamento
     *
     * @return string 
     */
    public function getUbicacionDepartamento()
    {
        return $this->ubicacionDepartamento;
    }

    /**
     * Set ubicacionOficina
     *
     * @param string $ubicacionOficina
     * @return TgarUbicacion
     */
    public function setUbicacionOficina($ubicacionOficina)
    {
        $this->ubicacionOficina = $ubicacionOficina;

        return $this;
    }

    /**
     * Get ubicacionOficina
     *
     * @return string 
     */
    public function getUbicacionOficina()
    {
        return $this->ubicacionOficina;
    }

    /**
     * Set ubicacionParroquia
     *
     * @param string $ubicacionParroquia
     * @return TgarUbicacion
     */
    public function setUbicacionParroquia($ubicacionParroquia)
    {
        $this->ubicacionParroquia = $ubicacionParroquia;

        return $this;
    }

    /**
     * Get ubicacionParroquia
     *
     * @return string 
     */
    public function getUbicacionParroquia()
    {
        return $this->ubicacionParroquia;
    }

    /**
     * Set ubicacionCanton
     *
     * @param string $ubicacionCanton
     * @return TgarUbicacion
     */
    public function setUbicacionCanton($ubicacionCanton)
    {
        $this->ubicacionCanton = $ubicacionCanton;

        return $this;
    }

    /**
     * Get ubicacionCanton
     *
     * @return string 
     */
    public function getUbicacionCanton()
    {
        return $this->ubicacionCanton;
    }

    /**
     * Set ubicacionProvincia
     *
     * @param string $ubicacionProvincia
     * @return TgarUbicacion
     */
    public function setUbicacionProvincia($ubicacionProvincia)
    {
        $this->ubicacionProvincia = $ubicacionProvincia;

        return $this;
    }

    /**
     * Get ubicacionProvincia
     *
     * @return string 
     */
    public function getUbicacionProvincia()
    {
        return $this->ubicacionProvincia;
    }

    /**
     * Set ubicacionPais
     *
     * @param string $ubicacionPais
     * @return TgarUbicacion
     */
    public function setUbicacionPais($ubicacionPais)
    {
        $this->ubicacionPais = $ubicacionPais;

        return $this;
    }

    /**
     * Get ubicacionPais
     *
     * @return string 
     */
    public function getUbicacionPais()
    {
        return $this->ubicacionPais;
    }
}
