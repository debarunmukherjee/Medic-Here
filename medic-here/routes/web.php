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

Route::get('/', 'PagesController@index');

Route::resource('posts', 'PostsController');

Route::post('/contact', 'ContactsController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/rate', 'RatingsController@index');

Route::get('/admin', 'AdminDetailsController@index');

Route::get('/pdf', 'AdminDetailsController@pdf');
