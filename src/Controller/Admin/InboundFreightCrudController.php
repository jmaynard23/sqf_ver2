<?php

namespace App\Controller\Admin;

use App\Entity\InboundFreight;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class InboundFreightCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return InboundFreight::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setDefaultSort(['_id' => 'DESC'])
            ;
    }
}
