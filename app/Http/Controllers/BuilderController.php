<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuilderController extends Controller
{
    public function index(){
      return view('builder.index');
    }

    public function login(){
      return view('builder.loginpage');
    }

    // Bootstrap
    public function loginBootstrap(){
      return view('builder.bootstrap.bootstrap');
    }
      public function loginBootstrapOne(){
        return view('builder.bootstrap.login.one');
      }
}
