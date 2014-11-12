<?php

namespace inventario\appBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('appBundle:Default:index.html.twig', array('name' => $name));
    }
}
