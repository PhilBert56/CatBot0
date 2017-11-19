<?php

namespace NAO\BirdsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{

  /**
   * @Route("/birds", name="birdshomepage")
   */
    public function indexAction()
    {
        return $this->render('NAOBirdsBundle:Default:index.html.twig');
    }
}
