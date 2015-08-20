<?php

namespace Comun\ComunBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TgarInstitucionFinanciera
 *
 * @ORM\Table(name="tgar_institucion_financiera", uniqueConstraints={@ORM\UniqueConstraint(name="tgar_institucion_financiera_pk", columns={"institucion_id"})})
 * @ORM\Entity
 */
class TgarInstitucionFinanciera
{
    /**
     * @var integer
     *
     * @ORM\Column(name="institucion_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="tgar_institucion_financiera_institucion_id_seq", allocationSize=1, initialValue=1)
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
     * @ORM\Column(name="institucion_cupo_actual", type="decimal", precision=10, scale=0, nullable=false)
     */
    private $institucionCupoActual;

    /**
     * @var integer
     *
     * @ORM\Column(name="institucion_codigo_sucursal", type="smallint", nullable=true)
     */
    private $institucionCodigoSucursal;

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
     * @var string
     *
     * @ORM\Column(name="institucion_calle_principal", type="string", length=100, nullable=true)
     */
    private $institucionCallePrincipal;

    /**
     * @var string
     *
     * @ORM\Column(name="institucion_calle_secundaria", type="string", length=100, nullable=true)
     */
    private $institucionCalleSecundaria;

    /**
     * @var string
     *
     * @ORM\Column(name="institucion_numero", type="string", length=10, nullable=true)
     */
    private $institucionNumero;

    /**
     * @var string
     *
     * @ORM\Column(name="institucion_edificio", type="string", length=50, nullable=true)
     */
    private $institucionEdificio;

    /**
     * @var string
     *
     * @ORM\Column(name="institucion_departamento", type="string", length=50, nullable=true)
     */
    private $institucionDepartamento;

    /**
     * @var string
     *
     * @ORM\Column(name="institucion_oficina", type="string", length=10, nullable=true)
     */
    private $institucionOficina;

    /**
     * @var string
     *
     * @ORM\Column(name="institucion_parroquia", type="string", length=100, nullable=true)
     */
    private $institucionParroquia;

    /**
     * @var string
     *
     * @ORM\Column(name="institucion_canton", type="string", length=100, nullable=true)
     */
    private $institucionCanton;

    /**
     * @var string
     *
     * @ORM\Column(name="institucion_provincia", type="string", length=100, nullable=true)
     */
    private $institucionProvincia;

    /**
     * @var string
     *
     * @ORM\Column(name="institucion_pais", type="string", length=80, nullable=true)
     */
    private $institucionPais;



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
     * @return TgarInstitucionFinanciera
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
     * @return TgarInstitucionFinanciera
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
     * Set institucionCupoActual
     *
     * @param string $institucionCupoActual
     * @return TgarInstitucionFinanciera
     */
    public function setInstitucionCupoActual($institucionCupoActual)
    {
        $this->institucionCupoActual = $institucionCupoActual;

        return $this;
    }

    /**
     * Get institucionCupoActual
     *
     * @return string 
     */
    public function getInstitucionCupoActual()
    {
        return $this->institucionCupoActual;
    }

    /**
     * Set institucionCodigoSucursal
     *
     * @param integer $institucionCodigoSucursal
     * @return TgarInstitucionFinanciera
     */
    public function setInstitucionCodigoSucursal($institucionCodigoSucursal)
    {
        $this->institucionCodigoSucursal = $institucionCodigoSucursal;

        return $this;
    }

    /**
     * Get institucionCodigoSucursal
     *
     * @return integer 
     */
    public function getInstitucionCodigoSucursal()
    {
        return $this->institucionCodigoSucursal;
    }

    /**
     * Set institucionActivo
     *
     * @param boolean $institucionActivo
     * @return TgarInstitucionFinanciera
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
     * @return TgarInstitucionFinanciera
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
     * Set institucionCallePrincipal
     *
     * @param string $institucionCallePrincipal
     * @return TgarInstitucionFinanciera
     */
    public function setInstitucionCallePrincipal($institucionCallePrincipal)
    {
        $this->institucionCallePrincipal = $institucionCallePrincipal;

        return $this;
    }

    /**
     * Get institucionCallePrincipal
     *
     * @return string 
     */
    public function getInstitucionCallePrincipal()
    {
        return $this->institucionCallePrincipal;
    }

    /**
     * Set institucionCalleSecundaria
     *
     * @param string $institucionCalleSecundaria
     * @return TgarInstitucionFinanciera
     */
    public function setInstitucionCalleSecundaria($institucionCalleSecundaria)
    {
        $this->institucionCalleSecundaria = $institucionCalleSecundaria;

        return $this;
    }

    /**
     * Get institucionCalleSecundaria
     *
     * @return string 
     */
    public function getInstitucionCalleSecundaria()
    {
        return $this->institucionCalleSecundaria;
    }

    /**
     * Set institucionNumero
     *
     * @param string $institucionNumero
     * @return TgarInstitucionFinanciera
     */
    public function setInstitucionNumero($institucionNumero)
    {
        $this->institucionNumero = $institucionNumero;

        return $this;
    }

    /**
     * Get institucionNumero
     *
     * @return string 
     */
    public function getInstitucionNumero()
    {
        return $this->institucionNumero;
    }

    /**
     * Set institucionEdificio
     *
     * @param string $institucionEdificio
     * @return TgarInstitucionFinanciera
     */
    public function setInstitucionEdificio($institucionEdificio)
    {
        $this->institucionEdificio = $institucionEdificio;

        return $this;
    }

    /**
     * Get institucionEdificio
     *
     * @return string 
     */
    public function getInstitucionEdificio()
    {
        return $this->institucionEdificio;
    }

    /**
     * Set institucionDepartamento
     *
     * @param string $institucionDepartamento
     * @return TgarInstitucionFinanciera
     */
    public function setInstitucionDepartamento($institucionDepartamento)
    {
        $this->institucionDepartamento = $institucionDepartamento;

        return $this;
    }

    /**
     * Get institucionDepartamento
     *
     * @return string 
     */
    public function getInstitucionDepartamento()
    {
        return $this->institucionDepartamento;
    }

    /**
     * Set institucionOficina
     *
     * @param string $institucionOficina
     * @return TgarInstitucionFinanciera
     */
    public function setInstitucionOficina($institucionOficina)
    {
        $this->institucionOficina = $institucionOficina;

        return $this;
    }

    /**
     * Get institucionOficina
     *
     * @return string 
     */
    public function getInstitucionOficina()
    {
        return $this->institucionOficina;
    }

    /**
     * Set institucionParroquia
     *
     * @param string $institucionParroquia
     * @return TgarInstitucionFinanciera
     */
    public function setInstitucionParroquia($institucionParroquia)
    {
        $this->institucionParroquia = $institucionParroquia;

        return $this;
    }

    /**
     * Get institucionParroquia
     *
     * @return string 
     */
    public function getInstitucionParroquia()
    {
        return $this->institucionParroquia;
    }

    /**
     * Set institucionCanton
     *
     * @param string $institucionCanton
     * @return TgarInstitucionFinanciera
     */
    public function setInstitucionCanton($institucionCanton)
    {
        $this->institucionCanton = $institucionCanton;

        return $this;
    }

    /**
     * Get institucionCanton
     *
     * @return string 
     */
    public function getInstitucionCanton()
    {
        return $this->institucionCanton;
    }

    /**
     * Set institucionProvincia
     *
     * @param string $institucionProvincia
     * @return TgarInstitucionFinanciera
     */
    public function setInstitucionProvincia($institucionProvincia)
    {
        $this->institucionProvincia = $institucionProvincia;

        return $this;
    }

    /**
     * Get institucionProvincia
     *
     * @return string 
     */
    public function getInstitucionProvincia()
    {
        return $this->institucionProvincia;
    }

    /**
     * Set institucionPais
     *
     * @param string $institucionPais
     * @return TgarInstitucionFinanciera
     */
    public function setInstitucionPais($institucionPais)
    {
        $this->institucionPais = $institucionPais;

        return $this;
    }

    /**
     * Get institucionPais
     *
     * @return string 
     */
    public function getInstitucionPais()
    {
        return $this->institucionPais;
    }
}
