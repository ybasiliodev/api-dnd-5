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

$router->group(['prefix' => 'api', 'middleware' => 'customAuth'], function () use ($router) {

    $router->group(['prefix' => 'race'], function () use ($router) {
        $router->get('', 'RaceController@index');
        $router->get('{id}', 'RaceController@show');
    });

    $router->group(['prefix' => 'sub_race'], function () use ($router) {
        $router->get('', 'SubRaceController@index');
        $router->get('{id}', 'SubRaceController@show');
    });

    $router->group(['prefix' => 'ability'], function () use ($router) {
        $router->get('', 'AbilityController@index');
        $router->get('{id}', 'AbilityController@show');
    });

    $router->group(['prefix' => 'classes'], function () use ($router) {
        $router->get('', 'ClassesController@index');
        $router->get('{id}', 'ClassesController@show');
    });
});
$router->post('api/login', 'TokenController@generateToken');
