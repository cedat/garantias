<?php

namespace Comun\ComunBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TgarProcesocontratacion
 *
 * @ORM\Table(name="tgar_procesocontratacion", indexes={@ORM\Index(name="prov_proccont_fk", columns={"prov_id"})})
 * @ORM\Entity
 */
class TgarProcesocontratacion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="pro_con_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="tgar_procesocontratacion_pro_con_id_seq", allocationSize=1, initialValue=1)
     */
    private $proConId;

    /**
     * @var string
     *
     * @ORM\Column(name="pro_con_entidad", type="string", length=128, nullable=true)
     */
    private $proConEntidad;

    /**
     * @var string
     *
     * @ORM\Column(name="pro_con_numresolucion", type="string", length=64, nullable=true)
     */
    private $proConNumresolucion;

    /**
     * @var string
     *
     * @ORM\Column(name="pro_con_justificacion", type="text", nullable=true)
     */
    private $proConJustificacion;

    /**
     * @var string
     *
     * @ORM\Column(name="pro_con_objproceso", type="text", nullable=true)
     */
    private $proConObjproceso;

    /**
     * @var string
     *
     * @ORM\Column(name="pro_con_codigo", type="string", length=64, nullable=true)
     */
    private $proConCodigo;

    /**
     * @var string
     *
     * @ORM\Column(name="pro_con_tipocompra", type="string", length=64, nullable=true)
     */
    private $proConTipocompra;

    /**
     * @var string
     *
     * @ORM\Column(name="pro_con_prereferencial", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $proConPrereferencial;

    /**
     * @var string
     *
     * @ORM\Column(name="pro_con_tipocontratacion", type="string", length=32, nullable=true)
     */
    private $proConTipocontratacion;

    /**
     * @var string
     *
     * @ORM\Column(name="pro_con_formpago", type="string", length=128, nullable=true)
     */
    private $proConFormpago;

    /**
     * @var string
     *
     * @ORM\Column(name="pro_con_tipoadjudicacion", type="string", length=32, nullable=true)
     */
    private $proConTipoadjudicacion;

    /**
     * @var string
     *
     * @ORM\Column(name="pro_con_plazentrega", type="string", length=32, nullable=true)
     */
    private $proConPlazentrega;

    /**
     * @var string
     *
     * @ORM\Column(name="pro_con_vigeoferta", type="string", length=64, nullable=true)
     */
    private $proConVigeoferta;

    /**
     * @var string
     *
     * @ORM\Column(name="pro_con_fencproceso", type="string", length=64, nullable=true)
     */
    private $proConFencproceso;

    /**
     * @var string
     *
     * @ORM\Column(name="pro_con_estaproceso", type="string", length=128, nullable=true)
     */
    private $proConEstaproceso;

    /**
     * @var string
     *
     * @ORM\Column(name="pro_con_descripcion", type="text", nullable=true)
     */
    private $proConDescripcion;

    /**
     * @var \TgarProveedor
     *
     * @ORM\ManyToOne(targetEntity="TgarProveedor")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="prov_id", referencedColumnName="prov_id")
     * })
     */
    private $prov;



    /**
     * Get proConId
     *
     * @return integer 
     */
    public function getProConId()
    {
        return $this->proConId;
    }

    /**
     * Set proConEntidad
     *
     * @param string $proConEntidad
     * @return TgarProcesocontratacion
     */
    public function setProConEntidad($proConEntidad)
    {
        $this->proConEntidad = $proConEntidad;

        return $this;
    }

    /**
     * Get proConEntidad
     *
     * @return string 
     */
    public function getProConEntidad()
    {
        return $this->proConEntidad;
    }

    /**
     * Set proConNumresolucion
     *
     * @param string $proConNumresolucion
     * @return TgarProcesocontratacion
     */
    public function setProConNumresolucion($proConNumresolucion)
    {
        $this->proConNumresolucion = $proConNumresolucion;

        return $this;
    }

    /**
     * Get proConNumresolucion
     *
     * @return string 
     */
    public function getProConNumresolucion()
    {
        return $this->proConNumresolucion;
    }

    /**
     * Set proConJustificacion
     *
     * @param string $proConJustificacion
     * @return TgarProcesocontratacion
     */
    public function setProConJustificacion($proConJustificacion)
    {
        $this->proConJustificacion = $proConJustificacion;

        return $this;
    }

    /**
     * Get proConJustificacion
     *
     * @return string 
     */
    public function getProConJustificacion()
    {
        return $this->proConJustificacion;
    }

    /**
     * Set proConObjproceso
     *
     * @param string $proConObjproceso
     * @return TgarProcesocontratacion
     */
    public function setProConObjproceso($proConObjproceso)
    {
        $this->proConObjproceso = $proConObjproceso;

        return $this;
    }

    /**
     * Get proConObjproceso
     *
     * @return string 
     */
    public function getProConObjproceso()
    {
        return $this->proConObjproceso;
    }

    /**
     * Set proConCodigo
     *
     * @param string $proConCodigo
     * @return TgarProcesocontratacion
     */
    public function setProConCodigo($proConCodigo)
    {
        $this->proConCodigo = $proConCodigo;

        return $this;
    }

    /**
     * Get proConCodigo
     *
     * @return string 
     */
    public function getProConCodigo()
    {
        return $this->proConCodigo;
    }

    /**
     * Set proConTipocompra
     *
     * @param string $proConTipocompra
     * @return TgarProcesocontratacion
     */
    public function setProConTipocompra($proConTipocompra)
    {
        $this->proConTipocompra = $proConTipocompra;

        return $this;
    }

    /**
     * Get proConTipocompra
     *
     * @return string 
     */
    public function getProConTipocompra()
    {
        return $this->proConTipocompra;
    }

    /**
     * Set proConPrereferencial
     *
     * @param string $proConPrereferencial
     * @return TgarProcesocontratacion
     */
    public function setProConPrereferencial($proConPrereferencial)
    {
        $this->proConPrereferencial = $proConPrereferencial;

        return $this;
    }

    /**
     * Get proConPrereferencial
     *
     * @return string 
     */
    public function getProConPrereferencial()
    {
        return $this->proConPrereferencial;
    }

    /**
     * Set proConTipocontratacion
     *
     * @param string $proConTipocontratacion
     * @return TgarProcesocontratacion
     */
    public function setProConTipocontratacion($proConTipocontratacion)
    {
        $this->proConTipocontratacion = $proConTipocontratacion;

        return $this;
    }

    /**
     * Get proConTipocontratacion
     *
     * @return string 
     */
    public function getProConTipocontratacion()
    {
        return $this->proConTipocontratacion;
    }

    /**
     * Set proConFormpago
     *
     * @param string $proConFormpago
     * @return TgarProcesocontratacion
     */
    public function setProConFormpago($proConFormpago)
    {
        $this->proConFormpago = $proConFormpago;

        return $this;
    }

    /**
     * Get proConFormpago
     *
     * @return string 
     */
    public function getProConFormpago()
    {
        return $this->proConFormpago;
    }

    /**
     * Set proConTipoadjudicacion
     *
     * @param string $proConTipoadjudicacion
     * @return TgarProcesocontratacion
     */
    public function setProConTipoadjudicacion($proConTipoadjudicacion)
    {
        $this->proConTipoadjudicacion = $proConTipoadjudicacion;

        return $this;
    }

    /**
     * Get proConTipoadjudicacion
     *
     * @return string 
     */
    public function getProConTipoadjudicacion()
    {
        return $this->proConTipoadjudicacion;
    }

    /**
     * Set proConPlazentrega
     *
     * @param string $proConPlazentrega
     * @return TgarProcesocontratacion
     */
    public function setProConPlazentrega($proConPlazentrega)
    {
        $this->proConPlazentrega = $proConPlazentrega;

        return $this;
    }

    /**
     * Get proConPlazentrega
     *
     * @return string 
     */
    public function getProConPlazentrega()
    {
        return $this->proConPlazentrega;
    }

    /**
     * Set proConVigeoferta
     *
     * @param string $proConVigeoferta
     * @return TgarProcesocontratacion
     */
    public function setProConVigeoferta($proConVigeoferta)
    {
        $this->proConVigeoferta = $proConVigeoferta;

        return $this;
    }

    /**
     * Get proConVigeoferta
     *
     * @return string 
     */
    public function getProConVigeoferta()
    {
        return $this->proConVigeoferta;
    }

    /**
     * Set proConFencproceso
     *
     * @param string $proConFencproceso
     * @return TgarProcesocontratacion
     */
    public function setProConFencproceso($proConFencproceso)
    {
        $this->proConFencproceso = $proConFencproceso;

        return $this;
    }

    /**
     * Get proConFencproceso
     *
     * @return string 
     */
    public function getProConFencproceso()
    {
        return $this->proConFencproceso;
    }

    /**
     * Set proConEstaproceso
     *
     * @param string $proConEstaproceso
     * @return TgarProcesocontratacion
     */
    public function setProConEstaproceso($proConEstaproceso)
    {
        $this->proConEstaproceso = $proConEstaproceso;

        return $this;
    }

    /**
     * Get proConEstaproceso
     *
     * @return string 
     */
    public function getProConEstaproceso()
    {
        return $this->proConEstaproceso;
    }

    /**
     * Set proConDescripcion
     *
     * @param string $proConDescripcion
     * @return TgarProcesocontratacion
     */
    public function setProConDescripcion($proConDescripcion)
    {
        $this->proConDescripcion = $proConDescripcion;

        return $this;
    }

    /**
     * Get proConDescripcion
     *
     * @return string 
     */
    public function getProConDescripcion()
    {
        return $this->proConDescripcion;
    }

    /**
     * Set prov
     *
     * @param \Comun\ComunBundle\Entity\TgarProveedor $prov
     * @return TgarProcesocontratacion
     */
    public function setProv(\Comun\ComunBundle\Entity\TgarProveedor $prov = null)
    {
        $this->prov = $prov;

        return $this;
    }

    /**
     * Get prov
     *
     * @return \Comun\ComunBundle\Entity\TgarProveedor 
     */
    public function getProv()
    {
        return $this->prov;
    }
}
