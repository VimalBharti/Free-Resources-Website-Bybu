@extends('layouts.app')

@section('title', 'Free Templates in Bootstrap, Bulma, Tailwind, Foundtaion, Materialize')

@section('content')

  <div class="menu-bar">
    @include('_partials.plainnavbar')
  </div>

  <v-layout wrap row class="template-single-preview">

    <v-flex md9 xs12>
      <v-img
        src="/storage/templates/{{$template->image}}"
      ></v-img>
    </v-flex>

    <v-flex md3 xs12 pa-4 class="select-framework">
      <h2>{{$template->title}}</h2>
      <p>{{$template->about}}</p>

      

    </v-flex>
  </v-layout>

@stop
