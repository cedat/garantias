<?php

namespace Proveedor\ProveedorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Comun\ComunBundle\Entity\TgarProcesoProveedor;
use Comun\ComunBundle\Entity\TgarProveedor;


class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ProveedorBundle:Default:index.html.twig', array('name' => $name));
    }
    
    public function listarAction(Request $request)
    {
        //$user = $this->getUser();
        //$user = $this->get('security.context')->getToken()->getUser();        
        $user = '1714965033001';
        $session = $request->getSession();
        $session->set('usuario', 'test');
        
        //buscamos el id del proveedor segun el ruc                
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery('Select p.proveedorId from ComunBundle:TgarProveedor p where p.proveedorRuc = :ruc')
                ->setParameter('ruc',$user);
        $proveedorId = $query->getSingleResult();        
        
        //una vez obtenido el persona_id del proveedor, buscamos los procesos en los cuales se encuentra adjudicado
        //y en estado I - inicial
        
//        $rep = $this->getDoctrine()->getRepository('ComunBundle:TgarLoteProceso');
//        $procesos = $rep->findBy(array('proveedor'=>$proveedorId['proveedorId'],'loteEstado'=>'I'));
//        var_dump($procesos);
        
        $query1 = $em->createQuery('Select p,q from ComunBundle:TgarLoteProceso p join p.proceso q');
        $datos = $query1->getResult();
                         
        return $this->render('ProveedorBundle:Solicitud:listadoProceso.html.twig', array('datos'=>$datos));
    }
    
    public function solicitudGarantiasAction(Request $request)
    {
        $id = $request->get('id');
        var_dump($id);
        return $this->render('ProveedorBundle:Solicitud:solicitudGarantias.html.twig');
        
    }
    


    public function aprobacionGarantiaAction()
    {   
        $fecha[0] = date("Y/m/d H:i:s");        
        $fecha[3]= strtotime ( '+2 day' , strtotime ( $fecha[0] ) ) ;
        $fecha[0]= date ( 'd/m/Y' , $fecha[3] );
        $fecha[1]= date ( 'H:i:s' , $fecha[3] );
        
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
