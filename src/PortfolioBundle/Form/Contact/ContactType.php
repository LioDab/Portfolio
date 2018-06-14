<?php
/**
 * Created by PhpStorm.
 * User: dabee
 * Date: 19-05-18
 * Time: 15:13
 */

namespace PortfolioBundle\Form\Contact;


use PortfolioBundle\Entity\contact_information;
use PortfolioBundle\Entity\Users;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactType extends AbstractType
{
    public function getBlockPrefix()
    {
        return 'Contact_Type';
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefault('data_class',Users::class);
        $resolver->setDefault('attr',array('novalidate'=>true));
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name',TextType::class,
            array('attr'=>array('class'=>'style_input','placeholder'=>'Name')));
        $builder->add('street',TextType::class,
            array('attr'=>array('class'=>'style_input','placeholder'=>'Street')));
        $builder->add('number',IntegerType::class,
            array('attr'=>array('class'=>'style_input','placeholder'=>'Number')));
        $builder->add('locality',TextType::class,
            array('attr'=>array('class'=>'style_input','placeholder'=>'Locality')));
        $builder->add('postal',IntegerType::class,
            array('attr'=>array('class'=>'style_input','placeholder'=>'PostCode')));
        $builder->add('country',TextType::class,
            array('attr'=>array('class'=>'style_input','placeholder'=>'Country')));
        $builder->add('phone',TelType::class,
            array('attr'=>array('class'=>'style_input','placeholder'=>'Phone')));
        $builder->add('save',SubmitType::class,
            array('label'=>'Valider ',
                  'attr'=>array('class'=>'bouton')));
    }
}