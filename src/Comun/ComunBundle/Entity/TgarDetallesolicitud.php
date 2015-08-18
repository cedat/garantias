<?php

namespace Comun\ComunBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TgarDetallesolicitud
 *
 * @ORM\Table(name="tgar_detallesolicitud", uniqueConstraints={@ORM\UniqueConstraint(name="tgar_detallesolicitud_pk", columns={"det_solicitud_id"})}, indexes={@ORM\Index(name="soligara_detasoli_fk", columns={"solicitud_gararantia_id"}), @ORM\Index(name="instfina_detasoli_fk", columns={"institucion_id"}), @ORM\Index(name="tipogara_detasoli_fk", columns={"tipo_garantia_id"}), @ORM\Index(name="estasoli_detasoli_fk", columns={"estado_solicitud_id"})})
 * @ORM\Entity
 */
class TgarDetallesolicitud
{
    /**
     * @var integer
     *
     * @ORM\Column(name="det_solicitud_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")     
     */
    private $detSolicitudId;

    /**
     * @var string
     *
     * @ORM\Column(name="det_solicitud_valor_solicitado", type="decimal", precision=19, scale=7, nullable=false)
     */
    private $detSolicitudValorSolicitado;

    /**
     * @var string
     *
     * @ORM\Column(name="det_solicitud_comision", type="decimal", precision=4, scale=2, nullable=true)
     */
    private $detSolicitudComision;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="det_solicitud_fecha_aprobacion", type="date", nullable=true)
     */
    private $detSolicitudFechaAprobacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="det_solicitud_hora_aprobacion", type="time", nullable=true)
     */
    private $detSolicitudHoraAprobacion;

    /**
     * @var \TgarEstadosolicitud
     *
     * @ORM\ManyToOne(targetEntity="TgarEstadosolicitud")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="estado_solicitud_id", referencedColumnName="estado_solicitud_id")
     * })
     */
    private $estadoSolicitud;

    /**
     * @var \TgarInstitucionfinanciera
     *
     * @ORM\ManyToOne(targetEntity="TgarInstitucionfinanciera")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="institucion_id", referencedColumnName="institucion_id")
     * })
     */
    private $institucion;

    /**
     * @var \TgarSolicitudgarantia
     *
     * @ORM\ManyToOne(targetEntity="TgarSolicitudgarantia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="solicitud_gararantia_id", referencedColumnName="solicitud_gararantia_id")
     * })
     */
    private $solicitudGararantia;

    /**
     * @var \TgarTipogarantia
     *
     * @ORM\ManyToOne(targetEntity="TgarTipogarantia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tipo_garantia_id", referencedColumnName="tipo_garantia_id")
     * })
     */
    private $tipoGarantia;


    /**
     * @var integer
     */
    private $detSolId;

    /**
     * @var \Comun\ComunBundle\Entity\TgarEstadosolicitud
     */
    private $estaSoli;

    /**
     * @var \Comun\ComunBundle\Entity\TgarInstitucionfinanciera
     */
    private $instFina;

    /**
     * @var \Comun\ComunBundle\Entity\TgarSolicitudgarantia
     */
    private $solGar;

    /**
     * @var \Comun\ComunBundle\Entity\TgarTipogarantia
     */
    private $tipGar;


    /**
     * Get detSolId
     *
     * @return integer 
     */
    public function getDetSolId()
    {
        return $this->detSolId;
    }

    /**
     * Set estaSoli
     *
     * @param \Comun\ComunBundle\Entity\TgarEstadosolicitud $estaSoli
     * @return TgarDetallesolicitud
     */
    public function setEstaSoli(\Comun\ComunBundle\Entity\TgarEstadosolicitud $estaSoli = null)
    {
        $this->estaSoli = $estaSoli;

        return $this;
    }

    /**
     * Get estaSoli
     *
     * @return \Comun\ComunBundle\Entity\TgarEstadosolicitud 
     */
    public function getEstaSoli()
    {
        return $this->estaSoli;
    }

    /**
     * Set instFina
     *
     * @param \Comun\ComunBundle\Entity\TgarInstitucionfinanciera $instFina
     * @return TgarDetallesolicitud
     */
    public function setInstFina(\Comun\ComunBundle\Entity\TgarInstitucionfinanciera $instFina = null)
    {
        $this->instFina = $instFina;

        return $this;
    }

    /**
     * Get instFina
     *
     * @return \Comun\ComunBundle\Entity\TgarInstitucionfinanciera 
     */
    public function getInstFina()
    {
        return $this->instFina;
    }

    /**
     * Set solGar
     *
     * @param \Comun\ComunBundle\Entity\TgarSolicitudgarantia $solGar
     * @return TgarDetallesolicitud
     */
    public function setSolGar(\Comun\ComunBundle\Entity\TgarSolicitudgarantia $solGar = null)
    {
        $this->solGar = $solGar;

        return $this;
    }

    /**
     * Get solGar
     *
     * @return \Comun\ComunBundle\Entity\TgarSolicitudgarantia 
     */
    public function getSolGar()
    {
        return $this->solGar;
    }

    /**
     * Set tipGar
     *
     * @param \Comun\ComunBundle\Entity\TgarTipogarantia $tipGar
     * @return TgarDetallesolicitud
     */
    public function setTipGar(\Comun\ComunBundle\Entity\TgarTipogarantia $tipGar = null)
    {
        $this->tipGar = $tipGar;

        return $this;
    }

    /**
     * Get tipGar
     *
     * @return \Comun\ComunBundle\Entity\TgarTipogarantia 
     */
    public function getTipGar()
    {
        return $this->tipGar;
    }

    /**
     * Get detSolicitudId
     *
     * @return integer 
     */
    public function getDetSolicitudId()
    {
        return $this->detSolicitudId;
    }

    /**
     * Set detSolicitudValorSolicitado
     *
     * @param string $detSolicitudValorSolicitado
     * @return TgarDetallesolicitud
     */
    public function setDetSolicitudValorSolicitado($detSolicitudValorSolicitado)
    {
        $this->detSolicitudValorSolicitado = $detSolicitudValorSolicitado;

        return $this;
    }

    /**
     * Get detSolicitudValorSolicitado
     *
     * @return string 
     */
    public function getDetSolicitudValorSolicitado()
    {
        return $this->detSolicitudValorSolicitado;
    }

    /**
     * Set detSolicitudComision
     *
     * @param string $detSolicitudComision
     * @return TgarDetallesolicitud
     */
    public function setDetSolicitudComision($detSolicitudComision)
    {
        $this->detSolicitudComision = $detSolicitudComision;

        return $this;
    }

    /**
     * Get detSolicitudComision
     *
     * @return string 
     */
    public function getDetSolicitudComision()
    {
        return $this->detSolicitudComision;
    }

    /**
     * Set detSolicitudFechaAprobacion
     *
     * @param \DateTime $detSolicitudFechaAprobacion
     * @return TgarDetallesolicitud
     */
    public function setDetSolicitudFechaAprobacion($detSolicitudFechaAprobacion)
    {
        $this->detSolicitudFechaAprobacion = $detSolicitudFechaAprobacion;

        return $this;
    }

    /**
     * Get detSolicitudFechaAprobacion
     *
     * @return \DateTime 
     */
    public function getDetSolicitudFechaAprobacion()
    {
        return $this->detSolicitudFechaAprobacion;
    }

    /**
     * Set detSolicitudHoraAprobacion
     *
     * @param \DateTime $detSolicitudHoraAprobacion
     * @return TgarDetallesolicitud
     */
    public function setDetSolicitudHoraAprobacion($detSolicitudHoraAprobacion)
    {
        $this->detSolicitudHoraAprobacion = $detSolicitudHoraAprobacion;

        return $this;
    }

    /**
     * Get detSolicitudHoraAprobacion
     *
     * @return \DateTime 
     */
    public function getDetSolicitudHoraAprobacion()
    {
        return $this->detSolicitudHoraAprobacion;
    }

    /**
     * Set estadoSolicitud
     *
     * @param \Comun\ComunBundle\Entity\TgarEstadosolicitud $estadoSolicitud
     * @return TgarDetallesolicitud
     */
    public function setEstadoSolicitud(\Comun\ComunBundle\Entity\TgarEstadosolicitud $estadoSolicitud = null)
    {
        $this->estadoSolicitud = $estadoSolicitud;

        return $this;
    }

    /**
     * Get estadoSolicitud
     *
     * @return \Comun\ComunBundle\Entity\TgarEstadosolicitud 
     */
    public function getEstadoSolicitud()
    {
        return $this->estadoSolicitud;
    }

    /**
     * Set institucion
     *
     * @param \Comun\ComunBundle\Entity\TgarInstitucionfinanciera $institucion
     * @return TgarDetallesolicitud
     */
    public function setInstitucion(\Comun\ComunBundle\Entity\TgarInstitucionfinanciera $institucion = null)
    {
        $this->institucion = $institucion;

        return $this;
    }

    /**
     * Get institucion
     *
     * @return \Comun\ComunBundle\Entity\TgarInstitucionfinanciera 
     */
    public function getInstitucion()
    {
        return $this->institucion;
    }

    /**
     * Set solicitudGararantia
     *
     * @param \Comun\ComunBundle\Entity\TgarSolicitudgarantia $solicitudGararantia
     * @return TgarDetallesolicitud
     */
    public function setSolicitudGararantia(\Comun\ComunBundle\Entity\TgarSolicitudgarantia $solicitudGararantia = null)
    {
        $this->solicitudGararantia = $solicitudGararantia;

        return $this;
    }

    /**
     * Get solicitudGararantia
     *
     * @return \Comun\ComunBundle\Entity\TgarSolicitudgarantia 
     */
    public function getSolicitudGararantia()
    {
        return $this->solicitudGararantia;
    }

    /**
     * Set tipoGarantia
     *
     * @param \Comun\ComunBundle\Entity\TgarTipogarantia $tipoGarantia
     * @return TgarDetallesolicitud
     */
    public function setTipoGarantia(\Comun\ComunBundle\Entity\TgarTipogarantia $tipoGarantia = null)
    {
        $this->tipoGarantia = $tipoGarantia;

        return $this;
    }

    /**
     * Get tipoGarantia
     *
     * @return \Comun\ComunBundle\Entity\TgarTipogarantia 
     */
    public function getTipoGarantia()
    {
        return $this->tipoGarantia;
    }
}
