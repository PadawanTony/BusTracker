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

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../app/setup.php';

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
$dotenv = new Dotenv\Dotenv(__DIR__ . DIRECTORY_SEPARATOR . "..");

$dotenv->load();
$dotenv->required('BASE_DIR');

$baseUrl = getenv('BASE_DIR');

$mux->get("$baseUrl", 'HubIT\Controllers\WelcomeController:index');
$mux->get("{$baseUrl}404", 'HubIT\Controllers\WelcomeController:error404');
$mux->get("{$baseUrl}dashboard", 'HubIT\Controllers\AdminController:dashboard');
$mux->get("{$baseUrl}dashboard/createRoute", 'HubIT\Controllers\WelcomeController:createRoute');
//$mux->get("{$baseUrl}dashboard/routes/create", 'HubIT\Controllers\RoutesController:create');

$mux->post("{$baseUrl}api/v1/coordinates",
	'HubIT\Controllers\Api\ApiCoordinatesController:getCoordinates');
$mux->post("{$baseUrl}dashboard/createRoute",
	'HubIT\Controllers\AdminController:createRoute');

$route = $mux->dispatch($_SERVER['REQUEST_URI']);

if ($route === null) $route = $mux->dispatch('/404');

echo Executor::execute($route);

