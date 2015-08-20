<?php

namespace Comun\ComunBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TgarProcesoContratacion
 *
 * @ORM\Table(name="tgar_proceso_contratacion", uniqueConstraints={@ORM\UniqueConstraint(name="tgar_proceso_contratacion_pk", columns={"proceso_id"})})
 * @ORM\Entity
 */
class TgarProcesoContratacion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="proceso_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="tgar_proceso_contratacion_proceso_id_seq", allocationSize=1, initialValue=1)
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
     * @return TgarProcesoContratacion
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
     * @return TgarProcesoContratacion
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
     * @return TgarProcesoContratacion
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
     * @return TgarProcesoContratacion
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
     * @return TgarProcesoContratacion
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
     * @return TgarProcesoContratacion
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
     * @return TgarProcesoContratacion
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
     * @return TgarProcesoContratacion
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
     * @return TgarProcesoContratacion
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
     * @return TgarProcesoContratacion
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
     * @return TgarProcesoContratacion
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
     * @return TgarProcesoContratacion
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
     * @return TgarProcesoContratacion
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
     * @return TgarProcesoContratacion
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
     * @return TgarProcesoContratacion
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
}
