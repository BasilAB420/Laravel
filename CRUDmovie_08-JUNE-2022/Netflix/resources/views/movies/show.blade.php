@extends('movies.layout')
@section('content')


<div class="card">
  <div class="card-header">Movies Page</div>
  <div class="card-body">


        <div class="card-body">
        <h5 class="card-title">movie_name : {{ $movies->movie_name }}</h5>
        <p class="card-text">movie_description : {{ $movies->movie_description }}</p>
        <p class="card-text">movie_gener : {{ $movies->movie_gener }}</p>
        <p class="card-text">movie_image : {{ $movies->movie_image }}</p>
  </div>

    </hr>

  </div>
</div>
