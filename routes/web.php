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
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');


Route::get('/boats', 'BoatController@index');
Route::post('/boats', 'BoatController@store')->name('boats.store');

Route::get('/galleries', 'GalleryController@index');
Route::post('/galleries', 'GalleryController@index');

Route::get('/galleries/{user_id}/{picture_id}', 'GalleryController@show');

Route::get('/galleries/upload', 'GalleryController@upload');
Route::post('/galleries/upload', 'GalleryController@store')->name('gallery.upload');

Route::get('/events', 'EventController@index');
Route::post('/events', 'EventController@store')->name('events.store');

Route::get('/events/{event_id}', 'EventController@show');


