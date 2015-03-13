<?php

namespace Quartet\Bundle\KakarotBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class GlobalSettingType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('likeUpdateFrequency', 'choice', array('choices' => array('1' => '1', '2' => '2', '3' => '3'), 'required' => true, 'empty_value' => false,'label' => '更新頻度（月）'))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Quartet\Bundle\KakarotBundle\Entity\GlobalSetting'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'quartet_bundle_kakarotbundle_globalsetting';
    }
}
