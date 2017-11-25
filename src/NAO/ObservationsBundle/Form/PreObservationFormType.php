<?php

namespace NAO\ObservationsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PreObservationFormType extends AbstractType
{

    /**
    * {@inheritdoc}
    */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {


/*
        $builder
          ->add('latitude',TextType::class,array('label' => 'preobservation.latitude'))
          ->add('longitude',TextType::class,array('label' => 'preobservation.longitude'))
          ->add('taille','choice',array('choices'=>'preobservation.tailleMenuList', 'label' => 'preobservation.taille'))
          ->add('couleurPlumes','choice' ,array('choices'=>'preobservation.couleursPlumeMenuList','label' => 'preobservation.couleurPlumes'))
          ->add('couleurPattes','choice',array('choices'=>'preobservation.couleursPattesMenuList','label' => 'preobservation.couleurPattes'))
          ->add('couleurBec','choice',array('choices'=>'preobservation.couleursBecMenuList','label' => 'preobservation.couleurBec'))
          ->add('nomVernFr',TextType::class,array('label' => 'preobservation.nomVernFr'))
          ;
          */
          $builder
            ->add('latitude',TextType::class,array('label' => 'preobservation.latitude'))
            ->add('longitude',TextType::class,array('label' => 'preobservation.longitude'))
            

;
    }

     /**
     * {@inheritdoc}
     */

      public function configureOptions(OptionsResolver $resolver)
      {
          $resolver->setDefaults(array(
              'data_class' => 'NAO\ObservationsBundle\Utilities\PreObservation'
          ));
      }

      /**
       * {@inheritdoc}
       */

      public function getBlockPrefix()
      {
          return 'observationsbundle_preobservation';
      }

}
