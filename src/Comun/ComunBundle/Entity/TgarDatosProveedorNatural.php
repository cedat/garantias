<?php

namespace Comun\ComunBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TgarDatosProveedorNatural
 *
 * @ORM\Table(name="tgar_datos_proveedor_natural")
 * @ORM\Entity
 */
class TgarDatosProveedorNatural
{
    /**
     * @var string
     *
     * @ORM\Column(name="datos_primer_nombre", type="string", length=64, nullable=false)
     */
    private $datosPrimerNombre;

    /**
     * @var string
     *
     * @ORM\Column(name="datos_segundo_nombre", type="string", length=64, nullable=true)
     */
    private $datosSegundoNombre;

    /**
     * @var string
     *
     * @ORM\Column(name="datos_apellido_paterno", type="string", length=64, nullable=false)
     */
    private $datosApellidoPaterno;

    /**
     * @var string
     *
     * @ORM\Column(name="datos_apellido_materno", type="string", length=64, nullable=true)
     */
    private $datosApellidoMaterno;

    /**
     * @var string
     *
     * @ORM\Column(name="datos_sexo", type="string", length=1, nullable=false)
     */
    private $datosSexo;

    /**
     * @var string
     *
     * @ORM\Column(name="datos_estado_civil", type="string", length=1, nullable=false)
     */
    private $datosEstadoCivil;

    /**
     * @var string
     *
     * @ORM\Column(name="datos_nivel_educacion", type="string", length=64, nullable=true)
     */
    private $datosNivelEducacion;

    /**
     * @var string
     *
     * @ORM\Column(name="datos_area_especialidad", type="string", length=100, nullable=true)
     */
    private $datosAreaEspecialidad;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datos_fecha_nacimiento", type="date", nullable=false)
     */
    private $datosFechaNacimiento;

    /**
     * @var \TgarProveedor
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="TgarProveedor")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="datos_proveedor_id", referencedColumnName="proveedor_id")
     * })
     */
    private $datosProveedor;



    /**
     * Set datosPrimerNombre
     *
     * @param string $datosPrimerNombre
     * @return TgarDatosProveedorNatural
     */
    public function setDatosPrimerNombre($datosPrimerNombre)
    {
        $this->datosPrimerNombre = $datosPrimerNombre;

        return $this;
    }

    /**
     * Get datosPrimerNombre
     *
     * @return string 
     */
    public function getDatosPrimerNombre()
    {
        return $this->datosPrimerNombre;
    }

    /**
     * Set datosSegundoNombre
     *
     * @param string $datosSegundoNombre
     * @return TgarDatosProveedorNatural
     */
    public function setDatosSegundoNombre($datosSegundoNombre)
    {
        $this->datosSegundoNombre = $datosSegundoNombre;

        return $this;
    }

    /**
     * Get datosSegundoNombre
     *
     * @return string 
     */
    public function getDatosSegundoNombre()
    {
        return $this->datosSegundoNombre;
    }

    /**
     * Set datosApellidoPaterno
     *
     * @param string $datosApellidoPaterno
     * @return TgarDatosProveedorNatural
     */
    public function setDatosApellidoPaterno($datosApellidoPaterno)
    {
        $this->datosApellidoPaterno = $datosApellidoPaterno;

        return $this;
    }

    /**
     * Get datosApellidoPaterno
     *
     * @return string 
     */
    public function getDatosApellidoPaterno()
    {
        return $this->datosApellidoPaterno;
    }

    /**
     * Set datosApellidoMaterno
     *
     * @param string $datosApellidoMaterno
     * @return TgarDatosProveedorNatural
     */
    public function setDatosApellidoMaterno($datosApellidoMaterno)
    {
        $this->datosApellidoMaterno = $datosApellidoMaterno;

        return $this;
    }

    /**
     * Get datosApellidoMaterno
     *
     * @return string 
     */
    public function getDatosApellidoMaterno()
    {
        return $this->datosApellidoMaterno;
    }

    /**
     * Set datosSexo
     *
     * @param string $datosSexo
     * @return TgarDatosProveedorNatural
     */
    public function setDatosSexo($datosSexo)
    {
        $this->datosSexo = $datosSexo;

        return $this;
    }

    /**
     * Get datosSexo
     *
     * @return string 
     */
    public function getDatosSexo()
    {
        return $this->datosSexo;
    }

    /**
     * Set datosEstadoCivil
     *
     * @param string $datosEstadoCivil
     * @return TgarDatosProveedorNatural
     */
    public function setDatosEstadoCivil($datosEstadoCivil)
    {
        $this->datosEstadoCivil = $datosEstadoCivil;

        return $this;
    }

    /**
     * Get datosEstadoCivil
     *
     * @return string 
     */
    public function getDatosEstadoCivil()
    {
        return $this->datosEstadoCivil;
    }

    /**
     * Set datosNivelEducacion
     *
     * @param string $datosNivelEducacion
     * @return TgarDatosProveedorNatural
     */
    public function setDatosNivelEducacion($datosNivelEducacion)
    {
        $this->datosNivelEducacion = $datosNivelEducacion;

        return $this;
    }

    /**
     * Get datosNivelEducacion
     *
     * @return string 
     */
    public function getDatosNivelEducacion()
    {
        return $this->datosNivelEducacion;
    }

    /**
     * Set datosAreaEspecialidad
     *
     * @param string $datosAreaEspecialidad
     * @return TgarDatosProveedorNatural
     */
    public function setDatosAreaEspecialidad($datosAreaEspecialidad)
    {
        $this->datosAreaEspecialidad = $datosAreaEspecialidad;

        return $this;
    }

    /**
     * Get datosAreaEspecialidad
     *
     * @return string 
     */
    public function getDatosAreaEspecialidad()
    {
        return $this->datosAreaEspecialidad;
    }

    /**
     * Set datosFechaNacimiento
     *
     * @param \DateTime $datosFechaNacimiento
     * @return TgarDatosProveedorNatural
     */
    public function setDatosFechaNacimiento($datosFechaNacimiento)
    {
        $this->datosFechaNacimiento = $datosFechaNacimiento;

        return $this;
    }

    /**
     * Get datosFechaNacimiento
     *
     * @return \DateTime 
     */
    public function getDatosFechaNacimiento()
    {
        return $this->datosFechaNacimiento;
    }

    /**
     * Set datosProveedor
     *
     * @param \Comun\ComunBundle\Entity\TgarProveedor $datosProveedor
     * @return TgarDatosProveedorNatural
     */
    public function setDatosProveedor(\Comun\ComunBundle\Entity\TgarProveedor $datosProveedor)
    {
        $this->datosProveedor = $datosProveedor;

        return $this;
    }

    /**
     * Get datosProveedor
     *
     * @return \Comun\ComunBundle\Entity\TgarProveedor 
     */
    public function getDatosProveedor()
    {
        return $this->datosProveedor;
    }
}
