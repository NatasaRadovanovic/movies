@extends('layouts.master')
@section('content')<br>
    
    @foreach($movies as $movie)
        <p><a href='/movies/{{$movie->id}}'>{{ $movie->title }}</a><p>
        <p>{{ $movie->storyline }}</p>
        <hr></hr><br>
    @endforeach  
@endsection  
    

    
