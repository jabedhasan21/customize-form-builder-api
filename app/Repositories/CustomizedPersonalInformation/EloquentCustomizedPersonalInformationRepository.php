<?php

namespace App\Repositories\CustomizedPersonalInformation;


use App\Models\CustomizedPersonalInformation;
use App\Repositories\BaseRepository;

class EloquentCustomizedPersonalInformationRepository extends BaseRepository implements CustomizedPersonalInformationRepository {

    function __construct(CustomizedPersonalInformation $model)
    {
        parent::__construct($model);
    }
}