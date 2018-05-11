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

//Home e menu
Route::get('/', 'CounController@index')->name('index');
Route::view('/chisiamo', 'chisiamo')->name('chisiamo');
Route::view('/contatti', 'contatti')->name('contatti');

//Carosello
Route::view('/gdpr', 'carosello.gdpr')->name('gdpr');
Route::view('/formazione', 'carosello.formazione')->name('formazione');
Route::view('/equitalia', 'carosello.equitalia')->name('equitalia');

//Soluzioni
Route::view('/soluzione1', 'soluzioni.soluzione1')->name('soluzione1');
Route::view('/soluzione2', 'soluzioni.soluzione2')->name('soluzione2');
Route::view('/soluzione3', 'soluzioni.soluzione3')->name('soluzione3');
Route::view('/soluzione4', 'soluzioni.soluzione4')->name('soluzione4');
Route::view('/soluzione5', 'soluzioni.soluzione5')->name('soluzione5');
Route::view('/opzione', 'soluzioni.opzione')->name('opzione');

//GDPR
Route::view('/general', 'gdpr.general')->name('general');
Route::view('/data', 'gdpr.data')->name('data');
Route::view('/protection', 'gdpr.protection')->name('protection');
Route::view('/regulation', 'gdpr.regulation')->name('regulation');

//Servizi
Route::view('/privacy', 'servizi.privacy')->name('privacy');

//Questionario
Route::view('/privacy/questionario', 'privacy.questionario')->name('questionario');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/send', 'EmailController@send')->name('mail');
