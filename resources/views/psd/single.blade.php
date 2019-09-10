@extends('layouts.app')

@section('title', 'Bybu')

@section('content')

<div class="psd-single-page">

  <v-toolbar class="designer-details">
    <v-toolbar-title>
      <a class="navbar-item" href="{{route('home')}}">
  		  <img src="{{asset('images/white-logo.png')}}" alt="bybu.cc" class="small-logo">
      </a>
    </v-toolbar-title>
    <v-spacer></v-spacer>
    <v-toolbar-items>
      <v-btn flat dark class="button">Category:  <a>{{$psd->category}}</a></v-btn>
      <v-btn flat dark class="button">File format:  <a>PSD</a></v-btn>
    </v-toolbar-items>
  </v-toolbar>

  <v-layout class="psd-download-dialog">
    <v-flex>
      <!-- main-image -->
      <v-img
        src="/uploads/psd/{{$psd->image}}"
        alt="{{$psd->title}}"
      ></v-img>
    </v-flex>

    <v-dialog
      v-model="dialog"
      width="400"
    >
      <template v-slot:activator="{ on }">
        <v-btn color="purple"
          dark fab 
          class="download-btn"
          v-on="on"
        ><i class="fa fa-download" aria-hidden="true"></i>
        </v-btn>
      </template>

      <v-card class="pa-4">
        <v-card-text>
          <form action="{{url('psd-download')}}" method="post">
            {{ csrf_field() }}
              @if(Auth::check())
                <v-text-field
                  required
                  label="Your Name"
                  value="{{ Auth::user()->name }}"
                  name="name"
                ></v-text-field>
              @else
                <v-text-field
                  required
                  label="Your Name"
                  name="name"
                ></v-text-field>
              @endif

              @if(Auth::check())
                <v-text-field
                  label="E-mail"
                  required
                  value="{{ Auth::user()->email }}"
                  name="email"
                ></v-text-field>
              @else
                <v-text-field
                  label="E-mail"
                  required
                  type="email"
                  name="email"
                ></v-text-field>
              @endif

              <v-text-field class="hidden"
                required value="{{$psd->title}}" name="title"></v-text-field>
              <v-text-field class="hidden"
               required value="{{$psd->psd}}" name="psd"></v-text-field>

              <v-sheet
                class="d-flex pa-3 mt-2 mb-4"
                color="purple lighten-5"
              >
                An email will be sent to the provided address to complete your download. Don't forget to check span folder if you found no email on your inbox.
              </v-sheet>
              <!-- <v-btn block class="psdDownload" href="{{$psd->psd}}">Download</v-btn> -->

              <!-- ==================Flash Messages===================-->
                  <div>@include('_partials.flashMsg._error')</div>
              <!-- ==================Flash Messages===================-->

              <input type="submit" class="psdDownload"></imput>
          </form>
        </v-card-text>
      </v-card>
    </v-dialog>
  </v-layout>
</div>

@stop
