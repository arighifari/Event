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


//Route::get('/', function () {
//    return view('event');
//});
//
//Route::get('/event', function (){
//    return view('event');
//});

Auth::routes();

Route::get('logout','Auth\LoginController@logout')->name('logout_user');

Route::get('/', 'HomeController@index')->name('home');

Route::get('/form','HomeController@form')->name('form');

Route::resource('/form','EventController');

Route::prefix('eo')->group(function () {
    Route::get('/', 'eo_authController@dashboard')->name('eo.dashboard');
    Route::get('dashboard', 'eo_authController@dashboard')->name('eo.dashboard');
    Route::get('mybooking', 'eo_authController@mybooking')->name('eo.mybooking');
    Route::get('register', 'eo_authController@create')->name('eo.register');
    Route::post('register', 'eo_authController@store')->name('eo.register.store');
    Route::get('login', 'Auth\EOLoginController@login')->name('eo.auth.login');
    Route::post('login', 'Auth\EOLoginController@loginAdmin')->name('eo.auth.loginAdmin');
    Route::get('logout', 'Auth\EOLoginController@logout')->name('eo.auth.logout');
});

Route::get('/cek', 'EventController@cek');
Route::get('/book/{id}','EventController@booking')->name('eo.booking');