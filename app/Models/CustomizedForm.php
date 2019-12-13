<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomizedForm extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'customized_forms';

    protected $fillable = ['name', 'pdf_form_content'];

    protected $casts = [
        'pdf_form_content' => 'array'
    ];
}
