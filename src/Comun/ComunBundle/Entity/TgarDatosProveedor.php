<?php

namespace Comun\ComunBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TgarDatosProveedor
 *
 * @ORM\Table(name="tgar_datos_proveedor", uniqueConstraints={@ORM\UniqueConstraint(name="tgar_datos_proveedor_pk", columns={"proveedor_id"})}, indexes={@ORM\Index(name="relacion_proveedor_datos2_fk", columns={"proveedor_id"})})
 * @ORM\Entity
 */
class TgarDatosProveedor
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
     * @ORM\ManyToOne(targetEntity="TgarProveedor")
     * @ORM\Id
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="proveedor_id", referencedColumnName="proveedor_id")
     * })
     */
    private $proveedorId;



    /**
     * Set datosPrimerNombre
     *
     * @param string $datosPrimerNombre
     * @return TgarDatosProveedor
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
     * @return TgarDatosProveedor
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
     * @return TgarDatosProveedor
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
     * @return TgarDatosProveedor
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
     * @return TgarDatosProveedor
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
     * @return TgarDatosProveedor
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
     * @return TgarDatosProveedor
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
     * @return TgarDatosProveedor
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
     * @return TgarDatosProveedor
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
     * Set proveedorId
     *
     * @param \Comun\ComunBundle\Entity\TgarProveedor $proveedorId
     * @return TgarDatosProveedor
     */
    public function setProveedorId(\Comun\ComunBundle\Entity\TgarProveedor $proveedorId)
    {
        $this->proveedorId = $proveedorId;

        return $this;
    }

    /**
     * Get proveedorId
     *
     * @return \Comun\ComunBundle\Entity\TgarProveedor 
     */
    public function getProveedorId()
    {
        return $this->proveedorId;
    }
}
