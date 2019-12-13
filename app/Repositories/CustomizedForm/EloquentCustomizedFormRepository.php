<?php

namespace App\Repositories\CustomizedForm;


use App\Models\CustomizedForm;
use App\Repositories\BaseRepository;

class EloquentCustomizedFormRepository extends BaseRepository implements CustomizedFormRepository {

    function __construct(CustomizedForm $model)
    {
        parent::__construct($model);
    }
}