<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Faker\Factory;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->singleton('faker', function () {
            return Factory::create();
        });
    }
}
