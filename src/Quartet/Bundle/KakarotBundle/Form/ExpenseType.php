<?php

namespace Quartet\Bundle\KakarotBundle\Form;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ExpenseType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('date', 'date', array('required' => true, 'format' => 'yyyy-MM-dd'))
            ->add('accountTitle', 'entity', array('required' => true,
                'class' => 'QuartetKakarotBundle:AccountTitle', 'query_builder' => function(EntityRepository $er){
                    return $er->createQueryBuilder('a');
            }))
            ->add('payee', 'text', array('required' => true))
            ->add('amount', 'integer', array('required' => true))
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
            'data_class' => 'Quartet\Bundle\KakarotBundle\Entity\Expense'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'quartet_bundle_kakarotbundle_expense';
    }
}
