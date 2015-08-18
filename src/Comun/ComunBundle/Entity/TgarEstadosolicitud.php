<?php

namespace Comun\ComunBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TgarEstadosolicitud
 *
 * @ORM\Table(name="tgar_estadosolicitud", uniqueConstraints={@ORM\UniqueConstraint(name="tgar_estadosolicitud_pk", columns={"estado_solicitud_id"})})
 * @ORM\Entity
 */
class TgarEstadosolicitud
{
    /**
     * @var integer
     *
     * @ORM\Column(name="estado_solicitud_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")     
     */
    private $estadoSolicitudId;

    /**
     * @var string
     *
     * @ORM\Column(name="estado_solicitud_nombre", type="string", length=32, nullable=true)
     */
    private $estadoSolicitudNombre;

    /**
     * @var string
     *
     * @ORM\Column(name="estado_solicitud_descripcion", type="string", length=128, nullable=true)
     */
    private $estadoSolicitudDescripcion;


    /**
     * @var integer
     */
    private $estaSoliId;

    /**
     * @var string
     */
    private $estaSoliNombre;

    /**
     * @var string
     */
    private $estaSoliDescripcion;


    /**
     * Get estaSoliId
     *
     * @return integer 
     */
    public function getEstaSoliId()
    {
        return $this->estaSoliId;
    }

    /**
     * Set estaSoliNombre
     *
     * @param string $estaSoliNombre
     * @return TgarEstadosolicitud
     */
    public function setEstaSoliNombre($estaSoliNombre)
    {
        $this->estaSoliNombre = $estaSoliNombre;

        return $this;
    }

    /**
     * Get estaSoliNombre
     *
     * @return string 
     */
    public function getEstaSoliNombre()
    {
        return $this->estaSoliNombre;
    }

    /**
     * Set estaSoliDescripcion
     *
     * @param string $estaSoliDescripcion
     * @return TgarEstadosolicitud
     */
    public function setEstaSoliDescripcion($estaSoliDescripcion)
    {
        $this->estaSoliDescripcion = $estaSoliDescripcion;

        return $this;
    }

    /**
     * Get estaSoliDescripcion
     *
     * @return string 
     */
    public function getEstaSoliDescripcion()
    {
        return $this->estaSoliDescripcion;
    }

    /**
     * Get estadoSolicitudId
     *
     * @return integer 
     */
    public function getEstadoSolicitudId()
    {
        return $this->estadoSolicitudId;
    }

    /**
     * Set estadoSolicitudNombre
     *
     * @param string $estadoSolicitudNombre
     * @return TgarEstadosolicitud
     */
    public function setEstadoSolicitudNombre($estadoSolicitudNombre)
    {
        $this->estadoSolicitudNombre = $estadoSolicitudNombre;

        return $this;
    }

    /**
     * Get estadoSolicitudNombre
     *
     * @return string 
     */
    public function getEstadoSolicitudNombre()
    {
        return $this->estadoSolicitudNombre;
    }

    /**
     * Set estadoSolicitudDescripcion
     *
     * @param string $estadoSolicitudDescripcion
     * @return TgarEstadosolicitud
     */
    public function setEstadoSolicitudDescripcion($estadoSolicitudDescripcion)
    {
        $this->estadoSolicitudDescripcion = $estadoSolicitudDescripcion;

        return $this;
    }

    /**
     * Get estadoSolicitudDescripcion
     *
     * @return string 
     */
    public function getEstadoSolicitudDescripcion()
    {
        return $this->estadoSolicitudDescripcion;
    }
}
