<?php

namespace Comun\ComunBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TgarProcesocontratacion
 *
 * @ORM\Table(name="tgar_procesocontratacion", uniqueConstraints={@ORM\UniqueConstraint(name="tgar_procesocontratacion_pk", columns={"proceso_id"})})
 * @ORM\Entity
 */
class TgarProcesocontratacion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="proceso_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="tgar_procesocontratacion_proceso_id_seq", allocationSize=1, initialValue=1)
     */
    private $procesoId;

    /**
     * @var string
     *
     * @ORM\Column(name="proceso_entidad", type="string", length=128, nullable=false)
     */
    private $procesoEntidad;

    /**
     * @var string
     *
     * @ORM\Column(name="proceso_numero_resolucion", type="string", length=64, nullable=false)
     */
    private $procesoNumeroResolucion;

    /**
     * @var string
     *
     * @ORM\Column(name="proceso_justificacion", type="text", nullable=false)
     */
    private $procesoJustificacion;

    /**
     * @var string
     *
     * @ORM\Column(name="proceso_objeto_proceso", type="text", nullable=false)
     */
    private $procesoObjetoProceso;

    /**
     * @var string
     *
     * @ORM\Column(name="proceso_codigo", type="string", length=64, nullable=false)
     */
    private $procesoCodigo;

    /**
     * @var string
     *
     * @ORM\Column(name="proceso_tipo_compra", type="string", length=64, nullable=false)
     */
    private $procesoTipoCompra;

    /**
     * @var string
     *
     * @ORM\Column(name="proceso_presupuesto_referencial", type="decimal", precision=10, scale=0, nullable=false)
     */
    private $procesoPresupuestoReferencial;

    /**
     * @var string
     *
     * @ORM\Column(name="proceso_tipo_contratacion", type="string", length=32, nullable=false)
     */
    private $procesoTipoContratacion;

    /**
     * @var string
     *
     * @ORM\Column(name="proceso_forma_pago", type="string", length=128, nullable=false)
     */
    private $procesoFormaPago;

    /**
     * @var string
     *
     * @ORM\Column(name="proceso_tipo_adjudicacion", type="string", length=32, nullable=false)
     */
    private $procesoTipoAdjudicacion;

    /**
     * @var string
     *
     * @ORM\Column(name="proceso_plazo_entrega", type="string", length=32, nullable=false)
     */
    private $procesoPlazoEntrega;

    /**
     * @var string
     *
     * @ORM\Column(name="proceso_vigencia_oferta", type="string", length=64, nullable=false)
     */
    private $procesoVigenciaOferta;

    /**
     * @var string
     *
     * @ORM\Column(name="proceso_funcionario_encargado", type="string", length=64, nullable=false)
     */
    private $procesoFuncionarioEncargado;

    /**
     * @var string
     *
     * @ORM\Column(name="proceso_estado", type="string", length=128, nullable=false)
     */
    private $procesoEstado;

    /**
     * @var string
     *
     * @ORM\Column(name="proceso_descripcion", type="text", nullable=false)
     */
    private $procesoDescripcion;
    
    /**
     * @var integer
     */
    private $proConId;

    /**
     * @var string
     */
    private $proConEntidad;

    /**
     * @var string
     */
    private $proConNumresolucion;

    /**
     * @var string
     */
    private $proConJustificacion;

    /**
     * @var string
     */
    private $proConObjproceso;

    /**
     * @var string
     */
    private $proConCodigo;

    /**
     * @var string
     */
    private $proConTipocompra;

    /**
     * @var string
     */
    private $proConPrereferencial;

    /**
     * @var string
     */
    private $proConTipocontratacion;

    /**
     * @var string
     */
    private $proConFormpago;

    /**
     * @var string
     */
    private $proConTipoadjudicacion;

    /**
     * @var string
     */
    private $proConPlazentrega;

    /**
     * @var string
     */
    private $proConVigeoferta;

    /**
     * @var string
     */
    private $proConFencproceso;

    /**
     * @var string
     */
    private $proConEstaproceso;

    /**
     * @var string
     */
    private $proConDescripcion;

    /**
     * @var \Comun\ComunBundle\Entity\TgarProveedor
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

    /**
     * Get procesoId
     *
     * @return integer 
     */
    public function getProcesoId()
    {
        return $this->procesoId;
    }

    /**
     * Set procesoEntidad
     *
     * @param string $procesoEntidad
     * @return TgarProcesocontratacion
     */
    public function setProcesoEntidad($procesoEntidad)
    {
        $this->procesoEntidad = $procesoEntidad;

        return $this;
    }

    /**
     * Get procesoEntidad
     *
     * @return string 
     */
    public function getProcesoEntidad()
    {
        return $this->procesoEntidad;
    }

    /**
     * Set procesoNumeroResolucion
     *
     * @param string $procesoNumeroResolucion
     * @return TgarProcesocontratacion
     */
    public function setProcesoNumeroResolucion($procesoNumeroResolucion)
    {
        $this->procesoNumeroResolucion = $procesoNumeroResolucion;

        return $this;
    }

    /**
     * Get procesoNumeroResolucion
     *
     * @return string 
     */
    public function getProcesoNumeroResolucion()
    {
        return $this->procesoNumeroResolucion;
    }

    /**
     * Set procesoJustificacion
     *
     * @param string $procesoJustificacion
     * @return TgarProcesocontratacion
     */
    public function setProcesoJustificacion($procesoJustificacion)
    {
        $this->procesoJustificacion = $procesoJustificacion;

        return $this;
    }

    /**
     * Get procesoJustificacion
     *
     * @return string 
     */
    public function getProcesoJustificacion()
    {
        return $this->procesoJustificacion;
    }

    /**
     * Set procesoObjetoProceso
     *
     * @param string $procesoObjetoProceso
     * @return TgarProcesocontratacion
     */
    public function setProcesoObjetoProceso($procesoObjetoProceso)
    {
        $this->procesoObjetoProceso = $procesoObjetoProceso;

        return $this;
    }

    /**
     * Get procesoObjetoProceso
     *
     * @return string 
     */
    public function getProcesoObjetoProceso()
    {
        return $this->procesoObjetoProceso;
    }

    /**
     * Set procesoCodigo
     *
     * @param string $procesoCodigo
     * @return TgarProcesocontratacion
     */
    public function setProcesoCodigo($procesoCodigo)
    {
        $this->procesoCodigo = $procesoCodigo;

        return $this;
    }

    /**
     * Get procesoCodigo
     *
     * @return string 
     */
    public function getProcesoCodigo()
    {
        return $this->procesoCodigo;
    }

    /**
     * Set procesoTipoCompra
     *
     * @param string $procesoTipoCompra
     * @return TgarProcesocontratacion
     */
    public function setProcesoTipoCompra($procesoTipoCompra)
    {
        $this->procesoTipoCompra = $procesoTipoCompra;

        return $this;
    }

    /**
     * Get procesoTipoCompra
     *
     * @return string 
     */
    public function getProcesoTipoCompra()
    {
        return $this->procesoTipoCompra;
    }

    /**
     * Set procesoPresupuestoReferencial
     *
     * @param string $procesoPresupuestoReferencial
     * @return TgarProcesocontratacion
     */
    public function setProcesoPresupuestoReferencial($procesoPresupuestoReferencial)
    {
        $this->procesoPresupuestoReferencial = $procesoPresupuestoReferencial;

        return $this;
    }

    /**
     * Get procesoPresupuestoReferencial
     *
     * @return string 
     */
    public function getProcesoPresupuestoReferencial()
    {
        return $this->procesoPresupuestoReferencial;
    }

    /**
     * Set procesoTipoContratacion
     *
     * @param string $procesoTipoContratacion
     * @return TgarProcesocontratacion
     */
    public function setProcesoTipoContratacion($procesoTipoContratacion)
    {
        $this->procesoTipoContratacion = $procesoTipoContratacion;

        return $this;
    }

    /**
     * Get procesoTipoContratacion
     *
     * @return string 
     */
    public function getProcesoTipoContratacion()
    {
        return $this->procesoTipoContratacion;
    }

    /**
     * Set procesoFormaPago
     *
     * @param string $procesoFormaPago
     * @return TgarProcesocontratacion
     */
    public function setProcesoFormaPago($procesoFormaPago)
    {
        $this->procesoFormaPago = $procesoFormaPago;

        return $this;
    }

    /**
     * Get procesoFormaPago
     *
     * @return string 
     */
    public function getProcesoFormaPago()
    {
        return $this->procesoFormaPago;
    }

    /**
     * Set procesoTipoAdjudicacion
     *
     * @param string $procesoTipoAdjudicacion
     * @return TgarProcesocontratacion
     */
    public function setProcesoTipoAdjudicacion($procesoTipoAdjudicacion)
    {
        $this->procesoTipoAdjudicacion = $procesoTipoAdjudicacion;

        return $this;
    }

    /**
     * Get procesoTipoAdjudicacion
     *
     * @return string 
     */
    public function getProcesoTipoAdjudicacion()
    {
        return $this->procesoTipoAdjudicacion;
    }

    /**
     * Set procesoPlazoEntrega
     *
     * @param string $procesoPlazoEntrega
     * @return TgarProcesocontratacion
     */
    public function setProcesoPlazoEntrega($procesoPlazoEntrega)
    {
        $this->procesoPlazoEntrega = $procesoPlazoEntrega;

        return $this;
    }

    /**
     * Get procesoPlazoEntrega
     *
     * @return string 
     */
    public function getProcesoPlazoEntrega()
    {
        return $this->procesoPlazoEntrega;
    }

    /**
     * Set procesoVigenciaOferta
     *
     * @param string $procesoVigenciaOferta
     * @return TgarProcesocontratacion
     */
    public function setProcesoVigenciaOferta($procesoVigenciaOferta)
    {
        $this->procesoVigenciaOferta = $procesoVigenciaOferta;

        return $this;
    }

    /**
     * Get procesoVigenciaOferta
     *
     * @return string 
     */
    public function getProcesoVigenciaOferta()
    {
        return $this->procesoVigenciaOferta;
    }

    /**
     * Set procesoFuncionarioEncargado
     *
     * @param string $procesoFuncionarioEncargado
     * @return TgarProcesocontratacion
     */
    public function setProcesoFuncionarioEncargado($procesoFuncionarioEncargado)
    {
        $this->procesoFuncionarioEncargado = $procesoFuncionarioEncargado;

        return $this;
    }

    /**
     * Get procesoFuncionarioEncargado
     *
     * @return string 
     */
    public function getProcesoFuncionarioEncargado()
    {
        return $this->procesoFuncionarioEncargado;
    }

    /**
     * Set procesoEstado
     *
     * @param string $procesoEstado
     * @return TgarProcesocontratacion
     */
    public function setProcesoEstado($procesoEstado)
    {
        $this->procesoEstado = $procesoEstado;

        return $this;
    }

    /**
     * Get procesoEstado
     *
     * @return string 
     */
    public function getProcesoEstado()
    {
        return $this->procesoEstado;
    }

    /**
     * Set procesoDescripcion
     *
     * @param string $procesoDescripcion
     * @return TgarProcesocontratacion
     */
    public function setProcesoDescripcion($procesoDescripcion)
    {
        $this->procesoDescripcion = $procesoDescripcion;

        return $this;
    }

    /**
     * Get procesoDescripcion
     *
     * @return string 
     */
    public function getProcesoDescripcion()
    {
        return $this->procesoDescripcion;
    }

    /**
     * Set proveedor
     *
     * @param \Comun\ComunBundle\Entity\TgarProveedor $proveedor
     * @return TgarProcesocontratacion
     */
    public function setProveedor(\Comun\ComunBundle\Entity\TgarProveedor $proveedor = null)
    {
        $this->proveedor = $proveedor;

        return $this;
    }

    /**
     * Get proveedor
     *
     * @return \Comun\ComunBundle\Entity\TgarProveedor 
     */
    public function getProveedor()
    {
        return $this->proveedor;
    }
}
