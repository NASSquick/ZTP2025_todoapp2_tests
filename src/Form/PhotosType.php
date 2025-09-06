<?php

/**
 * Photos type.
 */

namespace App\Form;

use App\Entity\Galleries;
use App\Entity\Photos;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Image;

/**
 * Class PhotosType.
 */
class PhotosType extends AbstractType
{
    /**
     * Builds the form.
     *
     * This method is called for each type in the hierarchy starting from the
     * top most type. Type extensions can further modify the form.
     *
     * @param FormBuilderInterface $builder options
     * @param array                $options The options
     *
     * @see FormTypeExtensionInterface::buildForm()
     */
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder->add(
            'file',
            FileType::class,
            [
                'mapped' => false,
                'label' => 'label_upload_photo',
                'required' => $options['required'],
                'constraints' => new Image(
                    [
                        'maxSize' => '10240k',
                        'mimeTypes' => [
                            'image/png',
                            'image/jpeg',
                            'image/gif',
                        ],
                    ]
                ),
            ]
        );
        $builder->add(
            'title',
            TextType::class,
            [
                'label' => 'label_title',
                'empty_data' => '',
                'required' => true,
                'trim' => true,        // trim whitespace
                'attr' => ['maxlength' => 255],
            ]
        );
        $builder->add(
            'text',
            TextareaType::class,
            [
                'label' => 'label_text',
                'required' => true,
                'trim' => true,        // trim whitespace
                'attr' => ['maxlength' => 255],
            ]
        );
        $builder->add(
            'gallery',
            EntityType::class,
            [
                'class' => Galleries::class,
                'choice_label' => function ($gallery) {
                    return $gallery->getTitle();
                },
                'label' => 'label_gallery',
                'placeholder' => 'label_none',
                'required' => true,
            ]
        );
    }

    /**
     * Configures the options for this type.
     *
     * @param OptionsResolver $resolver the options resolver
     */
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Photos::class,
            'required'   => true,
        ]);
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
        return 'photos';
    }
}
