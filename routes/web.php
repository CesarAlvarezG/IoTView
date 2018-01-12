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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/view','SitioController@view');

Route::get('/viewprivate/{canal}','SitioController@viewprivate');

Route::get('/iot','IotController@leer');
Route::put('/iot','IotController@escribir');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('users', 'UserController');

Route::resource('sistemas','SistemaController');

Route::resource('sensors','SensorController');

Route::resource('medidas','MedidaController');
