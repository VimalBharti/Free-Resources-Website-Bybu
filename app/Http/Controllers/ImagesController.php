<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;

class ImagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = Gallery::all();
        return view('Images.index', compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Images.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $gallery = new Gallery;

        if($request->hasFile('url')){
          $image = $request->file('url');
          $new_name = $image->getClientOriginalName();
          $image->move(public_path("b-images"), $new_name);
          $gallery->url = $new_name;
        }

        $gallery->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Images  $images
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Images  $images
     * @return \Illuminate\Http\Response
     */
    public function edit(Images $images)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Images  $images
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $images){}


    public function destroy($id)
    {
      $image = Gallery::find($id);

      if(!empty($image->url)) {
          if(file_exists(public_path('b-images/'. $image->url))){
              unlink(public_path('b-images/'. $image->url));
          }
      }
      $image->delete();
      return redirect()->back();
    }
}
