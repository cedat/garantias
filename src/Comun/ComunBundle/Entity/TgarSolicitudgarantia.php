<?php

namespace Comun\ComunBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TgarSolicitudgarantia
 *
 * @ORM\Table(name="tgar_solicitudgarantia", uniqueConstraints={@ORM\UniqueConstraint(name="tgar_solicitudgarantia_pk", columns={"solicitud_gararantia_id"})}, indexes={@ORM\Index(name="proccont_soligara_fk", columns={"proceso_id"})})
 * @ORM\Entity
 */
class TgarSolicitudgarantia
{
    /**
     * @var integer
     *
     * @ORM\Column(name="solicitud_gararantia_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\SequenceGenerator(sequenceName="tgar_solicitudgarantia_solicitud_gararantia_id_seq", allocationSize=1, initialValue=1)
     */
    private $solicitudGararantiaId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="solicitud_gararantia_fecha", type="date", nullable=true)
     */
    private $solicitudGararantiaFecha;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="solicitud_gararantia_hora", type="time", nullable=true)
     */
    private $solicitudGararantiaHora;

    /**
     * @var \TgarProcesocontratacion
     *
     * @ORM\ManyToOne(targetEntity="TgarProcesocontratacion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="proceso_id", referencedColumnName="proceso_id")
     * })
     */
    private $proceso;


    /**
     * @var integer
     */
    private $solGarId;

    /**
     * @var \DateTime
     */
    private $solGarFecha;

    /**
     * @var \DateTime
     */
    private $solGarHora;

    /**
     * @var \Comun\ComunBundle\Entity\TgarProcesocontratacion
     */
    private $proCon;


    /**
     * Get solGarId
     *
     * @return integer 
     */
    public function getSolGarId()
    {
        return $this->solGarId;
    }

    /**
     * Set solGarFecha
     *
     * @param \DateTime $solGarFecha
     * @return TgarSolicitudgarantia
     */
    public function setSolGarFecha($solGarFecha)
    {
        $this->solGarFecha = $solGarFecha;

        return $this;
    }

    /**
     * Get solGarFecha
     *
     * @return \DateTime 
     */
    public function getSolGarFecha()
    {
        return $this->solGarFecha;
    }

    /**
     * Set solGarHora
     *
     * @param \DateTime $solGarHora
     * @return TgarSolicitudgarantia
     */
    public function setSolGarHora($solGarHora)
    {
        $this->solGarHora = $solGarHora;

        return $this;
    }

    /**
     * Get solGarHora
     *
     * @return \DateTime 
     */
    public function getSolGarHora()
    {
        return $this->solGarHora;
    }

    /**
     * Set proCon
     *
     * @param \Comun\ComunBundle\Entity\TgarProcesocontratacion $proCon
     * @return TgarSolicitudgarantia
     */
    public function setProCon(\Comun\ComunBundle\Entity\TgarProcesocontratacion $proCon = null)
    {
        $this->proCon = $proCon;

        return $this;
    }

    /**
     * Get proCon
     *
     * @return \Comun\ComunBundle\Entity\TgarProcesocontratacion 
     */
    public function getProCon()
    {
        return $this->proCon;
    }

    /**
     * Get solicitudGararantiaId
     *
     * @return integer 
     */
    public function getSolicitudGararantiaId()
    {
        return $this->solicitudGararantiaId;
    }

    /**
     * Set solicitudGararantiaFecha
     *
     * @param \DateTime $solicitudGararantiaFecha
     * @return TgarSolicitudgarantia
     */
    public function setSolicitudGararantiaFecha($solicitudGararantiaFecha)
    {
        $this->solicitudGararantiaFecha = $solicitudGararantiaFecha;

        return $this;
    }

    /**
     * Get solicitudGararantiaFecha
     *
     * @return \DateTime 
     */
    public function getSolicitudGararantiaFecha()
    {
        return $this->solicitudGararantiaFecha;
    }

    /**
     * Set solicitudGararantiaHora
     *
     * @param \DateTime $solicitudGararantiaHora
     * @return TgarSolicitudgarantia
     */
    public function setSolicitudGararantiaHora($solicitudGararantiaHora)
    {
        $this->solicitudGararantiaHora = $solicitudGararantiaHora;

        return $this;
    }

    /**
     * Get solicitudGararantiaHora
     *
     * @return \DateTime 
     */
    public function getSolicitudGararantiaHora()
    {
        return $this->solicitudGararantiaHora;
    }

    /**
     * Set proceso
     *
     * @param \Comun\ComunBundle\Entity\TgarProcesocontratacion $proceso
     * @return TgarSolicitudgarantia
     */
    public function setProceso(\Comun\ComunBundle\Entity\TgarProcesocontratacion $proceso = null)
    {
        $this->proceso = $proceso;

        return $this;
    }

    /**
     * Get proceso
     *
     * @return \Comun\ComunBundle\Entity\TgarProcesocontratacion 
     */
    public function getProceso()
    {
        return $this->proceso;
    }
}
