<?php

namespace DashboardTricksBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('DashboardTricksBundle:Default:index.html.twig');
    }
}
