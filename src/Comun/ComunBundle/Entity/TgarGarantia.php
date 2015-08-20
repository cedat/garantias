<?php

namespace Comun\ComunBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TgarGarantia
 *
 * @ORM\Table(name="tgar_garantia", uniqueConstraints={@ORM\UniqueConstraint(name="tgar_garantia_garantia_pk", columns={"tipo_garantia_id"})})
 * @ORM\Entity
 */
class TgarGarantia
{
    /**
     * @var integer
     *
     * @ORM\Column(name="tipo_garantia_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="tgar_garantia_tipo_garantia_id_seq", allocationSize=1, initialValue=1)
     */
    private $tipoGarantiaId;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_garantia_nombre", type="string", length=32, nullable=true)
     */
    private $tipoGarantiaNombre;

    
    /**
     * Constructor
     */
    public function __construct()
    {
        
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
     * @return TgarGarantia
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
