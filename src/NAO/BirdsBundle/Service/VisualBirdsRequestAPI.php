<?php

namespace NAO\BirdsBundle\Service;

class VisualBirdsRequestAPI
{



  protected function persistAndFlush($entity)

  {
    $this->em->persist($entity);
    $this->em->flush();
  }



  public function getVisualBirdsByUsualName($em,$nameIndication)

  {

    $repository = $em->getRepository('NAOBirdsBundle:VisualBird');

    $like = '%'.$nameIndication.'%';


    $query = $repository->createQueryBuilder('b')
      ->where('b.nomCommun LIKE \''.$like.'\'')
      ->orderBy('b.nomCommun', 'ASC')
      ->getQuery();

    return $query->getResult();

  }

  public function getVisualBirdsByFeatherColor($em,$color)

  {
    $colorCode = $this->getFeatherColorCode($color);
    $repository = $em->getRepository('NAOBirdsBundle:VisualBird');
    $like = '%'.$colorCode.'%';
    $query = $repository->createQueryBuilder('b')
      ->where('b.couleursPlumes LIKE \''.$like.'\'')
      ->orderBy('b.nomCommun', 'ASC')
      ->getQuery();
    dump($query);
    return $query->getResult();
  }


  public function getVisualBirdsByMultipleParameters($em, $queryParamatersAndValues){

dump($queryParamatersAndValues);

    $repository = $em->getRepository('NAOBirdsBundle:VisualBird');

    $numberOfParameters = sizeof($queryParamatersAndValues) ;
dump($numberOfParameters);

    if (sizeof($queryParamatersAndValues) == 1) {
      $query = $this->formatQueryOneParameter($repository, $queryParamatersAndValues );
      return $query->getResult();
    }


    if (sizeof($queryParamatersAndValues) == 2) {
      $query = $this->formatQueryTwoParameters($repository, $queryParamatersAndValues );
      return $query->getResult();
    }


    if (sizeof($queryParamatersAndValues) == 3) {
      $query = $this->formatQueryThreeParameters($repository, $queryParamatersAndValues );
      return $query->getResult();
    }



  }



  private function getFeatherColorCode($color){

    $file = '..\src\NAO\BirdsBundle\Data\CodesTable\BirdsCouleurPlume.csv';
    $separator = ',';
    return $this->getAttributeCodeFromFile($file, $color, $separator);

  }

  private function getLegsColorCode($color){

    $file = '..\src\NAO\BirdsBundle\Data\CodesTable\BirdsCouleurPattes.csv';
    $separator = ',';
    return $this->getAttributeCodeFromFile($file, $color, $separator);

  }

  private function getBeakColorCode($color){

    $file = '..\src\NAO\BirdsBundle\Data\CodesTable\BirdsCouleurBec.csv';
    $separator = ',';
    return $this->getAttributeCodeFromFile($file, $color, $separator);

  }

  private function getBeakThicknessCode($color){

    $file = '..\src\NAO\BirdsBundle\Data\CodesTable\BirdsEpaisseurBec.csv';
    $separator = ',';
    return $this->getAttributeCodeFromFile($file, $color, $separator);

  }

  private function getBeakShapeCode($color){

    $file = '..\src\NAO\BirdsBundle\Data\CodesTable\BirdsFormeBec.csv';
    $separator = ',';
    return $this->getAttributeCodeFromFile($file, $color, $separator);

  }

  private function getBeakLengthCode($color){

    $file = '..\src\NAO\BirdsBundle\Data\CodesTable\BirdsLongueurBec.csv';
    $separator = ',';
    return $this->getAttributeCodeFromFile($file, $color, $separator);

  }


  private function getSizeCode($color){

    $file = '..\src\NAO\BirdsBundle\Data\CodesTable\BirdsSizeTable.csv';
    $separator = ',';
    return $this->getAttributeCodeFromFile($file, $color, $separator);

  }



  private function getAttributeCodeFromFile($file, $value, $separator){
    if (($handle = fopen($file, "r")) !== FALSE) {
      while (($data = fgetcsv($handle, 0,$separator )) !== FALSE) {
        if ($data[1] == $value) {
          return $data[0];
        }
      }
    }
  }

  private function formatQueryOneParameter($repository, $queryParamatersAndValues ){

    $queryParamatersAndCodes = $this->translateValuesToCode($queryParamatersAndValues);

    $like = '%'.$queryParamatersAndCodes[0][1].'%';
    $param1 = 'b.'.$queryParamatersAndCodes[0][0];
    $ll = " LIKE '";
    $lend = "'";
    $where = $param1.$ll.$like.$lend;

    $query = $repository->createQueryBuilder('b')
      ->where($where)
      ->getQuery();
    return $query;

  }

  private function formatQueryTwoParameters($repository, $queryParamatersAndValues ){

    $queryParamatersAndCodes = $this->translateValuesToCode($queryParamatersAndValues);
    $like = '%'.$queryParamatersAndCodes[0][1].'%';
    $param1 = 'b.'.$queryParamatersAndCodes[0][0];
    $ll = " LIKE '";
    $lend = "'";
    $where1 = $param1.$ll.$like.$lend;

    $like = '%'.$queryParamatersAndCodes[1][1].'%';
    $param1 = 'b.'.$queryParamatersAndCodes[1][0];
    $ll = " LIKE '";
    $lend = "'";
    $andWhere1 = $param1.$ll.$like.$lend;

    $query = $repository->createQueryBuilder('b')
      ->where($where1)
      ->andwhere($andWhere1)
      ->getQuery();

    dump($query);
    return $query;

  }

  private function formatQueryThreeParameters($repository, $queryParamatersAndValues ){

    $queryParamatersAndCodes = $this->translateValuesToCode($queryParamatersAndValues);

    $like = '%'.$queryParamatersAndCodes[0][1].'%';
    $param1 = 'b.'.$queryParamatersAndCodes[0][0];
    $ll = " LIKE '";
    $lend = "'";
    $where1 = $param1.$ll.$like.$lend;

    $like = '%'.$queryParamatersAndCodes[1][1].'%';
    $param1 = 'b.'.$queryParamatersAndCodes[1][0];
    $ll = " LIKE '";
    $lend = "'";
    $andWhere1 = $param1.$ll.$like.$lend;


    $like = '%'.$queryParamatersAndCodes[2][1].'%';
    $param1 = 'b.'.$queryParamatersAndCodes[2][0];
    $ll = " LIKE '";
    $lend = "'";
    $andWhere2 = $param1.$ll.$like.$lend;


    $query = $repository->createQueryBuilder('b')
      ->where($where1)
      ->andwhere($andWhere1)
      ->andwhere($andWhere2)
      ->getQuery();

    return $query;

  }


  private function formatQueryFourParameters($repository, $queryParamatersAndValues ){

    $queryParamatersAndCodes = $this->translateValuesToCode($queryParamatersAndValues);

    $like = '%'.$queryParamatersAndCodes[0][1].'%';
    $param1 = 'b.'.$queryParamatersAndCodes[0][0];
    $ll = " LIKE '";
    $lend = "'";
    $where1 = $param1.$ll.$like.$lend;

    $like = '%'.$queryParamatersAndCodees[1][1].'%';
    $param1 = 'b.'.$queryParamatersAndCodes[1][0];
    $ll = " LIKE '";
    $lend = "'";
    $andWhere1 = $param1.$ll.$like.$lend;


    $like = '%'.$queryParamatersAndCodes[2][1].'%';
    $param1 = 'b.'.$queryParamatersAndCodes[2][0];
    $ll = " LIKE '";
    $lend = "'";
    $andWhere2 = $param1.$ll.$like.$lend;

    $like = '%'.$queryParamatersAndCodes[3][1].'%';
    $param1 = 'b.'.$queryParamatersAndCodes[3][0];
    $ll = " LIKE '";
    $lend = "'";
    $andWhere3 = $param1.$ll.$like.$lend;




    $query = $repository->createQueryBuilder('b')
      ->where($where1)
      ->andwhere($andWhere1)
      ->andwhere($andWhere2)
      ->andwhere($andWhere3)
      ->getQuery();

    return $query;

  }


  private function translateValuesToCode($queryParamatersAndValues){

    $queryParamatersAndCodes=[];

    foreach ($queryParamatersAndValues as $dataValue) {

      if ($dataValue[0] == 'taille') {
        $code = $this->getSizeCode($dataValue[1]);
        $queryParamatersAndCodes[] = [$dataValue[0],$code ];
      }
      if ($dataValue[0] == 'couleursPlumes') {
        $code = $this->getFeatherColorCode($dataValue[1]);
        $queryParamatersAndCodes[] = [$dataValue[0],$code ];
      }
      if ($dataValue[0] == 'couleursPattes') {
        $code = $this->getLegsColorCode($dataValue[1]);
        $queryParamatersAndCodes[] = [$dataValue[0],$code ];
      }
      if ($dataValue[0] == 'couleursBec') {
        $code = $this->getBeakColorCode($dataValue[1]);
        $queryParamatersAndCodes[] = [$dataValue[0],$code ];
      }
      if ($dataValue[0] == 'longueurBec') {
        $code = $this->getBeakLengthCode($dataValue[1]);
        $queryParamatersAndCodes[] = [$dataValue[0],$code ];
      }
      if ($dataValue[0] == 'formeBec') {
        $code = $this->getBeakShapeCode($dataValue[1]);
        $queryParamatersAndCodes[] = [$dataValue[0],$code ];
      }
      if ($dataValue[0] == 'epaisseurBec') {
        $code = $this->getBeakThicknessCode($dataValue[1]);
        $queryParamatersAndCodes[] = [$dataValue[0],$code ];
      }

    }
    return $queryParamatersAndCodes;



  }

}
