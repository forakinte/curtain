<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'test\TestController@index');

Route::group(['prefix' => 'api/v1'], function () {

    Route::get('{page?}', 'UserManager\CharacterController@index');
    Route::get('/show/{id}', 'UserManager\CharacterController@show');
    Route::post('/add', 'UserManager\CharacterController@store');


});
