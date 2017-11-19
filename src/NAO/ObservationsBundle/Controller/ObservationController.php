<?php

namespace NAO\ObservationsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use NAO\ObservationsBundle\Utilities\PreObservation;
use NAO\ObservationsBundle\Form\PreObservationFormType;

class ObservationController extends Controller
{
  /**
   * @Route("/observation" , name = "observation")
   */
    public function showLocalisationAction(Request $request)
    {

        /*  Obternir position via adresse IP ?
        ou à partir de la dernière observation de l'utilisateur*/

        /* Pour le moment : positionné initialement sur le point zéro des rotue de France */
        $latitude = 48.85339895;
        $longitude = 2.34878361;

        $preObservation = new PreObservation();
        $preObservation->setLatitude($latitude);
        $preObservation->setLongitude($longitude);

        $form = $this->get('form.factory')->create(PreObservationFormType::class, $preObservation);


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
