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


Route::get('/todos', 'TodoController@index')->name('todos.index');
Route::post('/todos', 'TodoController@create');
//Route::post('/todos', 'TodoController@store');
//Route::post('todos/destroy/{id}','TodoController@destroy');