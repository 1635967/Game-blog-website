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

/*

Route::get('/', function () {
    return view('welcome');
});

*/

Route::get('/','gamesController@showHome');
Route::get('/news','gamesController@showNews');
Route::get('/news/{title}','gamesController@showNewsDetails');

Route::get('/games_list','gamesController@showGamesList');
Route::get('/games_list/{Gname}','gamesController@showGame');

Route::get('/about','gamesController@showAbout');

Route::get('/contact_us','gamesController@showContactUs');

Route::get('/gallery','gamesController@showGallery');

Route::get('/release_dates_table','gamesController@showReleaseDates');

Route::get('/feedback','gamesController@showFeedback');
Route::post('/feedback_sent','gamesController@store')->name('store');

