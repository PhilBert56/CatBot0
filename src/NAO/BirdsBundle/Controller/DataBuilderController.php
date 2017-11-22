<?php

namespace NAO\BirdsBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use NAO\BirdsBundle\Data\DataVisualBirds\VisualBirdTemp;

use NAO\BirdsBundle\Service\VisualBirdsServices;


class DataBuilderController extends Controller

{

  public function getBird($birdsTable, $birdName){

      foreach ($birdsTable as $b) {
        if ($b->nom == $birdName) {return $b;}
      }

  }

  public function CouleurPattesAction(Request $request)
  {
    /**
     * @Route("/tempPattes", name = "temppattes")
     */
    $files = [
      '..\src\NAO\BirdsBundle\Data\DataVisualBirds\BecEpaisseurMoyen.txt',
      '..\src\NAO\BirdsBundle\Data\DataVisualBirds\BecEpaisseurFin.txt',
      '..\src\NAO\BirdsBundle\Data\DataVisualBirds\BecEpaisseurEpais.txt',
    ];

    /* constitution de la table des oiseaux */
    //$birdsFile = "..\src\NAO\BirdsBundle\Data\VisualBirdsTable.csv";
    $birdsTable=[];
    $birdsNameTable=[];
    $visualBirdsService = $this->container->get('nao_birds.visualbirdscodes');

    $tables = $visualBirdsService->getVisualBirdsTable();
    $birdsTable  = $tables[0];
    $birdsNameTable = $tables[1];

    //dump ($tables);die();
/*
    if (($handle = fopen($birdsFile, "r")) !== FALSE) {
      while (($data = fgetcsv($handle, 0, ",")) !== FALSE) {

          $bird = new VisualBirdTemp;
          $bird->nom = $data[8];
          $birdsTable[] = $bird;
          $birdsNameTable[] = $data[8];
          }
        }
          dump ($birdsTable);
          fclose($handle);
*/
          foreach ($files as $file) {

            if (($handle = fopen($file, "r")) !== FALSE) {
              while (($data = fgetcsv($handle, 0, "\t")) !== FALSE) {

                if (strpos($data[0], 'EpaisseurBec') !== FALSE) {
                  $tab = explode (' ',$data[0]);
                  $param = $tab[1];
                  echo($param.'</br>');
                }
                if (in_array ($data[0], $birdsNameTable)) {
                    $bird = $visualBirdsService->getBird($birdsTable,$data[0]);

                    echo($data[0].' === '.$param.'</br>');
                    $bird->epaisseurBec = $bird->epaisseurBec.'/'.$param;
                    echo($data[0].' === '.$bird->epaisseurBec.'</br>');

                    $codeParam = $visualBirdsService->getCodeEpaisseurBec($param);
                    echo($data[0].' === '.$codeParam.'</br>');

                    $bird->codeEpaisseurBec = $bird->codeEpaisseurBec.';'.$codeParam;
                    echo($data[0].' === '.$bird->codeEpaisseurBec.'</br>');
                }
              }
            }
          }

          dump ($birdsTable);

          return $this->render('NAOBirdsBundle:default:index.html.twig');

          }


}
