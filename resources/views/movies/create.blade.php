@extends('layouts.master')

<style>
    #btn
    {
        background-color:#363a3e;
        border:none;
    }

    .form-group label
    {
      font-style: italic;
    }
</style>

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
    <label for="production_year">Production year</label>
    <input name='production_year' type="number" min="1900" max="2018" class="form-control" id="production_year">
    @include('partials.error-message' , ['fieldName' => 'production_year'])
  </div>
  <div class="form-group">
    <label for="storyline">Storyline</label>
    <textarea name='storyline' maxlength="1000" class="form-control" id="storyline"></textarea>
    @include('partials.error-message' , ['fieldName' => 'storyline'])
  </div>
  <button type="submit" id="btn" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection 