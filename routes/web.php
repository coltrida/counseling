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
Route::get('/home', 'HomeController@index')->name('home');
Route::view('/informativa', 'informativa')->name('informativa');

//Carosello
Route::view('/gdpr', 'carosello.gdpr')->name('gdpr');
Route::view('/formazione', 'carosello.formazione')->name('formazione');
Route::view('/sos', 'carosello.equitalia')->name('equitalia');

//GDPR
Route::view('/general', 'gdpr.general')->name('general');
Route::view('/data', 'gdpr.data')->name('data');
Route::view('/protection', 'gdpr.protection')->name('protection');
Route::view('/regulation', 'gdpr.regulation')->name('regulation');

//Servizi
Route::view('/privacy', 'servizi.privacy')->name('privacy');
Route::view('/formazione', 'servizi.formazione')->name('formazione');

Route::view('/temporary', 'servizi.temporary')->name('temporary');
Route::post('/sos/send', 'EmailController@sos')->name('sendsos');
Route::view('/web', 'servizi.siti')->name('web');

//Privacy
Route::view('/privacy/questionario', 'privacy.questionario')->name('questionario');
Route::post('/privacy/questionario/send', 'EmailController@questionario')->name('sendquestionario');
Route::view('/privacy/tabelle', 'privacy.tabelleprivacy')->name('tabelle');
Route::get('/privacy/news', 'NotizieController@lista')->name('news');
Route::view('/privacy/inseriscinews', 'privacy.inseriscinotizia')->name('inseriscinews');
Route::post('/privacy/inseriscinews', 'NotizieController@salva')->name('insnews');

//Fatturazione Elettronica
Route::get('/fattura', 'FatturaController@index')->name('fatturazione');
Route::get('/fattura/info', 'FatturaController@info')->name('fatturarazione.info');
Route::get('/fattura/date', 'FatturaController@date')->name('fatturarazione.date');
Route::get('/fattura/nostra', 'FatturaController@nostra')->name('fatturarazione.nostra');
Route::get('/fattura/benefici', 'FatturaController@benefici')->name('fatturarazione.benefici');
Route::get('/fattura/questionari/studiocorsetti', 'FatturaController@questionariostudiocorsetti');
Route::post('/fattura/questionari/studiocorsetti/send', 'EmailController@questcorsetti')->name('sendquestcorsetti');
Route::get('/fattura/questionari', 'FatturaController@questionario' )->name('fatturarazione.questionario');
Route::post('/fattura/questionari/send', 'EmailController@questfattura')->name('fatturarazione.inviaquestionario');

//Presite
Route::get('/presite/dolcevita', 'PresiteController@dolcevita');




// ---------------------------------- Informative ----------------------------------------------------

/*----------------------------STUDIO CORSETTI------------------------------*/
Route::get('/informative/studioCorsetti', function ()
{ return response()->file('informative/studioCorsetti.pdf'); });
/*-------------------------------TABOR--------------------------------------*/
Route::get('/informative/tabor', function ()
{ return response()->file('informative/tabor.pdf'); });
/*-----------------------------HOTEL DA GIOVANNA----------------------------------*/
Route::get('/informative/hoteldagiovanna', function ()
{ return response()->file('informative/hoteldagiovanna.pdf'); });
/*-------------------------------HOTEL LETIZIA----------------------------------*/
Route::get('/informative/hotelletizia', function ()
{ return response()->file('informative/hotelletizia.pdf'); });
/*-------------------------------TECNOSYSTEM----------------------------------*/
Route::get('/informative/tecnosystem', function ()
{ return response()->file('informative/tecnosystem.pdf'); });
/*-------------------------------MORAES----------------------------------*/
Route::get('/informative/moraes', function ()
{ return response()->file('informative/moraes.pdf'); });
/*-------------------------------BELLAVISTA----------------------------------*/
Route::get('/informative/bellavista', function ()
{ return response()->file('informative/bellavista.pdf'); });
/*-------------------------------NENCETTI----------------------------------*/
Route::get('/informative/nencetti', function ()
{ return response()->file('informative/nencetti.pdf'); });
/*-------------------------------SARACENO----------------------------------*/
Route::get('/informative/saraceno', function ()
{ return response()->file('informative/saraceno.pdf'); });
/*-------------------------------DOLCEVITA----------------------------------*/
Route::get('/informative/dolcevita', function ()
{ return response()->file('informative/dolcevita.pdf'); });
/*-------------------------------ARKADIA----------------------------------*/
Route::get('/informative/arkadia', function ()
{ return response()->file('informative/arkadia.pdf'); });
/*-------------------------------SOTTOLEMURA----------------------------------*/
Route::get('/informative/sottolemura', function ()
{ return response()->file('informative/sottolemura.pdf'); });
/*-------------------------------BOSELLI----------------------------------*/
Route::get('/informative/boselli', function ()
{ return response()->file('informative/boselli.pdf'); });
/*-------------------------------GIMAX----------------------------------*/
Route::get('/informative/gimax', function ()
{ return response()->file('informative/gimax.pdf'); });
/*-------------------------------TCMONTEVARCHI----------------------------------*/
Route::get('/informative/tcmontevarchi', function ()
{ return response()->file('informative/tcmontevarchi.pdf'); });
/*-------------------------------FOREVER GOLD----------------------------------*/
Route::get('/informative/forevergold', function ()
{ return response()->file('informative/forevergold.pdf'); });

Auth::routes();

//mail contatti
Route::post('/send', 'EmailController@send')->name('mail');

//Sitemap
Route::get('/sitemap.xml', 'SitemapController@sitemap')->name('sitemap');

