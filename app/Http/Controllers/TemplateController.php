<?php

namespace App\Http\Controllers;

use App\Template;
use App\Templatecat;
use App\Framework;
use Illuminate\Http\Request;
use Response;
use Session;
use Image;

class TemplateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $frameworks = Framework::all();
        $templates = Template::latest()->paginate(12);
        return view('templates.index', compact('templates', 'frameworks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $templatecat = Templatecat::all();
      return view('templates.create', compact('templatecat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
          'image'   => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:6000',
          'bootstrap'   => 'required|mimes:zip',
        ];
        $this->validate($request, $rules);

        $template = new Template;

        $template->title = $request->title;
        $template->templatecat_id = $request->templatecat_id;
        $template->about = $request->about;
        $template->code = $request->code;

        if($request->hasFile('image')){
          $filename = $request->file('image')->getClientOriginalName();
          $fileNameToStore = $filename;
          $path = $request->file('image')->storeAs('public/templates/', $fileNameToStore);
          $template->image = $fileNameToStore;
        }

        // bootstrap
        if($request->hasFile('bootstrap')){
          $filename = $request->file('bootstrap')->getClientOriginalName();
          $extension = $request->file('bootstrap')->getClientOriginalExtension();
          $fileNameToStore = $filename;
          $path = $request->file('bootstrap')->storeAs('public/templates/bootstrap/', $fileNameToStore);
          $template->bootstrap = $fileNameToStore;
        }
        // Bulma
        if($request->hasFile('bulma')){
          $filename = $request->file('bulma')->getClientOriginalName();
          $extension = $request->file('bulma')->getClientOriginalExtension();
          $fileNameToStore = $filename;
          $path = $request->file('bulma')->storeAs('public/templates/bulma/', $fileNameToStore);
          $template->bulma = $fileNameToStore;
        }
        // foundation
        if($request->hasFile('foundation')){
          $filename = $request->file('foundation')->getClientOriginalName();
          $extension = $request->file('foundation')->getClientOriginalExtension();
          $fileNameToStore = $filename;
          $path = $request->file('foundation')->storeAs('public/templates/foundation/', $fileNameToStore);
          $template->foundation = $fileNameToStore;
        }
        // materialize
        if($request->hasFile('materialize')){
          $filename = $request->file('materialize')->getClientOriginalName();
          $extension = $request->file('materialize')->getClientOriginalExtension();
          $fileNameToStore = $filename;
          $path = $request->file('materialize')->storeAs('public/templates/materialize/', $fileNameToStore);
          $template->materialize = $fileNameToStore;
        }
        // materialui
        if($request->hasFile('materialui')){
          $filename = $request->file('materialui')->getClientOriginalName();
          $extension = $request->file('materialui')->getClientOriginalExtension();
          $fileNameToStore = $filename;
          $path = $request->file('materialui')->storeAs('public/templates/materialui/', $fileNameToStore);
          $template->materialui = $fileNameToStore;
        }
        // tailwind
        if($request->hasFile('tailwind')){
          $filename = $request->file('tailwind')->getClientOriginalName();
          $extension = $request->file('tailwind')->getClientOriginalExtension();
          $fileNameToStore = $filename;
          $path = $request->file('tailwind')->storeAs('public/templates/tailwind/', $fileNameToStore);
          $template->tailwind = $fileNameToStore;
        }

        $template->save();
        return redirect()->back()->with('success', 'Post Created');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Template  $template
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
      $frameworks = Framework::all();
      $template = Template::where('slug', '=', $slug)->first();

      $templateKey = 'blog_' . $template->id;
      if (!Session::has($templateKey)){
        $template->increment('view_count');
        Session::put($templateKey,1);
      }
      return view('templates.single', compact('template', 'frameworks'));
    }

    public function preview($slug)
    {
      $template = Template::where('slug', '=', $slug)->first();
      return view('templates.preview', compact('template'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Template  $template
     * @return \Illuminate\Http\Response
     */
    public function edit(Template $template)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Template  $template
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Template $template)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Template  $template
     * @return \Illuminate\Http\Response
     */
    public function destroy(Template $template)
    {
        //
    }
}
