<?php

namespace Comun\ComunBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TgarEstadoSolicitud
 *
 * @ORM\Table(name="tgar_estado_solicitud", uniqueConstraints={@ORM\UniqueConstraint(name="tgar_estado_solicitud_pk", columns={"estado_solicitud_id"})})
 * @ORM\Entity
 */
class TgarEstadoSolicitud
{
    /**
     * @var integer
     *
     * @ORM\Column(name="estado_solicitud_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="tgar_estado_solicitud_estado_solicitud_id_seq", allocationSize=1, initialValue=1)
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
     * @return TgarEstadoSolicitud
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
     * @return TgarEstadoSolicitud
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
