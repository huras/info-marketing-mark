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
Route::get('/', 'PagesController@home');
Route::get('/home', 'PagesController@home')->name('home');
Route::get('/contact', 'ContactsController@contact');
Route::post('/contact', 'ContactsController@create');
Route::post('/newsletter/subscribe', 'PagesController@createNewsletterContact');
Route::get('/post/{id}', 'PagesController@post');
Route::get('/about', 'PagesController@about');
Route::get('/social', 'PagesController@social');
Route::get('/blog', 'PagesController@blog');
Route::get('/videos', 'PagesController@videos');
Route::post('/blog', 'BlogController@blog');

Route::get('/webinar-gratis', 'PagesController@WebinarGratis');
Route::get('/webinar-gratis-2', 'PagesController@WebinarGratis2');
Route::post('/webinar-gratis-2', 'PagesController@SubscribeViaWebinarGratis');

Route::get('/facciamo-cv-vicente', 'PagesController@cvVicente');

//Automail
Route::get('/automail/list', 'AutomailController@listAutomail')->name('automail.list');
Route::get('/automail/new', 'AutomailController@newAutomail')->name('automail.new');
Route::get('/automail/activate/{id}', 'AutomailController@activate')->name('automail.activate');
Route::get('/automail/deactivate/{id}', 'AutomailController@deactivate')->name('automail.deactivate');
Route::post('/automail/new', 'AutomailController@createAutomail')->name('automail.store');
Route::get('/automail/destroy/{id}', 'AutomailController@destroy')->name('automail.destroy');
Route::get('/automail-routine', 'AutomailController@autosend');

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

Route::get('/admin', 'CriadorController@dashboard');

Route::get('/admin/dashboard', 'CriadorController@dashboard');
Route::get('/admin/home-dashboard', 'CriadorController@home_dashboard');
Route::get('/admin/home-dashboard/bigMosaic', 'CriadorController@bigMosaic');

Route::get('/admin/contacts', 'ContactsController@list');
Route::get('/admin/contact/view/{id}', 'ContactsController@view');
Route::get('/admin/contact/destroy/{id}', 'ContactsController@destroy');

Route::get('/admin/subscriptions', 'CriadorController@subscriptions');

Route::get('/admin/blog', 'BlogController@list');
Route::get('/admin/blog/new', 'BlogController@new');
Route::post('/admin/blog/create', 'BlogController@create');
Route::get('/admin/blog/publish/{id}', 'BlogController@publish');
Route::get('/admin/blog/hide/{id}', 'BlogController@hide');
Route::get('/admin/blog/destroy/{id}', 'BlogController@destroy');
Route::get('/admin/blog/{id}/edit', 'BlogController@edit')->name('blogpost.edit');
Route::post('/admin/blog/{id}/update', 'BlogController@update')->name('blogpost.update');

Route::get('/homa', 'HomeController@index');