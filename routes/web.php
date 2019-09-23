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

//  controller
Route::resource('profile', 'ProfileController'); 

// controller
Route::resource('bus', 'BusController'); 


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

Route::get('/testing/fetch_data', function () {
    return view('testing.index');
});

Route::get('/log', function () {
    return view('auth.register_backup');
});

// Route::get('/pagination', 'PaginationController@index');
// Route::get('/pagination/fetch_data', 'PaginationController@fetch_data');

// Route::get('/employee', 'EmployeeController@index');
Route::get('/feedback/feedback/fetch_data', 'FeedbackController@fetch_data');
Route::get('/employee/employee/fetch_data', 'EmployeeController@fetch_data');
Route::get('/halt/halt/fetch_data', 'HaltController@fetch_data');
Route::get('/profile/profile/fetch_data', 'ProfileController@fetch_data');
Route::get('/route/route/fetch_data', 'RouteRController@fetch_data');
Route::get('/bus/bus/fetch_data', 'BusController@fetch_data');


Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});









