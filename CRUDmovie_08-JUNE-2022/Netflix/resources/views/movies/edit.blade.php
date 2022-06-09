@extends('movies.layout')
@section('content')

<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">

      <form action="{{ url('movie/' .$movies->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$movies->id}}" id="id" />
        <label>movie_name</label></br>
        <input type="text" name="movie_name" id="movie_name" value="{{$movies->movie_name}}" class="form-control"></br>
        <label>movie_description</label></br>
        <input type="text" name="movie_description" id="movie_description" value="{{$movies->movie_description}}" class="form-control"></br>
        <label>movie_gener</label></br>
        <input type="text" name="movie_gener" id="movie_gener" value="{{$movies->movie_gener}}" class="form-control"></br>
        <label>movie_image</label></br>
        <input type="text" name="movie_image" id="movie_image" value="{{$movies->movie_image}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>

  </div>
</div>

@stop
