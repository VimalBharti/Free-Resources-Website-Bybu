@extends('layouts.app')

@section('title', $single->slug)

@section('stylesheet')
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css"> -->
@stop

@section('content')

  <div class="menu-bar">
    @include('_partials.plainnavbar')
  </div>

  <div class="single-design-page">

    <v-img src="/uploads/design/{{ $single->image }}"></v-img>

    <v-tabs
      centered grow
      color="#fefefe"
      height="60px"
    >

      <v-tabs-slider color="cyan"></v-tabs-slider>

      <v-tab href="#tab-1">
        <i class="fa fa-code"></i> CODE
      </v-tab>

      <v-tab href="#tab-2">
        <i class="fa fa-css3"></i> CSS
      </v-tab>

      <v-tab href="#tab-3">
        <i class="fa fa-bolt"></i>JS
      </v-tab>

      <v-tab-item value="tab-1">
        <code>{{ $single->coding }}</code>
      </v-tab-item>
      <v-tab-item value="tab-2">
        <code>{{$single->css}}</code>
      </v-tab-item>
      <v-tab-item value="tab-3">
        <code>{{$single->js}}</code>
      </v-tab-item>
    </v-tabs>

    <v-toolbar dense flat class="content posted-by-single-page white">
      <v-toolbar-items>
        <p><i class="fa fa-edit"></i> Submitted By:
          <strong><a href="/profile/{{$single->user_slug}}">{{$single->user_name}}</a></strong>
        </p>
      </v-toolbar-items>
      <v-spacer></v-spacer>
      <v-toolbar-items>
        @if(isset($single->credit))
        <p><i class="fa fa-edit"></i> Credit:
          <strong><a href="{{$single->url}}" target="_blank">{{$single->credit}}</a></strong>
        </p>
        @endif
      </v-toolbar-items>
    </v-toolbar>

    <v-toolbar>
      @foreach($single->tags as $tag)
        <v-chip small color="pink" text-color="white">{{ $tag->name }}</v-chip>
      @endforeach
    </v-toolbar>

  </div>
  <!-- container ends -->

    @include('_partials.footer')

  @stop
