<?php

namespace App\Providers;

use App\Decorators\Cache\CustomizedFormCache;
use App\Decorators\Validators\CustomizedFormValidator;
use App\Models\CustomizedForm;
use App\Repositories\CustomizedForm\EloquentCustomizedFormRepository;

use Illuminate\Support\Facades\App;

use Illuminate\Support\ServiceProvider;
//use Illuminate\Contracts\Cache\Repository as Cache;
use Illuminate\Support\Facades\Cache;
use Illuminate\Contracts\Validation\Validator;
class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $app = $this->app;
        $app->bind('App\Repositories\CustomizedForm\CustomizedFormRepository',function(){
            $customizedForm =  new EloquentCustomizedFormRepository(new CustomizedForm());
            $cacheService = Cache::driver();
            $cache = new CustomizedFormCache($cacheService,$customizedForm);
            $validator = App::make('validator');
            //$validator = Validator::make();
            //return new CustomizedFormValidator($validator, $cache);
            //return $customizedForm;
            return $cache;
        });
    }
}
