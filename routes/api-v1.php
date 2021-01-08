<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix' => 'api/v1'], function ($router) {

    $router->group(['prefix' => 'auth'], function ($router) {

        $router->post('login', 'UserController@login');
        $router->get('refresh', 'UserController@refresh');

        $router->group(["middleware"=>"auth"],function ($user){
            $user->get('me', 'UserController@me');
            $user->post('logout', 'UserController@logout');
        });

        $router->get('certificates', 'CertificatesController@index');
        $router->post('certificates', 'CertificatesController@store');


    });

});
