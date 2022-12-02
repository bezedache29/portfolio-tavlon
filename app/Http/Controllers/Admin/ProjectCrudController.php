<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ProjectRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ProjectCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ProjectCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Project::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/project');
        CRUD::setEntityNameStrings('projet', 'projets');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        $this->crud->addColumn([
            'label' => 'Nom',
            'type' => 'text',
            'name' => 'name',
        ]);
        $this->crud->addColumn([
            'label' => 'Description',
            'type' => 'text',
            'name' => 'description',
        ]);
        $this->crud->addColumn([
            'label' => 'Lien de la vidéo',
            'type' => 'text',
            'name' => 'url',
        ]);
        $this->crud->addColumn([
            'label' => 'Date',
            'type' => 'date',
            'name' => 'date',
        ]);
        $this->crud->addColumn([
            'label' => 'Catégories',
            'type' => 'select',
            'name' => 'categories',
            'entity' => 'categories',
            'attribute' => 'name',
            'model' => "App\Models\Category"
        ]);

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']); 
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(ProjectRequest::class);

        $this->crud->setRequiredFields(['name']);

        $this->crud->addField([
            'name' => 'name',
            'type' => 'text',
            'label' => "Nom du projet"
        ]);
        $this->crud->addField([
            'name' => 'description',
            'type' => 'textarea',
            'label' => "Description du projet"
        ]);
        $this->crud->addField([
            'name' => 'url',
            'type' => 'text',
            'label' => "Lien de la vidéo du projet"
        ]);
        $this->crud->addField([
            'name' => 'date',
            'type' => 'date',
            'label' => "Date du projet"
        ]);
        // $this->crud->removeField('categories'); // remove the original field
        $this->crud->addField([
            'label' => "Catégories",
            'type' => 'select_multiple',
            'name' => 'categories', // the method that defines the relationship in your Model
            'entity' => 'categories', // the method that defines the relationship in your Model
            'attribute' => 'name', // foreign key attribute that is shown to user
            'model' => "App\Models\Category", // foreign key model
            'pivot' => true,
        ]);

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number'])); 
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }

    protected function setupShowOperation()
    {
        $this->crud->addColumn([
            'label' => 'Nom',
            'type' => 'text',
            'name' => 'name',
        ]);
        $this->crud->addColumn([
            'label' => 'Description',
            'type' => 'textarea',
            'name' => 'description',
        ]);
        $this->crud->addColumn([
            'label' => 'Lien de la vidéo',
            'type' => 'textarea',
            'name' => 'url',
        ]);
        $this->crud->addColumn([
            'label' => 'Date',
            'type' => 'date',
            'name' => 'date',
        ]);
        $this->crud->addColumn([
            'label' => 'Catégories',
            'type' => 'select',
            'name' => 'categories',
            'entity' => 'categories',
            'attribute' => 'name',
            'model' => "App\Models\Category"
        ]);
    }
}
