<?php

namespace App\Form;

use App\Entity\Property;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PropertyType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('description')
            ->add('surface')
            ->add('room')
            ->add('bedroom')
            ->add('floor')
            ->add('bathroom')
            ->add('heat')
            ->add('type')
            ->add('city')
            ->add('address')
            ->add('postal_code')
            ->add('craeted_at')
            ->add('updated_at')
            ->add('sold')
            ->add('price')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Property::class,
        ]);
    }
}
