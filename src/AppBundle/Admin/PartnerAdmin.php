<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

/**
 * Class PartnerAdmin
 *
 * @category Admin
 * @package  AppBundle\Admin
 * @author   David Romaní <david@flux.cat>
 */
class PartnerAdmin extends BaseAdmin
{
    protected $baseRoutePattern = 'partners/partner';
    protected $datagridValues = array('_sort_by' => 'name');

    /**
     * Configure list view
     *
     * @param ListMapper $mapper
     */
    protected function configureListFields(ListMapper $mapper)
    {
        $mapper
            ->add(
                'imageFile',
                null,
                array(
                    'label'    => 'Imatge',
                    'template' => '::Admin/list__cell_image_field.html.twig'
                )
            )
            ->add(
                'name',
                null,
                array(
                    'label'    => 'Nom',
                    'editable' => true,
                )
            )
            ->add(
                'projects',
                null,
                array(
                    'label'    => 'Projectes',
                    'editable' => false,
                )
            )
            ->add(
                'email',
                null,
                array(
                    'label'    => 'Email',
                    'editable' => true,
                )
            )
            ->add(
                'twitter',
                null,
                array(
                    'label'    => 'Twitter',
                    'editable' => true,
                )
            )
            ->add(
                'position',
                null,
                array(
                    'label'    => 'Posició',
                    'editable' => true,
                )
            )
            ->add(
                'enabled',
                null,
                array(
                    'label'    => 'Actiu',
                    'editable' => true,
                )
            )
            ->add(
                '_action',
                'actions',
                array(
                    'actions' => array(
                        'edit'   => array(),
                        'delete' => array(),
                    ),
                    'label'   => 'Accions',
                )
            );
    }

    /**
     * Configure list view filters
     *
     * @param DatagridMapper $datagrid
     */
    protected function configureDatagridFilters(DatagridMapper $datagrid)
    {
        $datagrid
            ->add(
                'name',
                null,
                array(
                    'label' => 'Nom',
                )
            )
            ->add(
                'projects',
                null,
                array(
                    'label' => 'Projectes',
                )
            )
            ->add(
                'email',
                null,
                array(
                    'label' => 'Email',
                )
            )
            ->add(
                'twitter',
                null,
                array(
                    'label' => 'Twitter',
                )
            )
            ->add(
                'enabled',
                null,
                array(
                    'label' => 'Actiu',
                )
            );
    }

    /**
     * Configure edit view
     *
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        // $myEntity = $this->getSubject();
        $formMapper
            ->with('Col·laborador', array('class' => 'col-md-6'))
            ->add(
                'name',
                null,
                array(
                    'label' => 'Nom',
                )
            )
            ->add(
                'description',
                null,
                array(
                    'label' => 'Descripció',
                    'attr'  => array(
                        'style' => 'resize:vertical',
                        'rows'  => 8,
                    )
                )
            )
            ->add(
                'projects',
                null,
                array(
                    'label'    => 'Projectes',
                    'required' => false,
                )
            )
            ->end()
            ->with('Imatge', array('class' => 'col-md-6'))
            ->add(
                'imageFile',
                'file',
                array(
                    'label'    => 'Arxiu',
                    'required' => false,
                    'help'     => $this->getImageHelperFormMapperWithThumbnail(),
                )
            )
            ->end()
            ->with('Contacte', array('class' => 'col-md-6'))
            ->add(
                'web',
                null,
                array(
                    'label' => 'Web',
                )
            )
            ->add(
                'email',
                null,
                array(
                    'label' => 'Email',
                )
            )
            ->add(
                'twitter',
                null,
                array(
                    'label' => 'Twitter',
                )
            )
            ->end()
            ->with('Controls', array('class' => 'col-md-6'))
            ->add(
                'position',
                null,
                array(
                    'label' => 'Posició',
                )
            )
            ->add(
                'enabled',
                null,
                array(
                    'label'    => 'Actiu',
                    'required' => false,
                )
            )
            ->end();
    }
}