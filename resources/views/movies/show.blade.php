@extends('layouts.master')
<style>
    .storyline
    {
        width: 50%;
    }

    #btn
    {
        background-color: #363a3e;
        border: none;
    }
    .card-block
    {
        border: 1px solid silver;
        margin-bottom: 5px;
        width: 50%;
        padding: 5px;
        border-radius: 10px;
        box-shadow: 5px 5px 5px grey;
    }

    .wrapp-form
    {
        width: 40%;
        margin-top: 20px;
    }

    .genre
    {
        color: #363a3e;
    }

    .genre:hover
    {
        text-decoration: none;
        color: red;
    }

</style>

@section('content')<br>
    <h2><i class="fas fa-film"></i> {{ $movie->title }}
    <b>({{ $movie->production_year }})</b></h2>
    <p><em><a class="genre" href="/genres/{{ $movie->genre }}">{{ $movie->genre }}</a></em></p>
    <p><em>Director: {{ $movie->director }}</em></p>
    <div class="storyline">
        <p>{{ $movie->storyline }}</p>
    </div><br>
 

<h4>Comments</h4><br>
    @foreach($movie->comments as $comment)
        <div class='card-block'>
            <p style="font-size:1rem;">{{ $comment->content }}<p>
            <p style="font-size:0.6rem;"><em>{{ $comment->created_at }}</em><p>
        </div> 
    @endforeach

<div class="wrapp-form">
 <form method="POST" action="{{ url('/comments/add/' . $movie->id) }}">
    {{csrf_field()}} 
  <div class="form-group">
     <textarea rows="4" cols="50" name='content'class="form-control" id="content" placeholder="Add comment" ></textarea>
     @include('partials.error-message' , ['fieldName' => 'content'])
   </div>
   <button  type="submit" id="btn" class="btn btn-primary">Send</button>
 </form> 
<div>    
@endsection  