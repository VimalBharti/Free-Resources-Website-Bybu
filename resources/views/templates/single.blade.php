@extends('layouts.app')

@section('title', 'Free Templates in Bootstrap, Bulma, Tailwind, Foundtaion, Materialize')

@section('content')

  <div class="menu-bar">
    @include('_partials.plainnavbar')
  </div>

  <v-layout wrap row class="template-single-preview">

    <v-flex md9 xs12>
      <v-img
        src="/storage/templates/{{$template->image}}"
      ></v-img>
    </v-flex>

    <v-flex md3 xs12 pa-4 class="select-framework">
      <h2>{{$template->title}}</h2>
      <p>{{$template->about}}</p>

      <h4>Select Framework to download</h4>
      <v-layout row wrap>
        <v-flex md4 class="icon">
          <v-tooltip top>
            <template v-slot:activator="{ on }">
              <a href="/storage/templates/bootstrap/{{$template->bootstrap}}" v-on="on">
                <v-img src="/images/brands/bootstrap.jpg"></v-img>
              </a>
            </template>
            <span>Bootstrap</span>
          </v-tooltip>
        </v-flex>
        <v-flex md4 class="icon">
          <v-tooltip top>
            <template v-slot:activator="{ on }">
              <a href="/storage/templates/bulma/{{$template->bulma}}" v-on="on">
                <v-img src="/images/brands/bulma.jpg"></v-img>
              </a>
            </template>
            <span>Bulma</span>
          </v-tooltip>
        </v-flex>
        <v-flex md4 class="icon">
          <v-tooltip top>
            <template v-slot:activator="{ on }">
              <a href="/storage/templates/tailwind/{{$template->tailwind}}" v-on="on">
                <v-img src="/images/brands/tailwind.jpg"></v-img>
              </a>
            </template>
            <span>Tailwind</span>
          </v-tooltip>
        </v-flex>
        <v-flex md4 class="icon">
          <v-tooltip bottom>
            <template v-slot:activator="{ on }">
              <a href="/storage/templates/materialize/{{$template->materialize}}" v-on="on">
                <v-img src="/images/brands/materialize.jpg"></v-img>
              </a>
            </template>
            <span>Materialize</span>
          </v-tooltip>
        </v-flex>
        <v-flex md4 class="icon">
          <v-tooltip bottom>
            <template v-slot:activator="{ on }">
              <a href="/storage/templates/foundation/{{$template->foundation}}" v-on="on">
                <v-img src="/images/brands/foundation.jpg"></v-img>
              </a>
            </template>
            <span>Zurb Foundation</span>
          </v-tooltip>
        </v-flex>
        <v-flex md4 class="icon">
          <v-tooltip bottom>
            <template v-slot:activator="{ on }">
              <a href="/storage/templates/materialui/{{$template->materialui}}" v-on="on">
                <v-img src="/images/brands/materialui.jpg"></v-img>
              </a>
            </template>
            <span>Material-UI</span>
          </v-tooltip>
        </v-flex>
      </v-layout>

    </v-flex>
  </v-layout>

@stop
