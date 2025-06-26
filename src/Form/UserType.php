<?php

/**
 * User type.
 */

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Class UserType.
 */
class UserType extends AbstractType
{
    /**
     * Builds the form.
     *
     * This method is called for each type in the hierarchy starting from the
     * top most type. Type extensions can further modify the form.
     *
     * @see FormTypeExtensionInterface::buildForm()
     *
     * @param FormBuilderInterface $builder The form builder
     * @param array                $options The options
     */
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder->add(
            'email',
            EmailType::class,
            [
                'label' => 'label_email',
                'required' => true,
                'attr' => ['maxlength' => 255],
            ]
        );
        $builder->add(
            'firstName',
            TextType::class,
            [
                'label' => 'label_first_name',
                'required' => true,
                'attr' => ['maxlength' => 255],
            ]
        );
        $builder->add(
            'lastName',
            TextType::class,
            [
                'label' => 'label_last_name',
                'required' => true,
                'attr' => ['maxlength' => 255],
            ]
        );
        $builder->add(
            'birthYear',
            DateType::class,
            [
                'label' => 'label_birth_year',
                'required' => true,
                // DateType does not usually have maxlength, remove or replace with widget options if needed
                // 'attr' => ['maxlength' => 255], // recommended to remove this line
            ]
        );
        $builder->add(
            'newPassword',
            RepeatedType::class,
            [
                'mapped' => false,
                'type' => PasswordType::class,
                'invalid_message' => 'Hasła muszą się zgadzać',
                'options' => ['attr' => ['class' => 'password-field']],
                'required' => $options['required'],
                'first_options' => ['label' => 'label_new_password'],
                'second_options' => ['label' => 'label_new_password_repeated'],
            ]
        );
    }

    /**
     * Configures the options for this type.
     *
     * @param OptionsResolver $resolver The resolver for the options
     */
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults(['data_class' => User::class, 'required' => false]);
    }

    /**
     * Returns the prefix of the template block name for this type.
     *
     * The block prefix defaults to the underscored short class name with
     * the "Type" suffix removed (e.g. "UserProfileType" => "user_profile").
     *
     * @return string The prefix of the template block name
     */
    public function getBlockPrefix(): string
    {
        return 'user';
    }
}
