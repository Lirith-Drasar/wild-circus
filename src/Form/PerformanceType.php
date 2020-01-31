<?php

namespace App\Form;

use App\Entity\Shows;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;


class PerformanceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Name')
            ->add('Description')
            ->add('Circassian', EntityType::class, [
                'class' => Circassian::class,
                'choice_label' => 'lastname',
                'multiple' => true,
                'expanded' => true,
                'by_reference' => false,
            ])
        ->add('Shows', EntityType::class, [
            'class' => Shows::class,
            'choice_label' => 'name',
            'multiple' => true,
            'expanded' => true,
            'by_reference' => false,
        ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Performance::class,
        ]);
    }
}
