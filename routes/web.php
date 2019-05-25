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

Route::get('/test', function () {
    return view('test');
});




Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');


Route::get('/map', 'CompanyController@map');


// nearby controller
Route::get('/nearby', 'NearbyController@search')->name('nearby');

// Route::get('/profile', 'ProfileController@index')->name('profile');

//employee controller
Route::resource('employee', 'EmployeeController');

// halt controller
Route::resource('halt', 'HaltController');


//route controller
Route::resource('route_r', 'RouteRController'); 

//feedback controller
Route::resource('feedback', 'FeedbackController'); 

//profile controller
Route::resource('profile', 'ProfileController'); 


// navigation
Route::get('/about', function () {
    return view('layouts.navigate.aboutus_a');
});
Route::get('/contact', function () {
    return view('layouts.navigate.contactus_c');
});

Route::get('/help', function () {
    return view('layouts.navigate.help_h');
});
Route::get('/ourservices', function () {
    return view('layouts.navigate.ourservices_o');
});
Route::get('/route', function () {
    return view('layouts.navigate.route_r');
});
Route::get('/timetable', function () {
    return view('layouts.navigate.timetable_t');
});

Route::get('/test', function () {
    return view('testing.index');
});

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});









