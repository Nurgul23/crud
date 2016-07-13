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

Route::get('/', 'CardController@show');
Route::post('/', 'CardController@add');
Route::get('/show/{card}', 'NotesController@show');
Route::post('/add/{id}', 'NotesController@add');
Route::get('/delete/{id}', 'NotesController@delete');
Route::get('/edit/{note}', 'NotesController@edit');
Route::post('/update/{note}', 'NotesController@update');

