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

$router->post('/matkul', 'MatkulController@create');
$router->get('/matkul', 'MatkulController@index');
$router->get('/matkul/{id}', 'MatkulController@show');
$router->put('/matkul/{id}', 'MatkulController@update');
$router->delete('/matkul/{id}', 'MatkulController@destroy');

$router->get('/nama', function () {
    return 'Zain Bagus Dwi Asmoro';
});

$router->get('/usia', function (){
    return '21';
});

$router->get('/alamat', function(){
    return 'Kota Malang';
});

$router->get('/profil', function() {
    return 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tenetur voluptatibus modi nesciunt rem saepe quis nulla sed blanditiis quas molestiae nostrum repellendus natus perferendis, fugiat minima, harum consequuntur, quasi tempore?';
});
