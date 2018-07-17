<?php

Route::get('/', function () {
    return view('welcome');
});
Route::get('/movies', 'MoviesController@index');
//Route::get('/movies/{id}', 'MoviesController$show');
