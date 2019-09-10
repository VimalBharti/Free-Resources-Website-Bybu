<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use App\Psd;
use App\User;
use App\Tag;
use App\Category;
use Validator;
use Session;
use Auth;
use Image;
use DB;
use Mail;

class PsdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $psds = Psd::all();
        return view('psd.index', compact('psds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(User $user)
    {
      $categories = Category::all();
      $tags = Tag::all();
      $username = str_slug($user->name);
      $user = Auth::user();
      return view('psd.create', compact('categories', 'tags', 'username', 'user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // validate the data
      $rules = [
          'image' => 'required|mimes:jpeg,gif,png,jpg|max:5000',
      ];
      $this->validate($request, $rules);

      $psd = new Psd;

      $psd->title = $request->title;
      $psd->description = $request->description;
      $psd->psd = $request->psd;
      $psd->category = $request->category;

      if($request->hasFile('image')){
          $image = $request->file('image');
          $filename = rand() . '_' . $image->getClientOriginalName();
          Image::make($image)->save(public_path('uploads/psd/' . $filename));
          $psd->image = $filename;
      }

      $psd->save();

      Session::flash('successPost', 'Success!');
      return redirect()->back();

    }

    public function psdDownload(Request $request) {
      $this->validate($request, ['email' => 'required|email']);

      $data = array(
        'name' => $request->name,
        'email' => $request->email,
        'title' => $request->title,
        'psd' => $request->psd,
      );

      Mail::send('emails.psd', $data, function($message) use ($data){
        $message->from($data['email']);
        $message->to('cc.bybu@gmail.com');
        $message->subject('PSD Download Request');
      });

      Session::flash('success', "Congratz! Form Sent Successfully");
      return redirect()->back();
    }

    public function show($slug){
      $psd = Psd::where('slug', '=', $slug)->first();
      return view('psd.single', compact('psd'));
    }

    public function edit($id){}

    public function update(Request $request, $id){}

    public function destroy($id){}

}
