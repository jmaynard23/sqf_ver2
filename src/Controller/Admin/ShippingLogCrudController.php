<?php

namespace App\Controller\Admin;

use App\Entity\ShippingLog;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class ShippingLogCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return ShippingLog::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setDefaultSort(['_id' => 'DESC'])
            ;
    }
}
