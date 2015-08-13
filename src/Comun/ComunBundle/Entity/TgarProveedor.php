<?php

namespace Comun\ComunBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TgarProveedor
 *
 * @ORM\Table(name="tgar_proveedor")
 * @ORM\Entity
 */
class TgarProveedor
{
    /**
     * @var integer
     *
     * @ORM\Column(name="prov_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="tgar_proveedor_prov_id_seq", allocationSize=1, initialValue=1)
     */
    private $provId;

    /**
     * @var string
     *
     * @ORM\Column(name="prov_nombre1", type="string", length=64, nullable=true)
     */
    private $provNombre1;

    /**
     * @var string
     *
     * @ORM\Column(name="prov_nombre2", type="string", length=64, nullable=true)
     */
    private $provNombre2;

    /**
     * @var string
     *
     * @ORM\Column(name="prov_apellido1", type="string", length=64, nullable=true)
     */
    private $provApellido1;

    /**
     * @var string
     *
     * @ORM\Column(name="prov_apellido2", type="string", length=64, nullable=true)
     */
    private $provApellido2;

    /**
     * @var integer
     *
     * @ORM\Column(name="prov_sexo", type="integer", nullable=true)
     */
    private $provSexo;

    /**
     * @var integer
     *
     * @ORM\Column(name="prov_estacivil", type="integer", nullable=true)
     */
    private $provEstacivil;

    /**
     * @var string
     *
     * @ORM\Column(name="prov_ruc", type="string", length=16, nullable=true)
     */
    private $provRuc;

    /**
     * @var string
     *
     * @ORM\Column(name="prov_pagiweb", type="string", length=32, nullable=true)
     */
    private $provPagiweb;

    /**
     * @var string
     *
     * @ORM\Column(name="prov_cateproveedor", type="string", length=64, nullable=true)
     */
    private $provCateproveedor;

    /**
     * @var string
     *
     * @ORM\Column(name="prov_niveeducacion", type="string", length=64, nullable=true)
     */
    private $provNiveeducacion;

    /**
     * @var string
     *
     * @ORM\Column(name="prov_areaespecialidad", type="string", length=64, nullable=true)
     */
    private $provAreaespecialidad;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="prov_fechnacimiento", type="date", nullable=true)
     */
    private $provFechnacimiento;

    /**
     * @var string
     *
     * @ORM\Column(name="prov_razosocial", type="string", length=64, nullable=true)
     */
    private $provRazosocial;

    /**
     * @var integer
     *
     * @ORM\Column(name="prov_inicactividades", type="integer", nullable=true)
     */
    private $provInicactividades;

    /**
     * @var string
     *
     * @ORM\Column(name="prov_nombcomercial", type="string", length=128, nullable=true)
     */
    private $provNombcomercial;

    /**
     * @var string
     *
     * @ORM\Column(name="prov_domitributario", type="string", length=128, nullable=true)
     */
    private $provDomitributario;

    /**
     * @var string
     *
     * @ORM\Column(name="prov_intereferencia", type="string", length=128, nullable=true)
     */
    private $provIntereferencia;

    /**
     * @var string
     *
     * @ORM\Column(name="prov_numero", type="string", length=8, nullable=true)
     */
    private $provNumero;

    /**
     * @var string
     *
     * @ORM\Column(name="prov_edificio", type="string", length=128, nullable=true)
     */
    private $provEdificio;

    /**
     * @var string
     *
     * @ORM\Column(name="prov_depaoficina", type="string", length=8, nullable=true)
     */
    private $provDepaoficina;

    /**
     * @var string
     *
     * @ORM\Column(name="prov_pais", type="string", length=32, nullable=true)
     */
    private $provPais;

    /**
     * @var string
     *
     * @ORM\Column(name="prov_estado", type="string", length=32, nullable=true)
     */
    private $provEstado;



    /**
     * Get provId
     *
     * @return integer 
     */
    public function getProvId()
    {
        return $this->provId;
    }

    /**
     * Set provNombre1
     *
     * @param string $provNombre1
     * @return TgarProveedor
     */
    public function setProvNombre1($provNombre1)
    {
        $this->provNombre1 = $provNombre1;

        return $this;
    }

    /**
     * Get provNombre1
     *
     * @return string 
     */
    public function getProvNombre1()
    {
        return $this->provNombre1;
    }

    /**
     * Set provNombre2
     *
     * @param string $provNombre2
     * @return TgarProveedor
     */
    public function setProvNombre2($provNombre2)
    {
        $this->provNombre2 = $provNombre2;

        return $this;
    }

    /**
     * Get provNombre2
     *
     * @return string 
     */
    public function getProvNombre2()
    {
        return $this->provNombre2;
    }

    /**
     * Set provApellido1
     *
     * @param string $provApellido1
     * @return TgarProveedor
     */
    public function setProvApellido1($provApellido1)
    {
        $this->provApellido1 = $provApellido1;

        return $this;
    }

    /**
     * Get provApellido1
     *
     * @return string 
     */
    public function getProvApellido1()
    {
        return $this->provApellido1;
    }

    /**
     * Set provApellido2
     *
     * @param string $provApellido2
     * @return TgarProveedor
     */
    public function setProvApellido2($provApellido2)
    {
        $this->provApellido2 = $provApellido2;

        return $this;
    }

    /**
     * Get provApellido2
     *
     * @return string 
     */
    public function getProvApellido2()
    {
        return $this->provApellido2;
    }

    /**
     * Set provSexo
     *
     * @param integer $provSexo
     * @return TgarProveedor
     */
    public function setProvSexo($provSexo)
    {
        $this->provSexo = $provSexo;

        return $this;
    }

    /**
     * Get provSexo
     *
     * @return integer 
     */
    public function getProvSexo()
    {
        return $this->provSexo;
    }

    /**
     * Set provEstacivil
     *
     * @param integer $provEstacivil
     * @return TgarProveedor
     */
    public function setProvEstacivil($provEstacivil)
    {
        $this->provEstacivil = $provEstacivil;

        return $this;
    }

    /**
     * Get provEstacivil
     *
     * @return integer 
     */
    public function getProvEstacivil()
    {
        return $this->provEstacivil;
    }

    /**
     * Set provRuc
     *
     * @param string $provRuc
     * @return TgarProveedor
     */
    public function setProvRuc($provRuc)
    {
        $this->provRuc = $provRuc;

        return $this;
    }

    /**
     * Get provRuc
     *
     * @return string 
     */
    public function getProvRuc()
    {
        return $this->provRuc;
    }

    /**
     * Set provPagiweb
     *
     * @param string $provPagiweb
     * @return TgarProveedor
     */
    public function setProvPagiweb($provPagiweb)
    {
        $this->provPagiweb = $provPagiweb;

        return $this;
    }

    /**
     * Get provPagiweb
     *
     * @return string 
     */
    public function getProvPagiweb()
    {
        return $this->provPagiweb;
    }

    /**
     * Set provCateproveedor
     *
     * @param string $provCateproveedor
     * @return TgarProveedor
     */
    public function setProvCateproveedor($provCateproveedor)
    {
        $this->provCateproveedor = $provCateproveedor;

        return $this;
    }

    /**
     * Get provCateproveedor
     *
     * @return string 
     */
    public function getProvCateproveedor()
    {
        return $this->provCateproveedor;
    }

    /**
     * Set provNiveeducacion
     *
     * @param string $provNiveeducacion
     * @return TgarProveedor
     */
    public function setProvNiveeducacion($provNiveeducacion)
    {
        $this->provNiveeducacion = $provNiveeducacion;

        return $this;
    }

    /**
     * Get provNiveeducacion
     *
     * @return string 
     */
    public function getProvNiveeducacion()
    {
        return $this->provNiveeducacion;
    }

    /**
     * Set provAreaespecialidad
     *
     * @param string $provAreaespecialidad
     * @return TgarProveedor
     */
    public function setProvAreaespecialidad($provAreaespecialidad)
    {
        $this->provAreaespecialidad = $provAreaespecialidad;

        return $this;
    }

    /**
     * Get provAreaespecialidad
     *
     * @return string 
     */
    public function getProvAreaespecialidad()
    {
        return $this->provAreaespecialidad;
    }

    /**
     * Set provFechnacimiento
     *
     * @param \DateTime $provFechnacimiento
     * @return TgarProveedor
     */
    public function setProvFechnacimiento($provFechnacimiento)
    {
        $this->provFechnacimiento = $provFechnacimiento;

        return $this;
    }

    /**
     * Get provFechnacimiento
     *
     * @return \DateTime 
     */
    public function getProvFechnacimiento()
    {
        return $this->provFechnacimiento;
    }

    /**
     * Set provRazosocial
     *
     * @param string $provRazosocial
     * @return TgarProveedor
     */
    public function setProvRazosocial($provRazosocial)
    {
        $this->provRazosocial = $provRazosocial;

        return $this;
    }

    /**
     * Get provRazosocial
     *
     * @return string 
     */
    public function getProvRazosocial()
    {
        return $this->provRazosocial;
    }

    /**
     * Set provInicactividades
     *
     * @param integer $provInicactividades
     * @return TgarProveedor
     */
    public function setProvInicactividades($provInicactividades)
    {
        $this->provInicactividades = $provInicactividades;

        return $this;
    }

    /**
     * Get provInicactividades
     *
     * @return integer 
     */
    public function getProvInicactividades()
    {
        return $this->provInicactividades;
    }

    /**
     * Set provNombcomercial
     *
     * @param string $provNombcomercial
     * @return TgarProveedor
     */
    public function setProvNombcomercial($provNombcomercial)
    {
        $this->provNombcomercial = $provNombcomercial;

        return $this;
    }

    /**
     * Get provNombcomercial
     *
     * @return string 
     */
    public function getProvNombcomercial()
    {
        return $this->provNombcomercial;
    }

    /**
     * Set provDomitributario
     *
     * @param string $provDomitributario
     * @return TgarProveedor
     */
    public function setProvDomitributario($provDomitributario)
    {
        $this->provDomitributario = $provDomitributario;

        return $this;
    }

    /**
     * Get provDomitributario
     *
     * @return string 
     */
    public function getProvDomitributario()
    {
        return $this->provDomitributario;
    }

    /**
     * Set provIntereferencia
     *
     * @param string $provIntereferencia
     * @return TgarProveedor
     */
    public function setProvIntereferencia($provIntereferencia)
    {
        $this->provIntereferencia = $provIntereferencia;

        return $this;
    }

    /**
     * Get provIntereferencia
     *
     * @return string 
     */
    public function getProvIntereferencia()
    {
        return $this->provIntereferencia;
    }

    /**
     * Set provNumero
     *
     * @param string $provNumero
     * @return TgarProveedor
     */
    public function setProvNumero($provNumero)
    {
        $this->provNumero = $provNumero;

        return $this;
    }

    /**
     * Get provNumero
     *
     * @return string 
     */
    public function getProvNumero()
    {
        return $this->provNumero;
    }

    /**
     * Set provEdificio
     *
     * @param string $provEdificio
     * @return TgarProveedor
     */
    public function setProvEdificio($provEdificio)
    {
        $this->provEdificio = $provEdificio;

        return $this;
    }

    /**
     * Get provEdificio
     *
     * @return string 
     */
    public function getProvEdificio()
    {
        return $this->provEdificio;
    }

    /**
     * Set provDepaoficina
     *
     * @param string $provDepaoficina
     * @return TgarProveedor
     */
    public function setProvDepaoficina($provDepaoficina)
    {
        $this->provDepaoficina = $provDepaoficina;

        return $this;
    }

    /**
     * Get provDepaoficina
     *
     * @return string 
     */
    public function getProvDepaoficina()
    {
        return $this->provDepaoficina;
    }

    /**
     * Set provPais
     *
     * @param string $provPais
     * @return TgarProveedor
     */
    public function setProvPais($provPais)
    {
        $this->provPais = $provPais;

        return $this;
    }

    /**
     * Get provPais
     *
     * @return string 
     */
    public function getProvPais()
    {
        return $this->provPais;
    }

    /**
     * Set provEstado
     *
     * @param string $provEstado
     * @return TgarProveedor
     */
    public function setProvEstado($provEstado)
    {
        $this->provEstado = $provEstado;

        return $this;
    }

    /**
     * Get provEstado
     *
     * @return string 
     */
    public function getProvEstado()
    {
        return $this->provEstado;
    }
}
