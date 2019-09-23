@extends('layouts.app')

@section('title', 'Free showcase')

@section('content')

  <div class="showcase-homepage">

    @include('_partials.plainnavbar')

    <v-layout class="hero">
      <v-flex>
        <div class="display-1">Free Instant Showcase</div>
        <div class="sub-head">Quickly & simply show flat presentation</div>
        <div class="">
          @if(Auth::guest())
            <v-btn href="{{route('me.index')}}" class="button">GET STARTED - FREE FOREVER</v-btn>
          @else
            <v-btn href="{{route('me.index')}}" class="button">Go To Dashboard</v-btn>
          @endif
        </div>
      </v-flex>
    </v-layout>
    <v-img src="{{asset('images/head.jpg')}}"></v-img>
  </div>

  @include('_partials.footer')

@endsection
