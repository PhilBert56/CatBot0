<?php

namespace NAO\ObservationsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('NAOObservationsBundle:Default:index.html.twig');
    }
}
