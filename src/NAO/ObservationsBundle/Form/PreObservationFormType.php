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

        $builder
          ->add('latitude',TextType::class,array('label' => 'preobservation.latitude'))
          ->add('longitude',TextType::class,array('label' => 'preobservation.longitude'))
          ->add('codeTaille',TextType::class,array('label' => 'preobservation.codeTaille'))
          ->add('codePlumes',TextType::class,array('label' => 'preobservation.codePlumes'))
          ->add('codePattes',TextType::class,array('label' => 'preobservation.codePattes'))
          ->add('codeBec',TextType::class,array('label' => 'preobservation.codeBec'))
          ->add('nomVernFr',TextType::class,array('label' => 'preobservation.nomVernFr'))
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
