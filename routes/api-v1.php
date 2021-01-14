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
    });

    $router->group(['prefix' => 'admin'], function ($router) {
        $router->get('certificates', 'CertificatesController@index');
    });
    $router->group(['prefix' => 'client'], function ($router) {
        $router->post('certificates', 'CertificatesController@store');
    });


    $router->group(['prefix' => 'admin'], function ($router) {
        $router->get('/contact/us', 'ContactUsController@index');
    });
    $router->group(['prefix' => 'client'], function ($router) {
        $router->post('/contact/us', 'ContactUsController@store');
    });


    $router->group(['prefix' => 'client'], function ($router){
        $router->get('/vacancies', 'VacanciesController@index');
    });

    $router->group(['prefix' => 'admin'], function ($router){
        $router->post('/vacancies', 'VacanciesController@store');
    });


    $router->group(['prefix' => 'admin'], function ($router){
        $router->get('/categories', 'CategoriesController@index');
    });
    $router->group(['prefix' => 'admin'], function ($router){
        $router->post('/categories', 'CategoriesController@store');
    });


    $router->group(['prefix' => 'admin'], function ($router){
        $router->get('/levels', 'LevelController@index');
    });
    $router->group(['prefix' => 'admin'], function ($router){
        $router->post('/levels', 'LevelController@store');
    });


    $router->group(['prefix' => 'admin'], function ($router){
        $router->get('/industries', 'IndustriesController@index');
    });
    $router->group(['prefix' => 'admin'], function ($router){
        $router->post('/industries', 'IndustriesController@store');
    });


    $router->group(['prefix' => 'admin'], function ($router){
        $router->get('/qualifications', 'QualificationsController@index');
    });
    $router->group(['prefix' => 'admin'], function ($router){
        $router->post('/qualifications', 'QualificationsController@store');
    });


    $router->group(['prefix' => 'admin'], function ($router){
        $router->get('/vacancy/apply', 'VacancyApplyController@index');
    });
    $router->group(['prefix' => 'client'], function ($router){
        $router->post('/vacancy/apply', 'VacancyApplyController@store');
    });


    $router->group(['prefix' => 'admin'], function ($router){
        $router->get('/team', 'TeamMembersController@index');
    });
    $router->group(['prefix' => 'admin'], function ($router){
        $router->post('/team', 'TeamMembersController@store');
    });


    $router->group(['prefix' => 'admin'], function ($router){
        $router->get('/team/categories', 'TeamMembersCategoriesController@index');
    });
    $router->group(['prefix' => 'admin'], function ($router){
        $router->post('/team/categories', 'TeamMembersCategoriesController@store');
    });
});
