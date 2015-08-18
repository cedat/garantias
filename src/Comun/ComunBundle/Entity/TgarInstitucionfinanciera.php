<?php

namespace Comun\ComunBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TgarInstitucionfinanciera
 *
 * @ORM\Table(name="tgar_institucionfinanciera", uniqueConstraints={@ORM\UniqueConstraint(name="tgar_institucionfinanciera_pk", columns={"institucion_id"})}, indexes={@ORM\Index(name="entidadfianciera_direccion2_fk", columns={"ubicacion_id"})})
 * @ORM\Entity
 */
class TgarInstitucionfinanciera
{
    /**
     * @var integer
     *
     * @ORM\Column(name="institucion_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="tgar_institucionfinanciera_institucion_id_seq", allocationSize=1, initialValue=1)
     */
    private $institucionId;

    /**
     * @var string
     *
     * @ORM\Column(name="institucion_ruc", type="string", length=17, nullable=false)
     */
    private $institucionRuc;

    /**
     * @var string
     *
     * @ORM\Column(name="institucion_nombre", type="string", length=128, nullable=false)
     */
    private $institucionNombre;

    /**
     * @var string
     *
     * @ORM\Column(name="inst_fina_cupodisponible", type="decimal", precision=10, scale=0, nullable=false)
     */
    private $instFinaCupodisponible;

    /**
     * @var string
     *
     * @ORM\Column(name="inst_fina_cupoactual", type="decimal", precision=10, scale=0, nullable=false)
     */
    private $instFinaCupoactual;

    /**
     * @var boolean
     *
     * @ORM\Column(name="institucion_activo", type="boolean", nullable=false)
     */
    private $institucionActivo;

    /**
     * @var string
     *
     * @ORM\Column(name="institucion_tipo_oficina", type="string", length=1, nullable=false)
     */
    private $institucionTipoOficina;

    /**
     * @var \TgarUbicacion
     *
     * @ORM\ManyToOne(targetEntity="TgarUbicacion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ubicacion_id", referencedColumnName="ubicacion_id")
     * })
     */
    private $ubicacion;


    /**
     * @var integer
     */
    private $instFinaId;

    /**
     * @var string
     */
    private $instFinaNombre;

    /**
     * @var string
     */
    private $instFinaProvincia;

    /**
     * @var string
     */
    private $instFinaCanton;

    /**
     * @var string
     */
    private $instFinaParroquia;

    /**
     * @var string
     */
    private $instFinaDireccion;


    /**
     * Get instFinaId
     *
     * @return integer 
     */
    public function getInstFinaId()
    {
        return $this->instFinaId;
    }

    /**
     * Set instFinaNombre
     *
     * @param string $instFinaNombre
     * @return TgarInstitucionfinanciera
     */
    public function setInstFinaNombre($instFinaNombre)
    {
        $this->instFinaNombre = $instFinaNombre;

        return $this;
    }

    /**
     * Get instFinaNombre
     *
     * @return string 
     */
    public function getInstFinaNombre()
    {
        return $this->instFinaNombre;
    }

    /**
     * Set instFinaProvincia
     *
     * @param string $instFinaProvincia
     * @return TgarInstitucionfinanciera
     */
    public function setInstFinaProvincia($instFinaProvincia)
    {
        $this->instFinaProvincia = $instFinaProvincia;

        return $this;
    }

    /**
     * Get instFinaProvincia
     *
     * @return string 
     */
    public function getInstFinaProvincia()
    {
        return $this->instFinaProvincia;
    }

    /**
     * Set instFinaCanton
     *
     * @param string $instFinaCanton
     * @return TgarInstitucionfinanciera
     */
    public function setInstFinaCanton($instFinaCanton)
    {
        $this->instFinaCanton = $instFinaCanton;

        return $this;
    }

    /**
     * Get instFinaCanton
     *
     * @return string 
     */
    public function getInstFinaCanton()
    {
        return $this->instFinaCanton;
    }

    /**
     * Set instFinaParroquia
     *
     * @param string $instFinaParroquia
     * @return TgarInstitucionfinanciera
     */
    public function setInstFinaParroquia($instFinaParroquia)
    {
        $this->instFinaParroquia = $instFinaParroquia;

        return $this;
    }

    /**
     * Get instFinaParroquia
     *
     * @return string 
     */
    public function getInstFinaParroquia()
    {
        return $this->instFinaParroquia;
    }

    /**
     * Set instFinaDireccion
     *
     * @param string $instFinaDireccion
     * @return TgarInstitucionfinanciera
     */
    public function setInstFinaDireccion($instFinaDireccion)
    {
        $this->instFinaDireccion = $instFinaDireccion;

        return $this;
    }

    /**
     * Get instFinaDireccion
     *
     * @return string 
     */
    public function getInstFinaDireccion()
    {
        return $this->instFinaDireccion;
    }

    /**
     * Set instFinaCupodisponible
     *
     * @param string $instFinaCupodisponible
     * @return TgarInstitucionfinanciera
     */
    public function setInstFinaCupodisponible($instFinaCupodisponible)
    {
        $this->instFinaCupodisponible = $instFinaCupodisponible;

        return $this;
    }

    /**
     * Get instFinaCupodisponible
     *
     * @return string 
     */
    public function getInstFinaCupodisponible()
    {
        return $this->instFinaCupodisponible;
    }

    /**
     * Set instFinaCupoactual
     *
     * @param string $instFinaCupoactual
     * @return TgarInstitucionfinanciera
     */
    public function setInstFinaCupoactual($instFinaCupoactual)
    {
        $this->instFinaCupoactual = $instFinaCupoactual;

        return $this;
    }

    /**
     * Get instFinaCupoactual
     *
     * @return string 
     */
    public function getInstFinaCupoactual()
    {
        return $this->instFinaCupoactual;
    }

    /**
     * Get institucionId
     *
     * @return integer 
     */
    public function getInstitucionId()
    {
        return $this->institucionId;
    }

    /**
     * Set institucionRuc
     *
     * @param string $institucionRuc
     * @return TgarInstitucionfinanciera
     */
    public function setInstitucionRuc($institucionRuc)
    {
        $this->institucionRuc = $institucionRuc;

        return $this;
    }

    /**
     * Get institucionRuc
     *
     * @return string 
     */
    public function getInstitucionRuc()
    {
        return $this->institucionRuc;
    }

    /**
     * Set institucionNombre
     *
     * @param string $institucionNombre
     * @return TgarInstitucionfinanciera
     */
    public function setInstitucionNombre($institucionNombre)
    {
        $this->institucionNombre = $institucionNombre;

        return $this;
    }

    /**
     * Get institucionNombre
     *
     * @return string 
     */
    public function getInstitucionNombre()
    {
        return $this->institucionNombre;
    }

    /**
     * Set institucionActivo
     *
     * @param boolean $institucionActivo
     * @return TgarInstitucionfinanciera
     */
    public function setInstitucionActivo($institucionActivo)
    {
        $this->institucionActivo = $institucionActivo;

        return $this;
    }

    /**
     * Get institucionActivo
     *
     * @return boolean 
     */
    public function getInstitucionActivo()
    {
        return $this->institucionActivo;
    }

    /**
     * Set institucionTipoOficina
     *
     * @param string $institucionTipoOficina
     * @return TgarInstitucionfinanciera
     */
    public function setInstitucionTipoOficina($institucionTipoOficina)
    {
        $this->institucionTipoOficina = $institucionTipoOficina;

        return $this;
    }

    /**
     * Get institucionTipoOficina
     *
     * @return string 
     */
    public function getInstitucionTipoOficina()
    {
        return $this->institucionTipoOficina;
    }

    /**
     * Set ubicacion
     *
     * @param \Comun\ComunBundle\Entity\TgarUbicacion $ubicacion
     * @return TgarInstitucionfinanciera
     */
    public function setUbicacion(\Comun\ComunBundle\Entity\TgarUbicacion $ubicacion = null)
    {
        $this->ubicacion = $ubicacion;

        return $this;
    }

    /**
     * Get ubicacion
     *
     * @return \Comun\ComunBundle\Entity\TgarUbicacion 
     */
    public function getUbicacion()
    {
        return $this->ubicacion;
    }
}
