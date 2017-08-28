<?php

namespace Web\EntityBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ClientType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name',TextType::class,array(
            'label' => 'form.client.name',
            'attr'=>['placeholder'=>'form.client.placeholder_clienName'],
            'translation_domain' => 'forms',
            'required'    => false
        ))

            ->add('lastname',TextType::class,array(
                'label' => 'form.client.lastname',
                'attr'=>['placeholder'=>'form.client.placeholder_clientLastname'],
                'translation_domain' => 'forms',
                'required'    => false
            ));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Web\EntityBundle\Entity\Client'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'web_entitybundle_client';
    }


}
