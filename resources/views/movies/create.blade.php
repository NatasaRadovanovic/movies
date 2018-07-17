@extends('layouts.master')

@section('content')<br>
<h3 style="text-align:center;">Add movie</h3><br>
<div style="width:40%; margin:0 auto;"> 
<form method="POST" action="/movies">
  {{csrf_field()}} 
  <div class="form-group">
    <label for="title">Title</label>
    <input name='title' type="text" class="form-control" id="title">
    @include('partials.error-message' , ['fieldName' => 'title'])
  </div>
  <div class="form-group">
    <label for="genre">Genre</label>
    <input name='genre' type="text" class="form-control" id="genre">
    @include('partials.error-message' , ['fieldName' => 'genre'])
  </div>
  <div class="form-group">
    <label for="director">Director</label>
    <input name='director' type="text" class="form-control" id="director">
    @include('partials.error-message' , ['fieldName' => 'director'])
  </div>
  <div class="form-group">
    <label for="year">Production year</label>
    <input name='year' type="date" class="form-control" id="year">
    @include('partials.error-message' , ['fieldName' => 'year'])
  </div>
  <div class="form-group">
    <label for="storyline">Storyline</label>
    <textarea name='storyline' class="form-control" id="storyline"></textarea>
    @include('partials.error-message' , ['fieldName' => 'storyline'])
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection 