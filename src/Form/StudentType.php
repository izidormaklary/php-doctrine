<?php

namespace App\Form;

use App\Entity\Student;
use App\Entity\Teacher;
use App\Repository\TeacherRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class StudentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('firstName')
            ->add('lastName')
            ->add('email')
            ->add('teacher', ChoiceType::class, [
                'choices'=>[
                    $options['teachers']
                ],
                'choice_label'=> 'firstName',
                'choice_value'=> 'id',
                'placeholder' => false,

            ])
            ->add('address', AddressType::class);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Student::class,
            'teachers' => array(null),
        ]);
    }
}
