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

Route::get('/home', 'HomeController@index')->name('home');

//employee controller
Route::resource('employee', 'EmployeeController');


//route controller
Route::resource('route_r', 'RouteRController'); 


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

// Route::get('/employeeEdit', function () {
//     return view('employee.edit');
// });






// // test
// Route::get('/testing', function () {
//     return view('testing.index');
// });
