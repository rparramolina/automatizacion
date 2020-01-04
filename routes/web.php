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

#Route::get('/', function () {
#    return view('login');
#});


Auth::routes();

Route::get('/', 'Auth\\LoginController@showLoginForm');
#Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'MailingController@index')->name('home');

Route::get('/productor/mailing', 'MailingController@index')->name('mailing');
Route::get('/productor/edit/{id}', 'MailingController@edit')->name('edit');
Route::post('/productor/update/{id}', 'MailingController@update')->name('update');


