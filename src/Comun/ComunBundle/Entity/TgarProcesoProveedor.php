<?php

namespace Comun\ComunBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * TgarProcesoProveedor
 *
 * @ORM\Table(name="tgar_procesoproveedor")
 * @ORM\Entity
 */
class TgarProcesoProveedor {
    /**
     * @var \TgarProcesocontratacion
     *
     * @ORM\ManyToOne(targetEntity="TgarProcesocontratacion")
     * @ORM\Id
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="procesoproveedor_proceso_id", referencedColumnName="proceso_id")
     * })
     */
    private $procesoProveedorIdProceso;
    
    /**
     * @var \TgarProveedor
     *
     * @ORM\ManyToOne(targetEntity="TgarProveedor")
     * @ORM\Id
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="procesoproveedor_proveedor_id", referencedColumnName="proveedor_id")
     * })
     */
    private $procesoProveedorIdProveedor;
            
    /**
     * @var string
     *
     * @ORM\Column(name="procesoproveedor_lote", type="string", length=300, nullable=false)
     */
    
    private $procesoProveedorlote;
                
    /**
     * @var string
     *
     * @ORM\Column(name="procesoproveedor_estado", type="string", length=1, nullable=false)
     */
    
    private $procesoProveedorEstado;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="procesoproveedor_fecha_adjudicacion", type="datetime", nullable=false)
     */
    private $procesoProveedorFechaAdjudicacion;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="procesoproveedor_fecha_registro", type="datetime", nullable=false)
     */
    private $procesoProveedorFechaRegistro;
}
