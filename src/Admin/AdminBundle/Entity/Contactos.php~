<?php

namespace Admin\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contactos
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Admin\AdminBundle\Entity\ContactosRepository")
 */
class Contactos
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
     * @ORM\ManyToOne(targetEntity="Usuarios\UsuariosBundle\Entity\User")
     */
    private $contacto;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime")
     */
    private $fecha;

    /**
     * @var boolean
     *
     * @ORM\Column(name="aceptado", type="boolean")
     */
    private $aceptado;


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
     * @return Contactos
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
     * Set contacto
     *
     * @param string $contacto
     * @return Contactos
     */
    public function setContacto($contacto)
    {
        $this->contacto = $contacto;

        return $this;
    }

    /**
     * Get contacto
     *
     * @return string 
     */
    public function getContacto()
    {
        return $this->contacto;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Contactos
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set aceptado
     *
     * @param boolean $aceptado
     * @return Contactos
     */
    public function setAceptado($aceptado)
    {
        $this->aceptado = $aceptado;

        return $this;
    }

    /**
     * Get aceptado
     *
     * @return boolean 
     */
    public function getAceptado()
    {
        return $this->aceptado;
    }
    
    public function __toString() {
        return $this->getContacto();
    }
}
