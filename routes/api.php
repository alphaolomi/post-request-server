<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('posts', ['uses' => 'PostController@index']);
Route::post('posts', ['uses' => 'PostController@store']);
Route::put('posts/{id}', ['uses' => 'PostController@update']);
Route::delete('posts/{id}', ['uses' => 'PostController@destroy']);
