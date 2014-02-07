<?php

namespace Panel\PanelBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('PanelBundle:Default:index.html.twig', array('name' => $name));
    }
}
