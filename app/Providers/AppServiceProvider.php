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
<<<<<<< HEAD
        // Dao Registration
        $this->app->bind('App\Contracts\Dao\Contact\ContactDaoInterface', 'App\Dao\Contact\ContactDao');
        $this->app->bind('App\Contracts\Dao\User\UserDaoInterface', 'App\Dao\User\UserDao');

        // Business logic registration
        $this->app->bind('App\Contracts\Services\Contact\ContactServiceInterface', 'App\Services\Contact\ContactService');
        $this->app->bind('App\Contracts\Services\User\UserServiceInterface', 'App\Services\User\UserService');
=======
         // Dao Registration
         $this->app->bind('App\Contracts\Dao\PostDaoInterface', 'App\Dao\PostDao');

         // Business logic registration
         $this->app->bind('App\Contracts\Services\PostServiceInterface', 'App\Services\PostService');
>>>>>>> 088b2019b0b7dde29aa321ba30adc9b131577437
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