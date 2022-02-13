<?php

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
Route::get('/dashboard', 'HomeController@index')->name('home');



Route::get('/', 'PagesController@getDashboard');
Route::get('/inventory', 'PagesController@getInventory');
Route::get('/completed-orders', 'PagesController@getCompleted');
Route::get('/cancelled-orders', 'PagesController@getCancelled');



Route::resource('dashboard/products', 'ProductController');
Route::resource('dashboard/expenses', 'ExpenseController');
Route::resource('dashboard/orders', 'OrderController');



