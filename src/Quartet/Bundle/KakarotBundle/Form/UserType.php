<?php

namespace Quartet\Bundle\KakarotBundle\Form;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Quartet\Bundle\KakarotBundle\Entity\DaySetting;

class UserType extends AbstractType
{
    /**
     * EntityManager;
     */
    private $em;

    /**
     * コンストラクタ
     * @param $entityManager
     */
    public function __construct(EntityManager $entityManager)
    {
        $this->em = $entityManager;
    }

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {


        $builder
            ->add('username', null, array('label' => 'ログイン名', 'required' => true, 'disabled' => true))
            ->add('email', 'email', array('label' => 'メールアドレス', 'required' => true, 'translation_domain' => 'FOSUserBundle'))
            ->add('name', null, array('label' => '氏名', 'required' => true))
            ->add('division', 'entity', array('label' => '部署', 'class' => 'QuartetKakarotBundle:Division', 'query_builder' => function(EntityRepository $er){
                return $er->createQueryBuilder('d');
            }))
            ->add('position', 'entity', array('label' => '役職', 'class' => 'QuartetKakarotBundle:Position', 'query_builder' => function(EntityRepository $er){
                return $er->createQueryBuilder('p');
            }))
            ->add('role', 'entity', array('label' => '権限', 'class' => 'QuartetKakarotBundle:Role', 'query_builder' => function(EntityRepository $er){
                return $er->createQueryBuilder('r');
            }))
            ->add('parent', 'entity', array('label' => '上長', 'required' => false, 'class' => 'QuartetKakarotBundle:User', 'query_builder' => function(EntityRepository $er){
                return $er->createQueryBuilder('p');
            }))
            ->add('daySettings', 'collection', array(
                'type' => new DaySettingType(),
                'options'  => array(
                'label' => '　',
                )))
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Quartet\Bundle\KakarotBundle\Entity\User'
        ));

    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'quartet_bundle_kakarotbundle_user';
    }
}
