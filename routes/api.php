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

// Categorias
Route::resource('/v1/categories', 'CategoryController');

// Products
Route::get('/v1/products/{id}', 'ProductController@show');

// Clients
Route::prefix('v1')->group(function(){
	Route::get('clients/', 'ClientController@index');
	Route::get('clients/{id}', 'ClientController@show');
	Route::get('featured', 'ClientController@featured');
});