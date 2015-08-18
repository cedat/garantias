<?php

namespace Comun\ComunBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TgarTipogarantia
 *
 * @ORM\Table(name="tgar_tipogarantia", uniqueConstraints={@ORM\UniqueConstraint(name="tgar_tipogarantia_pk", columns={"tipo_garantia_id"})})
 * @ORM\Entity
 */
class TgarTipogarantia
{
    /**
     * @var integer
     *
     * @ORM\Column(name="tipo_garantia_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="tgar_tipogarantia_tipo_garantia_id_seq", allocationSize=1, initialValue=1)
     */
    private $tipoGarantiaId;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_garantia_nombre", type="string", length=32, nullable=true)
     */
    private $tipoGarantiaNombre;


    /**
     * @var integer
     */
    private $tipGarId;

    /**
     * @var string
     */
    private $tipGarNombre;


    /**
     * Get tipGarId
     *
     * @return integer 
     */
    public function getTipGarId()
    {
        return $this->tipGarId;
    }

    /**
     * Set tipGarNombre
     *
     * @param string $tipGarNombre
     * @return TgarTipogarantia
     */
    public function setTipGarNombre($tipGarNombre)
    {
        $this->tipGarNombre = $tipGarNombre;

        return $this;
    }

    /**
     * Get tipGarNombre
     *
     * @return string 
     */
    public function getTipGarNombre()
    {
        return $this->tipGarNombre;
    }

    /**
     * Get tipoGarantiaId
     *
     * @return integer 
     */
    public function getTipoGarantiaId()
    {
        return $this->tipoGarantiaId;
    }

    /**
     * Set tipoGarantiaNombre
     *
     * @param string $tipoGarantiaNombre
     * @return TgarTipogarantia
     */
    public function setTipoGarantiaNombre($tipoGarantiaNombre)
    {
        $this->tipoGarantiaNombre = $tipoGarantiaNombre;

        return $this;
    }

    /**
     * Get tipoGarantiaNombre
     *
     * @return string 
     */
    public function getTipoGarantiaNombre()
    {
        return $this->tipoGarantiaNombre;
    }
}
