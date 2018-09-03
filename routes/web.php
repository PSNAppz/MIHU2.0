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
Route::get('/media',function(){
    return view('media');
});


Route::get('emergency', function(){
    return view('emergency');
});

Auth::routes();

Route::resource('admin','AdminController');

Route::resource('faq','FAQController');


