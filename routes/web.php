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

Route::view('/', 'home')->name('index');
Route::view('/chisiamo', 'chisiamo')->name('chisiamo');
Route::view('/contatti', 'contatti')->name('contatti');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
