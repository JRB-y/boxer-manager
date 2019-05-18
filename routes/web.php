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

Route::get('/', 'Boxers\BoxersController@index');

// Route::get('/boxers', 'Boxers\BoxersController@index');

Route::resource('/boxers', 'Boxers\BoxersController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Tatami
Route::get('/tatami', 'Tatami\TatamiController@index');