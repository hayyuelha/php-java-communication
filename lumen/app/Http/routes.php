<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// $app->get('/', function() {
//     return view('view');
// });


$app->get('/', 'App\Http\Controllers\UserController@getView');
$app->post('/view', 'App\Http\Controllers\UserController@showUser');

$app->get('/add', 'App\Http\Controllers\UserController@getAdd');
$app->post('/add', 'App\Http\Controllers\UserController@postAdd');
