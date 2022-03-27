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
         $this->app->bind('App\Contracts\Dao\PostDaoInterface', 'App\Dao\PostDao');
         $this->app->bind('App\Contracts\Dao\LikeDaoInterface', 'App\Dao\LikeDao');
         $this->app->bind('App\Contracts\Dao\CommentDaoInterface', 'App\Dao\CommentDao');

         // Business logic registration
         $this->app->bind('App\Contracts\Services\PostServiceInterface', 'App\Services\PostService');
         $this->app->bind('App\Contracts\Services\LikeServiceInterface', 'App\Services\LikeService');
         $this->app->bind('App\Contracts\Services\CommentServiceInterface', 'App\Services\CommentService');
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