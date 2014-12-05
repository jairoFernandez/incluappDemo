<?php

namespace Usuarios\UsuariosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Admin\AdminBundle\Entity\Perfil;


class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('UsuariosBundle:Default:index.html.twig');
    }
    
     public function entradaAction()
    {
        return $this->render('AdminBundle:Default:index.html.twig');
    }

 // Web services manuales		
    public function expAction()
    {
       $em = $this->getDoctrine()->getManager();
       $entity = $em->getRepository('AdminBundle:Experiencias')->findExp();
       
       $jsonp = new JsonResponse($entity);
       //$jsonp->setCallback('myCallback');
       return $jsonp;
    }
    
    //////////////// FUNCIONES PARA USSD ///////////////////////////////
    
    public function registroAction($tipoDocumento, $numeroDocumento, $ciudad, $nombres, $apellidos)
    {
        $em = $this->getDoctrine()->getManager();
        $perfil = new Perfil();
        $perfil->setTipoDocumento($tipoDocumento);
        $perfil->setNumeroDocumento($numeroDocumento);
        $perfil->setCiudad($ciudad);
        $perfil->setNombres($nombres);
        $perfil->setApellidos($apellidos);
        $perfil->setFechaNacimiento(new \Datetime("now"));
        $em->persist($perfil);
        
        $em->flush();
            
        $respuesta = "Insertado";
        $response = new Response($respuesta);
    }

    
}
