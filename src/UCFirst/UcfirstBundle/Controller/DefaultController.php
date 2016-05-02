<?php

namespace UCFirst\UcfirstBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('UcfirstBundle:Default:index.html.twig');
    }
}
