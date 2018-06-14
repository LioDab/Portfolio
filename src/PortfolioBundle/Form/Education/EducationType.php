<?php
/**
 * Created by PhpStorm.
 * User: dabee
 * Date: 19-05-18
 * Time: 15:14
 */

namespace PortfolioBundle\Form\Education;


use PortfolioBundle\Entity\education_training;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EducationType extends AbstractType
{
    public function getBlockPrefix()
    {
        return 'Education_Type';
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefault('data_class',education_training::class);
        $resolver->setDefault('attr',array('novalidate'=>true));
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('subjectsStudied',TextType::class,
            array('attr'=>array('class'=>'style_input','placeholder'=>'subjectsStudied')));
        $builder->add('institute',TextType::class,
            array('attr'=>array('class'=>'style_input','placeholder'=>'institute')));
        $builder->add('dateStart',DateType::class,
            array('label_attr'=> array('class'=>'font_family_form'),
                  'attr'=>array('class'=>'style_input','placeholder'=>'dateStart')));
        $builder->add('endDate',DateType::class,
            array('label_attr'=> array('class'=>'font_family_form'),
                  'attr'=>array('class'=>'style_input','placeholder'=>'endDate')));

        $builder->add('save',SubmitType::class,
            array('label'=>'Valider',
                  'attr'=>array('class'=>'bouton')));
    }
}