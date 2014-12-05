<?php

namespace Usuarios\UsuariosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;


class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('UsuariosBundle:Default:index.html.twig');
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

    
}
