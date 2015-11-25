<?php

namespace CE\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('CEMainBundle:Default:index.html.twig', array('name' => $name));
    }
}
