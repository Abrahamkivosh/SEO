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
    return redirect('login');
});
Route::get('/test', function () {
    return view('test');
});

// Route::get('/profile', function () {
//     return view('profile');
// });

Route::get('/page-offline', function () {
    return view('page-offline');
});
Route::get('/Ongoing-SEO-Campaigns', function () {
    return view('Ongoing-SEO-Campaigns');
});

Route::get('/expired-services', function () {
    return view('expired-services');
});
Route::get('/contacts', function () {
    return view('contacts');
});
Route::get('/active-clients', function () {
    return view('active-clients');
});

Route::get('/addclient', 'PagesController@addclient');
// Route::get('/profile', 'PagesController@upload');
// Route::get('/mail-compose', 'PagesController@mail_compose');
// Route::get('/mail-single', 'PagesController@mail_single');
Route::resource('profile', 'adminupdatesController');

Route::resource('post', 'PostsController');
Route::resource('project', 'ProjectsController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
