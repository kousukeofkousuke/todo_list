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

Route::group(['middleware' => ['auth']], function(){
    Route::get('/', 'TaskController@index');
    Route::post('/tasks', 'TaskController@store');
    Route::get('/tasks/create', 'TaskController@create')->middleware('auth');
    Route::get('/tasks/{task}/edit', 'TaskController@edit');
    Route::get('/tasks/{task}/state', 'TaskController@state');
    Route::put('/tasks/{task}', 'TaskController@update');
    Route::get('/tasks/{task}', 'TaskController@show');
    Route::get('/categories/{category}', 'CategoryController@index');
    Route::post('/contact', 'MailableController@send');
});

Auth::routes();