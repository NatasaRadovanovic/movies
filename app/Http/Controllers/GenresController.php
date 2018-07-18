<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;


class GenresController extends Controller
{
    public function show($genre)
    {
        $movies = Movie::byGenre($genre);

        $movie_latest = Movie::latest()->limit(5)->get();
       
        return view('movies.index', compact('movies','movie_latest'));
    }

}
