<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/crowd','CrowdController@index');
Route::post('/crowd/create','CrowdController@create');
Route::get('/crowd/{id}/edit','CrowdController@edit');
Route::post('/crowd/{id}/update','CrowdController@update');
Route::get('/crowd/{id}/delete','CrowdController@delete');