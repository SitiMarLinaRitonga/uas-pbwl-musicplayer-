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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/artist', 'ArtistController@index');

Route::get('/artist/create', 'ArtistController@create');
Route::post('/artist', 'ArtistController@store');

Route::get('/album', 'AlbumController@index');


Route::get('/album/create', 'AlbumController@create');
Route::post('/album', 'AlbumController@store');

Route::get('/track', 'TrackController@index');

Route::get('/track/create', 'TrackController@create');
Route::post('/track', 'TrackController@store');

Route::get('/played', 'PlayedController@index');

Route::get('/played/create', 'PlayedController@create');
Route::post('/played', 'PlayedController@store');


