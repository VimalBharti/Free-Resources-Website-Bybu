@extends('layouts.app')

@section('title', 'Bybu')

@section('content')

  <!-- <Preloader></Preloader> -->

  <div class="home-top hidden-sm-and-down">
    @include('_partials.navbar')
    <v-container>
      <v-layout class="hero-body">
        <v-flex md5 class="hero-left">
          <h1>Daily Freebies Resources for Creatives</h1>
          <p>High quality design resources for free. Crafted with love from amazing artists and professionals around the world. Free Graphics, template, Podcast, E-books & more.</p>
        </v-flex>
        <v-flex md7 class="hero-right">
          <v-img src="{{asset('images/hero.svg')}}" class="hero-img"></v-img>
        </v-flex>
      </v-layout>
    </v-container>
  </div>

  <div class="hidden-md-and-up grey lighten-4 mobile-hero">
    <img src="{{asset('images/s-logo.png')}}" alt="bybu.cc" style="height:52px;">
  </div>

  <!-- Templates Grids -->
  <div class="home-psd-list py-5">
    <v-container grid-list-xl>
      <v-layout>
        <v-flex>
          <div class="top-psd-content">
            <div class="display-1 mb-2">Best Free Website Templates</div>
            <div class="mb-4 grey--text caption font-weight-bold" style="letter-spacing: 4px;">
              BOOTSTRAP | BULMA | TAILWIND | MATERILIZE | SEMENATICUI | FOUNDATION
            </div>
            <div class="para">We aim to bring you the best free website templates, which you will not find on any other place. Join us and download our premium quality free templates for your personal and commercial use. Build your dream with help of our free Templates.</div>
          </div>
        </v-flex>
      </v-layout>

      <v-layout class="psd-grid">
        @foreach ($templates as $template)
        <v-flex md4 d-flex>
          <v-card white flat hover class="single-psd-list">
            <a href="{{route('free-templates.show', $template->slug)}}" target="_blank">
              <v-img
                src="/storage/templates/{{$template->image}}"
                aspect-ratio="1.4"
                position="top center"
                v-on="on"
                class="thumbnail"
              ></v-img>
            </a>
            <v-card-text>
              <div class="title">
                <a>{{str_limit($template->title, 30, '..')}}</a>
              </div>
              <div class="about-psd">
                {{str_limit($template->about, 120)}}
              </div>
              <v-btn
                block large dark round color="purple"
                href="{{route('free-templates.show', $template->slug)}}" target="_blank"
              >Preview & Download
              </v-btn>
            </v-card-text>
          </v-card>
        </v-flex>
        @endforeach
      </v-layout>

      <v-flex class="text-xs-center">
        <v-btn outline large round block color="purple" href="{{route('free-templates.index')}}">View all</v-btn>
      </v-flex>

    </v-container>
  </div>

  <div class="byhelp">
    <a href="http://bybu.tech" target="_blank">
      <img src="{{asset('images/byhelp.png')}}" alt="Free & Easy to use image to text converter">
    </a>
  </div>

  <!-- PSD Grids -->
  <!-- <div class="home-psd-list py-5">
    <v-container grid-list-xl>
      <v-layout>
        <v-flex>
          <div class="top-psd-content">
            <div class="display-1 mb-5">Best Free PSD Website Templates</div>
            <div class="para">We aim to bring you the best free psd website templates, which you will not find on any other place. Join us and download our premium quality free psd templates for your personal and commercial use. Build your dream with help of our free psd mockups.</div>
          </div>
        </v-flex>
      </v-layout>

      <v-layout class="psd-grid">
        @foreach ($psds as $psd)
        <v-flex md4 d-flex>
          <v-card white flat hover class="single-psd-list">
            <a href="{{route('psd.show', $psd->slug)}}" target="_blank">
              <v-img
                src="uploads/psd/{{$psd->image}}"
                aspect-ratio="1.4"
                position="top center"
                v-on="on"
                class="thumbnail"
              ></v-img>
            </a>
            <v-card-text>
              <div class="title">
                <a>{{str_limit($psd->title, 30, '..')}}</a>
              </div>
              <div class="about-psd">
                {{str_limit($psd->description, 120)}}
              </div>
              <v-btn
                block large dark round color="purple"
                href="{{route('psd.show', $psd->slug)}}" target="_blank"
              >Preview & Download
              </v-btn>
            </v-card-text>
          </v-card>
        </v-flex>
        @endforeach
      </v-layout>

      <v-flex class="text-xs-center">
        <v-btn outline large round block color="purple" href="{{route('psd.index')}}">View all</v-btn>
      </v-flex>

    </v-container>
  </div> -->

  <!-- Free Design Resource -->
  <v-container grid-list-lg class="mb-5">
    <div class="headline font-weight-medium mt-5">Latest Free Design Resources</div>
    <div class="mb-4 mt-1 grey--text text--darken-1">Hand-picked resources for web designer and developers, constantly updated.</div>
    <v-layout row wrap class="home-post-list">
      @if (count($posts) > 0)
        @foreach ($posts as $post)
          <v-flex md3 xs6 d-flex>
            <v-card flat>
              <a href="{{route('post.show', $post->slug)}}" target="_blank">
                <v-img
                  src="/uploads/design/{{ $post->image }}"
                  lazy-src="{{asset('images/lazy.png')}}"
                  aspect-ratio="1.4"
                  position="top center"
                ></v-img>
              </a>
              <div class="subheading mt-3">
                {{ $post->title }}
              </div>
              <v-card-actions class="chips-tag px-0">
                @if(isset($post->psd))
                  <span><i class="fas fa-dot-circle green--text text--lighten-1"></i> PSD</span>
                @endif
                @if(isset($post->coding))
                  <span><i class="fa fa-dot-circle purple--text text--lighten-2"></i> {{$post->framework}}</span>
                @endif
                @if(isset($post->css))
                  <span><i class="fa fa-dot-circle cyan--text text--lighten-1"></i> CSS</span>
                @endif
                <!-- <v-chip outline color="teal">CSS</v-chip> -->

                <v-spacer></v-spacer>

                <v-avatar size="22px">
                  <img src="/avatar/{{$post->user_image}}">
                </v-avatar>
              </v-card-actions>
            </v-card>
          </v-flex>
        @endforeach
      @endif
    </v-layout>
  </v-container>


  <!-- Image Clip paths -->
  <v-container grid-list-lg class="mb-5">
    <div class="headline font-weight-medium">Image Clip paths</div>
    <div class="mb-4 mt-1 grey--text text--darken-1">Clip a specific region of an image to display, rather than showing the complete area.</div>
    <v-layout row wrap class="home-cassass">
      @foreach($casse as $cass)
      <v-flex md3 xs6 d-flex>
        <v-card>
          <v-img
            src="images/css.jpg"
            aspect-ratio="1.4"
            class="{{$cass->class}}"
          ></v-img>
          <v-card-title primary-title>
            <h3 class="title mb-0">{{$cass->title}}</h3>
            <code>
img{
  {{$cass->code}}
}
            </code>
          </v-card-title>
        </v-card>
      </v-flex>
      @endforeach
    </v-layout>
    <v-layout>
      <v-flex class="text-xs-center mt-2">
        <v-btn outline color="blue" round large href="{{route('cassass.index')}}">See all</v-btn>
      </v-flex>
    </v-layout>
  </v-container>

  <!-- Free Books -->
  <div class="free-books mb-5">

      <v-layout row class="top-box">
          <v-flex md2></v-flex>
          <v-flex md4>
            <div class="top-content">
              <div class="caption font-weight-bold blue--text">CHOOSE | READ | DOWNLOAD</div>
              <div class="display-1 my-2">Download Free E-Books</div>
              <div class="grey--text text--darken-1">Find books to read online and download free eBooks. Discover and read free books by indie authors as well as tons of classic books</div>
            </div>
          </v-flex>
          <v-flex md1></v-flex>
          <v-flex md5>
            <v-img
              src="{{asset('images/book.svg')}}"
            ></v-img>
          </v-flex>

      </v-layout>

      <v-layout row class="bottom-box">
        <v-container>
          <v-flex md4 offset-md1 xs12>
            <div class="bottom-content">
              <ul>
                <li>
                  <v-btn fab dark flat large class="purple-btn">
                    <i class="fa fa-book fa-2x"></i>
                  </v-btn>
                  <h4>Read</h4>
                </li>
                <li>
                  <v-btn fab dark flat large class="purple-btn">
                    <i class="fa fa-bookmark fa-2x"></i>
                  </v-btn>
                  <h4>Bookmark</h4>
                </li>
                <li>
                  <v-btn fab dark flat large class="purple-btn">
                    <i class="fa fa-download fa-2x"></i>
                  </v-btn>
                  <h4>Download</h4>
                </li>
              </ul>
            </div>
          </v-flex>
        </v-container>
      </v-layout>
  </div>

  <!-- Showcase -->
  <div class="showcase-home-link">
    <v-container fluid>
      <v-layout>
        <v-flex md5>
          <v-img
            src="{{asset('images/showcase.jpg')}}"
          ><v-img>
        </v-flex>
        <v-flex md7 xs12 class="showcase-text-home pt-5">
          <div class="about-top mb-2">ABOUT SHOWCASE</div>
          <div class="display-1 font-weight-bold mb-4">Free Instant Showcase</div>
          <p>Present your design in a professional way. Upload design, Get feedback from client, Manage your work in one place! Bybu is an easy to use tool for web designers. With the help of our system you can present your projects in a browser. It is all very easy!</p>
          <v-btn round large dark class="showcase-btn mt-4" href="{{route('me.index')}}">Visit Showcase</v-btn>
        </v-flex>
      </v-layout>
    </v-container>
  </div>

  @include('pages.join-com')

  @include('_partials.footer')

@stop

@section('scripts')
  <script type="text/javascript">
    $("#no-result").delay(2500).fadeOut(300);
  </script>
@stop
