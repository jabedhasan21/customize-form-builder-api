<?php

namespace App\Decorators\Validators;

use App\Repositories\CustomizedPersonalInformation\CustomizedPersonalInformationRepository;
use Illuminate\Contracts\Validation\Factory as Validation;

class CustomizedPersonalInformationValidator extends BaseValidator implements CustomizedPersonalInformationRepository{

    protected $rules = [
        'common' => [
            //'name'                 => 'required|max:100',
            'pdf_form_content'     => 'required'
        ],
        'create' => [
            
        ],
        'update' => [
            //'id'  => 'required|exists:customized_personal_informations,id',
        ]
    ];

    function __construct(Validation $validation, CustomizedPersonalInformationRepository $model)
    {
        parent::__construct($validation,$model);
    }

}