<?php

namespace App\Form;

use App\Entity\Complaint;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ComplaintType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('account_number')
            ->add('account_name')
            ->add('contact_name')
            ->add('phone')
            ->add('address')
            ->add('product_description')
            ->add('product_size')
            ->add('product_id')
            ->add('complaint_tier_id')
            ->add('complaint_category_id')
            ->add('complaint_sub_category_id')
            ->add('purchase_dt')
            ->add('account_email')
            ->add('purchase_location')
            ->add('complaint_description')
            ->add('root_cause_analysis')
            ->add('action_taken')
            ->add('user_id')
            ->add('delivery')
            ->add('assigned_to')
            ->add('completed')
            ->add('completed_by')
            ->add('version')
            ->add('sqf_ver')
            ->add('change_log')
            ->add('complaint_source_id')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Complaint::class
        ]);
    }
}