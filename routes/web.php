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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//client list view
Route::get('/Client', 'ClientController@index')->name('home');

//new client add screen
Route::get('/Client/NewClient', 'ClientController@create');

//save new client
Route::post('/Client/Save', 'ClientController@store');