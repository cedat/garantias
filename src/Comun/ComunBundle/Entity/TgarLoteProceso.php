<?php

namespace Comun\ComunBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TgarLoteProceso
 *
 * @ORM\Table(name="tgar_lote_proceso", uniqueConstraints={@ORM\UniqueConstraint(name="tgar_lote_proceso_pk", columns={"lote_id"})}, indexes={@ORM\Index(name="proceso_lote_fk", columns={"proceso_id"}), @ORM\Index(name="proveedor_lote_fk", columns={"proveedor_id"})})
 * @ORM\Entity
 */
class TgarLoteProceso
{
    /**
     * @var integer
     *
     * @ORM\Column(name="lote_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="tgar_lote_proceso_lote_id_seq", allocationSize=1, initialValue=1)
     */
    private $loteId;

    /**
     * @var string
     *
     * @ORM\Column(name="lote_descripcion", type="string", length=300, nullable=true)
     */
    private $loteDescripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="lote_cantidad", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $loteCantidad;

    /**
     * @var string
     *
     * @ORM\Column(name="lote_unidad", type="string", length=20, nullable=true)
     */
    private $loteUnidad;

    /**
     * @var string
     *
     * @ORM\Column(name="lote_precio_referencial", type="decimal", precision=19, scale=7, nullable=true)
     */
    private $lotePrecioReferencial;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="lote_fecha_registro", type="date", nullable=true)
     */
    private $loteFechaRegistro;

    /**
     * @var \TgarProcesoContratacion
     *
     * @ORM\ManyToOne(targetEntity="TgarProcesoContratacion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="proceso_id", referencedColumnName="proceso_id")
     * })
     */
    private $proceso;

    /**
     * @var \TgarProveedor
     *
     * @ORM\ManyToOne(targetEntity="TgarProveedor")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="proveedor_id", referencedColumnName="proveedor_id")
     * })
     */
    private $proveedor;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="TgarGarantia", mappedBy="lote")
     */
    private $tipoGarantia;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tipoGarantia = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get loteId
     *
     * @return integer 
     */
    public function getLoteId()
    {
        return $this->loteId;
    }

    /**
     * Set loteDescripcion
     *
     * @param string $loteDescripcion
     * @return TgarLoteProceso
     */
    public function setLoteDescripcion($loteDescripcion)
    {
        $this->loteDescripcion = $loteDescripcion;

        return $this;
    }

    /**
     * Get loteDescripcion
     *
     * @return string 
     */
    public function getLoteDescripcion()
    {
        return $this->loteDescripcion;
    }

    /**
     * Set loteCantidad
     *
     * @param string $loteCantidad
     * @return TgarLoteProceso
     */
    public function setLoteCantidad($loteCantidad)
    {
        $this->loteCantidad = $loteCantidad;

        return $this;
    }

    /**
     * Get loteCantidad
     *
     * @return string 
     */
    public function getLoteCantidad()
    {
        return $this->loteCantidad;
    }

    /**
     * Set loteUnidad
     *
     * @param string $loteUnidad
     * @return TgarLoteProceso
     */
    public function setLoteUnidad($loteUnidad)
    {
        $this->loteUnidad = $loteUnidad;

        return $this;
    }

    /**
     * Get loteUnidad
     *
     * @return string 
     */
    public function getLoteUnidad()
    {
        return $this->loteUnidad;
    }

    /**
     * Set lotePrecioReferencial
     *
     * @param string $lotePrecioReferencial
     * @return TgarLoteProceso
     */
    public function setLotePrecioReferencial($lotePrecioReferencial)
    {
        $this->lotePrecioReferencial = $lotePrecioReferencial;

        return $this;
    }

    /**
     * Get lotePrecioReferencial
     *
     * @return string 
     */
    public function getLotePrecioReferencial()
    {
        return $this->lotePrecioReferencial;
    }

    /**
     * Set loteFechaRegistro
     *
     * @param \DateTime $loteFechaRegistro
     * @return TgarLoteProceso
     */
    public function setLoteFechaRegistro($loteFechaRegistro)
    {
        $this->loteFechaRegistro = $loteFechaRegistro;

        return $this;
    }

    /**
     * Get loteFechaRegistro
     *
     * @return \DateTime 
     */
    public function getLoteFechaRegistro()
    {
        return $this->loteFechaRegistro;
    }

    /**
     * Set proceso
     *
     * @param \Comun\ComunBundle\Entity\TgarProcesoContratacion $proceso
     * @return TgarLoteProceso
     */
    public function setProceso(\Comun\ComunBundle\Entity\TgarProcesoContratacion $proceso = null)
    {
        $this->proceso = $proceso;

        return $this;
    }

    /**
     * Get proceso
     *
     * @return \Comun\ComunBundle\Entity\TgarProcesoContratacion 
     */
    public function getProceso()
    {
        return $this->proceso;
    }

    /**
     * Set proveedor
     *
     * @param \Comun\ComunBundle\Entity\TgarProveedor $proveedor
     * @return TgarLoteProceso
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

    /**
     * Add tipoGarantia
     *
     * @param \Comun\ComunBundle\Entity\TgarGarantia $tipoGarantia
     * @return TgarLoteProceso
     */
    public function addTipoGarantium(\Comun\ComunBundle\Entity\TgarGarantia $tipoGarantia)
    {
        $this->tipoGarantia[] = $tipoGarantia;

        return $this;
    }

    /**
     * Remove tipoGarantia
     *
     * @param \Comun\ComunBundle\Entity\TgarGarantia $tipoGarantia
     */
    public function removeTipoGarantium(\Comun\ComunBundle\Entity\TgarGarantia $tipoGarantia)
    {
        $this->tipoGarantia->removeElement($tipoGarantia);
    }

    /**
     * Get tipoGarantia
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTipoGarantia()
    {
        return $this->tipoGarantia;
    }
}
