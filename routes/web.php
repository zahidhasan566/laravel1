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

Route::get('/', function(){
	return view('welcome');
});

Route::get('/login', 'LoginController@index')->name('login.index');
Route::post('/login', 'LoginController@verify');

Route::get('/home/{id}', 'HomeController@index')->name('home.index');
Route::get('/logout', 'LogoutController@index')->name('logout.index');

Route::get('/profile/{id}', 'ProfileController@profile')->name('profile.index');
Route::post('/profile/{id}', 'ProfileController@update');

Route::get('/profile/delete/{id}', 'ProfileController@delete')->name('profile.delete');

Route::get('/Sms/{id}', 'SmsController@sms')->name('sms.index');
Route::post('/Sms/{id}', 'SmsController@reply');

Route::get('/Sappointment/{id}', 'SappointmentController@index')->name('sappointment.index');
Route::post('/Sappointment/accept/{id}', 'SappointmentController@accept')->name('saccept.index');
Route::post('/Sappointment/reject/{id}', 'SappointmentController@reject')->name('sreject.index');
