<?php

namespace App\Http\Controllers;

use App\Jsonusers;
use App\Jsonposts;
use App\Jsonalbums;
use App\Jsoncomments;
use App\Jsontestimonials;
use App\Jsonproperty;
use Response;
use Illuminate\Http\Request;

class JsonbondController extends Controller
{
    public function index(){return view('jsonbond.index');}

    public function userIndex()
    {
      $users = Jsonusers::all();
      return Response::make(json_encode($users, JSON_PRETTY_PRINT))->header('Content-Type', "application/json");
    }
    public function postUser(Request $request)
    {
      $user = new User;

      $user->name = $request->name;
      $user->username = $request->username;
      $user->email = $request->email;
      $user->address = $request->address;
      $user->phone = $request->phone;

      $user->save();
      return redirect()->back();
    }

    public function userPost()
    {
      $userPosts = Jsonposts::all();
      return Response::make(json_encode($userPosts, JSON_PRETTY_PRINT))->header('Content-Type', "application/json");
    }

    public function userAlbum()
    {
      $userAlbum = Jsonalbums::all();
      return Response::make(json_encode($userAlbum, JSON_PRETTY_PRINT))->header('Content-Type', "application/json");
    }

    public function userComment()
    {
      $userComment = Jsoncomments::all();
      return Response::make(json_encode($userComment, JSON_PRETTY_PRINT))->header('Content-Type', "application/json");
    }

    public function userTestominal()
    {
      $userTestimonial = Jsontestimonials::all();
      return Response::make(json_encode($userTestimonial, JSON_PRETTY_PRINT))->header('Content-Type', "application/json");
    }

    public function userProperty()
    {
      $userProperty = Jsonproperty::all();
      return Response::make(json_encode($userProperty, JSON_PRETTY_PRINT))->header('Content-Type', "application/json");
    }

}
