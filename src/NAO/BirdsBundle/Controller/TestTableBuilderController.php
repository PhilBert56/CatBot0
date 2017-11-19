<?php

namespace NAO\BirdsBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class TestTableBuilderController extends Controller
{
    /**
     * @Route("/birdstable", name = "getOrdreTable")
     */

    public function ordreTableAction( ){

        $birdsService = $this->container->get('nao_birds.birdstables');

        $birdsTable = $birdsService->buildBirdsTable();

        dump($birdsTable);

        $ordresTable = $birdsService->buildOrdresTable();

        dump($ordresTable);


        $birdsDataBaseService = $this->container->get('nao_birds.getbirds');
        $em = $this->getDoctrine()->getManager();

        foreach ($ordresTable as $ordre) {
          $familyTable = $birdsService->buildFamilyList($em,$birdsDataBaseService, $ordre );
          dump($ordre);
          dump ($familyTable);
          foreach ($familyTable as $family){
            $birds = $birdsDataBaseService->getBirdsByOrderAndFamily($em,$ordre,$family);
            dump($ordre);
            dump($family);
            dump($birds);
          }

        }
        die();


        return $this->render('NAOBirdsBundle:Default:index.html.twig');
    }




}
