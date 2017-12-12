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
    return view('welcome');
});

Route::get('profile', 'UserController@profile');
Route::post('profile', 'UserController@update_avatar');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/create-event', 'HomeController@createEvent')->name('create-event');
Route::get('/my-event', 'HomeController@myEvent')->name('my-event');
Route::get('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');
Route::post('edit-my-event', 'HomeController@editEvent')->name('edit-my-event');
Route::post('owner-edit-event', 'HomeController@ownerEditEvent')->name('owner-edit-event');
Route::post('delete-event', 'HomeController@deleteEvent')->name('delete-event');
Route::post('check-event', 'HomeController@checkEvent')->name('check-event');
Route::post('join-event', 'HomeController@joinEvent')->name('join-event');
Route::post('create-event', 'EventController@createEvent');


Route::post('admin-edit-event', 'AdminController@admineditEvent')->name('admin-edit-event');
Route::post('admin-delete-event', 'AdminController@admindeleteEvent')->name('admin-delete-event');
Route::post('admin-get-event', 'AdminController@admingetEvent')->name('admin-get-event');

Route::prefix('admin')->group(function() {
	Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
	Route::get('/', 'AdminController@index')->name('admin.dashboard');
	Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

	//Password reset route
	Route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
	Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
	Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset');
	Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');

	Route::get('/profile', 'AdminController@profile')->name('profile');
	Route::post('/edit-profile', 'AdminController@editProfile')->name('edit-profile');
	Route::get('/edit-event', 'AdminController@editEvent')->name('edit-event');

});
