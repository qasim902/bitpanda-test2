<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class csvRetreiveServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\libs\retreiver', 'App\libs\services\csv');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
