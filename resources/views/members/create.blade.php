@extends('layouts.app')

  @section('title', 'Post new freebie')

  @section('stylesheet')
    {!! Html::style('css/select2.min.css') !!}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
  @stop

@section('content')

  <div class="user-dashboard">

    <div class="menu-bar">
      @include('_partials.plainnavbar')
    </div>

    <!-- ==================Flash Messages===================-->
        <div>@include('_partials.flashMsg._error')</div>
        <div>@include('_partials.flashMsg._postsave')</div>
    <!-- ==================Flash Messages===================-->

    <v-layout>
      <v-flex md2>
        @include('members.sidebar')
      </v-flex>

      <v-flex md7 xs12 class="create-new-post">
          <div class="title">Add Post</div>

          {!! Form::open(array('route' => 'members.store', 'id' => 'post-form', 'enctype' => 'multipart/form-data', 'files' => true)) !!}
            {{ csrf_field() }}

            <!-- Title -->
            <div class="field">
              <v-text-field
                label="Enter Title"
                name="title"
                outline
              ></v-text-field>
            </div>
            <!-- Category -->
            <div class="field">
              <label class="label">Select Category</label>
              <div class="control">
                <div class="select is-medium is-fullwidth">
                  <select name="category">
                    @foreach($categories as $category)
                      <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
            </div>
            <!-- Featured image -->
            <div class="field">
              <label class="label">Upload Featured Image:</label>
              <div class="control with-border">
                <div class="file has-name">
                  <div class="featured">
                    <input type="file" name="image">
                  </div>
                </div>
              </div>
            </div>
            <!-- Credit -->
            <label class="label">Give Credit to Designer (optional)</label>
            <div class="field is-grouped">
              <v-text-field
                label="Designer name"
                name="credit"
                outline
              ></v-text-field>
              <v-text-field
                label="Profile URL"
                name="url"
                outline
              ></v-text-field>
            </div>
            <!-- Framework -->
            <div class="framework-checkbtn field">
              <label class="label">Framework name (if use any) :
                <input type="checkbox" id="yCheck" onclick="myFramework()">
              </label>
              <h5>(eg. Bootstrap, Foundation, Semantic UI, etc..)</h5>
            </div>
            <div id="framework-field">
              <p>( Remove default value and enter framework name )</p>
              <div class="field">
                <v-text-field
                  label="if not than leave empty (optional)"
                  name="framework"
                  value="html"
                  outline
                ></v-text-field>
              </div>
            </div>
            <!-- CSS -->
            <div class="field">
              <v-textarea
                outline
                name="css"
                label="Paste CSS Style"
                rows="15"
              ></v-textarea>
            </div>
            <!-- Code -->
            <div class="field">
              <v-textarea
                outline
                name="coding"
                label="Paste Markup"
                rows="15"
              ></v-textarea>
            </div>
            <!-- JavaScript -->
            <div class="field">
              <v-textarea
                outline
                name="js"
                label="JavaScript"
                rows="15"
              ></v-textarea>
            </div>

            <!-- Keywords / description -->
            <div class="field">
              <v-text-field
                label="Keywords / short description"
                name="keyword"
                outline
              ></v-text-field>
            </div>

            <!-- Tags -->
            <div class="field">
              <label class="label">Select Tag</label>
              <div class="control">
                <div class="select is-medium is-fullwidth">
                  <select name="tags[]" class="select2-multi" multiple="multiple">
                    @foreach($tags as $tag)
                      <option value="{{$tag->id}}">{{$tag->name}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
            </div>

            <div class="field">
              <div class="control">
                <label class="checkbox terms-tick">
                  <input type="checkbox" required>
                  I agree to the <a href="{{url('/terms')}}">terms and conditions</a>
                </label>
              </div>
            </div>

            <div class="field is-grouped">
              <div class="control">
                {{ Form::submit('Submit freebie', array('class' => 'submit-freebie')) }}
              </div>
            </div>

          {!! Form::close() !!}
      </v-flex>

      <v-flex md3 class="right-sidebar-about">
        <div class="content">
          <h4>Featured Image</h4>
          <ul>
            <li>Maximum Image Size: 2MB</li>
            <li>Image Extension: JPEG | PNG</li>
          </ul>

          <h4>Credit</h4>
          <ul>
            <li>Mention designer name if you use his/her design.</li>
            <li>with his/her social account url; (behance, dribbble, etc)</li>
          </ul>

          <h4>Framework</h4>
          <ul>
            <li>Select checkbox if your code is build with any Framework</li>
            <li>Remove default value (HTML) and enter your framework name.</li>
          </ul>

        </div>
      </v-flex>

    </v-layout>
  </div>


@endsection

@section('scripts')
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-123989535-1"></script>
  {!! Html::script('js/select2.min.js') !!}
  <script type="text/javascript">
    $('.select2-multi').select2();

    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-123989535-1');
  </script>
@endsection
