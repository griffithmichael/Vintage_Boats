<?php

use App\Http\Controllers\ClassifiedController;

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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', 'BlogController@home')->name('main');

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

// Route::get('/galleries/{gallery_id}', 'GalleryController@show');

Route::get('/galleries/upload', 'GalleryController@upload');
Route::post('/galleries/upload', 'GalleryController@store')->name('gallery.upload');
Route::get('/galleries/delete/{gallery_id}', 'GalleryController@destroy')->name('galleries.destroy');


Route::get('/events', 'EventController@index');
Route::post('/events', 'EventController@store')->name('events.store');

Route::get('/events/{event_id}', 'EventController@show');
Route::get('/events/attending/{event_id}', 'EventController@attend');
Route::get('/events/unattending/{event_id}', 'EventController@unattend');

Route::get('/classifieds', 'ClassifiedController@index')->name('classifieds');
Route::get('/classifieds/new', 'ClassifiedController@create');
Route::get('/classifieds/{classified_id}', 'ClassifiedController@show')->name('classifieds.show');
Route::post('/classifieds/new', 'ClassifiedController@store')->name('classifieds.store');

Route::get('/classifieds/delete/{classified_id}', 'ClassifiedController@destroy')->name('classifieds.destroy');

Route::get('/admin', 'AdminController@home');
Route::get('/admin/users/all', 'AdminController@users');
Route::get('/admin/users/reports', 'AdminController@userReports');
Route::get('/admin/mail/{user_id}', 'AdminController@mail');

Route::get('/blogs', 'BlogController@index');
Route::post('/blogs', 'BlogController@store')->name('blogs.store');