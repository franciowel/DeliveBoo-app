<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

// routes auth
Route::middleware('auth')
->namespace('Admin')
->name('admin.')
->prefix('admin')
->group(function(){
    Route::get('/', 'HomeController@index',)->name('home');
    Route::get('/orderList', 'OrderListController@index',)->name('orderList');
    Route::get('/chart', 'ChartController@index',)->name('chart');
    Route::get('/order', 'HomeController@show',)->name('order');
    Route::resource('dishes', 'DishController');
});

Route::get('{any?}', function () {
    return view('guest.home');
})->where('any', '.*');
