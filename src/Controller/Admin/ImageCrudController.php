<?php

namespace App\Controller\Admin;

use App\Entity\Image;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;

class ImageCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Image::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            ImageField::new('image', 'Image')
                ->setBasePath('uploads/')
                ->setUploadDir('public/uploads')
                ->setUploadedFileNamePattern('[randomhash].[extension]')
                ->setRequired(false),
            AssociationField::new('article', 'Article'),
            ChoiceField::new('moodboard')->setChoices([
                'Portrait | Gauche' => 0,
                'Paysage | Droite' => 1,
                'Paysage | Bas' => 2,
                'Colori' => 3,
                'Nuancier' => 4,
                'Bannière Mobile' => 5,
                'Bannière Bureau' => 6,
            ]),

        ];
    }

}
