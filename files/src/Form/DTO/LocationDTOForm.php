<?php

declare(strict_types=1);

namespace App\Form\DTO;

use App\DTO\LocationDTO;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Contracts\Translation\TranslatorInterface;

class LocationDTOForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder->add(
            'name',
            TextType::class,
            [
                'label' => 'Name',
                'required' => true,
            ]
        )->add(
            'country',
            TextType::class,
            [
                'label' => 'Country',
                'required' => true,
            ]
        )->add(
            'latitude',
            TextType::class,
            [
                'label' => 'Latitude',
                'required' => false,
            ]
        )->add(
            'longitude',
            TextType::class,
            [
                'label' => 'Longitude',
                'required' => false,
            ]
        )->add(
            'submit',
            SubmitType::class
        );
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => LocationDTO::class]);
    }
}
