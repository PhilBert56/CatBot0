<?php

namespace NAO\BirdsBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


class VisualBirdsDataBaseController extends Controller
{
    /**
     * @Route("/visualbirdscreatedb", name = "visualbirdsdb")
     */

    public function indexAction()
    {

      $em = $this->getDoctrine()->getManager();
      $birdsDataBaseService = $this->container->get('nao_birds.dbbirds');

      $birdsDataBaseService->createVisualBirdTable($em);

      return $this->render('NAOBirdsBundle:default:index.html.twig');

    }



}
