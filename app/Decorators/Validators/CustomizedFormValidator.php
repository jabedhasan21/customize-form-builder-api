<?php

namespace App\Decorators\Validators;

use App\Repositories\CustomizedForm\CustomizedFormRepository;
use Illuminate\Contracts\Validation\Factory as Validation;

class CustomizedFormValidator extends BaseValidator implements CustomizedFormRepository{

    protected $rules = [
        'common' => [
            'name'                 => 'required|max:500',
            'pdf_form_content'     => 'required'
        ],
        'create' => [
            
        ],
        'update' => [
            //'id'  => 'required|exists:customized_forms,id',
        ]
    ];

    function __construct(Validation $validation, CustomizedFormRepository $model)
    {
        parent::__construct($validation,$model);
    }

}