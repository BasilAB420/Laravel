@extends('movies.layout')
@section('content')

<div class="card">
  <div class="card-header">Movies Page</div>
  <div class="card-body">

      <form action="{{ url('movie') }}" method="post">
        {!! csrf_field() !!}
        <label>movie_name</label></br>
        <input type="text" name="movie_name" id="movie_name" class="form-control"></br>
        <label>movie_description</label></br>
        <input type="text" name="movie_description" id="movie_description" class="form-control"></br>
        <label>movie_gener</label></br>
        <input type="text" name="movie_gener" id="movie_gener" class="form-control"></br>
        <label>movie_image</label></br>
        <input type="text" name="movie_image" id="movie_image" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>

  </div>
</div>

@stop
