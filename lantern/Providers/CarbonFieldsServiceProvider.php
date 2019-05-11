<?php

namespace Lantern\Providers;

use Illuminate\Support\ServiceProvider;
use \Carbon_Fields\Carbon_Fields;
use \Carbon_Fields\Container;
use \Carbon_Fields\Field;

use \Lantern\Services\Fields\Fields;

class CarbonFieldsServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('carbon', function ($app) {
            return Carbon_Fields::class;
        });

        $this->app->singleton('carbon.container', function ($app) {
            return Container::class;
        });

        $this->app->singleton('carbon.field', function ($app) {
            return Field::class;
        });

        $this->app->bind('lantern.fields', function ($app) {
            return new \Lantern\Services\Fields\Fields($app);
        });
    }

    public function boot()
    {
        $carbon = $this->app->make('carbon');

        add_action('after_setup_theme', function () use ($carbon) {
            $carbon::boot();
        });

        $this->app->make('lantern.fields')->run();
    }
}
