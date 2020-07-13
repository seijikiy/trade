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

Route::get('/', function () {
    return view('welcome');
});

Route::get('profile', 'UserController@profile')->middleware('auth');

Route::post('profile', 'UserController@update_avatar')->name('profile');

Route::get('/home', 'HomeController@index')->name('home');

Route::post('submit', 'PostsController@store');

Route::resource('home', 'PostsController')->middleware('auth');

Route::get('/your-posts', 'YourController@index');

