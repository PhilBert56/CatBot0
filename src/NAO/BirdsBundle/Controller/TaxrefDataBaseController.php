<?php

namespace NAO\BirdsBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


class TaxrefDataBaseController extends Controller
{
    /**
     * @Route("/taxref", name = "taxrefdb")
     */

    public function indexAction()
    {

      $em = $this->getDoctrine()->getManager();
      $birdsDataBaseService = $this->container->get('nao_birds.dbbirds');

      $birdsDataBaseService->createBirdTable($em);

      return $this->render('NAOBirdsBundle:default:index.html.twig');

    }



}
