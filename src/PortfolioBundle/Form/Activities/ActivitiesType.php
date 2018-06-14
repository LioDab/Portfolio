<?php
/**
 * Created by PhpStorm.
 * User: dabee
 * Date: 19-05-18
 * Time: 15:12
 */

namespace PortfolioBundle\Form\Activities;


use PortfolioBundle\Entity\professional_activities;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ActivitiesType extends AbstractType
{
    public function getBlockPrefix()
    {
        return 'Activities_Type';
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefault('data_class',professional_activities::class);
        $resolver->setDefault('attr',array('novalidate'=>true));
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('profession',TextType::class,
            array('attr'=>array('class'=>'style_input','placeholder'=>'profession')));
        $builder->add('employer',TextType::class,
            array('attr'=>array('class'=>'style_input','placeholder'=>'employer')));
        $builder->add('dateOfEntry',DateType::class,
            array('label_attr'=>array('class'=>'font_family_form')));
        $builder->add('endDate',DateType::class,
            array('label_attr'=>array('class'=>'font_family_form')));
        $builder->add('tasks',TextareaType::class,
            array('attr'=>array('class'=>'style_input','placeholder'=>'add the descript function')));

        $builder->add('save',SubmitType::class,array(
            'label'=>'Valider',
            'attr'=>array('class'=>'bouton')));
    }
}