<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Set up api endpoints
$api = app('Dingo\Api\Routing\Router');

Route::get('/', function () {
    return view('welcome');
});

// Using api
$api->version('v1', function($api) {
  // First api call
  $api->get('hello', 'App\Http\Controllers\HomeController@index');
});
