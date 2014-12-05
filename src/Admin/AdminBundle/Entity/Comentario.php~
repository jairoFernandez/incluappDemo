<?php

namespace Admin\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comentario
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Admin\AdminBundle\Entity\ComentarioRepository")
 */
class Comentario
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
     * @ORM\ManyToOne(targetEntity="Admin\AdminBundle\Entity\Experiencias")
     */
    private $experiencia;

    /**
     * @var string
     *
     * @ORM\ManyToOne(targetEntity="Usuarios\UsuariosBundle\Entity\User")
     */
    private $usuario;

    /**
     * @var string
     *
     * @ORM\Column(name="comentario", type="text")
     */
    private $comentario;


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
     * Set experiencia
     *
     * @param string $experiencia
     * @return Comentario
     */
    public function setExperiencia($experiencia)
    {
        $this->experiencia = $experiencia;

        return $this;
    }

    /**
     * Get experiencia
     *
     * @return string 
     */
    public function getExperiencia()
    {
        return $this->experiencia;
    }

    /**
     * Set usuario
     *
     * @param string $usuario
     * @return Comentario
     */
    public function setUsuario($usuario)
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
     * Set comentario
     *
     * @param string $comentario
     * @return Comentario
     */
    public function setComentario($comentario)
    {
        $this->comentario = $comentario;

        return $this;
    }

    /**
     * Get comentario
     *
     * @return string 
     */
    public function getComentario()
    {
        return $this->comentario;
    }
    
    public function __toString() {
        return $this->getComentario();
    }
}
