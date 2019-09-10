@extends('layouts.app')

@section('title', 'Profile')

@section('content')

    @include('_partials.plainnavbar')

  <div class="cassass-index">
    <v-container fluid grid-list-lg>

      <v-layout row wrap>
        @foreach($cass as $css)
        <v-flex md3 xs12 d-flex>
          <v-card>
            <v-img
              src="images/css.jpg"
              aspect-ratio="1.4"
              class="{{$css->class}}"
            ></v-img>
            <v-card-title primary-title>
              <h3 class="title my-0">{{$css->title}}</h3>
              <code>
  img{
    {{$css->code}}
  }
              </code>
            </v-card-title>
          </v-card>
        </v-flex>
        @endforeach
      </v-layout>

    </v-container>
  </div>

@endsection

@section('scripts')
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-123989535-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-123989535-1');
  </script> -->
@endsection
