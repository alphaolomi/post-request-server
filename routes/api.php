<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('posts', ['uses' => 'PostController@index']);
Route::post('posts', ['uses' => 'PostController@store']);
Route::put('posts/{id}', ['uses' => 'PostController@update']);
Route::delete('posts/{id}', ['uses' => 'PostController@destroy']);