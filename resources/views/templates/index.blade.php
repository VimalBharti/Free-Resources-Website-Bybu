@extends('layouts.app')

@section('title', 'Free Templates in Bootstrap, Bulma, Tailwind, Foundtaion, Materialize')

@section('content')

  <div class="menu-bar">
    @include('_partials.plainnavbar')
  </div>

  <div class="main-slider-template">
    <div class="swiper-container">
      <div class="swiper-wrapper">
        @forelse($frameworks as $framework)
          <div class="swiper-slide">
            <a class="slider-category">
              <v-img src="/uploads/brands/{{$framework->image}}" alt="Bybu.cc:{{$framework->name}}"></v-img>
            </a>
          </div>
        @empty
          <div class="swiper-slide">
            <strong>No Data Found :</strong>
          </div>
        @endforelse
      </div>
    </div>
  </div>

  <v-container grid-list-xl mt-5 class="template-index-page">
    <v-layout row wrap>
      @foreach($templates as $template)
        <v-flex md4 xs6 d-flex>
          <v-card>
            <a href="{{route('free-templates.show', $template->slug)}}">
              <v-img
                class="white--text"
                aspect-ratio="1.4"
                position="top center"
                src="/storage/templates/{{$template->image}}"
              ></v-img>
            </a>
            <v-card-title class="pb-0">
              <div class="subheading">
                <a href="{{route('free-templates.show', $template->slug)}}" class="grey--text text--darken-4 font-weight-bold">
                  {{$template->title}}
                </a><br>
              </div>
            </v-card-title>
            <v-card-actions>
              <div class="ml-2">
                 <span flat outline small class="grey--text body-1 text-capitalize">
                   {{$template->templatecat->name}}
                 </span>
              </div>
              <v-spacer></v-spacer>
              <div class="mr-2">
                <i class="fa fa-eye purple--text text--lighten-1"></i>
                <span class="ml-2">{{$template->view_count}}</span>
              </div>
            </v-card-actions>
          </v-card>
        </v-flex>
      @endforeach
    </v-layout>
    <v-layout>
      <v-flex xs12>
        <div class="text-xs-center paginate">
          {{ $templates->links() }}
        </div>
      </v-flex>
    </v-layout>
  </v-container>

  @include('_partials.plainfooter')

@stop

@section('stylesheet')
<link rel="stylesheet" href="{{asset('css/swiper.min.css')}}">
@endsection

@section('scripts')
<script src="{{asset('js/swiper.min.js')}}"></script>
<script type="text/javascript">
  var swiper = new Swiper('.swiper-container', {
    slidesPerView: 5,
    spaceBetween: 0,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
  });
</script>
@endsection
