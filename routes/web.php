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
Auth::routes();


Route::resource('media','MediaController');

Route::resource('emergency','EmergencyController');

Route::resource('accommodation','AccommodationController');

Route::resource('admin','AdminController');

Route::resource('faq','FAQController');

Route::get('chart','AdminController@chart');


