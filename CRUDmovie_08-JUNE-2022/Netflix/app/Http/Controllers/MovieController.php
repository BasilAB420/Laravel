<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        return view('movies.index')->with('movies', $movies);
    }


    public function create()
    {
        return view('Movies.create');
    }


    public function store(Request $request)
    {
        $input = $request->all();
        Movie::create($input);
        return redirect('movie')->with('flash_message', 'movie Addedd!');
    }


    public function show($id)
    {
        $movie = Movie::find($id);
        return view('movies.show')->with('movies', $movie);
    }


    public function edit($id)
    {
        $movie = Movie::find($id);
        return view('movies.edit')->with('movies', $movie);
    }


    public function update(Request $request, $id)
    {
        $movie = Movie::find($id);
        $input = $request->all();
        $movie->update($input);
        return redirect('movie')->with('flash_message', 'movie Updated!');
    }


    public function destroy($id)
    {
        Movie::destroy($id);
        return redirect('movie')->with('flash_message', 'movie deleted!');
    }
}
