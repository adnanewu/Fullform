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

Route::get('/','FormController@index');
Route::post('InsertData','FormController@store');
Route::get('ListData','FormController@create');
Route::get('Del/{id}','FormController@show');
Route::get('edit/{id}','FormController@edit');
Route::post('update/{id}','FormController@updateData');
