<?php

namespace App\Http\Controllers;

use App\Models\image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('image');
    }

//     /**
//      * Show the form for creating a new resource.
//      *
//      * @return \Illuminate\Http\Response
//      */
//     public function create()
//     {



//     }

//     /**
//      * Store a newly created resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @return \Illuminate\Http\Response
//      */
//     public function store(Request $request)
//     {

//     }

//     /**
//      * Display the specified resource.
//      *
//      * @param  \App\Models\image  $image
//      * @return \Illuminate\Http\Response
//      */
//     public function show(image $image)
//     {
//         //
//     }

//     /**
//      * Show the form for editing the specified resource.
//      *
//      * @param  \App\Models\  $photo
//      * @return \Illuminate\Http\Response
//      */
//     public function edit(photo $photo)
//     {
//         //
//     }

//     /**
//      * Update the specified resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @param  \App\Models\photo  $photo
//      * @return \Illuminate\Http\Response
//      */
//     public function update(Request $request, photo $photo)
//     {
//         //
//     }

//     /**
//      * Remove the specified resource from storage.
//      *
//      * @param  \App\Models\photo  $photo
//      * @return \Illuminate\Http\Response
//      */
//     public function destroy(photo $photo)
//     {
//         //
//     }
 }
