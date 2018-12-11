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

// Route::get('/about', function () {
//     return view('about');
// });
Route::get('/about', 'HomeController@about')->name('about');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');


Route::get('/boats', 'BoatController@index');


Route::get('/boats/query', 'BoatController@countBoat');


Route::post('/boats', 'BoatController@store')->name('boats.store');
Route::post('/boats/addgallery', 'BoatController@addgallery')->name('boats.addgallery');

Route::get('/galleries', 'GalleryController@index');
Route::post('/galleries', 'GalleryController@index');

// Route::get('/galleries/{gallery_id}', 'GalleryController@show');


Route::get('/galleries/upload', 'GalleryController@upload')->name('gallery.upload');;

Route::get('/galleries/upload', 'GalleryController@upload')->name('gallery.upload');

Route::post('/galleries/upload', 'GalleryController@store')->name('gallery.store');
Route::get('/galleries/delete/{gallery_id}', 'GalleryController@destroy')->name('galleries.destroy');
Route::get('/galleries/{gallery_id}', 'GalleryController@show')->name('galleries.show');


Route::get('/events/query', 'EventController@topevents');
Route::get('/events', 'EventController@index');
Route::post('/events', 'EventController@store')->name('events.store');




Route::get('/events/{event_id}', 'EventController@show');
Route::get('/events/delete/{event_id}', 'EventController@destroy');
Route::get('/events/attending/{event_id}', 'EventController@attend');
Route::get('/events/unattending/{event_id}', 'EventController@unattend');

Route::get('/classifieds', 'ClassifiedController@index')->name('classifieds');
Route::get('/classifieds/new', 'ClassifiedController@create');

Route::post('/classifieds/list', 'ClassifiedController@listitem')->name('classifieds.list');

Route::get('/classifieds/{classified_id}', 'ClassifiedController@show')->name('classifieds.show');
Route::post('/classifieds/new', 'ClassifiedController@store')->name('classifieds.store');

Route::get('/classifieds/delete/{classified_id}', 'ClassifiedController@destroy')->name('classifieds.destroy');
Route::get('/classifieds/sold/{classified_id}', 'ClassifiedController@sold')->name('classifieds.sold');

Route::get('/admin', 'AdminController@home');

Route::get('/admin/users/all', 'AdminController@users');
Route::get('/admin/users/reports', 'AdminController@userReports');


Route::get('/admin/users', 'AdminController@users');


Route::get('/admin/users/delete/{user_id}', 'AdminController@destroy');
Route::get('/admin/users/renew/{user_id}', 'AdminController@renew');
Route::get('/admin/mail/{user_id}', 'AdminController@mail');
Route::get('/admin/boats', 'AdminController@boats');
Route::get('/admin/events', 'AdminController@events');

Route::get('/blogs', 'BlogController@index')->name('blogs.post');
Route::post('/blogs', 'BlogController@store')->name('blogs.store');


Route::get('/my/classifieds', 'ClassifiedController@mycollection');
Route::get('/my/galleries', 'GalleryController@mycollection');
Route::get('/my/boats', 'BoatController@mycollection');

