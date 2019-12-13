<?php

namespace App\Decorators\Cache;


use App\Repositories\CustomizedForm\CustomizedFormRepository;
use Illuminate\Contracts\Cache\Repository as Cache;

class CustomizedFormCache extends  BaseCache implements CustomizedFormRepository {

    protected $baseCacheKey = 'CustomizedForms';

    function __construct(Cache $cache, CustomizedFormRepository $model)
    {
        parent::__construct($cache,$model);
    }
}