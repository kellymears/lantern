<?php

/*
|--------------------------------------------------------------------------
| Overload Lumen
|--------------------------------------------------------------------------
|
| Overloading Lumen defaults to run in a novel environment.
|
*/
require __DIR__ .'/bootstrap/helpers.php';

/*
|--------------------------------------------------------------------------
| Create The Application
|--------------------------------------------------------------------------
|
| First we need to get an application instance. This creates an instance
| of the application / container and bootstraps the application so it
| is ready to receive HTTP / Console requests from the environment.
|
*/

$lantern = require __DIR__.'/bootstrap/lantern.php';

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Once we have the application, we can handle the incoming request
| through the kernel, and send the associated response back to
| the client's browser allowing them to enjoy the creative
| and wonderful application we have prepared for them.
|
*/

$lantern;
