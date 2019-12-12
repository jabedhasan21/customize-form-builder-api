<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomizedPersonalInformation extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'customized_personal_informations';

    protected $fillable = ['name', 'pdf_form_content'];

    protected $casts = [
        'pdf_form_content' => 'array'
    ];
}
