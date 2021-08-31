<?php

namespace App\Controller\Admin;

use App\Entity\Image;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
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
                ->setUploadedFileNamePattern('[name].[extension]')
                ->setRequired(false),
            AssociationField::new('article','Article'),
            ChoiceField::new('position','Position')
                ->setChoices([
                    'Colori' => 'colori',
                    'Nuancier' => 'nuancier',
                    'Portrait | Gauche' => 'portraitGauche',
                    'Paysage | Droite' => 'paysageDroite',
                    'Paysage | Bas' => 'paysageBas'
                ]),
            BooleanField::new('banner', 'Bannière'),
            BooleanField::new('thumbnail', 'Vignettes'),
            
        ];
    }

}
