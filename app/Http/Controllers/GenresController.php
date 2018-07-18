<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;


class GenresController extends Controller
{
    public function show($genre)
    {
        $movies = Movie::byGenre($genre);
        return view('movies.index', compact('movies'));
    }
    //  public function show($genre) {
    //  $movies = Movie::where('genre', $genre)->get();
    // return view('movies.index', compact('movies'));
    // }
}
