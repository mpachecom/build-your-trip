<?php

namespace BuildYourTripBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('BuildYourTripBundle:Default:index.html.twig', array('name' => $name));
    }
}
