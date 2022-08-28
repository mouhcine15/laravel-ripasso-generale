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

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/myfirst-controller', 'MyFirstController@index')->name('first');

// Route::resource('photos', 'Admin\PhotoController');

Route::prefix('admin')->namespace('Admin')->middleware('auth')->group(function () {

    Route::resource('photos', 'PhotoController');
});