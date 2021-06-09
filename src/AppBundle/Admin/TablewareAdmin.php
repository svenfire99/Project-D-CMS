<?php

namespace AppBundle\Admin;


use AppBundle\Entity\Tableware;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;


class TablewareAdmin extends AbstractAdmin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('name', 'text', array(
                'label' => 'Name'
            ))
            ->add('displayName', 'text', array(
                'label' => 'Display name'
            ))
            ->add('description', 'text', array(
                'label' => 'Description'
            ))
            ->add('type', 'choice', array(
                'label' => 'Type of tableware',
                'choices' => [
                    'Plate' => Tableware::TYPE_PLATE,
                    'Bowl' => Tableware::TYPE_BOWL,
                    'Mug' => Tableware::TYPE_MUG
                ]
            ))
            ->add('width', 'number', array(
                'label' => 'Width'
            ))
            ->add('length', 'number', array(
                'label' => 'Length'
            ))
            ->add('height', 'number', array(
                'label' => 'Height'
            ))
            ->add('price', 'number', array(
                'label' => 'Price'
            ))
            ->add('model', 'text', array(
                'label' => 'Model file name'
            ))
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('displayName')
            ->add('type')
            ->add('price')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('id')
            ->add('displayName')
            ->add('type')
            ->add('price')
            ->add('length')
            ->add('width')
            ->add('height')
        ;
    }

    // Fields to be shown on show action
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('displayName')
            ->add('type')
            ->add('price')
            ->add('length')
            ->add('width')
            ->add('height')
        ;
    }
}