<?php

/**
 * Plugin Name: Lantern
 * Plugin URI: https://github.com/pixelcollective/lantern
 * Description: Lantern keeps the light on for yeh.
 * Version: 1.0.0
 * Author: Tiny Pixel
 * Author URI: https://tinypixel.dev/
 * Domain Path: /lang
 *
 **/

namespace Lantern;

/*
|--------------------------------------------------------------------------
| Pre-boot: Set storage to app/uploads
|--------------------------------------------------------------------------
|
| Overloading Lumen defaults to run in a novel environment.
|
*/

$🛄 = require 'storage.php';

/*
|--------------------------------------------------------------------------
| Boot: Boot lantern
|--------------------------------------------------------------------------
|
| First we need to get an application instance. This creates an instance
| of the application / container and bootstraps the application so it
| is ready to receive HTTP / Console requests from the environment.
|
*/

$🎃 = include 'lantern.php';

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

if (!strstr($_SERVER['REQUEST_URI'], 'wp')) {
    add_action('after_setup_theme', function () use ($🎃) {
        $🎃->run();
    });
}
