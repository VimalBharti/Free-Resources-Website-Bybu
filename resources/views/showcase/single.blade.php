@extends('layouts.app')

@section('title', 'Free showcase')

@section('content')

<div class="showcase-area">
  @foreach($showcases as $showcase)
    <v-img
      src="/myshowcase/{{$showcase->image}}"
    ></v-img>
  @endforeach
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
