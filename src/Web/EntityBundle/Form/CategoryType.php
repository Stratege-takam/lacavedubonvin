<?php

namespace Web\EntityBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CategoryType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
             //$builder->add('name');

                $builder->add('name',TextType::class,array(
                    'label' => 'form.category.name',
                    'attr'=>['placeholder'=>'form.category.placeholder_categoryName'],
                    'translation_domain' => 'forms',
                    'required'    => false
                ))
                ->add('description',TextareaType::class, array(
                    'label' => 'form.category.description',
                    'attr' => ['placeholder'=>'form.category.placeholder_CategoryDescription'],
                    'translation_domain' => 'forms',
                    'required'    => false
                ))
                ->add('photo',TextareaType::class, array(
                    'label' => 'form.category.photo',
                    'attr' => ['placeholder'=>'form.category.placeholder_categoryPhoto'],
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
            'data_class' => 'Web\EntityBundle\Entity\Category'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'web_entitybundle_category';
    }

}
