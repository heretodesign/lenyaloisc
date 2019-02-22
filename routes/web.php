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


Route::get('/rsvp', 'PagesController@getRsvp');
Route::get('/guide', 'PagesController@getGuide');

Route::get('/crew', 'PagesController@getCrew');
Route::get('/ourstory', 'PagesController@getStory');
Route::get('/gift', 'PagesController@getGift');
Route::get('/gallery', 'PagesController@getGallery');
Route::get('/wedding', 'PagesController@getWedding');


Route::resource('rsvps', 'RsvpController');
