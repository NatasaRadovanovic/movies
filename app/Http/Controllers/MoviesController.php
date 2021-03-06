<?php

namespace App\Http\Controllers;
use App\Movie;

use Illuminate\Http\Request;


class MoviesController extends Controller
{
    // protected $latest_movies;
    
    public function index()
    {
        $movies = Movie::all();
        $movies = Movie::orderBy('title', 'asc')->get();
        
        $movie_latest = Movie::latest()->limit(5)->get();
        
        return view('movies.index', compact('movies', 'movie_latest')); 
    }
    
    public function show($id)
    {
        $movie = Movie::with('comments')->find($id);
        return view('movies.show', compact('movie'));
    }

    public function create()
    {
        return view('movies.create');
    }

    public function store()
    {
        $this->validate(request(), [
        'title' =>'required',
        'genre' => 'required', 
        'director' => 'required', 
        'production_year' => 'required|integer|between: 1900, 2018',
        'storyline' => 'required|max: 1000'
        ]); 
        
        Movie::create([ 
        'title' => request('title'),
        'genre' => request('genre'),
        'director' => request('director'),
        'production_year' => request('production_year'),
        'storyline' => request('storyline')
        ]);
        
        return redirect('/movies'); 
    }
}
