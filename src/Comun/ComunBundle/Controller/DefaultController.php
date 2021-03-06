<?php

namespace Comun\ComunBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ComunBundle:Default:index.html.twig', array('name' => $name));
    }
    
    public function logearProveedorAction()
    {                       
        $errorClave = FALSE;
        return $this->render('ComunBundle:Default:login.html.twig', array('errorClave' => $errorClave));
    }
}
