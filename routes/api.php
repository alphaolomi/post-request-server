<?php


use Illuminate\Support\Facades\Route;


Route::get('posts', ['uses' => 'PostController@index']);

Route::group(['middleware' => ['auth:api']], function () {

    Route::get('users', 'UserController@show');

    Route::post('posts', ['uses' => 'PostController@store']);
    Route::put('posts/{id}', ['uses' => 'PostController@update']);
    Route::delete('posts/{id}', ['uses' => 'PostController@destroy']);
});
