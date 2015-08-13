<?php

namespace Comun\ComunBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TgarDetallesolicitud
 *
 * @ORM\Table(name="tgar_detallesolicitud", uniqueConstraints={@ORM\UniqueConstraint(name="tgar_detallesolicitud_pk", columns={"det_sol_id"})}, indexes={@ORM\Index(name="instfina_detasoli_fk", columns={"inst_fina_id"}), @ORM\Index(name="tipogara_detasoli_fk", columns={"tip_gar_id"}), @ORM\Index(name="soligara_detasoli_fk", columns={"sol_gar_id"}), @ORM\Index(name="estasoli_detasoli_fk", columns={"esta_soli_id"})})
 * @ORM\Entity
 */
class TgarDetallesolicitud
{
    /**
     * @var integer
     *
     * @ORM\Column(name="det_sol_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="tgar_detallesolicitud_det_sol_id_seq", allocationSize=1, initialValue=1)
     */
    private $detSolId;

    /**
     * @var \TgarEstadosolicitud
     *
     * @ORM\ManyToOne(targetEntity="TgarEstadosolicitud")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="esta_soli_id", referencedColumnName="esta_soli_id")
     * })
     */
    private $estaSoli;

    /**
     * @var \TgarInstitucionfinanciera
     *
     * @ORM\ManyToOne(targetEntity="TgarInstitucionfinanciera")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="inst_fina_id", referencedColumnName="inst_fina_id")
     * })
     */
    private $instFina;

    /**
     * @var \TgarSolicitudgarantia
     *
     * @ORM\ManyToOne(targetEntity="TgarSolicitudgarantia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sol_gar_id", referencedColumnName="sol_gar_id")
     * })
     */
    private $solGar;

    /**
     * @var \TgarTipogarantia
     *
     * @ORM\ManyToOne(targetEntity="TgarTipogarantia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tip_gar_id", referencedColumnName="tip_gar_id")
     * })
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
}
