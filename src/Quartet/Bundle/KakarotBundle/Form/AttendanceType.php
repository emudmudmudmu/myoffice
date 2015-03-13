<?php

namespace Quartet\Bundle\KakarotBundle\Form;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AttendanceType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('date', 'date', array('required' => true, 'format' => 'yyyy-MM-dd'))
            ->add('attended', 'time', array('required' => false))
            ->add('returned', 'time', array('required' => false))
            ->add('break1Started', 'time', array('required' => false))
            ->add('break1Ended', 'time', array('required' => false))
            ->add('break2Started', 'time', array('required' => false))
            ->add('break2Ended', 'time', array('required' => false))
            ->add('note', 'text', array('required' => false))
            ->add('user')
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Quartet\Bundle\KakarotBundle\Entity\Attendance'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'quartet_bundle_kakarotbundle_attendance';
    }
}
