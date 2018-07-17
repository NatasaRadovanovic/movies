@extends('layouts.master')

@section('content')
    <p>{{ $movie->title }}<p>
    <p>{{ $movie->genre }}<p>
    <p>{{ $movie->director }}<p>
    <p>{{ $movie->produstion_year }}<p>
    <p>{{ $movie->storyline }}</p>
    <hr></hr> 

@endsection  