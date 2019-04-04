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

Route::resource('/projects', 'ProjectController');

Route::resource('/users', 'UserController');

Route::get('/', 'PagesController@index');

Route::get('/dashboard', 'PagesController@dashboard');

Route::get('/accept', 'ProjectController@accept');

Route::get('/search', 'ProjectController@search');