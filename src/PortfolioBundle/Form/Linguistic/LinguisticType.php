<?php
/**
 * Created by PhpStorm.
 * User: dabee
 * Date: 19-05-18
 * Time: 15:15
 */

namespace PortfolioBundle\Form\Linguistic;


use PortfolioBundle\Entity\linguistic_knowledge;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LinguisticType extends AbstractType
{
    public function getBlockPrefix()
    {
        return 'Linguistic_Type';
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefault('data_class',linguistic_knowledge::class);
        $resolver->setDefault('attr',array('novalidate'=>true));
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('languages',TextType::class,
            array('attr'=>array('class'=>'style_input','placeholder'=>'languages')));
        $builder->add('level',TextType::class,
            array('attr'=>array('class'=>'style_input','placeholder'=>'level')));

        $builder->add('save',SubmitType::class,
            array('label'=>'Valider',
                   'attr'=>array('class'=>'bouton')));
    }
}