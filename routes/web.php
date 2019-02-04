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
Route::post('/contact', 'ContactsController@create');
Route::post('/newsletter/add', 'ContactsController@createNewsletterContact');
Route::get('/blog', 'PagesController@blog');
Route::get('/post/{id}', 'BlogController@post');
Route::get('/about', 'PagesController@about');

Route::get('/facciamo-cv-vicente', 'PagesController@cvVicente');

//Route::post('/newsletter', 'PagesController@newsletter');

Route::get('/admin', 'CriadorController@logout');

Route::get('/admin/dashboard', 'CriadorController@dashboard');
Route::get('/admin/home-dashboard', 'CriadorController@home_dashboard');
Route::get('/admin/home-dashboard/bigMosaic', 'CriadorController@bigMosaic');

Route::get('/admin/contacts', 'ContactsController@list');
Route::get('/admin/contact/view/{id}', 'ContactsController@view');
Route::get('/admin/contact/destroy/{id}', 'ContactsController@destroy');

Route::get('/admin/blog', 'BlogController@list');
Route::get('/admin/blog/new', 'BlogController@new');
Route::post('/admin/blog/create', 'BlogController@create');
Route::get('/admin/blog/publish/{id}', 'BlogController@publish');
Route::get('/admin/blog/hide/{id}', 'BlogController@hide');
Route::get('/admin/blog/destroy/{id}', 'BlogController@destroy');
Route::get('/admin/blog/{id}/edit', 'BlogController@edit')->name('blogpost.edit');
Route::post('/admin/blog/{id}/update', 'BlogController@update')->name('blogpost.update');

Route::get('/homa', 'HomeController@index');