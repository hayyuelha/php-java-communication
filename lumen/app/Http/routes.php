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

$app->get('/', function() {
    return view('login');
});


$app->get('/register', function() {
    return view('register');
});

$app->get('/home', function() {
    return view('home');
});

$app->get('/following', function() {
    return view('following');
});

$app->get('/follower', function() {
    return view('follower');
});

