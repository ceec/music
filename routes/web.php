<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Route::get('/', 'PageController@bands');
Route::get('/albums', 'PageController@albums');

Route::get('/create/album', 'PageController@albumCreate');
Route::get('/create/band', 'PageController@bandCreate');


//bands
Route::post('/band/create', 'BandController@create');
Route::post('/band/delete', 'BandController@delete');

//albums
Route::post('/album/create', 'AlbumController@create');
Route::post('/album/delete', 'AlbumController@delete');
