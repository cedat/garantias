<?php

namespace EntidadFinanciera\EntidadFinancieraBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('EntidadFinancieraBundle:Default:index.html.twig', array('name' => $name));
    }
    
    public function solicitudesFinacieraAction()
    {               
        $fecha[0] = date("d/m/Y"); 
        $fecha[1] = date("H:i:s");
        return $this->render('EntidadFinancieraBundle:Default:revisionSolicitudes.html.twig', array('valor' => $fecha));
    }
    
    public function datosProveedorAction()
    {                       
        return $this->render('EntidadFinancieraBundle:Default:datosProveedor.html.twig');
    }
    
    public function verConfirmacionProveedorAction()
    {               
        $fecha[0] = date("d/m/Y"); 
        $fecha[1] = date("H:i:s");
        return $this->render('EntidadFinancieraBundle:Default:aceptarProveedor.html.twig', array('valor' => $fecha));
    }    
}
