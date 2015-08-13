<?php

namespace Comun\ComunBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TgarEstadosolicitud
 *
 * @ORM\Table(name="tgar_estadosolicitud", uniqueConstraints={@ORM\UniqueConstraint(name="tgar_estadosolicitud_pk", columns={"esta_soli_id"})})
 * @ORM\Entity
 */
class TgarEstadosolicitud
{
    /**
     * @var integer
     *
     * @ORM\Column(name="esta_soli_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="tgar_estadosolicitud_esta_soli_id_seq", allocationSize=1, initialValue=1)
     */
    private $estaSoliId;

    /**
     * @var string
     *
     * @ORM\Column(name="esta_soli_nombre", type="string", length=32, nullable=true)
     */
    private $estaSoliNombre;

    /**
     * @var string
     *
     * @ORM\Column(name="esta_soli_descripcion", type="string", length=128, nullable=true)
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
}
