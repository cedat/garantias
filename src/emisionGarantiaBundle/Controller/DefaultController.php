<?php

namespace emisionGarantiaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('emisionGarantiaBundle:Default:index.html.twig', array('name' => $name));
    }    
    
}
