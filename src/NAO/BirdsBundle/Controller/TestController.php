<?php

namespace NAO\BirdsBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class TestController extends Controller
{
    /**
     * @Route("/test", name = "test")
     */

    public function testAction(Request $request)
    {


      return $this->render('NAOBirdsBundle:default:index.html.twig');

    }


    /**
     * @Route("/test1/{nom}", name = "test1")
     */

    public function test1Action(Request $request)
    {

      $nomVer = $request->query->get('nomvern');

      $repository = $this->getDoctrine()->getRepository(Bird::class);

      $dataBaseService = $this->container->get('nao_birds.getbirds');

      $birds = $dataBaseService->getBirdsByNomVernFr($repository,$nomVer);

    dump($birds); die();


      return $this->render('NAOBirdsBundle:default:index.html.twig');

    }


}
