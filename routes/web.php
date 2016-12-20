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

Route::get('/edit/album/{album_id}', 'PageController@albumEdit');
Route::get('/edit/band/{band_id}', 'PageController@bandEdit');

Route::get('/delete/album/{album_id}', 'AlbumController@delete');
Route::get('/delete/band/{band_id}', 'BandController@delete');


//bands
Route::post('/band/create', 'BandController@create');
Route::post('/band/edit', 'BandController@edit');

//albums
Route::post('/album/create', 'AlbumController@create');
Route::post('/album/edit', 'AlbumController@edit');
