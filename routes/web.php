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

//Route::get('page/{page_name?}', function ($page_name = 'Home') {
//    return view('read', ['page_name' => $page_name]);
//});

Route::get('read/{search?}', 'HomeController@read');

Route::post('write', 'HomeController@write');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('add/{ean?}', 'HomeController@add');
Route::get('cart', 'CartController@index')->name('cart');

