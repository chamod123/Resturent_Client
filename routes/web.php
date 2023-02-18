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

//client list view
Route::get('/Client', 'ClientController@index');

//new client add screen
Route::get('/Client/NewClient', 'ClientController@create');

//save new client
Route::post('/Client/Save', 'ClientController@store');

//view edit client details
Route::get('/Client/{id}/Edit', 'ClientController@view_edit');

//edit client data
Route::post('/Client/Update', 'ClientController@edit');

//delete client data
Route::get('/Client/{id}/Delete', 'ClientController@delete');