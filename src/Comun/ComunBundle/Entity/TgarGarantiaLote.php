<?php

namespace Comun\ComunBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TgarGarantiaLote
 *
 * @ORM\Table(name="tgar_garantia_lote", uniqueConstraints={@ORM\UniqueConstraint(name="tgar_garantia_pk", columns={"tipo_garantia_id","lote_id"})},indexes={@ORM\Index(name="garantia_lote_grantia_fk", columns={"tipo_garantia_id"}),@ORM\Index(name="garantia_lote_lote_fk", columns={"lote_id"})})
 * @ORM\Entity
 */

class TgarGarantiaLote {
    /**
     * @var \TgarGarantia
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="TgarGarantia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tipo_garantia_id", referencedColumnName="tipo_garantia_id")
     * })
     */
    private $garantiaId;
    
    /**
     * @var \TgarLoteProceso
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="TgarLoteProceso")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="lote_id", referencedColumnName="lote_id")
     * })
     */
    private $loteId;
    
    /**
     * @var decimal
     *
     * @ORM\Column(name="garantia_lote_monto", type="decimal", precision=19, scale=7, nullable=true)
     */
    private $garantiaLoteMonto;
    
    /**
     * @var string
     *
     * @ORM\Column(name="garantia_lote_estado", type="string", length=1, nullable=true)
     */
    private $garantiaLoteEstado;
    
    /**
     * @var DateTime
     *
     * @ORM\Column(name="garantia_lote_fecha", type="datetime" )
     */
    private $garantiaLoteFecha;

}
