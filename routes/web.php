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

//main page routes
Route::get('/main/werknemer/{werknemer}','WerknemersController@main')->name('werknemer.main');
Route::get('/main/bedrijf/{bedrijf}', 'BedrijvenContoller@main')->name('bedrijven.main');

//status routes
Route::get('/status/', 'StatusesController@index')->name('status.index');
Route::post('/status/', 'StatusesController@store')->name('status.store');
Route::get('/status/create', 'StatusesController@create')->name('status.create');
Route::get('/status/{status}','StatusesController@show')->name('status.show');
Route::get('/status/{status}/edit', 'StatusesController@edit')->name('status.edit');
Route::get('/status/{status}/delete','StatusesController@destroy')->name('status.delete');
Route::put('/status/{status}', 'StatusesController@update')->name('status.update');

//werknemer routes

Route::get('/werknemer/','WerknemersController@index')->name('werknemer.index');
Route::post('/werknemer/', 'WerknemersController@store')->name('werknemer.store');
Route::get('/werknemer/create','WerknemersController@create')->name('werknemer.create');
Route::get('/werknemer/{werknemer}/edit','WerknemersController@edit')->name('werknemer.edit');
Route::get('/werknemer/{werknemer}/delete','WerknemersController@destroy')->name('werknemer.delete');
Route::put('/werknemer/{werknemer}', 'WerknemersController@update')->name('werknemer.update');
Route::get('/werknemer/{Werknemer}/','WerknemersController@show')->name('werknemer.show');

// Artikelen routes - Gobi
Route::get('/artikelen', 'ArtikelenController@index')->name('artikelen.index');
Route::post('/artikelen', 'ArtikelenController@store')->name('artiekelen.store');
Route::get('/artikelen/create', 'ArtikelenController@create')->name('artikelen.create');
Route::get('/artikelen/{artikel}', 'ArtikelenController@show')->name('artikelen.single');
Route::get('/artikelen/{artikel}/edit', 'ArtikelenController@edit')->name('artikelen.edit');
Route::put('/artikelen/{artikel}', 'ArtikelenController@update');
Route::delete('/artikelen/{artikel}/delete', 'ArtikelenController@destroy')->name('artikelen.delete');


//bedrijf routes
Route::get('/bedrijf/', 'BedrijvenController@index')->name('bedrijven.index');
Route::post('/bedrijf/', 'BedrijvenController@store')->name('bedrijven.store');
Route::get('/bedrijf/create', 'BedrijvenController@create')->name('bedrijven.create');
Route::get('/bedrijf/{bedrijf}', 'BedrijvenController@show')->name('bedrijven.show');
Route::get('/bedrijf/{bedrijf}/delete', 'BedrijvenController@destroy')->name('bedrijven.delete');
Route::get('/bedrijf/{bedrijf}/edit', 'BedrijvenController@edit')->name('bedrijven.edit');
Route::put('/bedrijf/{bedrijf}', 'BedrijvenController@update')->name('bedrijven.update');



