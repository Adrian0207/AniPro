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
    return view('auth.login');
});

Route::get('/adopcion', function () {
    return view('adopcion.adopcionIndex');
});

Route::post('/perros', 'adopcionController@index');
Route::get('/perros/vista/{id}', 'adopcionController@viewPerro');
Route::post('/gatos', 'adopcionController@index');
Route::get('/gatos/vista/{id}', 'adopcionController@viewGato');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
