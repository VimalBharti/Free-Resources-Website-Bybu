<?php

namespace App\Http\Controllers;

use App\Framework;
use App\Template;
use Illuminate\Http\Request;

class FrameworkController extends Controller
{

    public function templateByFramework($name)
    {
      $framework = Framework::where('name', $name)->first();
      $templates = Template::latest()->paginate(15);
      return view('framework.allTemplate', compact('framework', 'templates'));
    }

    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Framework  $framework
     * @return \Illuminate\Http\Response
     */
    public function show(Framework $framework)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Framework  $framework
     * @return \Illuminate\Http\Response
     */
    public function edit(Framework $framework)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Framework  $framework
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Framework $framework)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Framework  $framework
     * @return \Illuminate\Http\Response
     */
    public function destroy(Framework $framework)
    {
        //
    }
}
