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

Route::get('/register',function(){
	return view('errors.404');
});

Route::get('/map', function(){
	return view('maps.index');
});

Route::get('/info', function(){
	return view('info.index');
});

Route::get('/about', function(){
	return view('about');
});

Route::resource('food', 'FoodController');

Route::resource('volunteercare', 'VolunteercareController');

Route::resource('ashramvol','AshramVolunteersController');

Route::resource('transportation', 'TransportationController');

Route::get('/clearlogs', 'LogEngineController@destroy');

Route::resource('darshan', 'DarshanController');

Route::resource('staff','StaffController');

Route::resource('media','MediaController');

Route::resource('emergency','EmergencyController');

Route::resource('accommodation','AccommodationController');

Route::resource('admin','AdminController');

Route::resource('faq','FAQController');

Route::resource('volunteer','VolunteerController');

Route::resource('coordinator','CoordinatorController');

ROute::resource('staffvolunteer','StaffVolunteerController');

Route::get('chart','AdminController@chart');



//Excel functions
Route::get('downloadExcel/{database}/{type}', 'ExcelController@downloadExcel');
Route::post('importExcel/{database}', 'ExcelController@importExcel');