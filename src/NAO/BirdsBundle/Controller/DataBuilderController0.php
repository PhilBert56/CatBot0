<?php

namespace NAO\BirdsBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use NAO\BirdsBundle\Data\DataVisualBirds\VisualBirdTemp;

use NAO\BirdsBundle\Service\VisualBirdsServices;


class DataBuilderController extends Controller

{

  /**
   * @Route("/tempPlumes", name = "tempplumes")
   */

   public function CouleurPlumesAction(Request $request)
   {
     $files = [
       '..\src\NAO\BirdsBundle\Data\DataVisualBirds\PlumeVert.txt' ,
       '..\src\NAO\BirdsBundle\Data\DataVisualBirds\PlumeRouge.txt',
       '..\src\NAO\BirdsBundle\Data\DataVisualBirds\PlumeRoseViolet.txt',
       '..\src\NAO\BirdsBundle\Data\DataVisualBirds\PlumeOrange.txt',
       '..\src\NAO\BirdsBundle\Data\DataVisualBirds\PlumeNoire.txt',
       '..\src\NAO\BirdsBundle\Data\DataVisualBirds\PlumeMarron.txt',
       '..\src\NAO\BirdsBundle\Data\DataVisualBirds\PlumeJaune.txt',
       '..\src\NAO\BirdsBundle\Data\DataVisualBirds\PlumeGris.txt',
       '..\src\NAO\BirdsBundle\Data\DataVisualBirds\PlumeBleue.txt',
       '..\src\NAO\BirdsBundle\Data\DataVisualBirds\PlumeBlanc.txt',
       '..\src\NAO\BirdsBundle\Data\DataVisualBirds\PlumeBeige.txt'
     ];

/* constitution de la table des oiseaux */
     $birdsFile = "..\src\NAO\BirdsBundle\Data\VisualBirdsTable.csv";
     $birdsTable=[];
     $birdsNameTable=[];

     if (($handle = fopen($birdsFile, "r")) !== FALSE) {
       while (($data = fgetcsv($handle, 0, ",")) !== FALSE) {

      $bird = new VisualBirdTemp;
      $bird->nom = $data[8];
      $birdsTable[] = $bird;
      $birdsNameTable[] = $data[8];

      }
      //dump ($birdsTable);
      fclose($handle);

      foreach ($files as $file) {

        if (($handle = fopen($file, "r")) !== FALSE) {
          while (($data = fgetcsv($handle, 0, "\t")) !== FALSE) {

            if (strpos($data[0], 'Plume') !== FALSE) {
              $tab = explode (' ',$data[0]);

              $couleur = $tab[1];
echo('couleur = '.$couleur.'</br>');
            }
            if (in_array ($data[0], $birdsNameTable)) {
                echo ('test : '. $data[0].' est un oiseau '.$couleur.'</br>');
                $bird = $this->getBird($birdsTable,$data[0]);
                $bird->couleursPlume = $bird->couleursPlume.'/'.$couleur;
                $codeCouleur = $this->getCouleurCode($couleur);
                $bird->codeCouleurPlume = $bird->codeCouleurPlume.';'.$codeCouleur;
            }

          }
        }
      }

     dump ($birdsTable);

     return $this->render('NAOBirdsBundle:default:index.html.twig');

    }

  }



  public function getBird($birdsTable, $birdName){

      foreach ($birdsTable as $b) {
        if ($b->nom == $birdName) {return $b;}
      }

  }


  public function getCouleurPlumeCode($couleur) {

    if ($couleur == 'inconnue' ){return 0;};
    if ($couleur == 'Noir' ){return 1;};
    if ($couleur == 'Gris' ){return 2;};
    if ($couleur == 'Blanc' ){return 3;};
    if ($couleur == 'Beige' ){return 4;};
    if ($couleur == 'Jaune' ){return 5;};
    if ($couleur == 'Orange' ){return 6;};
    if ($couleur == 'Rouge' ){return 7;};
    if ($couleur == 'Marron' ){return 8;};
    if ($couleur == 'Rose/Violet' ){return 9;};
    if ($couleur == 'Bleu' ){return 10;};
    if ($couleur == 'Vert' ){return 11;};
  }

  public function getCodeCouleurPlume($codeCouleur) {
    if ($codeCouleur == 0  ){return 'inconnue';};
    if ($codeCouleur == 1  ){return 'Noir';};
    if ($codeCouleur == 2  ){return 'Gris';};
    if ($codeCouleur == 3  ){return 'Blanc';};
    if ($codeCouleur == 4  ){return 'Beige';};
    if ($codeCouleur == 5  ){return 'Jaune';};
    if ($codeCouleur == 6  ){return 'Orange';};
    if ($codeCouleur == 7  ){return 'Rouge';};
    if ($codeCouleur == 8  ){return 'Marron';};
    if ($codeCouleur == 9  ){return 'Rose/Violet';};
    if ($codeCouleur == 10  ){return 'Bleu';};
    if ($codeCouleur == 11  ){return 'Vert';};

  }

  public function getCouleurPattesCode($couleur) {
    if ($couleur == 'inconnue' ){return 0;};
    if ($couleur == 'Noir' ){return 1;};
    if ($couleur == 'Marron' ){return 2;};
    if ($couleur == 'Orange-Rose' ){return 3;};
    if ($couleur == 'Jaune' ){return 4;};
    if ($couleur == 'Gris' ){return 5;};
  }

  public function getCodeCouleurPattes($codeCouleur) {
    if ($codeCouleur == 0  ){return 'inconnue';};
    if ($codeCouleur == 1  ){return 'Noir';};
    if ($codeCouleur == 2  ){return 'Marron';};
    if ($codeCouleur == 3  ){return 'Orange-Rose';};
    if ($codeCouleur == 4  ){return 'Jaune';};
    if ($codeCouleur == 5  ){return 'Gris';};
  }


  public function CouleurPattesAction(Request $request)
  {
    /**
     * @Route("/tempPattes", name = "temppattes")
     */
    $files = [
      '..\src\NAO\BirdsBundle\Data\DataVisualBirds\PattesNoir.txt',
      '..\src\NAO\BirdsBundle\Data\DataVisualBirds\PattesMarron.txt',
      '..\src\NAO\BirdsBundle\Data\DataVisualBirds\PattesJaune.txt',
      '..\src\NAO\BirdsBundle\Data\DataVisualBirds\PattesGris.txt',
      '..\src\NAO\BirdsBundle\Data\DataVisualBirds\PattesOrangeRose.txt'
    ];

    /* constitution de la table des oiseaux */
    $birdsFile = "..\src\NAO\BirdsBundle\Data\VisualBirdsTable.csv";
    $birdsTable=[];
    $birdsNameTable=[];
    $visualBirdsService = $this->container->get('nao_birds.visualbirdscodes');


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

          foreach ($files as $file) {

            if (($handle = fopen($file, "r")) !== FALSE) {
              while (($data = fgetcsv($handle, 0, "\t")) !== FALSE) {

                if (strpos($data[0], 'Pattes') !== FALSE) {
                  $tab = explode (' ',$data[0]);
                  $couleur = $tab[1];
                echo('couleur patte = '.$couleur.'</br>');
                }
                if (in_array ($data[0], $birdsNameTable)) {
                    echo ('test : '. $data[0].' a des pattes '.$couleur.'</br>');
                    $bird = $this->getBird($birdsTable,$data[0]);
                    $bird->couleursPatte = $bird->couleursPattes.'/'.$couleur;
                    $codeCouleur = $visualBirdsService->getCouleurPattesCode($couleur);
                    $bird->codeCouleurPattes = $bird->codeCouleurPattes.';'.$codeCouleur;
                }

                }
                }
                }

                dump ($birdsTable);

                return $this->render('NAOBirdsBundle:default:index.html.twig');

              }





}
