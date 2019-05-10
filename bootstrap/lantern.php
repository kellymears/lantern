<?php

require_once __DIR__.'/../vendor/autoload.php';

(new Laravel\Lumen\Bootstrap\LoadEnvironmentVariables(dirname(__DIR__)))->bootstrap();

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

$lantern = new \Lantern\Application(dirname(__DIR__));
$lantern->withFacades();
$lantern->withEloquent();

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

$lantern->singleton(
    Illuminate\Contracts\Debug\ExceptionHandler::class,
    Lantern\Exceptions\Handler::class
);

$lantern->singleton(
    Illuminate\Contracts\Console\Kernel::class,
    Lantern\Console\Kernel::class
);

/*
|--------------------------------------------------------------------------
| Config Service Provider
|--------------------------------------------------------------------------
|
| Collect configuration files from /config
|
*/

$lantern->register(Lantern\Providers\ConfigServiceProvider::class);

/*
|--------------------------------------------------------------------------
| Administrative
|--------------------------------------------------------------------------
|
| Admin Pages, Panels, Fields, Modifications
|
*/

$lantern->register(Lantern\Providers\CarbonFieldsServiceProvider::class);

$lantern->boot();
