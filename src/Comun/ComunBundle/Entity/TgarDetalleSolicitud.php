<?php

namespace Comun\ComunBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TgarDetalleSolicitud
 *
 * @ORM\Table(name="tgar_detalle_solicitud", uniqueConstraints={@ORM\UniqueConstraint(name="tgar_detalle_solicitud_pk", columns={"solicitud_garantia_id", "institucion_id"})}, indexes={@ORM\Index(name="estado_solicitud_detalle_fk", columns={"estado_solicitud_id"}), @ORM\Index(name="intitucion_detalle_solicitud_fk", columns={"institucion_id"}), @ORM\Index(name="solicitud_garantia_fk", columns={"solicitud_garantia_id"})})
 * @ORM\Entity
 */
class TgarDetalleSolicitud
{
    /**
     * @var float
     *
     * @ORM\Column(name="detalle_solicitud_comision", type="float", precision=10, scale=0, nullable=true)
     */
    private $detalleSolicitudComision;

    /**
     * @var \TgarEstadoSolicitud
     *
     * @ORM\ManyToOne(targetEntity="TgarEstadoSolicitud")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="estado_solicitud_id", referencedColumnName="estado_solicitud_id")
     * })
     */
    private $estadoSolicitud;

    /**
     * @var \TgarInstitucionFinanciera
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="TgarInstitucionFinanciera")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="institucion_id", referencedColumnName="institucion_id")
     * })
     */
    private $institucion;

    /**
     * @var \TgarSolicitudGarantia
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="TgarSolicitudGarantia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="solicitud_garantia_id", referencedColumnName="solicitud_garantia_id")
     * })
     */
    private $solicitudGarantia;



    /**
     * Set detalleSolicitudComision
     *
     * @param float $detalleSolicitudComision
     * @return TgarDetalleSolicitud
     */
    public function setDetalleSolicitudComision($detalleSolicitudComision)
    {
        $this->detalleSolicitudComision = $detalleSolicitudComision;

        return $this;
    }

    /**
     * Get detalleSolicitudComision
     *
     * @return float 
     */
    public function getDetalleSolicitudComision()
    {
        return $this->detalleSolicitudComision;
    }

    /**
     * Set estadoSolicitud
     *
     * @param \Comun\ComunBundle\Entity\TgarEstadoSolicitud $estadoSolicitud
     * @return TgarDetalleSolicitud
     */
    public function setEstadoSolicitud(\Comun\ComunBundle\Entity\TgarEstadoSolicitud $estadoSolicitud = null)
    {
        $this->estadoSolicitud = $estadoSolicitud;

        return $this;
    }

    /**
     * Get estadoSolicitud
     *
     * @return \Comun\ComunBundle\Entity\TgarEstadoSolicitud 
     */
    public function getEstadoSolicitud()
    {
        return $this->estadoSolicitud;
    }

    /**
     * Set institucion
     *
     * @param \Comun\ComunBundle\Entity\TgarInstitucionFinanciera $institucion
     * @return TgarDetalleSolicitud
     */
    public function setInstitucion(\Comun\ComunBundle\Entity\TgarInstitucionFinanciera $institucion)
    {
        $this->institucion = $institucion;

        return $this;
    }

    /**
     * Get institucion
     *
     * @return \Comun\ComunBundle\Entity\TgarInstitucionFinanciera 
     */
    public function getInstitucion()
    {
        return $this->institucion;
    }

    /**
     * Set solicitudGarantia
     *
     * @param \Comun\ComunBundle\Entity\TgarSolicitudGarantia $solicitudGarantia
     * @return TgarDetalleSolicitud
     */
    public function setSolicitudGarantia(\Comun\ComunBundle\Entity\TgarSolicitudGarantia $solicitudGarantia)
    {
        $this->solicitudGarantia = $solicitudGarantia;

        return $this;
    }

    /**
     * Get solicitudGarantia
     *
     * @return \Comun\ComunBundle\Entity\TgarSolicitudGarantia 
     */
    public function getSolicitudGarantia()
    {
        return $this->solicitudGarantia;
    }
}
