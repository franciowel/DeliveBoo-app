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

Route::get('/users/{slug}', 'Api\UserController@show');

Route::get('/dishes', 'Api\DishController@index');

Route::get('/categories', 'Api\CategoryController@index');

Route::get('/category/{id}', 'Api\CategoryController@showSingleCategory');

Route::get('/filter-categories', 'Api\CategoryController@getFilteredCategories');

Route::get('all-orders','Api\Orders\OrderController@restaurant_orders');

// per braintreee
Route::get('orders/generate', 'Api\Orders\OrderController@generate');

Route::post('add-order', 'Api\Orders\OrderController@addOrderToRestaurant');

Route::post('orders/makePayment', 'Api\Orders\OrderController@makePayment');
