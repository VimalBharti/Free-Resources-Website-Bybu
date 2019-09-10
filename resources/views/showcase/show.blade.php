@extends('layouts.app')

@section('title', 'Free showcase')

@section('content')

  <div class="plain-footer-container showcase-page">

    @include('_partials.plainnavbar')

      <v-layout class="showcase-area grey lighten-5">

            @foreach($showcases as $showcase)
                <v-flex xs4 class="uploded-image">
                    <a href="{{route('showcase.single', $showcase->slug)}}" target="_blank">
                      <v-img
                        src="/myshowcase/{{$showcase->image}}"
                        aspect-ratio="1.4"
                        position="top center"
                      ></v-img>
                    </a>

                    <!-- delete image -->
                    <div class="delete-button-box">
                        {!! Form::open(['route' => ['me.destroy', $showcase->id], 'method' => 'DELETE' ]) !!}
                            {!! Form::submit('Delete', ['class' => 'delete-button']) !!}
                        {!! Form::close() !!}
                    </div>
                </v-flex>
            @endforeach

            {!! Form::open(array('route' => 'me.store', 'data-parsley-validate' => '', 'enctype' => 'multipart/form-data', 'files' => true)) !!}

                <div class="add-showcase">
                    <div class="">
                        <input type="file" name="image" class="form-control" id="files" style="display:none;" onchange='this.form.submit();'>
                    </div>
                    <div class="add-new-icon">
                        <ul class="inline-block">
                            <li class="upload-icon">
                                <label for="files" class="btn upload">
                                    <img src="{{asset('images/plus.png')}}">
                                </label>
                            </li>
                        </ul>
                    </div>
                </div>

            {!! Form::close() !!}

      </v-layout>

  </div>

  @include('_partials.plainfooter')

@endsection

@section('scripts')
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-123989535-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-123989535-1');
  </script>
@endsection
