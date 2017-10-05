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

Route::get('issues', 'IssueController@index');
Route::get('issues/{id}', 'IssueController@show');
Route::post('issues', 'IssueController@store');
Route::put('issues/{id}', 'IssueController@update');
Route::delete('issues/{id}', 'IssueController@delete');

Route::post('register', 'Auth\RegisterController@register');
Route::post('login', 'Auth\LoginController@login');
