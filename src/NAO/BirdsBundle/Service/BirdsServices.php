<?php

namespace NAO\BirdsBundle\Service;

use NAO\BirdsBundle\Entity\Bird;
//use NAO\BirdsBundle\Utilities\OrdreOiseau;
//use NAO\BirdsBundle\Utilities\FamilleDansOrdre;


class BirdsServices

{

    public function buildBirdsTable()
    {

        /* création de la table des oiseaux */
        $fileName = "..\src\NAO\BirdsBundle\Data\TAXREF_Oiseaux.csv";
        $defaultInt = "-1";

        $birdsTable = [];
        if (($handle = fopen($fileName, "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 0, "\t")) !== FALSE) {

                $bird = new Bird();
                $birdsTable[] = $bird;

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


            }

        }
        fclose($handle);

        return $birdsTable;

    }


    public function buildOrdresTable()
    {
        /* création de la table des ordres */
        $ordresTable = [];
        $fileName = "..\src\NAO\BirdsBundle\Data\TAXREF_Oiseaux.csv";

        if (($handle = fopen($fileName, "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 0, "\t")) !== FALSE) {

                if ($data[0] !== "" && !in_array($data[0], $ordresTable)) {
                    $ordresTable[] = $data[0];
                }
            }
        }
        return $ordresTable;
    }


    public function buildFamilyList($em, $birdsDataBAseService, $ordre){

        $familyTable = [];
        $birdsOfThisOrdreTable = $birdsDataBAseService->getBirdsByOrdre($em,$ordre);

        foreach ($birdsOfThisOrdreTable as $bird) {
          $family = $bird->getFamille();
          if($family!== "" && !in_array($family, $familyTable)) {
            $familyTable[] = $family;
          }
        }
        return $familyTable;
      }
  }
