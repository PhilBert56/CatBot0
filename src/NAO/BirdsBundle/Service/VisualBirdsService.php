<?php

namespace NAO\BirdsBundle\Service;

class VisualBirdsService

{

  public function getCouleurPlumesCode($couleur) {

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

  public function getCodeCouleurPlumes($codeCouleur) {
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

  public function getCodeCouleurBec($couleur) {
    if ($couleur == 'inconnue' ){return 0;};
    if ($couleur == 'Noir' ){return 1;};
    if ($couleur == 'Vert' ){return 2;};
    if ($couleur == 'Marron' ){return 3;};
    if ($couleur == 'Rouge' ){return 4;};
    if ($couleur == 'Orange' ){return 5;};
    if ($couleur == 'Jaune' ){return 6;};
    if ($couleur == 'Blanc' ){return 7;};
    if ($couleur == 'Gris' ){return 8;};
  }

  public function getCouleurBecCode($codeCouleur) {
    if ($codeCouleur == 0  ){return 'inconnue';};
    if ($codeCouleur == 1  ){return 'Noir';};
    if ($codeCouleur == 2  ){return 'Vert';};
    if ($codeCouleur == 3  ){return 'Marron';};
    if ($codeCouleur == 4  ){return 'Rouge';};
    if ($codeCouleur == 5  ){return 'Orange';};
    if ($codeCouleur == 6  ){return 'Jaune';};
    if ($codeCouleur == 7  ){return 'Blanc';};
    if ($codeCouleur == 8  ){return 'Gris';};
  }

  public function getCodeEpaisseurBec($epaisseur) {
    if ($epaisseur == 'inconnue' ){return 0;};
    if ($epaisseur == 'Fin' ){return 1;};
    if ($epaisseur == 'Moyen' ){return 2;};
    if ($epaisseur == 'Epais' ){return 3;};
    if ($epaisseur == 'Incertain' ){return 4;};
  }

  public function getEpaisseurBecCode($codeEpaisseur) {
    if ($codeEpaisseur == 0  ){return 'inconnue';};
    if ($codeEpaisseur == 1  ){return 'Fin';};
    if ($codeEpaisseur == 2  ){return 'Moyen';};
    if ($codeEpaisseur == 3  ){return 'Epais';};
    if ($codeCouleur == 4  ){return 'Incertain';};
  }

  public function getFormeBecCode($forme) {
    if ($forme == 'inconnue' ){return 0;};
    if ($forme == 'Crochu' ){return 1;};
    if ($forme == 'Droit' ){return 2;};
    if ($forme == 'Puissant' ){return 3;};
    if ($forme == 'Incertain' ){return 4;};
  }

  public function getCodeFormeBec($codeForme) {
    if ($codeForme == 0  ){return 'inconnue';};
    if ($codeForme == 1  ){return 'Crochu';};
    if ($codeForme == 2  ){return 'Droit';};
    if ($codeForme == 3  ){return 'Puissant';};
    if ($codeForme == 4  ){return 'Incertain';};
  }


  public function getLongueurBecCode($forme) {
    if ($forme == 'Inconnu' ){return 0;};
    if ($forme == 'Court' ){return 1;};
    if ($forme == 'Moyen' ){return 2;};
    if ($forme == 'Long' ){return 3;};
    if ($forme == 'Incertain' ){return 4;};
  }

  public function getCodeLongueurBec($code) {
    if ($code == 0  ){return 'inconnue';};
    if ($code == 1  ){return 'Court';};
    if ($code == 2  ){return 'Moyen';};
    if ($code == 3  ){return 'Long';};
    if ($code == 4  ){return 'Incertain';};
  }


  public function getBird($birdsTable, $birdName){

    foreach ($birdsTable as $b) {
      if ($b->nom == $birdName) {return $b;}
    }

  }



}
