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
Route::get('/', 'PagesController@home');
Route::get('/home', 'PagesController@home')->name('home');
Route::get('/contact', 'PagesController@contact');
Route::get('/blog', 'PagesController@blog');
Route::get('/about', 'PagesController@about');

Route::post('/newsletter', 'PagesController@newsletter');
Route::post('/admin', 'CriadorController@login');

Route::get('/homa', 'HomeController@index');