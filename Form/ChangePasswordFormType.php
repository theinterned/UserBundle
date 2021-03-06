<?php

namespace FOS\UserBundle\Form;

use Symfony\Component\Form\FormBuilder;
use Symfony\Component\Form\AbstractType;

class ChangePasswordFormType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder->add('current', 'password');
        $builder->add('new', 'repeated', array('type' => 'password'));
    }
}
