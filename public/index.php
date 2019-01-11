<?php

/**
 * Atom - A PHP Framework for Nucléus Technologies
 *
 * @package     Atom
 * @author      Marc Enzo <emarc237@gmail.com>
 */

define('ATOM_START', microtime(true));

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our application. We just need to utilize it! We'll simply require it
| into the script here so that we don't have to worry about manual
| loading any of our classes later on. It feels great to relax.
|
*/

require __DIR__ . '/../vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Now we need to launch the application. The code below bootstraps
| the framework and get it ready for use, the it will load up
| this application so that we can run it.
|
*/

$app = new \Atom\Application(dirname(__DIR__), 'App');

$app->run();