<?php

Route::get('/', function () {
    return view('welcome');
});
Route::get('/movies', 'MoviesController@index');

Route::get('/movies/{id}', 'MoviesController@show');

Route::post('/movies', 'MoviesController@store');

Route::get('/create', 'MoviesController@create');

Route::post('/comments/add/{id}', 'CommentsController@store');

Route::get('/genres/{genre}', 'GenresController@show');






