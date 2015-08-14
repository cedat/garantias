<?php

namespace emisionGarantiaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('emisionGarantiaBundle:Default:index.html.twig', array('name' => $name));
    }
    
    public function solicitudGarantiasAction()
    {
        return $this->render('emisionGarantiaBundle:Default:solicitudGarantias.html.twig');
    }
    
    public function solicitudEnviadaAction()
    {
        return $this->render('emisionGarantiaBundle:Default:solicitudEnviada.html.twig');
    }
    
    public function descargaGarantiaAction()
    {                       
        return $this->render('emisionGarantiaBundle:Default:descargaGarantia.html.twig');
    }
    
    public function aprobacionGarantiaAction()
    {
        $fecha[0] = date("d/m/Y"); 
        $fecha[1] = date("H:i:s");
        
        return $this->render('emisionGarantiaBundle:Default:aprobacionGarantia.html.twig', array('valor' => $fecha));
    }
    
    public function solicitudesFinacieraAction()
    {               
        $fecha[0] = date("d/m/Y"); 
        $fecha[1] = date("H:i:s");
        return $this->render('emisionGarantiaBundle:Default:revisionSolicitudes.html.twig', array('valor' => $fecha));
    }
    
    public function datosProveedorAction()
    {                       
        return $this->render('emisionGarantiaBundle:Default:datosProveedor.html.twig');
    }
    
    public function verConfirmacionProveedorAction()
    {               
        $fecha[0] = date("d/m/Y"); 
        $fecha[1] = date("H:i:s");
        return $this->render('emisionGarantiaBundle:Default:aceptarProveedor.html.twig', array('valor' => $fecha));
    }
    
    public function logearProveedorAction()
    {                       
        $errorClave = FALSE;
        return $this->render('emisionGarantiaBundle:Default:identificarmeProv.html.twig', array('errorClave' => $errorClave));
    }
}
