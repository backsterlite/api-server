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
Route::get('/index', ['uses' =>'Api\CategoryController@index']);

    Route::get('/{name}', ['uses' =>'Api\CategoryController@show']);
    Route::get('/{name}/{subname}', ['uses' =>'Api\SubCategoryController@show']);
    Route::get('/{name}/{subname}/{id}', ['uses' =>'Api\PostController@show']);


