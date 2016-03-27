<?php
/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our application. We just need to utilize it! We'll simply require it
| into the script here so that we don't have to worry about manual
| loading any of our classes later on. It feels nice to relax.
|
*/
use Pux\Executor;

require __DIR__.'/../vendor/autoload.php';
require __DIR__.'/../app/setup.php';

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Once we have the application, we can handle the incoming request
| and send the associated response back to
| the client's browser allowing them to enjoy the creative
| and wonderful application we have prepared for them.
|
*/
$mux = new \Pux\Mux;

// Require Environment Variable
$dotenv = new Dotenv\Dotenv(__DIR__.DIRECTORY_SEPARATOR."..");
$dotenv->load();
$dotenv->required('BASE_DIR');
$baseUrl = getenv('BASE_DIR');

// Users Panel
$mux->get("$baseUrl", 'HubIT\Controllers\WelcomeController:index');
$mux->get("{$baseUrl}404", 'HubIT\Controllers\WelcomeController:error404');

// Admin Panel
$mux->get("{$baseUrl}admin/dashboard", 'HubIT\Controllers\Admin\DashboardController:dashboard');
$mux->get("{$baseUrl}admin/routes/create", 'HubIT\Controllers\Admin\RoutesController:create');
$mux->post("{$baseUrl}admin/routes/create", 'HubIT\Controllers\Admin\RoutesController:postCreate');
$mux->get("{$baseUrl}admin/routes/delete", 'HubIT\Controllers\Admin\RoutesController:delete');
$mux->post("{$baseUrl}admin/routes/delete", 'HubIT\Controllers\Admin\RoutesController:postDelete');

// Api
$mux->post("{$baseUrl}api/v1/coordinates", 'HubIT\Controllers\Api\ApiCoordinatesController:getCoordinates');

// Dispatch Routes
$route = $mux->dispatch($_SERVER[ 'REQUEST_URI' ]);

if ($route === null) $route = $mux->dispatch('/404');

echo Executor::execute($route);

