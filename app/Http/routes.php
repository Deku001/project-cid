<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'ComptesController@getAllComptes');

Route::get('/login','ComptesController@getLogin');
Route::post('/login','ComptesController@postLogin');

Route::get('/f0-1','F01Controller@getEntiteMere');
Route::get('/f0-1/Entite/{id}/filles', 'F01Controller@getEntitefille')->name('entite.filles');

Route::get('/f0-1/Entite/{id}/projets', 'F01Controller@getProjets')->name('entite.projets');