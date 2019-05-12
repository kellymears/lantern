<?php

namespace Lantern\Providers;

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
    }

    public function boot()
    {
        $this->app->make('blade-x')->component('components.*');
        $this->app->make('blade-x')->component('atoms.*');
    }
}
