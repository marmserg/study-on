<?php

namespace App\Form;

use App\Entity\Lesson;
use App\Form\DataTransformer\CourseToNumberTransformer;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type as FormTypes;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LessonType extends AbstractType
{
    private $transformer;

    public function __construct(CourseToNumberTransformer $transformer)
    {
        $this->transformer = $transformer;
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', FormTypes\TextType::class, ['label' => 'Наименование', 'required' => false])
            ->add('content', FormTypes\TextareaType::class, ['label' => 'Содержимое урока', 'required' => false])
            ->add('sort', FormTypes\NumberType::class, [
                'label' => 'Порядок сортировки',
                'required' => false,
                'invalid_message' => 'Порядок сортировки должен быть числом.'
            ])
            ->add('course', FormTypes\HiddenType::class)
        ;

        $builder->get('course')
            ->addModelTransformer($this->transformer);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Lesson::class,
        ]);
    }
}
