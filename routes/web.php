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
/**
 * Routes for kiosks
 */
Route::resource('/kiosk', 'KioskController');
/**
 * Routes for movies
 */
Route::get('/movie/manage', 'MovieController@manage')->name('movie.manage');
Route::resource('/movie', 'MovieController');
/**
 * Routes for customer
 */
Route::resource('/customer', 'CustomerController');
/**
 * Routes for disks
 */
Route::resource('/disk', 'DiskController');
/**
 * Routes for rentals
 */
Route::get('/rental/create/{id}/type/{type}', 'RentalController@create');

Route::get('/rental/admin', 'RentalController@adminIndex');

Route::resource('/rental', 'RentalController')->except(['create']);

/*
Routes for reviews
*/
Route::resource('/review', 'ReviewController');

//


Route::get('/', function () {
    return view('welcome');
});

Route::get('/example', 'ExampleController@list');
Auth::routes();
//Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/', 'MovieController');
