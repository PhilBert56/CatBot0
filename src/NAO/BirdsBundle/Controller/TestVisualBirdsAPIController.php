<?php

namespace NAO\BirdsBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class TestVisualBirdsAPIController extends Controller
{
    /**
     * @Route("/visualbirdsAPI", name = "visualbirdsapi")
     */

    public function testAction( ){

      $visualBirdsService = $this->container->get('nao_birds.visualbirdsapi');

      $sizeTable = $visualBirdsService->getVisualBirdsSizeList();
      dump ($sizeTable); die();



    }

  }
