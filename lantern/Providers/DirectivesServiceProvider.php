<?php

namespace Lantern\Providers;

use Illuminate\Support\ServiceProvider;
use \Illuminate\Support\Facades\Blade;

class DirectivesServiceProvider extends ServiceProvider
{
    public function register()
    {
        Blade::directive('blocks', function ($expression) {
            return
                "<?php ".
                    "\$blocks = parse_blocks($expression);".
                    "foreach (\$blocks as \$block) {".
                        "\$content .= render_block(\$block);".
                    "}".
                    "echo apply_filters('the_content', \$content); ".
                "?>";
        });
    }

    public function boot()
    {
    }
}
