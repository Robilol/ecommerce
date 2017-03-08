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

Route::get('/', function () {
    return view('home');
})->name('home');

//Route::get('page/{page_name?}', function ($page_name = 'Home') {
//    return view('read', ['page_name' => $page_name]);
//});

Route::get('read/{search?}', 'HomeController@read');

Route::post('write', 'HomeController@write');

Auth::routes();

Route::get('/home{search?}', 'HomeController@index')->name('home');
