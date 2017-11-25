<?php

namespace NAO\BirdsBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class TestVisualBirdsRequestAPIController extends Controller
{
    /**
     * @Route("/visualbirdsrequestAPI", name = "visualbirdsrequestapi")
     */

    public function testAction( ){

      $visualBirdsRequestService = $this->container->get('nao_birds.visualbirdsrequestapi');
      $em = $this->getDoctrine()->getManager();

/*
      $birdsByUsualName = $visualBirdsRequestService->getVisualBirdsByUsualName($em, 'Hir');
      dump ($birdsByUsualName);
*/

/*
      $birdsByFeatherColor = $visualBirdsRequestService->getVisualBirdsByFeatherColor($em, "Jaune");
      dump ($birdsByFeatherColor);

      $requestParameters = [ ['couleursPlumes','Jaune'] , ['couleursPattes', 'Gris' ]];
      $birdsRequest = $visualBirdsRequestService->getVisualBirdsByMultipleParameters($em, $requestParameters);
      dump ($birdsRequest);
*/
/*
      $requestParameters = [ ['couleursPlumes','Vert'] ];
      $birdsRequest = $visualBirdsRequestService->getVisualBirdsByMultipleParameters($em, $requestParameters);
      dump ($birdsRequest);
*/
/*
$birdsByFeatherColor = $visualBirdsRequestService->getVisualBirdsByFeatherColor($em, "Jaune");
dump ($birdsByFeatherColor);
*/
$requestParameters = [ ['couleursPlumes','Vert'] ];
$birdsRequest = $visualBirdsRequestService->getVisualBirdsByMultipleParameters($em, $requestParameters);
dump ($birdsRequest);


      $requestParameters = [ ['couleursPlumes','Vert'] , ['formeBec', 'Droit' ], ['couleursPattes','Orange/Rose']];
      $birdsRequest = $visualBirdsRequestService->getVisualBirdsByMultipleParameters($em, $requestParameters);
      dump ($birdsRequest);
/*
      $requestParameters = [ ['couleursPlumes','Jaune'] , ['couleursPattes', 'Noir' ], ['couleursBec', 'Noir' ], ['taille', '15-25 cm, Entre le moineau et le merle']];
      $birdsRequest = $visualBirdsRequestService->getVisualBirdsByMultipleParameters($em, $requestParameters);
      dump ($birdsRequest);

      $requestParameters = [ ['taille','15 cm, Moineau ou plus petit'] ];
      $birdsRequest = $visualBirdsRequestService->getVisualBirdsByMultipleParameters($em, $requestParameters);
      dump ($birdsRequest);

      $requestParameters = [ ['couleursPlumes','Orange'] ];
      $birdsRequest = $visualBirdsRequestService->getVisualBirdsByMultipleParameters($em, $requestParameters);
      dump ($birdsRequest);

      $requestParameters = [ ['couleursPattes','Noir'] ];
      $birdsRequest = $visualBirdsRequestService->getVisualBirdsByMultipleParameters($em, $requestParameters);
      dump ($birdsRequest);

      $requestParameters = [ ['couleursBec','Rouge'] ];
      $birdsRequest = $visualBirdsRequestService->getVisualBirdsByMultipleParameters($em, $requestParameters);
      dump ($birdsRequest);

      $requestParameters = [ ['longueurBec','Court'] ];
      $birdsRequest = $visualBirdsRequestService->getVisualBirdsByMultipleParameters($em, $requestParameters);
      dump ($birdsRequest);

      $requestParameters = [ ['formeBec','Crochu'] ];
      $birdsRequest = $visualBirdsRequestService->getVisualBirdsByMultipleParameters($em, $requestParameters);
      dump ($birdsRequest);

      $requestParameters = [ ['epaisseurBec','Moyen'] ];
      $birdsRequest = $visualBirdsRequestService->getVisualBirdsByMultipleParameters($em, $requestParameters);
      dump ($birdsRequest);

*/

      return $this->render('NAOBirdsBundle:Default:index.html.twig');

    }

  }
