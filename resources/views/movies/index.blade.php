@extends('layouts.master')
@section('content')
    
    @foreach($movies as $movie)
        <p><a href='/movies/{{$movie->id}}'>{{ $movie->title }}</a><p>
        <p>{{ $movie->storyline }}</p>
        <hr></hr>
    @endforeach  
@endsection  
    

    
