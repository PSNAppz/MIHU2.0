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

Route::resource('darshan', 'DarshanController');

Route::resource('media','MediaController');

Route::resource('emergency','EmergencyController');

Route::resource('accommodation','AccommodationController');

Route::resource('admin','AdminController');

Route::resource('faq','FAQController');

Route::resource('volunteer','VolunteerController');

Route::resource('coordinator','CoordinatorController');

ROute::resource('staffvolunteer','StaffVolunteerController');

Route::get('chart','AdminController@chart');

Route::get('/admin/clearlogs', 'HomeController@destroy');


//Excel functions
Route::get('downloadExcel/{database}/{type}', 'ExcelController@downloadExcel');
Route::post('importExcel/{database}', 'ExcelController@importExcel');