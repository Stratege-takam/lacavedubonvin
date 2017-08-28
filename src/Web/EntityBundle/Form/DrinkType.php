<?php

namespace Web\EntityBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DrinkType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        //$builder->add('name')->add('color')->add('countryOrigin')->add('size');

                $builder->add('name',TextType::class,array(
                    'label' => 'form.drink.name',
                    'attr'=>['placeholder'=>'form.drink.placeholder_drinkName'],
                    'translation_domain' => 'forms',
                    'required'    => false
                ))
                ->add('color',TextType::class,array(
                    'label' => 'form.drink.color',
                    'attr'=>['placeholder'=>'form.drink.placeholder_color'],
                    'translation_domain' => 'forms',
                    'required'    => false
                ))
                ->add('size',TextType::class,array(
                    'label' => 'form.drink.size',
                    'attr'=>['placeholder'=>'form.drink.placeholder_size'],
                    'translation_domain' => 'forms',
                    'required'    => false
                ))
                ->add('category',CategoryType::class)
                ->add('country',CountryType::class)
                ->add('photo',PhotoType::class);

    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Web\EntityBundle\Entity\Drink'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'web_entitybundle_drink';
    }


}
