<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\FeedbackRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class FeedbackCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class FeedbackCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    // use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    // use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    // use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Feedback::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/feedback');
        CRUD::setEntityNameStrings('feedback', 'feedback');
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
            'name' => 'name',
            'label' => 'Họ & Tên'
        ]);
        $this->crud->addColumn('phone');
        $this->crud->addColumn('datecheckin');
        $this->crud->addColumn([
            'name' => 'question',
            'label' => 'Câu hỏi 1',
            'type'            => 'select_from_array',
            'options' => ['1' => 'Rất hài lòng', '2' => 'Hài lòng', '3' => 'Bình thường', '4' => 'Chưa hài lòng'],
        ]);    
        $this->crud->addColumn([
            'name' => 'question_02',
            'label' => 'Câu hỏi 2',
            'type'            => 'select_from_array',
            'options' => ['1' => 'Rất hài lòng', '2' => 'Hài lòng', '3' => 'Bình thường', '4' => 'Chưa hài lòng'],
        ]);    
        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']); 
         */
    }
    protected function setupShowOperation()
    {
        CRUD::addColumn([
            'name' => 'name',
            'label' => 'Họ & Tên'
        ]);
        CRUD::addColumn([
            'name' => 'datecheckin',
            'label' => 'Ngày Đến showroom'
        ]);
        CRUD::addColumn([
            'name' => 'phone',
            'label' => 'Phone'
        ]);
        CRUD::addColumn([
            'name' => 'question',
            'label' => 'Câu hỏi 1',
            'type'            => 'select_from_array',
            'options' => ['1' => 'Rất hài lòng', '2' => 'Hài lòng', '3' => 'Bình thường', '4' => 'Chưa hài lòng'],
        ]);
        CRUD::addColumn([
            'name' => 'question_bad',
            'label' => 'Lý do chưa hài lòng câu hỏi 1',
        ]);
        CRUD::addColumn([
            'name' => 'question_02',
            'label' => 'Câu hỏi 1',
            'type'            => 'select_from_array',
            'options' => ['1' => 'Rất hài lòng', '2' => 'Hài lòng', '3' => 'Bình thường', '4' => 'Chưa hài lòng'],
        ]);
        CRUD::addColumn([
            'name' => 'question_bad_02',
            'label' => 'Lý do chưa hài lòng câu hỏi 1',
        ]);
        CRUD::addColumn([
            'name' => 'question_03',
            'label' => 'Góp ý',
        ]);

        CRUD::addColumn('created_at');
        CRUD::addColumn('updated_at');
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(FeedbackRequest::class);

        

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
}
