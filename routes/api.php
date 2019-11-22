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

Route::post('authorize', 'UserController@authenticate');

Route::group(['middleware' => ['jwt.verify']], function() {
    Route::get('publishers/list', 'PublisherController@getAll');
    Route::get('magazines/{id}', 'MagazineController@getById')->where(['id' => '[0-9]+']);
    Route::get('magazines/search', 'MagazineController@search');
});
