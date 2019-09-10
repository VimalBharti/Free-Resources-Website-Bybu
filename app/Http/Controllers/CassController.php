<?php

namespace App\Http\Controllers;

use App\Cass;
use Illuminate\Http\Request;

class CassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $cass = Cass::all();
      return view('cass.index', compact('cass'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cass = New Cass;

        $cass->title = $request->title;
        $cass->class = $request->class;
        $cass->code = $request->code;

        $cass->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cass  $cass
     * @return \Illuminate\Http\Response
     */
    public function show(Cass $cass)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cass  $cass
     * @return \Illuminate\Http\Response
     */
    public function edit(Cass $cass)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cass  $cass
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cass $cass)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cass  $cass
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cass $cass)
    {
      $cass = Cass::find($id);
      $cass->delete();
      return redirect()->back();
    }
}
