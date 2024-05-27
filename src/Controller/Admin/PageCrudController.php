<?php

namespace App\Controller\Admin;

use App\Entity\Page;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\SlugField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class PageCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Page::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        yield TextField::new('title');
        yield SlugField::new('slug')->setTargetFieldName('title');
        yield TextEditorField::new('content');
        yield ChoiceField::new('category')
            ->setChoices([
                'Home' => 'Home',
                'Présentation' => 'Présentation',
                'Nos métiers' => 'Nos métiers',
                'Un projet professionnel' => 'Un projet professionnel',
                'Un écrin vert' => 'Un écrin vert',
                'Vie pratique' => 'Vie pratique',
                'Espace entreprise' => 'Espace entreprise',
                'Nous contacter' => 'Nous contacter',
            ]);
        yield AssociationField::new('miniature');
        yield TextField::new('featuredText');
    }

}
