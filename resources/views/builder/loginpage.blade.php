@extends('layouts.app')

@section('title', 'Bybu')

@section('content')

  @include('_partials.plainnavbar')

  <div class="builder-index">
    <v-container grid-list-xl>
      <h1>Select JS Framework</h1>
      <v-layout row wrap>
        <v-flex md2>
          <v-card height="160">
            <v-img src="{{asset('images/brands/vue.png')}}"></v-img>
          </v-card>
        </v-flex>
        <v-flex md2>
          <v-card height="160">
            <v-img src="{{asset('images/brands/react.png')}}"></v-img>
          </v-card>
        </v-flex>
        <v-flex md2>
          <v-card height="160">
            <v-img src="{{asset('images/brands/angular.png')}}"></v-img>
          </v-card>
        </v-flex>
        <v-flex md2>
          <v-card height="160">
            <v-img src="{{asset('images/brands/polymer.png')}}"></v-img>
          </v-card>
        </v-flex>
      </v-layout>
    </v-container>
    <!-- CSS Framework -->
    <v-container grid-list-xl>
      <h1>Select CSS Framework</h1>
      <v-layout row wrap>
        <v-flex md2>
          <v-card height="160" href="{{route('bootstrap.login')}}">
            <v-img src="{{asset('images/brands/bootstrap.png')}}"></v-img>
          </v-card>
        </v-flex>
        <v-flex md2>
          <v-card height="160">
            <v-img src="{{asset('images/brands/tailwind.png')}}"></v-img>
          </v-card>
        </v-flex>
        <v-flex md2>
          <v-card height="160">
            <v-img src="{{asset('images/brands/bulma.png')}}"></v-img>
          </v-card>
        </v-flex>
        <v-flex md2>
          <v-card height="160">
            <v-img src="{{asset('images/brands/materialize.png')}}"></v-img>
          </v-card>
        </v-flex>
        <v-flex md2>
          <v-card height="160">
            <v-img src="{{asset('images/brands/semantic.png')}}"></v-img>
          </v-card>
        </v-flex>
        <v-flex md2>
          <v-card height="160">
            <v-img src="{{asset('images/brands/foundation.png')}}"></v-img>
          </v-card>
        </v-flex>
        <v-flex md2>
          <v-card height="160">
            <v-img src="{{asset('images/brands/materialui.png')}}"></v-img>
          </v-card>
        </v-flex>
      </v-layout>
    </v-container>
  </div>
@stop
