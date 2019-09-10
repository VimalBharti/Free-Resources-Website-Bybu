@extends('layouts.app')

@section('title', 'Profile')

@section('content')

  <div class="plain-footer-container public-profile-page">

    @include('_partials.plainnavbar')

    <v-container>
      <!-- picture -->
      <v-layout class="columns top-pad">

        <v-flex md4 class="left-sidebar">
            <div class="left-sidebar-top">
              <img src="/avatar/{{$user->avatar}}">
              <h1>{{$user->name}}</h1>
              <h2>
                {{$user->city}},
                @if(isset ($user->country_id))
                  {{$user->country->name}}
                @endif
              </h2>

              <div class="column social-icons-links">
                <ul>
                  @if(isset ($user->behance))
                      <li><a href="{{$user->behance}}" target="_blank">
                        <i class="fa fa-behance"></i>
                      </a></li>
                  @endif
                  @if(isset ($user->twitter))
                      <li><a href="{{$user->twitter}}" target="_blank">
                        <i class="fa fa-twitter"></i>
                      </a></li>
                  @endif
                  @if(isset ($user->dribbble))
                      <li><a href="{{$user->dribbble}}" target="_blank">
                        <i class="fa fa-dribbble"></i>
                      </a></li>
                  @endif
                </ul>
              </div>

              <div class="edit-btn">
                <a href="{{route('profiles.edit', $user->username)}}" class="button">Edit profile</a>
              </div>
            </div>
            <!-- left sidebar top ends -->
            <div class="left-sidebar-bottom">
              <ul>
                <li>
                  <span><i class="fa fa-map-marker fa-lg"></i> From:</span>
                  <span class="text-xs-right font-weight-bold ml-4">{{$user->city}}</span>
                </li>
                <li>
                  <span><i class="fa fa-globe"></i> Country:</span>
                  <span class="text-xs-right font-weight-bold ml-4">
                    @if(isset ($user->country_id))
                      {{$user->country->name}}
                    @else
                      <p>Not mentioned</p>
                    @endif
                  </span>
                </li>
                <li>
                  <span><i class="fa fa-database"></i> Total Post:</span>
                  <span class="text-xs-right font-weight-bold ml-4">{{$post}}</span>
                </li>
                <li>
                  <span><i class="fa fa-heart"></i> Followers:</span>
                  <span class="text-xs-right font-weight-bold ml-4">{{$follower}}</span>
                </li>
              </ul>
            </div>
        </v-flex>
      <!-- end is-4 -->

        <v-flex md8 class="center-bar white">
          <div class="title ml-4 mt-4">All Posts</div>
          <v-container fluid grid-list-md>
            <v-layout row wrap class="all-post-list">
              @foreach ($posts as $post)
                <v-flex md4 class="single-post mb-4">
                  <div class="card">

                    <a href="{{route('post.show', $post->slug)}}" target="_blank">
                      <v-img
                        src="/uploads/design/{{ $post->image }}"
                        lazy-src="{{asset('images/lazy.png')}}"
                        aspect-ratio="1.4"
                        position="top center"
                      ></v-img>
                    </a>

                    <div class="card-content">
                      <div class="subheading my-2">{{$post->title}}</div>

                      <div class="content">
                        @if(isset($post->psd))
                          <a class="is-outlined">PSD</a>
                        @else
                          <a class="is-static">PSD</a>
                        @endif
                        @if(isset($post->coding))
                          <a class="is-outlined">{{$post->framework}}</a>
                        @else
                          <a class="is-static">HTML</a>
                        @endif
                        @if(isset($post->css))
                          <a class="is-outlined">CSS</a>
                        @else
                          <a class="is-static">CSS</a>
                        @endif
                      </div>

                    </div>
                  </div>
                </v-flex>
              @endforeach
            </v-layout>
          </v-container>
        </v-flex>

      </v-layout>

    </v-container>

  </div>

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
