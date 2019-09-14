<?php

Route::get('/fonts', function(){
    return view('layouts/layout/fonts');
});

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

//Automail
Route::get('/automail-routine', 'AutomailController@autosend');
Route::group(['prefix' => 'automail'], function () {    
    Route::get('/list', 'AutomailController@listAutomail')->name('automail.list');
    Route::get('/new', 'AutomailController@newAutomail')->name('automail.new');
    Route::get('/activate/{id}', 'AutomailController@activate')->name('automail.activate');
    Route::get('/deactivate/{id}', 'AutomailController@deactivate')->name('automail.deactivate');
    Route::post('/new', 'AutomailController@createAutomail')->name('automail.store');
    Route::get('/destroy/{id}', 'AutomailController@destroy')->name('automail.destroy');
});

Route::group(['prefix' => 'newlayout'], function () { 
    Route::get('home', 'PagesController2@index')->name('newlayout.index');
});

Route::get('/', 'PagesController@home');
Route::get('/home', 'PagesController@home')->name('home');
Route::get('/contact', 'ContactsController@contact');
Route::post('/contact', 'ContactsController@create');
Route::post('/newsletter/subscribe', 'PagesController@createNewsletterContact');
Route::get('/post/{id}', 'PagesController@post');
Route::get('/about', 'PagesController@about');
Route::get('/social', 'PagesController@social');
Route::get('/blog', 'PagesController@blog');
Route::get('/video', 'PagesController@video');
Route::post('/blog', 'BlogController@blog');

Route::get('/webinar-gratis', 'PagesController@WebinarGratis');
Route::get('/webinar-gratis-2', 'PagesController@WebinarGratis2');
Route::post('/webinar-gratis-2', 'PagesController@SubscribeViaWebinarGratis');

Route::get('/new-page', 'PagesController@everyNewPage');

Route::get('/facciamo-cv-vicente', 'PagesController@cvVicente');

//Mail
Route::get('/mail/dashboard', 'EmailsController@dashboard')->name('mail.dashboard');
Route::get('/mail/new-group-mail', 'EmailsController@newGroupMail')->name('mail.newGroupMail');
Route::post('/mail-to-list', 'EmailsController@sendEmailToList')->name('sendMailToGroup');
Route::get('/test-mail', 'EmailsController@dailyMailCheck');
// Route::get('/test-mail', function(){
//     return view('emails.newBlogPost', ['content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam quae non delectus in sequi at minus ipsa dolorem quisquam distinctio dolor dignissimos quibusdam culpa, qui vero sunt ducimus facere et molestiae aliquid rem quas quo esse. Aut eum perferendis asperiores, nemo eligendi totam doloribus? Ipsa doloribus quos minus sunt minima!',
//      'title' => 'Titulo Exemplo', 'cover' => 'http://sogniamoingrande.it/images/posts/66/1551110570618.jpg', 'blogPostLink' => urlencode('http://sogniamoingrande.it/post/66')]);
// });

//Subscribers
Route::get('/admin/subscriber/destroy/{id}', 'NewsletterContactController@destroy')->name('mail.delete');

//Route::post('/newsletter', 'PagesController@newsletter');

//Admin
Route::group(['prefix' => 'admin'], function () {
    Route::get('', 'CriadorController@dashboard');
    Route::get('/dashboard', 'CriadorController@dashboard');
    Route::get('/home-dashboard', 'CriadorController@home_dashboard');
    Route::get('/home-dashboard/bigMosaic', 'CriadorController@bigMosaic');
    
    Route::get('/contacts', 'ContactsController@list');
    Route::get('/contact/view/{id}', 'ContactsController@view');
    Route::get('/contact/destroy/{id}', 'ContactsController@destroy');
    
    Route::get('/subscriptions', 'CriadorController@subscriptions');
    
    Route::get('/blog', 'BlogController@list');
    Route::get('/blog/new', 'BlogController@new');
    Route::post('/blog/create', 'BlogController@create');
    Route::get('/blog/publish/{id}', 'BlogController@publish');
    Route::get('/blog/hide/{id}', 'BlogController@hide');
    Route::get('/blog/destroy/{id}', 'BlogController@destroy');
    Route::get('/blog/{id}/edit', 'BlogController@edit')->name('blogpost.edit');
    Route::post('/blog/{id}/update', 'BlogController@update')->name('blogpost.update');
});


Route::get('/homa', 'HomeController@index');