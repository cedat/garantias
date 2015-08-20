<?php

namespace Comun\ComunBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TgarTipoFecha
 *
 * @ORM\Table(name="tgar_tipo_fecha", uniqueConstraints={@ORM\UniqueConstraint(name="tgar_tipo_fecha_pk", columns={"tipo_fecha_id"})})
 * @ORM\Entity
 */
class TgarTipoFecha
{
    /**
     * @var integer
     *
     * @ORM\Column(name="tipo_fecha_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="tgar_tipo_fecha_tipo_fecha_id_seq", allocationSize=1, initialValue=1)
     */
    private $tipoFechaId;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_fecha_valor", type="string", length=3, nullable=true)
     */
    private $tipoFechaValor;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_fecha_descripcion", type="string", length=100, nullable=true)
     */
    private $tipoFechaDescripcion;



    /**
     * Get tipoFechaId
     *
     * @return integer 
     */
    public function getTipoFechaId()
    {
        return $this->tipoFechaId;
    }

    /**
     * Set tipoFechaValor
     *
     * @param string $tipoFechaValor
     * @return TgarTipoFecha
     */
    public function setTipoFechaValor($tipoFechaValor)
    {
        $this->tipoFechaValor = $tipoFechaValor;

        return $this;
    }

    /**
     * Get tipoFechaValor
     *
     * @return string 
     */
    public function getTipoFechaValor()
    {
        return $this->tipoFechaValor;
    }

    /**
     * Set tipoFechaDescripcion
     *
     * @param string $tipoFechaDescripcion
     * @return TgarTipoFecha
     */
    public function setTipoFechaDescripcion($tipoFechaDescripcion)
    {
        $this->tipoFechaDescripcion = $tipoFechaDescripcion;

        return $this;
    }

    /**
     * Get tipoFechaDescripcion
     *
     * @return string 
     */
    public function getTipoFechaDescripcion()
    {
        return $this->tipoFechaDescripcion;
    }
}
