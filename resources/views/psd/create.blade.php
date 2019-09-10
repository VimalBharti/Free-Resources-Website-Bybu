@extends('layouts.app')

@section('title', 'Bybu')

@section('content')

  @include('_partials.plainnavbar')

  <div class="create-psd">
    <v-container fluid grid-list-xl>
      <v-layout row wrap>
        <!-- ==================Flash Messages===================-->
            <div>@include('_partials.flashMsg._error')</div>
            <div>@include('_partials.flashMsg._postsave')</div>
        <!-- ==================Flash Messages===================-->
        <v-flex md6 offset-md3 white pa-5>

          <div class="headline text-xs-center mb-5">Add New PSD Website Template</div>
          {!! Form::open(array('route' => 'psd.store', 'id' => 'post-form', 'enctype' => 'multipart/form-data', 'files' => true)) !!}

            {{ csrf_field() }}
            <!-- Title -->
            <v-text-field
              label="Title"
              name="title"
              class="mb-3"
            ></v-text-field>
            <!-- Category -->
            <v-text-field
              label="Category"
              name="category"
              class="mb-3"
            ></v-text-field>

            <!-- Featured image -->
            <div class="field mb-3">
              <label class="label">Upload Featured Image:</label>
              <div class="file-input">
                <input type="file" name="image">
              </div>
            </div>

            <v-text-field
              label="PSD URL"
              name="psd"
              class="mb-3"
            ></v-text-field>

            <!-- Keywords / description -->
            <v-textarea
              name="description"
              label="Short Description"
              class="mb-3"
              hint="Maximum 120 characters"
              counter
            ></v-textarea>

            <div class="field mb-5">
              <div class="control">
                <label class="checkbox terms-tick">
                  <input type="checkbox" required>
                  I agree to the <a href="{{url('/terms')}}">terms and conditions</a>
                </label>
              </div>
            </div>

            <div class="field">
              <div class="control">
                {{ Form::submit('Submit PSD', array('class' => 'submit-psd')) }}
              </div>
            </div>

          {!! Form::close() !!}
        </v-flex>
      </v-layout>
    </v-container>
  </div>

  @include('_partials.plainfooter')
@stop
