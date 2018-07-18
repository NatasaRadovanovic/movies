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

<div class="wrapp" style="width:30%;">
 <form method="POST" action="{{ url('/comments/add/' . $movie->id) }}">
    {{csrf_field()}} 
  <div class="form-group">
     <textarea rows="4" cols="50" name='content'class="form-control" id="content" placeholder="Add comment"></textarea>
     <input type="hidden" name="movie_id" id="movie_id" value="{{$movie->id}}">
     @include('partials.error-message' , ['fieldName' => 'content'])
   </div>
   <button type="submit" class="btn btn-primary">Send</button>
 </form> 
<div>    
@endsection  