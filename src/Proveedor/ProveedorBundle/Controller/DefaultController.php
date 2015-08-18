<?php

namespace Proveedor\ProveedorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ProveedorBundle:Default:index.html.twig', array('name' => $name));
    }
    
    public function solicitudGarantiasAction()
    {
        //$user = $this->getUser();
        $user = $this->get('security.context')->getToken()->getUser();
        var_dump($user);
        return $this->render('ProveedorBundle:Solicitud:solicitudGarantias.html.twig');
    }
    
    public function aprobacionGarantiaAction()
    {
        $fecha[0] = date("d/m/Y"); 
        $fecha[1] = date("H:i:s");
        
        return $this->render('ProveedorBundle:Default:aprobacionGarantia.html.twig', array('valor' => $fecha));
    }
    
    public function solicitudRecibidasAction()
    {
        return $this->render('ProveedorBundle:Default:solicitudRecibidas.html.twig');
    }
    
    public function descargaGarantiaAction()
    {                       
        return $this->render('ProveedorBundle:Default:descargaGarantia.html.twig');
    }    
}
