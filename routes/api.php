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

Route::post('/documents', 'CustomizedPersonalInformationController@store');
Route::get('/documents', 'CustomizedPersonalInformationController@index');
Route::get('/documents/{id}', 'CustomizedPersonalInformationController@show');
Route::delete('/documents/{id}', 'CustomizedPersonalInformationController@destroy');
Route::put('/documents/{id}', 'CustomizedPersonalInformationController@update');