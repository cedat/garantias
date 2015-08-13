<?php

namespace Comun\ComunBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TgarInstitucionfinanciera
 *
 * @ORM\Table(name="tgar_institucionfinanciera", uniqueConstraints={@ORM\UniqueConstraint(name="tgar_institucionfinanciera_pk", columns={"inst_fina_id"})})
 * @ORM\Entity
 */
class TgarInstitucionfinanciera
{
    /**
     * @var integer
     *
     * @ORM\Column(name="inst_fina_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="tgar_institucionfinanciera_inst_fina_id_seq", allocationSize=1, initialValue=1)
     */
    private $instFinaId;

    /**
     * @var string
     *
     * @ORM\Column(name="inst_fina_nombre", type="string", length=128, nullable=true)
     */
    private $instFinaNombre;

    /**
     * @var string
     *
     * @ORM\Column(name="inst_fina_provincia", type="string", length=64, nullable=true)
     */
    private $instFinaProvincia;

    /**
     * @var string
     *
     * @ORM\Column(name="inst_fina_canton", type="string", length=64, nullable=true)
     */
    private $instFinaCanton;

    /**
     * @var string
     *
     * @ORM\Column(name="inst_fina_parroquia", type="string", length=64, nullable=true)
     */
    private $instFinaParroquia;

    /**
     * @var string
     *
     * @ORM\Column(name="inst_fina_direccion", type="string", length=128, nullable=true)
     */
    private $instFinaDireccion;

    /**
     * @var string
     *
     * @ORM\Column(name="inst_fina_cupodisponible", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $instFinaCupodisponible;

    /**
     * @var string
     *
     * @ORM\Column(name="inst_fina_cupoactual", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $instFinaCupoactual;



    /**
     * Get instFinaId
     *
     * @return integer 
     */
    public function getInstFinaId()
    {
        return $this->instFinaId;
    }

    /**
     * Set instFinaNombre
     *
     * @param string $instFinaNombre
     * @return TgarInstitucionfinanciera
     */
    public function setInstFinaNombre($instFinaNombre)
    {
        $this->instFinaNombre = $instFinaNombre;

        return $this;
    }

    /**
     * Get instFinaNombre
     *
     * @return string 
     */
    public function getInstFinaNombre()
    {
        return $this->instFinaNombre;
    }

    /**
     * Set instFinaProvincia
     *
     * @param string $instFinaProvincia
     * @return TgarInstitucionfinanciera
     */
    public function setInstFinaProvincia($instFinaProvincia)
    {
        $this->instFinaProvincia = $instFinaProvincia;

        return $this;
    }

    /**
     * Get instFinaProvincia
     *
     * @return string 
     */
    public function getInstFinaProvincia()
    {
        return $this->instFinaProvincia;
    }

    /**
     * Set instFinaCanton
     *
     * @param string $instFinaCanton
     * @return TgarInstitucionfinanciera
     */
    public function setInstFinaCanton($instFinaCanton)
    {
        $this->instFinaCanton = $instFinaCanton;

        return $this;
    }

    /**
     * Get instFinaCanton
     *
     * @return string 
     */
    public function getInstFinaCanton()
    {
        return $this->instFinaCanton;
    }

    /**
     * Set instFinaParroquia
     *
     * @param string $instFinaParroquia
     * @return TgarInstitucionfinanciera
     */
    public function setInstFinaParroquia($instFinaParroquia)
    {
        $this->instFinaParroquia = $instFinaParroquia;

        return $this;
    }

    /**
     * Get instFinaParroquia
     *
     * @return string 
     */
    public function getInstFinaParroquia()
    {
        return $this->instFinaParroquia;
    }

    /**
     * Set instFinaDireccion
     *
     * @param string $instFinaDireccion
     * @return TgarInstitucionfinanciera
     */
    public function setInstFinaDireccion($instFinaDireccion)
    {
        $this->instFinaDireccion = $instFinaDireccion;

        return $this;
    }

    /**
     * Get instFinaDireccion
     *
     * @return string 
     */
    public function getInstFinaDireccion()
    {
        return $this->instFinaDireccion;
    }

    /**
     * Set instFinaCupodisponible
     *
     * @param string $instFinaCupodisponible
     * @return TgarInstitucionfinanciera
     */
    public function setInstFinaCupodisponible($instFinaCupodisponible)
    {
        $this->instFinaCupodisponible = $instFinaCupodisponible;

        return $this;
    }

    /**
     * Get instFinaCupodisponible
     *
     * @return string 
     */
    public function getInstFinaCupodisponible()
    {
        return $this->instFinaCupodisponible;
    }

    /**
     * Set instFinaCupoactual
     *
     * @param string $instFinaCupoactual
     * @return TgarInstitucionfinanciera
     */
    public function setInstFinaCupoactual($instFinaCupoactual)
    {
        $this->instFinaCupoactual = $instFinaCupoactual;

        return $this;
    }

    /**
     * Get instFinaCupoactual
     *
     * @return string 
     */
    public function getInstFinaCupoactual()
    {
        return $this->instFinaCupoactual;
    }
}
