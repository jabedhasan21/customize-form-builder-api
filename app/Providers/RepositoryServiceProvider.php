<?php

namespace App\Providers;


use App\Decorators\Validators\CustomizedPersonalInformationValidator;
use App\Models\CustomizedPersonalInformation;
use App\Repositories\CustomizedPersonalInformation\EloquentCustomizedPersonalInformationRepository;

use Illuminate\Support\Facades\App;

use Illuminate\Support\ServiceProvider;

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
            $user =  new EloquentCustomizedPersonalInformationRepository(new CustomizedPersonalInformation());
            //$cacheService = Cache::driver();
            //$cache = new UserCache($cacheService,$user);
            //$validator = App::make('validator');
            //return new CustomizedPersonalInformationValidator($validator, $user);
            return $user;
        });
    }
}
