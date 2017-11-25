<?php

namespace NAO\BirdsBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class TestVisualBirdsMenuAPIController extends Controller
{
    /**
     * @Route("/visualbirdsmenuAPI", name = "visualbirdsmenuapi")
     */

    public function testAction( ){

      $visualBirdsMenuService = $this->container->get('nao_birds.visualbirdsmenuapi');

      $sizeTable = $visualBirdsMenuService->getVisualBirdsSizeList();

      dump ($sizeTable);

      $featherColorTable = $visualBirdsMenuService->getVisualBirdsFeatherColorList();

      dump ($featherColorTable);

      $legColorTable = $visualBirdsMenuService->getVisualBirdsLegColorList();

      dump ($legColorTable);

      $beakColorTable = $visualBirdsMenuService->getVisualBirdsBeakColorList();
      
      dump ($beakColorTable);




      return $this->render('NAOBirdsBundle:Default:index.html.twig');

    }

  }
