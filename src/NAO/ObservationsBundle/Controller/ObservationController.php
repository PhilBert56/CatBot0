<?php

namespace NAO\ObservationsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use NAO\ObservationsBundle\Utilities\PreObservation;
use NAO\ObservationsBundle\Form\PreObservationFormType;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;


class ObservationController extends Controller
{
  /**
   * @Route("/observation" , name = "observation")
   */
    public function showObservationAction(Request $request)
    {

        /*  Obternir position via adresse IP ?
        ou à partir de la dernière observation de l'utilisateur*/

        /* Pour le moment : positionné initialement sur le point zéro des rotue de France */
        //$ipService = $this->container->get('nao_birds.ipadress');
        //$ip = $ipService->get_ip();

        //$localisation = $ipService->get_loc_from_ip($ip);
        //dump($localisation);die();

        $latitude = 48.85339895;
        $longitude = 2.34878361;

        $preObservation = new PreObservation();
        $preObservation->setLatitude($latitude);
        $preObservation->setLongitude($longitude);

        $visualBirdsMenuService = $this->container->get('nao_birds.visualbirdsmenuapi');
        $sizeTable = $visualBirdsMenuService->getVisualBirdsSizeList();
        $featherColorTable = $visualBirdsMenuService->getVisualBirdsFeatherColorList();
        $legColorTable = $visualBirdsMenuService->getVisualBirdsLegColorList();
        $beakColorTable = $visualBirdsMenuService->getVisualBirdsBeakColorList();

        //$form = $this->get('form.factory')->create(PreObservationFormType::class, $preObservation);

        $form = $this->createFormBuilder($preObservation)
        ->add('latitude',TextType::class,array('label' => 'preobservation.latitude'))
        ->add('longitude',TextType::class,array('label' => 'preobservation.longitude'))
        ->add('taille',ChoiceType::class,array('choices'=> $sizeTable, 'label' => 'preobservation.taille'))
        ->add('couleurPlumes',ChoiceType::class ,array('choices'=> $featherColorTable ,'label' => 'preobservation.couleurPlumes'))
        ->add('couleurPattes',ChoiceType::class,array('choices'=> $legColorTable,'label' => 'preobservation.couleurPattes'))
        ->add('couleurBec',ChoiceType::class,array('choices'=> $beakColorTable,'label' => 'preobservation.couleurBec'))
        ->add('nomVernFr',TextType::class,array('label' => 'preobservation.nomVernFr'))
        ->getForm()
        ;


;





        if ($request->isMethod('POST')) {

            $form->handleRequest($request);

            // On vérifie que les valeurs entrées sont correctes

            if ($form->isValid()) {

                $latitude = $form['latitude']->getData();
                $longitude = $form['longitude']->getData();
                $preObservation->setLatitude($latitude);
                $preObservation->setLongitude($longitude);

                /* l'observation est localisée - on retrace la carte centrée sur le lieu de l'observation*/
                return $this->render('NAOObservationsBundle:Maps:map.html.twig', [
                    'preobservation' => $preObservation,
                    'preobservationForm' => $form->createView()
                ]);
            }

        }


        return $this->render('NAOObservationsBundle:Maps:map.html.twig',[
            'preobservation' => $preObservation,
            'preobservationForm' => $form->createView()

        ]);
    }



}
