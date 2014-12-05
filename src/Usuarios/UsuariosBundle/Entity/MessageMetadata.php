<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Usuarios\UsuariosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\MessageBundle\Entity\MessageMetadata as BaseMessageMetadata;

/**
 * @ORM\Entity
 */
class MessageMetadata extends BaseMessageMetadata
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(
     *   targetEntity="Usuarios\UsuariosBundle\Entity\Message",
     *   inversedBy="metadata"
     * )
     * @var \FOS\UserBundle\Model\UserInterface
     */
    protected $message;

    /**
     * @ORM\ManyToOne(targetEntity="Usuarios\UsuariosBundle\Entity\User")
     * @var \FOS\UserBundle\Model\ParticipantInterface
     */
    protected $participant;
}
