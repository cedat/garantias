<?php

namespace Comun\ComunBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TgarProveedor
 *
 * @ORM\Table(name="tgar_proveedor", uniqueConstraints={@ORM\UniqueConstraint(name="tgar_proveedor_pk", columns={"proveedor_id"})}, indexes={@ORM\Index(name="relacion_proveedor_datos_fk", columns={"proveedor_id"}), @ORM\Index(name="direccion_proveedor_fk", columns={"ubicacion_id"})})
 * @ORM\Entity
 */
class TgarProveedor
{
    /**
     * @var integer
     *
     * @ORM\Column(name="proveedor_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")     
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
     * @ORM\Column(name="proveedor_nombre_comercial", type="string", length=128, nullable=true)
     */
    private $proveedorNombreComercial;

    /**
     * @var string
     *
     * @ORM\Column(name="proveedor_pagina_web", type="string", length=32, nullable=true)
     */
    private $proveedorPaginaWeb;

    /**
     * @var  \DateTime
     *
     * @ORM\Column(name="proveedor_fecha_inicio_actividades", type="date", nullable=true)
     */
    private $proveedorFechaInicioActividades;

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
     * Get proveedorId
     *
     * @return integer 
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
     * Set proveedorFechaInicioActividades
     *
     * @param \DateTime $proveedorFechaInicioActividades
     * @return TgarProveedor
     */
    public function setProveedorFechaInicioActividades($proveedorFechaInicioActividades)
    {
        $this->proveedorFechaInicioActividades = $proveedorFechaInicioActividades;

        return $this;
    }

    /**
     * Get proveedorFechaInicioActividades
     *
     * @return \DateTime 
     */
    public function getProveedorFechaInicioActividades()
    {
        return $this->proveedorFechaInicioActividades;
    }

    /**
     * Set ubicacion
     *
     * @param \Comun\ComunBundle\Entity\TgarUbicacion $ubicacion
     * @return TgarProveedor
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
