<?php

namespace App\Form;

use App\Entity\Lesson;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type as FormTypes;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LessonType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', FormTypes\TextType::class, ['label' => 'Наименование', 'required' => false])
            ->add('content', FormTypes\TextareaType::class, ['label' => 'Содержимое урока', 'required' => false])
            ->add('sort', FormTypes\NumberType::class, ['label' => 'Порядок сортировки', 'required' => false])
            ->add('course_id', FormTypes\HiddenType::class, ['mapped' => false])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Lesson::class,
        ]);
    }
}
