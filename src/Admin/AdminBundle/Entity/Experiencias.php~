<?php

namespace Admin\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Experiencias
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Admin\AdminBundle\Entity\ExperienciasRepository")
 */
class Experiencias
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\ManyToOne(targetEntity="Usuarios\UsuariosBundle\Entity\User")
     */
    private $usuario;

    /**
     * @var string
     *
     * @ORM\ManyToOne(targetEntity="Admin\AdminBundle\Entity\TipoExperiencia")
     */
    private $tipoExperiencia;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaCreacion", type="datetime")
     */
    private $fechaCreacion;

    /**
     * @var string
     *
     * @ORM\Column(name="titulo", type="string", length=255)
     */
    private $titulo;

    /**
     * @var string
     *
     * @ORM\Column(name="contenido", type="text")
     */
    private $contenido;

    /**
     * @var string
     *
     * @ORM\ManyToOne(targetEntity="Admin\AdminBundle\Entity\Estado")
     */
    private $estado;

    /**
     * @var float
     *
     * @ORM\Column(name="calificacion", type="float")
     */
    private $calificacion;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set usuario
     *
     * @param string $usuario
     * @return Experiencias
     */
    public function setUsuario(\Usuarios\UsuariosBundle\Entity\User $usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return string 
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set tipoExperiencia
     *
     * @param string $tipoExperiencia
     * @return Experiencias
     */
    public function setTipoExperiencia($tipoExperiencia)
    {
        $this->tipoExperiencia = $tipoExperiencia;

        return $this;
    }

    /**
     * Get tipoExperiencia
     *
     * @return string 
     */
    public function getTipoExperiencia()
    {
        return $this->tipoExperiencia;
    }

    /**
     * Set fechaCreacion
     *
     * @param \DateTime $fechaCreacion
     * @return Experiencias
     */
    public function setFechaCreacion($fechaCreacion)
    {
        $this->fechaCreacion = $fechaCreacion;

        return $this;
    }

    /**
     * Get fechaCreacion
     *
     * @return \DateTime 
     */
    public function getFechaCreacion()
    {
        return $this->fechaCreacion;
    }

    /**
     * Set titulo
     *
     * @param string $titulo
     * @return Experiencias
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get titulo
     *
     * @return string 
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set contenido
     *
     * @param string $contenido
     * @return Experiencias
     */
    public function setContenido($contenido)
    {
        $this->contenido = $contenido;

        return $this;
    }

    /**
     * Get contenido
     *
     * @return string 
     */
    public function getContenido()
    {
        return $this->contenido;
    }

    /**
     * Set estado
     *
     * @param string $estado
     * @return Experiencias
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return string 
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set calificacion
     *
     * @param float $calificacion
     * @return Experiencias
     */
    public function setCalificacion($calificacion)
    {
        $this->calificacion = $calificacion;

        return $this;
    }

    /**
     * Get calificacion
     *
     * @return float 
     */
    public function getCalificacion()
    {
        return $this->calificacion;
    }
    
    public function __toString() 
    {
        return $this->getContenido();
    }
}
