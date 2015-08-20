<?php

namespace Comun\ComunBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TgarFechas
 *
 * @ORM\Table(name="tgar_fechas", indexes={@ORM\Index(name="fecha_tipo_fk", columns={"tipo_fecha_id"}), @ORM\Index(name="detalle_solicitud_fecha_fk", columns={"solicitud_garantia_id", "institucion_id"})})
 * @ORM\Entity
 */
class TgarFechas
{
    /**
     * @var integer
     *
     * @ORM\Column(name="fecha_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="tgar_fechas_fecha_id_seq", allocationSize=1, initialValue=1)
     */
    private $fechaId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_fecha", type="date", nullable=true)
     */
    private $fechaFecha;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_hora", type="time", nullable=true)
     */
    private $fechaHora;

    /**
     * @var \TgarDetalleSolicitud
     *
     * @ORM\ManyToOne(targetEntity="TgarDetalleSolicitud")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="solicitud_garantia_id", referencedColumnName="solicitud_garantia_id"),
     *   @ORM\JoinColumn(name="institucion_id", referencedColumnName="institucion_id")
     * })
     */
    private $solicitudGarantia;

    /**
     * @var \TgarTipoFecha
     *
     * @ORM\ManyToOne(targetEntity="TgarTipoFecha")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tipo_fecha_id", referencedColumnName="tipo_fecha_id")
     * })
     */
    private $tipoFecha;



    /**
     * Get fechaId
     *
     * @return integer 
     */
    public function getFechaId()
    {
        return $this->fechaId;
    }

    /**
     * Set fechaFecha
     *
     * @param \DateTime $fechaFecha
     * @return TgarFechas
     */
    public function setFechaFecha($fechaFecha)
    {
        $this->fechaFecha = $fechaFecha;

        return $this;
    }

    /**
     * Get fechaFecha
     *
     * @return \DateTime 
     */
    public function getFechaFecha()
    {
        return $this->fechaFecha;
    }

    /**
     * Set fechaHora
     *
     * @param \DateTime $fechaHora
     * @return TgarFechas
     */
    public function setFechaHora($fechaHora)
    {
        $this->fechaHora = $fechaHora;

        return $this;
    }

    /**
     * Get fechaHora
     *
     * @return \DateTime 
     */
    public function getFechaHora()
    {
        return $this->fechaHora;
    }

    /**
     * Set solicitudGarantia
     *
     * @param \Comun\ComunBundle\Entity\TgarDetalleSolicitud $solicitudGarantia
     * @return TgarFechas
     */
    public function setSolicitudGarantia(\Comun\ComunBundle\Entity\TgarDetalleSolicitud $solicitudGarantia = null)
    {
        $this->solicitudGarantia = $solicitudGarantia;

        return $this;
    }

    /**
     * Get solicitudGarantia
     *
     * @return \Comun\ComunBundle\Entity\TgarDetalleSolicitud 
     */
    public function getSolicitudGarantia()
    {
        return $this->solicitudGarantia;
    }

    /**
     * Set tipoFecha
     *
     * @param \Comun\ComunBundle\Entity\TgarTipoFecha $tipoFecha
     * @return TgarFechas
     */
    public function setTipoFecha(\Comun\ComunBundle\Entity\TgarTipoFecha $tipoFecha = null)
    {
        $this->tipoFecha = $tipoFecha;

        return $this;
    }

    /**
     * Get tipoFecha
     *
     * @return \Comun\ComunBundle\Entity\TgarTipoFecha 
     */
    public function getTipoFecha()
    {
        return $this->tipoFecha;
    }
}
