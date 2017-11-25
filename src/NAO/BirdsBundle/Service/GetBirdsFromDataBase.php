<?php

namespace NAO\BirdsBundle\Service;

class GetBirdsFromDataBase
{

/***************
  private $em;

  public function __construct(\Doctrine\ORM\EntityManager $entityManager)
  {
    $this->em = $entityManager;
    echo('constructeur ');
dump($this->em);
  }
*************/
  public function getBirdsByOrdre($em, $ordre)

  {
    $birds = $em->getRepository('NAOBirdsBundle:Bird')
    ->findby(
         array('ordre' => $ordre)
    );

    return $birds;

  }



  public function getBirdsByCDNumber($em, $cdNom)

  {
    $birds = $em->getRepository('NAOBirdsBundle:Bird')
    ->findby(
         array('cdNom' => $cdNom)
    );

    return $birds;

  }


  public function getBirdsByOrderAndFamily($em, $ordre, $family)
  {

    $birds = $em->getRepository('NAOBirdsBundle:Bird')
    ->findby(
         array('ordre' => $ordre , 'famille' => $family)

    );

    return $birds;
  }


  public function getBirdsByNomVernFr($repository, $suggestion){

    $like = '%'.$suggestion.'%';

    $query = $repository->createQueryBuilder('b')
      ->where('b.nomVernFr LIKE \''.$like.'\'')
      ->orderBy('b.nomVernFr', 'ASC')
      ->getQuery();

    $birds = $query->getResult();

    return $birds;







  }

}
