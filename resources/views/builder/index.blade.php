@extends('layouts.app')

@section('title', 'Bybu')

@section('content')

  @include('_partials.plainnavbar')

  <div class="builder-index">
    <v-container fluid grid-list-xl>
      <v-layout row wrap>
        <v-flex md6>
          <v-card>
            <v-img
              class="white--text"
              aspect-ratio="2"
              src="{{asset('images/login.png')}}"
            >
            </v-img>
            <v-card-title>
              <div class="title">Login Page</div>
              <div class="caption">Mac, Windows and Linux web editor that lets you build responsive websites faster with live multi-page editing</div>
            </v-card-title>
            <v-card-actions>
              <v-btn flat outline color="orange" href="{{route('builder.loginpage')}}">
                Build Now
              </v-btn>
            </v-card-actions>
          </v-card>
        </v-flex>
        <v-flex md6>
          <v-card>
            <v-img
              class="white--text"
              aspect-ratio="2"
              src="{{asset('images/404.jpg')}}"
            >
            </v-img>
            <v-card-title>
              <div class="title">404 Error Page</div>
              <div class="caption">Mac, Windows and Linux web editor that lets you build responsive websites faster with live multi-page editing</div>
            </v-card-title>
            <v-card-actions>
              <v-btn flat outline color="orange">Build Now</v-btn>
            </v-card-actions>
          </v-card>
        </v-flex>
      </v-layout>
    </v-container>
  </div>
@stop
