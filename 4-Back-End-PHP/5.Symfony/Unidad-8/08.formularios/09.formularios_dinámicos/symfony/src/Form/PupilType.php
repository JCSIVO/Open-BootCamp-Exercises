<?php

namespace App\Form;

use App\Entity\Pupil;
use App\Entity\Subject;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PupilType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $pupil = $builder->getData();

        if(null === $pupil->getId()){
            $builder
            ->add('course')
            ->add('name', TextType::class);
        }else{
            $course = $pupil->getCourse();
            $builder->add('subjects', EntityType::class, [
                'class' => Subject::class,
                'query_builder' => function (EntityRepository $er) use ($course){
                    return $er->createQueryBuilder('subject')
                    ->innerJoin('subject.course', 'course')
                    ->andWhere('course = :course')
                    ->orderBy('subject.name', 'ASC')
                    ->setParameter('course', $course);
                },
                'multiple' => true,
                'choice_label' => 'name'
            ]);
        }

    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Pupil::class,
        ]);
    }
}
