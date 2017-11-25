<?php

namespace NAO\BirdsBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use NAO\BirdsBundle\Entity\Bird;

class TestDataBaseAccessController extends Controller
{
    /**
     * @Route("/getbirdsbyordre/{ordre}", name = "getbirdsfromorder")
     */




    /**
     * @Route("/getbirdsbycdnom/{cdnom}", name = "getbirdsfromcdnom")
     */

    public function cdnomAction(Request $request)
    {
      $cdnom = $request->query->get('cdnom');
    echo ('CdNom = '.$cdnom);

      $em = $this->getDoctrine()->getManager();
      $dataBaseService = $this->container->get('nao_birds.getbirds');

      $birds = $dataBaseService->getBirdsByCDNumber($em, $cdnom);

    dump($birds); die();

      return $this->render('NAOBirdsBundle:default:index.html.twig');

    }


    /**
     * @Route("/getbirdsbynomvern/{nomvern}", name = "getbirdsfromnomvern")
     */

     public function nomvernAction(Request $request)
     {

       $nomVer = $request->query->get('nomvern');

       $repository = $this->getDoctrine()->getRepository(Bird::class);

       $dataBaseService = $this->container->get('nao_birds.getbirds');

echo('Nom ver = '.$nomVer.'</br>');

       $birds = $dataBaseService->getBirdsByNomVernFr($repository,$nomVer);

dump($birds); die();
       return $this->render('NAOBirdsBundle:default:index.html.twig');

     }


}
