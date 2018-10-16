<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\Cliente;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('@App/base.html.twig');
    }
    
    /**
     * @Route("/clientes", name="clientes")
     */
    public function clienteAction(Request $request)
    {
        // Capturar clientes de la DB
        $repository = $this->getDoctrine()->getRepository(Cliente::class);
        $clientes = $repository->findAll();
        // replace this example code with whatever you need
        return $this->render('@App/Home/index.html.twig',array('clientes'=>$clientes));
    }
}
