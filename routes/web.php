<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/
/*
$router->get('/', function () use ($router) {
    return $router->app->version();
});
*/

$router->get('/rol', ['uses'=>'RoleController@get']);
$router->post('/rol', ['uses'=>'RoleController@post']);

$router->get('/prioridad', ['uses'=>'PriorityController@get']);
$router->post('/prioridad', ['uses'=>'PriorityController@post']);

$router->get('/tamano', ['uses'=>'SizeProjectController@get']);
$router->post('/tamano', ['uses'=>'SizeProjectController@post']);

$router->get('/user', ['uses'=>'UserController@get']);
$router->post('/user', ['uses'=>'UserController@post']);
$router->put('/user', ['uses'=>'UserController@put']);
$router->delete('/user', ['uses'=>'UserController@delete']);