@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

  <div class="user-dashboard">
    <div class="menu-bar">
      @include('_partials.plainnavbar')
    </div>

    <v-layout>
      <v-flex md2>
        @include('members.sidebar')
      </v-flex>

      <v-flex md10 xs12>
        <v-container grid-list-lg>
          <v-layout class="all-post-list" row wrap>
            @foreach ($posts as $post)
              <v-flex md3 class="single-post">
                <v-card flat>
                  <a href="{{route('post.show', $post->slug)}}" target="_blank">
                    <v-img
                      src="/uploads/design/thumbs/{{ $post->image }}"
                      height="200"
                      lazy-src="{{asset('images/lazy.png')}}"
                    ></v-img>
                  </a>
                  <div class="subheading mt-3">
                    {{ $post->title }}
                  </div>
                  <v-card-actions class="chips-tag px-0">
                    @if(isset($post->psd))
                      <span><i class="fa fa-dot-circle green--text text--lighten-1"></i> PSD</span>
                    @endif
                    @if(isset($post->coding))
                      <span><i class="fa fa-dot-circle purple--text text--lighten-2"></i> {{$post->framework}}</span>
                    @endif
                    @if(isset($post->css))
                      <span><i class="fa fa-dot-circle cyan--text text--lighten-1"></i> CSS</span>
                    @endif

                    <v-spacer></v-spacer>

                    <v-avatar size="22px">
                      <img src="/avatar/{{$post->user_image}}">
                    </v-avatar>
                  </v-card-actions>
                  <div class="action-btn">
                    <v-btn fab outline small
                      href="{{route('members.edit', $post->id)}}"
                    >
                      Edit
                    </v-btn>
                    <v-btn fab outline small>
                      {!! Form::open(['route' => ['members.destroy', $post->id], 'method' => 'DELETE']) !!}
                        {!! Form::submit('trash', ['class' => 'delete-button']) !!}
                      {!! Form::close() !!}
                    </v-btn>
                  </div>
                </v-card>
              </v-flex>
            @endforeach
          </v-layout>
        </v-container>
      </v-flex>
    </v-layout>
  </div>

@endsection
