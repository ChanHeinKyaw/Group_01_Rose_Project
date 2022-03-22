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
        //Dao Registration
        $this->app->bind("App\Contracts\Dao\Record\RecordDaoInterface", "App\Dao\Record\RecordDao");

        //Service Registration
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
