@extends('layouts.app')

@section('title', 'Bybu')

@section('content')

  @include('_partials.plainnavbar')

  <div class="builder-index">
    <v-container fluid grid-list-xl>
      <v-layout row wrap>
        <v-flex md4>
          <v-card>
            <v-img
              class="white--text"
              aspect-ratio="1.7"
              src="{{asset('builder/bootstrap/login/1.png')}}"
            >
            </v-img>
            <v-card-title>
              <div class="title">Login Page</div>
              <div class="caption">Mac, Windows and Linux web editor that lets you build responsive websites faster with live multi-page editing</div>
            </v-card-title>
            <v-card-actions>
              <v-btn flat outline color="orange" href="{{route('bootstrap.loginOne')}}">
                Preview
              </v-btn>
              <v-btn flat outline color="orange" href="">
                Download
              </v-btn>
            </v-card-actions>
          </v-card>
        </v-flex>
        <v-flex md4>
          <v-card>
            <v-img
              class="white--text"
              aspect-ratio="1.7"
              src="{{asset('builder/bootstrap/login/2.png')}}"
            >
            </v-img>
            <v-card-title>
              <div class="title">Landing Page</div>
              <div class="caption">Mac, Windows and Linux web editor that lets you build responsive websites faster with live multi-page editing</div>
            </v-card-title>
            <v-card-actions>
              <v-btn flat outline color="orange" href="">
                Preview
              </v-btn>
              <v-btn flat outline color="orange" href="">
                Download
              </v-btn>
            </v-card-actions>
          </v-card>
        </v-flex>
        <v-flex md4>
          <v-card>
            <v-img
              class="white--text"
              aspect-ratio="1.7"
              src="{{asset('builder/bootstrap/login/3.jpg')}}"
            >
            </v-img>
            <v-card-title>
              <div class="title">Landing Page</div>
              <div class="caption">Mac, Windows and Linux web editor that lets you build responsive websites faster with live multi-page editing</div>
            </v-card-title>
            <v-card-actions>
              <v-btn flat outline color="orange" href="">
                Preview
              </v-btn>
              <v-btn flat outline color="orange" href="">
                Download
              </v-btn>
            </v-card-actions>
          </v-card>
        </v-flex>
        <v-flex md4>
          <v-card>
            <v-img
              class="white--text"
              aspect-ratio="1.7"
              src="{{asset('builder/bootstrap/login/4.png')}}"
            >
            </v-img>
            <v-card-title>
              <div class="title">Landing Page</div>
              <div class="caption">Mac, Windows and Linux web editor that lets you build responsive websites faster with live multi-page editing</div>
            </v-card-title>
            <v-card-actions>
              <v-btn flat outline color="orange" href="">
                Preview
              </v-btn>
              <v-btn flat outline color="orange" href="">
                Download
              </v-btn>
            </v-card-actions>
          </v-card>
        </v-flex>
      </v-layout>
    </v-container>
  </div>
@stop
