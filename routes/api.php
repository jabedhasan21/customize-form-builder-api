<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::get('/forms', 'CustomizedFormController@index');
Route::post('/forms', 'CustomizedFormController@store');
Route::get('/forms/{id}', 'CustomizedFormController@show');
Route::put('/forms/{id}', 'CustomizedFormController@update');
Route::delete('/forms/{id}', 'CustomizedFormController@destroy');