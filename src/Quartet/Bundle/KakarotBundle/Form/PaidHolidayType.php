<?php

namespace Quartet\Bundle\KakarotBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PaidHolidayType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('startDate', 'date', array('required' => true, 'format' => 'yyyy-MM-dd'))
            ->add('endDate', 'date', array('required' => true, 'format' => 'yyyy-MM-dd'))
            ->add('note', 'text', array('required' => false))
            ->add('author')
            ->add('approver')
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Quartet\Bundle\KakarotBundle\Entity\PaidHoliday'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'quartet_bundle_kakarotbundle_paidholiday';
    }
}
