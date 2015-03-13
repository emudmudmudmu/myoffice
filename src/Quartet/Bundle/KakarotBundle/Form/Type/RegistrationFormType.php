<?php

/*
 * This file is part of the FOSUserBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Quartet\Bundle\KakarotBundle\Form\Type;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;

class RegistrationFormType extends BaseType
{
    private $class;

    /**
     * @param string $class The User class name
     */
    public function __construct($class)
    {
        $this->class = $class;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', 'email', array('label' => 'メールアドレス', 'translation_domain' => 'FOSUserBundle'))
            ->add('username', null, array('label' => 'ログイン名', 'translation_domain' => 'FOSUserBundle'))
            ->add('name', null, array('label' => '氏名', 'required' => true))
            ->add('role', 'entity', array('label' => '権限', 'class' => 'QuartetKakarotBundle:Role', 'query_builder' => function(EntityRepository $er){
                return $er->createQueryBuilder('r');
            }))
            ->add('division', 'entity', array('label' => '部署', 'class' => 'QuartetKakarotBundle:Division', 'query_builder' => function(EntityRepository $er){
                return $er->createQueryBuilder('d');
            }))
            ->add('position', 'entity', array('label' => '役職', 'class' => 'QuartetKakarotBundle:Position', 'query_builder' => function(EntityRepository $er){
                return $er->createQueryBuilder('p');
            }))
            ->add('parent', 'entity', array('label' => '上長', 'required' => false, 'class' => 'QuartetKakarotBundle:User', 'query_builder' => function(EntityRepository $er){
                return $er->createQueryBuilder('p');
            }))
            ->add('plainPassword', 'repeated', array(
                'label' => 'パスワード',
                'type' => 'password',
                'options' => array('translation_domain' => 'FOSUserBundle'),
                'first_options' => array('label' => 'パスワード'),
                'second_options' => array('label' => 'パスワード再入力'),
                'invalid_message' => 'パスワードが一致しません。',
            ))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => $this->class,
            'intention'  => 'registration',
            'label'      => ''
        ));
    }

    public function getName()
    {
        return 'fos_user_registration2';
    }
}
