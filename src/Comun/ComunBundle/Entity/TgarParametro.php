<?php

namespace Comun\ComunBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TgarParametro
 *
 * @ORM\Table(name="tgar_parametro")
 * @ORM\Entity
 */
class TgarParametro
{
    /**
     * @var integer
     *
     * @ORM\Column(name="parametro_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="tgar_parametro_parametro_id_seq", allocationSize=1, initialValue=1)
     */
    private $parametroId;

    /**
     * @var string
     *
     * @ORM\Column(name="parametro_nombre", type="string", length=50, nullable=false)
     */
    private $parametroNombre;

    /**
     * @var string
     *
     * @ORM\Column(name="parametro_valor", type="string", length=50, nullable=false)
     */
    private $parametroValor;

    /**
     * @var string
     *
     * @ORM\Column(name="parametro_descripcion", type="string", length=100, nullable=true)
     */
    private $parametroDescripcion;



    /**
     * Get parametroId
     *
     * @return integer 
     */
    public function getParametroId()
    {
        return $this->parametroId;
    }

    /**
     * Set parametroNombre
     *
     * @param string $parametroNombre
     * @return TgarParametro
     */
    public function setParametroNombre($parametroNombre)
    {
        $this->parametroNombre = $parametroNombre;

        return $this;
    }

    /**
     * Get parametroNombre
     *
     * @return string 
     */
    public function getParametroNombre()
    {
        return $this->parametroNombre;
    }

    /**
     * Set parametroValor
     *
     * @param string $parametroValor
     * @return TgarParametro
     */
    public function setParametroValor($parametroValor)
    {
        $this->parametroValor = $parametroValor;

        return $this;
    }

    /**
     * Get parametroValor
     *
     * @return string 
     */
    public function getParametroValor()
    {
        return $this->parametroValor;
    }

    /**
     * Set parametroDescripcion
     *
     * @param string $parametroDescripcion
     * @return TgarParametro
     */
    public function setParametroDescripcion($parametroDescripcion)
    {
        $this->parametroDescripcion = $parametroDescripcion;

        return $this;
    }

    /**
     * Get parametroDescripcion
     *
     * @return string 
     */
    public function getParametroDescripcion()
    {
        return $this->parametroDescripcion;
    }
}
