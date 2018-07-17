@extends('layouts.master')

@section('content')
    <p>{{ $movie->title }}<p>
    <p>{{ $movie->genre }}<p>
    <p>{{ $movie->director }}<p>
    <p>{{ $movie->produstion_year }}<p>
    <p>{{ $movie->storyline }}</p>
    <hr></hr> 
    
<br><h2>Comments</h2><br>
    @foreach($movie->comments as $comment)
        <div class='card-block'>
            <p style="font-weight:bold; font-size:1rem;">{{ $comment->content }}<p>
            <p style="font-size:0.7rem;">{{ $comment->created_at }}<p>
        </div>
    @endforeach
@endsection  