<?php

namespace App\Form;

use App\Entity\Fichefrais;
use Symfony\Component\Form\AbstractType;
use App\Entity\Etat;
use App\Entity\Utilisateur;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FichefraisType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('id')
            ->add('mois')
            ->add('nbjustificatifs')
            ->add('montantvalide')
            ->add('datemodif')
            ->add('idetat', null , [
                'required' => true,
                'label' => "L'état",
                'class' => Etat::class,
                'choice_label' => 'libelle',
                    ])
            ->add('idutilisateur', null , [
                'required' => true,
                'label' => "L'utilisateur",
                'class' => Utilisateur::class,
                'choice_label' => 'id',
                    ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Fichefrais::class,
        ]);
    }
}
