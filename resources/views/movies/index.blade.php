@extends('layouts.master')

<style>
    h2 a
    {
        color: #363a3e;
        text-decoration: none;
    }

    h2 a:hover
    {
        text-decoration: none;
        color: #010f26;
        font-size: 2.3rem;
     }

    .storyline
    {
        width:50%;
        border-bottom: 1px solid silver;
        padding: 5px;
        margin-bottom: 10px;
    }
</style>

@section('content')<br>

    
@foreach($movies as $movie)
    <h2>
        <a href='/movies/{{ $movie->id }}'><i class="fas fa-film"></i> {{ $movie->title }}</a>
    </h2>
    <div class="storyline">
        <p>{{ $movie->storyline }}</p>
    </div>
@endforeach  
@include('layouts.sidebar')
@endsection  

    

    
