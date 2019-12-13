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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/documents', 'CustomizedFormController@store');
Route::get('/documents', 'CustomizedFormController@index');
Route::get('/documents/{id}', 'CustomizedFormController@show');
Route::delete('/documents/{id}', 'CustomizedFormController@destroy');
Route::put('/documents/{id}', 'CustomizedFormController@update');