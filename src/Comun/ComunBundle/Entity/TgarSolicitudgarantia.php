<?php

namespace Comun\ComunBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TgarSolicitudgarantia
 *
 * @ORM\Table(name="tgar_solicitudgarantia", indexes={@ORM\Index(name="proccont_soligara_fk", columns={"pro_con_id"})})
 * @ORM\Entity
 */
class TgarSolicitudgarantia
{
    /**
     * @var integer
     *
     * @ORM\Column(name="sol_gar_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="tgar_solicitudgarantia_sol_gar_id_seq", allocationSize=1, initialValue=1)
     */
    private $solGarId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="sol_gar_fecha", type="date", nullable=true)
     */
    private $solGarFecha;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="sol_gar_hora", type="time", nullable=true)
     */
    private $solGarHora;

    /**
     * @var \TgarProcesocontratacion
     *
     * @ORM\ManyToOne(targetEntity="TgarProcesocontratacion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pro_con_id", referencedColumnName="pro_con_id")
     * })
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
}
