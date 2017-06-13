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

Route::get('/', 'DataController@index');

Route::post('/send', 'AnonymousController@send');

Route::get('/upload', 'DataController@create');

Route::post('/upload/data', 'DataController@store');

Route::get('/data/{id}', 'DataController@show');

Route::post('/post/{id}/store', 'PostController@store');

Route::get('/mtv', 'DataController@index_mtv');

Route::get('/vevo', 'DataController@index_vevo');

Route::get('/grammy', 'DataController@index_grammy');

Route::get('/data/{id}/edit', 'DataController@edit');

Route::delete('/delete/{id}', 'DataController@destroy');

Route::put('/data/{id}/update', 'DataController@update');

Route::get('/register', 'RegisterController@create');

Route::get('/login', 'SessionController@create');

Route::post('/register', 'RegisterController@store');

Route::post('/login', 'SessionController@store');

Route::get('/logout', 'SessionController@destroy');
