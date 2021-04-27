<?php

use Illuminate\Support\Facades\Route;

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
Route::auth();

Route::get('/logout','HomeController@logout')->name('logout');

Route::get('/home', 'HomeController@user_review')->name('home');

Route::get('/','PlaceController@index')->name('top');

Route::get('/search','PlaceController@search')->name('search');

Route::get('/add','PlaceController@add')->name('place_add');

Route::post('/add','PlaceController@create')->name('place_create');

Route::get('/complete','PlaceController@complete');

Route::get('/place_details','PlaceController@details');

Route::post('/place_details','ReviewController@review_post')->name('review_post');

Route::get('/place_edit', 'PlaceController@edit')->name('place_edit');

Route::post('/place_edit', 'PlaceController@update')->name('place_update');

Route::get('/review_edit','HomeController@review_edit')->name('review_edit');

Route::post('/review_edit','HomeController@review_update')->name('review_update');

Route::get('/review_delete','HomeController@review_delete')->name('review_delete');

Route::post('/review_delete','HomeController@review_remove')->name('review_remove');
