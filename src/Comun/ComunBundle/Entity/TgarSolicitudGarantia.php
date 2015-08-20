<?php

namespace Comun\ComunBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TgarSolicitudGarantia
 *
 * @ORM\Table(name="tgar_solicitud_garantia", indexes={@ORM\Index(name="glote_gsolicitud_fk", columns={"tipo_garantia_id", "lote_id"})})
 * @ORM\Entity
 */
class TgarSolicitudGarantia
{
    /**
     * @var integer
     *
     * @ORM\Column(name="solicitud_garantia_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="tgar_solicitud_garantia_solicitud_garantia_id_seq", allocationSize=1, initialValue=1)
     */
    private $solicitudGarantiaId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="solicitud_garantia_fecha_envio", type="date", nullable=true)
     */
    private $solicitudGarantiaFechaEnvio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="solicitud_garantia_hora_envio", type="time", nullable=true)
     */
    private $solicitudGarantiaHoraEnvio;

    /**
     * @var \TgarGarantiaLote
     *
     * @ORM\ManyToOne(targetEntity="TgarGarantiaLote")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tipo_garantia_id", referencedColumnName="tipo_garantia_id"),
     *   @ORM\JoinColumn(name="lote_id", referencedColumnName="lote_id")
     * })
     */
    private $tipoGarantia;



    /**
     * Get solicitudGarantiaId
     *
     * @return integer 
     */
    public function getSolicitudGarantiaId()
    {
        return $this->solicitudGarantiaId;
    }

    /**
     * Set solicitudGarantiaFechaEnvio
     *
     * @param \DateTime $solicitudGarantiaFechaEnvio
     * @return TgarSolicitudGarantia
     */
    public function setSolicitudGarantiaFechaEnvio($solicitudGarantiaFechaEnvio)
    {
        $this->solicitudGarantiaFechaEnvio = $solicitudGarantiaFechaEnvio;

        return $this;
    }

    /**
     * Get solicitudGarantiaFechaEnvio
     *
     * @return \DateTime 
     */
    public function getSolicitudGarantiaFechaEnvio()
    {
        return $this->solicitudGarantiaFechaEnvio;
    }

    /**
     * Set solicitudGarantiaHoraEnvio
     *
     * @param \DateTime $solicitudGarantiaHoraEnvio
     * @return TgarSolicitudGarantia
     */
    public function setSolicitudGarantiaHoraEnvio($solicitudGarantiaHoraEnvio)
    {
        $this->solicitudGarantiaHoraEnvio = $solicitudGarantiaHoraEnvio;

        return $this;
    }

    /**
     * Get solicitudGarantiaHoraEnvio
     *
     * @return \DateTime 
     */
    public function getSolicitudGarantiaHoraEnvio()
    {
        return $this->solicitudGarantiaHoraEnvio;
    }

    /**
     * Set tipoGarantia
     *
     * @param \Comun\ComunBundle\Entity\TgarGarantiaLote $tipoGarantia
     * @return TgarSolicitudGarantia
     */
    public function setTipoGarantia(\Comun\ComunBundle\Entity\TgarGarantiaLote $tipoGarantia = null)
    {
        $this->tipoGarantia = $tipoGarantia;

        return $this;
    }

    /**
     * Get tipoGarantia
     *
     * @return \Comun\ComunBundle\Entity\TgarGarantiaLote 
     */
    public function getTipoGarantia()
    {
        return $this->tipoGarantia;
    }
}
