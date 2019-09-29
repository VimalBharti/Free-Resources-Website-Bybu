@extends('layouts.app')

@section('title', 'Post new freebie')

@section('content')

  <v-toolbar>
    <v-toolbar-title>Bybu - Images</v-toolbar-title>
    <v-spacer></v-spacer>
    <v-toolbar-items class="hidden-sm-and-down">
      <v-btn flat>Admin Dashbaord</v-btn>
    </v-toolbar-items>
  </v-toolbar>

  <v-container>
    <v-layout>
      <v-flex xs12>
        <div class="images-box">
          <h2 class="mb-4">Add Images</h2>
          {!! Form::open(array('route' => 'b-images.store', 'id' => 'post-form', 'enctype' => 'multipart/form-data', 'files' => true)) !!}

            {{ csrf_field() }}
            <input type="file" name="url">
            <v-btn outline color="indigo">
              {{ Form::submit('Save Image', array('class' => 'submit-psd')) }}
            </v-btn>

          {!! Form::close() !!}
        </div>
      </v-flex>
    </v-layout>

    <v-layout>
      @foreach($images as $image)
      <v-flex md3>
        <v-card flat>
          <a href="/storage/images/{{$image->url}}" target="_blank">
            <v-img
              class="white--text"
              aspect-ratio="2"
              position="top center"
              src="/storage/images/{{$image->url}}"
            ></v-img>
          </a>
        </v-card>
      </v-flex>
      @endforeach
    </v-layout>
  </v-container>

  <v-footer class="pa-3" absolute bottom>
    <v-spacer></v-spacer>
    <div>&copy; 2019 Bybu</div>
  </v-footer>

@endsection
