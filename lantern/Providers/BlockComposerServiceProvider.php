<?php

namespace Lantern\Providers;

use \Lantern\Blocks\Header;
use \BlockCompose\Composer;
use \BlockCompose\Script;
use \Illuminate\Support\ServiceProvider;

class BlockComposerServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        collect(glob(__DIR__ .'/../Blocks/*.php'))->map(function ($type) {
            $this->bindBlock($type);
        });

        $this->app->bind("blocks.script", function ($app) {
            return new Script();
        });

        $this->registerAssets();
    }

    public function bindBlock($type)
    {
        $class_name = basename($type, '.php');
        $class_alias = strtolower($class_name);
        $class = "\\Lantern\\Blocks\\{$class_name}";

        $this->app->bind("blocks.{$class_alias}", function () use ($class) {
            return new $class;
        });

        $this->app->make("blocks.{$class_alias}");
    }

    public function registerAssets()
    {
        add_action('init', function () {
            wp_register_script(
                'lantern/blocks',
                plugins_url('/../mu-plugins/lantern/storage/theme/assets/scripts/blocks.js'),
                ['wp-editor', 'wp-element', 'wp-i18n', 'wp-components', 'wp-plugins'],
                '1.0.0',
                true,
            );
        });
    }
}
