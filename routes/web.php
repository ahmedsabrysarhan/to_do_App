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

Route::group(['prefix' => 'todo'], function () {

    Route::get('/', 'TodoController@index');

    Route::get('/show/{id}', 'TodoController@show');

    Route::get('/create', 'TodoController@create');

    Route::post('/create', 'TodoController@store');

    Route::get('/edit/{id}', 'TodoController@edit');

    Route::post('/edit/{id}', 'TodoController@update');

    Route::get('/delete/{id}', 'TodoController@remove');

    Route::get('/compleate/{id}', 'TodoController@compleate');




    
});

