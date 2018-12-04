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

Route::group(['middleware' => 'auth'], function () {
    /**
     * Routes for rentals
     */
        Route::get('/rental/create/{id}/type/{type}', 'RentalController@create');
        Route::get('/rental/admin', 'RentalController@adminIndex');
        Route::resource('/rental', 'RentalController')->except(['create']);
    /**
     * Routes for reviews
     */
        Route::get('/review/admin', 'ReviewController@adminIndex');
        Route::get('/review/create/{id}', 'ReviewController@create');
        Route::resource('/review', 'ReviewController')->except(['create']);;

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
     * Routes for disks
     */
        Route::resource('/disk', 'DiskController');

});

/**
 * Routes for movies
 */
    Route::resource('/', 'MovieController');

/**
 * Routes for customer
 */
    Route::resource('/customer', 'CustomerController');

Auth::routes();

