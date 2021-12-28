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

Route::get('dis', 'GeoController@index');
Route::get('show', 'SoapController@show');
Route::post('/consult','SoapController@consult')->name('consult');
Route::get('/', function () {
    return view('welcome');
});
