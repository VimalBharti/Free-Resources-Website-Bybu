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
