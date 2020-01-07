@extends('layouts.app')

@section('title', 'Bybu')

@section('content')

  <div class="menu-bar">
    @include('_partials.plainnavbar')
  </div>

  <div class="create-template">
    <v-container fluid grid-list-xl>
      <v-layout row wrap>
        <!-- ==================Flash Messages===================-->
            <div>@include('_partials.flashMsg._error')</div>
            <div>@include('_partials.flashMsg._postsave')</div>
        <!-- ==================Flash Messages===================-->
        <v-flex md6 offset-md3 white pa-5>

          <div class="headline text-xs-center mb-5">Add New Website Template</div>
          {!! Form::open(array('route' => 'free-templates.store', 'id' => 'post-form', 'enctype' => 'multipart/form-data', 'files' => true)) !!}

            {{ csrf_field() }}
            <!-- Title -->
            <v-text-field
              label="Title"
              name="title"
              class="mb-3"
            ></v-text-field>

            <!-- about / description -->
            <v-textarea
              name="about"
              label="Short Description"
              class="mb-3"
              hint="Maximum 120 characters"
              counter
            ></v-textarea>

            <!-- Category -->
            <select class="bybu-select field mb-4" name="templatecat_id">
                <option value="Select Category" selected disabled>Select Category</option>
              @foreach($templatecat as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
              @endforeach
            </select>

            <!-- Featured image -->
            <div class="field mb-3">
              <label class="label">Upload Featured Image:</label>
              <div class="file-input">
                <input type="file" name="image">
              </div>
            </div>

            <!-- code -->
            <div class="field my-4">
              <v-textarea
                name="code"
                label="Preview Code"
                value="code"
              ></v-textarea>
            </div>

            <!-- Bootstrap -->
            <div class="field mb-3">
              <label class="label">Upload Bootstrap File (zip):</label>
              <div class="file-input">
                <input type="file" name="bootstrap">
              </div>
            </div>

            <!-- Bulma -->
            <!-- <div class="field mb-3">
              <label class="label">Upload Bulma File (zip):</label>
              <div class="file-input">
                <input type="file" name="bulma">
              </div>
            </div> -->

            <!-- foundation -->
            <!-- <div class="field mb-3">
              <label class="label">Upload Foundation File (zip):</label>
              <div class="file-input">
                <input type="file" name="foundation">
              </div>
            </div> -->

            <!-- Materialize -->
            <!-- <div class="field mb-3">
              <label class="label">Upload Materialize File (zip):</label>
              <div class="file-input">
                <input type="file" name="materialize">
              </div>
            </div> -->

            <!-- Tailwind -->
            <!-- <div class="field mb-3">
              <label class="label">Upload Tailwind File (zip):</label>
              <div class="file-input">
                <input type="file" name="tailwind">
              </div>
            </div> -->

            <!-- MaterialUI -->
            <!-- <div class="field mb-3">
              <label class="label">Upload Semantic UI File (zip):</label>
              <div class="file-input">
                <input type="file" name="materialui">
              </div>
            </div> -->

            <div class="field">
              <div class="control">
                {{ Form::submit('Submit Template', array('class' => 'submit-psd')) }}
              </div>
            </div>

          {!! Form::close() !!}
        </v-flex>
      </v-layout>
    </v-container>
  </div>

  @include('_partials.plainfooter')
@stop
