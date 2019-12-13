<?php

namespace App\Providers;

use App\Decorators\Cache\CustomizedPersonalInformationCache;
use App\Decorators\Validators\CustomizedPersonalInformationValidator;
use App\Models\CustomizedPersonalInformation;
use App\Repositories\CustomizedPersonalInformation\EloquentCustomizedPersonalInformationRepository;

use Illuminate\Support\Facades\App;

use Illuminate\Support\ServiceProvider;
//use Illuminate\Contracts\Cache\Repository as Cache;
use Illuminate\Support\Facades\Cache;

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
        $app->bind('App\Repositories\CustomizedPersonalInformation\CustomizedPersonalInformationRepository',function(){
            $customizedPersonalInformation =  new EloquentCustomizedPersonalInformationRepository(new CustomizedPersonalInformation());
            $cacheService = Cache::driver();
            $cache = new CustomizedPersonalInformationCache($cacheService,$customizedPersonalInformation);
            //$validator = App::make('validator');
            //return new CustomizedPersonalInformationValidator($validator, $customizedPersonalInformation);
            //return $customizedPersonalInformation;
            return $cache;
        });
    }
}
