<?php

namespace Lantern\Providers;

use Illuminate\Support\ServiceProvider;
use \Carbon_Fields\Carbon_Fields;

class CarbonFieldsServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(Carbon_Fields::class, function ($app) {
            return new Carbon_Fields();
        });
    }

    public function boot()
    {
        add_action('after_setup_theme', function () {
            dump($this->app);
        });
    }
}
