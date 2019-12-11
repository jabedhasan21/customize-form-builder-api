<?php

namespace App\Decorators\Validators;

use App\Repositories\CustomizedPersonalInformation\CustomizedPersonalInformationRepository;
use Illuminate\Contracts\Validation\Factory as Validation;

class CustomizedPersonalInformationValidator extends BaseValidator implements CustomizedPersonalInformationRepository{

    protected $rules = [
        'common' => [
            'name'            => 'required|max:100',
            'email'           => 'required|max:100|unique:customized_personal_informations',
            'phone'           => 'required|max:100|unique:customized_personal_informations',
            'dob'             => 'required|max:100',
        ],
        'create' => [
            
        ],
        'update' => [
            //'id'  => 'required|exists:users,id',
        ]
    ];

    function __construct(Validation $validation, CustomizedPersonalInformationRepository $model)
    {
        parent::__construct($validation,$model);
    }

}