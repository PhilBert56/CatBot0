<?php

namespace NAO\BirdsBundle\Service;

class VisualBirdsMenuAPI
{



  public function getVisualBirdsSizeList()

  {
    $birdsSizeList =[];
    $file = '..\src\NAO\BirdsBundle\Data\CodesTable\BirdsSizeTable.csv';
    $parameterRankInFile = 1;
    $separator = ';';

    return $this->getAttributeListFromFile($file,$parameterRankInFile,$separator );

  }

    public function getVisualBirdsFeatherColorList()
    {
      $file = '..\src\NAO\BirdsBundle\Data\CodesTable\BirdsCouleurPlume.csv';
      $parameterRankInFile = 1;
      $separator = ',';

      return $this->getAttributeListFromFile($file,$parameterRankInFile,$separator );

    }


    public function getVisualBirdsLegColorList()
    {
      $file = '..\src\NAO\BirdsBundle\Data\CodesTable\BirdsCouleurPattes.csv';
      $parameterRankInFile = 1;
      $separator = ',';

      return $this->getAttributeListFromFile($file,$parameterRankInFile,$separator );

    }


    public function getVisualBirdsBeakColorList()
    {
      $file = '..\src\NAO\BirdsBundle\Data\CodesTable\BirdsCouleurBec.csv';
      $parameterRankInFile = 1;
      $separator = ',';

      return $this->getAttributeListFromFile($file,$parameterRankInFile,$separator );

    }

    private function getAttributeListFromFile($file, $parameterRankInFile, $separator){
        $table = [];
        if (($handle = fopen($file, "r")) !== FALSE) {
          while (($data = fgetcsv($handle, 0,$separator )) !== FALSE) {
            $table[] = $data[$parameterRankInFile];
          }
        }
        return $table;
    }


}
