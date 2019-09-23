@extends('layouts.app')

@section('title', 'Bybu')

@section('content')

  <div class="menu-bar">
    @include('_partials.plainnavbar')
  </div>

  <v-layout>
    <v-flex xs12>
      <div class="single-framework-page-header">
        <span class="first-letter">
          {{ str_limit($framework->name, 1, $end='') }}
        </span>
        <h1>{{$framework->name}}</h1>
      </div>
    </v-flex>
  </v-layout>

  <v-container grid-list-xl mt-5 class="template-index-page">
    <v-layout row wrap>
      @foreach($templates as $template)
        <v-flex md4 d-flex>
          <v-card>
            <a href="{{route('free-templates.show', $template->slug)}}">
            <v-img
              class="white--text"
              aspect-ratio="1.4"
              position="top center"
              src="/storage/templates/{{$template->image}}"
            ></a>
            </v-img>
            <v-card-title>
              <div class="subheading">
                <a class="grey--text text--darken-4 font-weight-bold">
                  {{$template->title}}
                </a><br>
                <span class="caption grey--text">{{$template->templatecat->name}}</span>
              </div>
            </v-card-title>
            <v-card-actions class="pa-0">
              <v-btn block href="{{route('free-templates.show', $template->slug)}}">
                 <span flat outline small class="grey--text body-1 text-capitalize">
                   Preview
                 </span>
              </v-btn>
              <v-btn block class="grey--text" href="/storage/templates/{{$framework->name}}/{{$template->slug}}.zip">
                <i class="fa fa-download"></i>
                <span class="caption ml-2">Download</span>
              </v-btn>
            </v-card-actions>
          </v-card>
        </v-flex>
      @endforeach
    </v-layout>
    <v-layout>
      <v-flex xs12>
        <div class="text-xs-center paginate">
          {{ $templates->links() }}
        </div>
      </v-flex>
    </v-layout>
  </v-container>

  @include('_partials.plainfooter')

@stop
