<?php

namespace App\Decorators\Cache;


use App\Repositories\CustomizedPersonalInformation\CustomizedPersonalInformationRepository;
use Illuminate\Contracts\Cache\Repository as Cache;

class CustomizedPersonalInformationCache extends  BaseCache implements CustomizedPersonalInformationRepository {

    protected $baseCacheKey = 'CustomizedPersonalInformations';

    function __construct(Cache $cache, CommentRepository $model)
    {
        parent::__construct($cache,$model);
    }
}