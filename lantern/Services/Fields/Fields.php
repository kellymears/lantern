<?php

namespace Lantern\Services\Fields;

class Fields
{
    public function __construct(\Lantern\Application $app)
    {
        $this->container = $app->make('carbon.container');
        $this->field = $app->make('carbon.field');
    }

    public function run()
    {
        add_action('carbon_fields_register_fields', function () {
            $container = $this->container::make('theme_options', __('Theme Options'));

            $container->add_fields([
                $this->field::make('text', 'crb_text', 'Text Field')
            ]);
        });
    }
}
