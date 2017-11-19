<?php

namespace NAO\BirdsBundle\Service;

use NAO\BirdsBundle\Entity\Bird;

class BirdsDataBase
{
  private $em;

  public function __construct(\Doctrine\ORM\EntityManager $entityManager)
  {
    $this->em = $entityManager;
  }

  public function createBirdTable()
  {

    echo ('database creation </br>');

    /* création de la table des birdx */
    $fileName = "..\src\NAO\BirdsBundle\Data\TAXREF_Oiseaux.csv";
    $defaultInt = "-1";

    if (($handle = fopen($fileName, "r")) !== FALSE) {
      while (($data = fgetcsv($handle, 0, "\t")) !== FALSE) {

        $bird = new Bird();

        $bird->setOrdre($data[0]);
        $bird->setFamille($data[1]);
        $bird->setCdNom($data[2]);

        if($data[3] =="")
        { $bird->setCdTaxsup($defaultInt); }
        else { $bird->setCdTaxsup($data[3]); };


        if($data[4] =="")
        { $bird->setCdSup($defaultInt); }
        else { $bird->setCdSup($data[4]); };

        if($data[5] =="")
        { $bird->setCdRef($defaultInt); }
        else { $bird->setCdRef($data[5]); };


        $bird->setRang($data[6]);
        $bird->setLbNom($data[7]);
        $bird->setLbAuteur($data[8]);
        $bird->setNomComplet($data[9]);
        $bird->setNomCompletHtml($data[10]);
        //$bird->setNomValide($data[11]);
        $bird->setNomVernFr($data[12]);
        $bird->setNomVernEn($data[13]);

        if($data[14] =="")
        { $bird->setCodeHabitat($defaultInt); }
        else { $bird->setCodeHabitat($data[14]); };

        $bird->setUrl($data[15]);

        if($data[16] =="")
        { $bird->setCodeTaille($defaultInt); }
        else { $bird->setCodeTaille($data[16]); };


        if($data[17] =="")
        { $bird->setCodePlumes($defaultInt); }
        else { $bird->setCodePlumes($data[17]); };


        if($data[18] =="")
        { $bird->setCodeBec($defaultInt); }
        else { $bird->setCodeBec($data[18]); };

        if($data[19] =="")
        { $bird->setCodePattes($defaultInt); }
        else { $bird->setCodePattes($data[19]); };

        $this->em->persist($bird);
      }

    }
    fclose($handle);
    $this->em->flush();
  }

}
