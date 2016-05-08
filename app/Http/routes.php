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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('categories', CategoriesController::class);
Route::resource('clients', ClientsController::class);
Route::resource('order-items', OrdersItemsController::class);
Route::resource('orders', OrdersController::class);
Route::resource('protucts', ProductsController::class);
Route::resource('users', UsersController::class);