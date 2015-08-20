<?php

namespace Comun\ComunBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TgarProveedor
 *
 * @ORM\Table(name="tgar_proveedor", uniqueConstraints={@ORM\UniqueConstraint(name="tgar_proveedor_pk", columns={"proveedor_id"})})
 * @ORM\Entity
 */
class TgarProveedor
{
    /**
     * @var string
     *
     * @ORM\Column(name="proveedor_id", type="decimal", precision=10, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="tgar_proveedor_proveedor_id_seq", allocationSize=1, initialValue=1)
     */
    private $proveedorId;

    /**
     * @var string
     *
     * @ORM\Column(name="proveedor_ruc", type="string", length=16, nullable=true)
     */
    private $proveedorRuc;

    /**
     * @var string
     *
     * @ORM\Column(name="proveedor_categoria", type="string", length=64, nullable=true)
     */
    private $proveedorCategoria;

    /**
     * @var string
     *
     * @ORM\Column(name="proveedor_razon_social", type="string", length=64, nullable=true)
     */
    private $proveedorRazonSocial;

    /**
     * @var string
     *
     * @ORM\Column(name="proveedor_tipo_persona", type="string", length=10, nullable=true)
     */
    private $proveedorTipoPersona;

    /**
     * @var string
     *
     * @ORM\Column(name="proveedor_nombre_comercial", type="string", length=128, nullable=true)
     */
    private $proveedorNombreComercial;

    /**
     * @var string
     *
     * @ORM\Column(name="proveedor_pagina_web", type="string", length=62, nullable=true)
     */
    private $proveedorPaginaWeb;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="proveedor_inicio_actividades", type="date", nullable=true)
     */
    private $proveedorInicioActividades;

    /**
     * @var string
     *
     * @ORM\Column(name="proveedor_calle_principal", type="string", length=100, nullable=true)
     */
    private $proveedorCallePrincipal;

    /**
     * @var string
     *
     * @ORM\Column(name="proveedor_calle_secundaria", type="string", length=100, nullable=true)
     */
    private $proveedorCalleSecundaria;

    /**
     * @var string
     *
     * @ORM\Column(name="proveedor_numero", type="string", length=10, nullable=true)
     */
    private $proveedorNumero;

    /**
     * @var string
     *
     * @ORM\Column(name="proveedor_edificio", type="string", length=50, nullable=true)
     */
    private $proveedorEdificio;

    /**
     * @var string
     *
     * @ORM\Column(name="proveedor_departamento", type="string", length=50, nullable=true)
     */
    private $proveedorDepartamento;

    /**
     * @var string
     *
     * @ORM\Column(name="proveedor_oficina", type="string", length=10, nullable=true)
     */
    private $proveedorOficina;

    /**
     * @var string
     *
     * @ORM\Column(name="proveedor_parroquia", type="string", length=100, nullable=true)
     */
    private $proveedorParroquia;

    /**
     * @var string
     *
     * @ORM\Column(name="proveedor_canton", type="string", length=100, nullable=true)
     */
    private $proveedorCanton;

    /**
     * @var string
     *
     * @ORM\Column(name="proveedor_provincia", type="string", length=100, nullable=true)
     */
    private $proveedorProvincia;

    /**
     * @var string
     *
     * @ORM\Column(name="proveedor_pais", type="string", length=80, nullable=true)
     */
    private $proveedorPais;



    /**
     * Get proveedorId
     *
     * @return string 
     */
    public function getProveedorId()
    {
        return $this->proveedorId;
    }

    /**
     * Set proveedorRuc
     *
     * @param string $proveedorRuc
     * @return TgarProveedor
     */
    public function setProveedorRuc($proveedorRuc)
    {
        $this->proveedorRuc = $proveedorRuc;

        return $this;
    }

    /**
     * Get proveedorRuc
     *
     * @return string 
     */
    public function getProveedorRuc()
    {
        return $this->proveedorRuc;
    }

    /**
     * Set proveedorCategoria
     *
     * @param string $proveedorCategoria
     * @return TgarProveedor
     */
    public function setProveedorCategoria($proveedorCategoria)
    {
        $this->proveedorCategoria = $proveedorCategoria;

        return $this;
    }

    /**
     * Get proveedorCategoria
     *
     * @return string 
     */
    public function getProveedorCategoria()
    {
        return $this->proveedorCategoria;
    }

    /**
     * Set proveedorRazonSocial
     *
     * @param string $proveedorRazonSocial
     * @return TgarProveedor
     */
    public function setProveedorRazonSocial($proveedorRazonSocial)
    {
        $this->proveedorRazonSocial = $proveedorRazonSocial;

        return $this;
    }

    /**
     * Get proveedorRazonSocial
     *
     * @return string 
     */
    public function getProveedorRazonSocial()
    {
        return $this->proveedorRazonSocial;
    }

    /**
     * Set proveedorTipoPersona
     *
     * @param string $proveedorTipoPersona
     * @return TgarProveedor
     */
    public function setProveedorTipoPersona($proveedorTipoPersona)
    {
        $this->proveedorTipoPersona = $proveedorTipoPersona;

        return $this;
    }

    /**
     * Get proveedorTipoPersona
     *
     * @return string 
     */
    public function getProveedorTipoPersona()
    {
        return $this->proveedorTipoPersona;
    }

    /**
     * Set proveedorNombreComercial
     *
     * @param string $proveedorNombreComercial
     * @return TgarProveedor
     */
    public function setProveedorNombreComercial($proveedorNombreComercial)
    {
        $this->proveedorNombreComercial = $proveedorNombreComercial;

        return $this;
    }

    /**
     * Get proveedorNombreComercial
     *
     * @return string 
     */
    public function getProveedorNombreComercial()
    {
        return $this->proveedorNombreComercial;
    }

    /**
     * Set proveedorPaginaWeb
     *
     * @param string $proveedorPaginaWeb
     * @return TgarProveedor
     */
    public function setProveedorPaginaWeb($proveedorPaginaWeb)
    {
        $this->proveedorPaginaWeb = $proveedorPaginaWeb;

        return $this;
    }

    /**
     * Get proveedorPaginaWeb
     *
     * @return string 
     */
    public function getProveedorPaginaWeb()
    {
        return $this->proveedorPaginaWeb;
    }

    /**
     * Set proveedorInicioActividades
     *
     * @param \DateTime $proveedorInicioActividades
     * @return TgarProveedor
     */
    public function setProveedorInicioActividades($proveedorInicioActividades)
    {
        $this->proveedorInicioActividades = $proveedorInicioActividades;

        return $this;
    }

    /**
     * Get proveedorInicioActividades
     *
     * @return \DateTime 
     */
    public function getProveedorInicioActividades()
    {
        return $this->proveedorInicioActividades;
    }

    /**
     * Set proveedorCallePrincipal
     *
     * @param string $proveedorCallePrincipal
     * @return TgarProveedor
     */
    public function setProveedorCallePrincipal($proveedorCallePrincipal)
    {
        $this->proveedorCallePrincipal = $proveedorCallePrincipal;

        return $this;
    }

    /**
     * Get proveedorCallePrincipal
     *
     * @return string 
     */
    public function getProveedorCallePrincipal()
    {
        return $this->proveedorCallePrincipal;
    }

    /**
     * Set proveedorCalleSecundaria
     *
     * @param string $proveedorCalleSecundaria
     * @return TgarProveedor
     */
    public function setProveedorCalleSecundaria($proveedorCalleSecundaria)
    {
        $this->proveedorCalleSecundaria = $proveedorCalleSecundaria;

        return $this;
    }

    /**
     * Get proveedorCalleSecundaria
     *
     * @return string 
     */
    public function getProveedorCalleSecundaria()
    {
        return $this->proveedorCalleSecundaria;
    }

    /**
     * Set proveedorNumero
     *
     * @param string $proveedorNumero
     * @return TgarProveedor
     */
    public function setProveedorNumero($proveedorNumero)
    {
        $this->proveedorNumero = $proveedorNumero;

        return $this;
    }

    /**
     * Get proveedorNumero
     *
     * @return string 
     */
    public function getProveedorNumero()
    {
        return $this->proveedorNumero;
    }

    /**
     * Set proveedorEdificio
     *
     * @param string $proveedorEdificio
     * @return TgarProveedor
     */
    public function setProveedorEdificio($proveedorEdificio)
    {
        $this->proveedorEdificio = $proveedorEdificio;

        return $this;
    }

    /**
     * Get proveedorEdificio
     *
     * @return string 
     */
    public function getProveedorEdificio()
    {
        return $this->proveedorEdificio;
    }

    /**
     * Set proveedorDepartamento
     *
     * @param string $proveedorDepartamento
     * @return TgarProveedor
     */
    public function setProveedorDepartamento($proveedorDepartamento)
    {
        $this->proveedorDepartamento = $proveedorDepartamento;

        return $this;
    }

    /**
     * Get proveedorDepartamento
     *
     * @return string 
     */
    public function getProveedorDepartamento()
    {
        return $this->proveedorDepartamento;
    }

    /**
     * Set proveedorOficina
     *
     * @param string $proveedorOficina
     * @return TgarProveedor
     */
    public function setProveedorOficina($proveedorOficina)
    {
        $this->proveedorOficina = $proveedorOficina;

        return $this;
    }

    /**
     * Get proveedorOficina
     *
     * @return string 
     */
    public function getProveedorOficina()
    {
        return $this->proveedorOficina;
    }

    /**
     * Set proveedorParroquia
     *
     * @param string $proveedorParroquia
     * @return TgarProveedor
     */
    public function setProveedorParroquia($proveedorParroquia)
    {
        $this->proveedorParroquia = $proveedorParroquia;

        return $this;
    }

    /**
     * Get proveedorParroquia
     *
     * @return string 
     */
    public function getProveedorParroquia()
    {
        return $this->proveedorParroquia;
    }

    /**
     * Set proveedorCanton
     *
     * @param string $proveedorCanton
     * @return TgarProveedor
     */
    public function setProveedorCanton($proveedorCanton)
    {
        $this->proveedorCanton = $proveedorCanton;

        return $this;
    }

    /**
     * Get proveedorCanton
     *
     * @return string 
     */
    public function getProveedorCanton()
    {
        return $this->proveedorCanton;
    }

    /**
     * Set proveedorProvincia
     *
     * @param string $proveedorProvincia
     * @return TgarProveedor
     */
    public function setProveedorProvincia($proveedorProvincia)
    {
        $this->proveedorProvincia = $proveedorProvincia;

        return $this;
    }

    /**
     * Get proveedorProvincia
     *
     * @return string 
     */
    public function getProveedorProvincia()
    {
        return $this->proveedorProvincia;
    }

    /**
     * Set proveedorPais
     *
     * @param string $proveedorPais
     * @return TgarProveedor
     */
    public function setProveedorPais($proveedorPais)
    {
        $this->proveedorPais = $proveedorPais;

        return $this;
    }

    /**
     * Get proveedorPais
     *
     * @return string 
     */
    public function getProveedorPais()
    {
        return $this->proveedorPais;
    }
}
