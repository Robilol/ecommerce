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

Route::post('/send', 'CheckoutController@send');
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('add/{ean?}', 'HomeController@add');
Route::get('cart', 'CartController@index')->name('cart');
Route::get('checkout', 'CheckoutController@index')->name('checkout');
Route::get('backend', 'BackendController@index')->name('backend');
Route::post('/addProduct', 'BackendController@addProduct');
Route::get('minus/{rowId?}', 'CartController@minus');
Route::get('plus/{rowId?}', 'CartController@plus');
Route::get('remove/{rowId?}', 'CartController@remove');
Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');
