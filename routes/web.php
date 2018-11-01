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

Route::get('/example', 'ExampleController@list');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




Route::resource('/kiosk', 'KioskController');

//Route::get('kiosk/{id}', 'KioskController@show')-> name('kiosk.show');

Route::get('kiosk/{id}/edit', 'KioskController@edit')-> name('kiosk.edit');

Route::get('kiosk/{id}/update', 'KioskController@update')->name('kiosk.update');




Route::resource('/movie', 'MovieController');

Route::get('/movie/manage', 'MovieController@manage')->name('movie.manage');

Route::get('movie/{id}', 'MovieController@show')-> name('movie.show');

Route::get('movie/{id}/edit', 'MovieController@edit')-> name('movie.edit');

Route::get('movie/{id}/update', 'MovieController@update')->name('movie.update');


