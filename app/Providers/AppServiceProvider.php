<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // Dao Registration
        $this->app->bind('App\Contracts\Dao\Contact\ContactDaoInterface', 'App\Dao\Contact\ContactDao');
        $this->app->bind('App\Contracts\Dao\User\UserDaoInterface', 'App\Dao\User\UserDao');
        $this->app->bind('App\Contracts\Dao\PostDaoInterface', 'App\Dao\PostDao');
        $this->app->bind("App\Contracts\Dao\Record\RecordDaoInterface", "App\Dao\Record\RecordDao");

        // Business logic registration
        $this->app->bind('App\Contracts\Services\Contact\ContactServiceInterface', 'App\Services\Contact\ContactService');
        $this->app->bind('App\Contracts\Services\User\UserServiceInterface', 'App\Services\User\UserService');
        $this->app->bind('App\Contracts\Services\PostServiceInterface', 'App\Services\PostService');
        $this->app->bind("App\Contracts\Services\Record\RecordServiceInterface", "App\Services\Record\RecordService");
        
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}