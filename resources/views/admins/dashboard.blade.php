@extends('layouts.app')

@section('content')

  @include('_partials.plainnavbar')

  <div class="section">
    <v-layout class="admin-panel">

      <v-flex md2>
        @include('admins.sidebar')
      </v-flex>

      <v-flex md5 class="grey lighten-5">
        <div class="categories-box">
          <h2>All Categories</h2>
          @include('categories.index')

          <h2>All Tags</h2>
          @include('tags.index')
        </div>
      </v-flex>
      <v-flex md5 class="grey lighten-5">
        <div class="categories-box">
          <h2 class="mb-4">Add CassAss</h2>
          {!! Form::open(['route' => 'cassass.store', 'method' => 'POST']) !!}
              {{ Form::label('title', 'Title:') }}<br>
              {{ Form::text('title', null, ['style' => 'font-size:1.6em;border:1px solid #333;']) }}<br>

              {{ Form::label('class', 'Class:') }} <br>
              {{ Form::text('class', null, ['style' => 'font-size:1.6em;border:1px solid #333;']) }}<br>

              {{ Form::label('code', 'CSS Code:') }}<br>
              {{ Form::text('code', null, ['style' => 'font-size:1.6em;border:1px solid #333;']) }}<br>

              {{ Form::submit('Add CassAss', ['class' => 'button is-primary', 'style' => 'height:35px;width:150px;background:#333;color:#fff;margin-top:2em;']) }}
          {!! Form::close() !!}
        </div>
      </v-flex>

    </v-layout>
  </div>


@endsection
