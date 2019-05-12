<?php
/*
 | Lantern 🚀
 `------------------------------------------------------------------------*/

require_once __DIR__.'/vendor/autoload.php';

use \Illuminate\Contracts\Console\Kernel;
use \Illuminate\Contracts\Debug\ExceptionHandler;
use \Lantern\Exceptions\Handler;
use \Lantern\Console\Kernel as Console;
use \Laravel\Lumen\Bootstrap\LoadEnvironmentVariables;

use \Lantern\Providers\AppServiceProvider;
use \Lantern\Providers\ConfigServiceProvider;
use \Lantern\Providers\DirectivesServiceProvider;
use \Lantern\Providers\BlockComposerServiceProvider;
use \Lantern\Providers\CarbonFieldsServiceProvider;

use \Spatie\BladeX\BladeXServiceProvider;

(new LoadEnvironmentVariables(dirname(__DIR__)))->bootstrap();

/*
|--------------------------------------------------------------------------
| Create Lantern
|--------------------------------------------------------------------------
|
| Here we will load the environment and create the application instance
| that serves as the central piece of this framework. We'll use this
| application as an "IoC" container and router for this framework.
|
*/

$🎃 = new Lantern\Application(dirname(__DIR__.'/lantern'));

// Use Laravel's Facade Accessors
$🎃->withFacades();

// Use Laravel's Eloquent Modeling system
$🎃->withEloquent();

/*
|--------------------------------------------------------------------------
| Register Container Bindings
|--------------------------------------------------------------------------
|
| Now we will register a few bindings in the service container. We will
| register the exception handler and the console kernel. You may add
| your own bindings here if you like or you can make another file.
|
*/

$🎃->singleton(ExceptionHandler::class, Handler::class);
$🎃->singleton(Console::class, Kernel::class);

/*
|--------------------------------------------------------------------------
| Register Lantern Instance's Facade Aliases
|--------------------------------------------------------------------------
|
| Assign class aliases to custom components
|
*/
$🎃->alias('blade.compiler', Illuminate\View\Compilers\BladeCompiler::class);

/*
|--------------------------------------------------------------------------
| Register Service Providers
|--------------------------------------------------------------------------
|
| Here we will register all of the application's service providers which
| are used to bind services into the container.
|
*/

$🎃->register(AppServiceProvider::class);
$🎃->register(ConfigServiceProvider::class);
$🎃->register(CarbonFieldsServiceProvider::class);
$🎃->register(BladeXServiceProvider::class);
$🎃->register(DirectivesServiceProvider::class);
$🎃->register(BlockComposerServiceProvider::class);

/*
|--------------------------------------------------------------------------
| Boot Lantern
|--------------------------------------------------------------------------
|
| We're ready to boot the application 🚒
|
*/

$🎃routes = (object) [
    'web' => [
        'namespace' => 'Lantern\Http\Controllers',
        'as' => 'index',
    ],
    'archive' => [
        'namespace' => 'Lantern\Http\Controllers',
        'as' => 'category',
    ],
    'single' => [
        'namespace' => 'Lantern\Http\Controllers',
        'as' => 'single',
    ],
];

$🎃->router->group($🎃routes->web, function ($router) {
    require __DIR__ .'/routes/web.php';
});

$🎃->router->group($🎃routes->archive, function ($router) {
    require __DIR__ .'/routes/archive.php';
});

return $🎃;
