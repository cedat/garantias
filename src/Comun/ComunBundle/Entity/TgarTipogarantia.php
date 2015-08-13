<?php

namespace Comun\ComunBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TgarTipogarantia
 *
 * @ORM\Table(name="tgar_tipogarantia", uniqueConstraints={@ORM\UniqueConstraint(name="tgar_tipogarantia_pk", columns={"tip_gar_id"})})
 * @ORM\Entity
 */
class TgarTipogarantia
{
    /**
     * @var integer
     *
     * @ORM\Column(name="tip_gar_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="tgar_tipogarantia_tip_gar_id_seq", allocationSize=1, initialValue=1)
     */
    private $tipGarId;

    /**
     * @var string
     *
     * @ORM\Column(name="tip_gar_nombre", type="string", length=32, nullable=true)
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
}
