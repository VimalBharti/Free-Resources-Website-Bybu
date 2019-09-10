@extends('layouts.app')

@section('title', 'Bybu')

@section('content')

  @include('_partials.plainnavbar')

  <div class="home-psd-list">
    <v-container grid-list-xl>
      <v-layout row wrap class="psd-grid">
        @foreach ($psds as $psd)
        <v-flex md4 d-flex>
          <v-card white flat hover>
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
              <div class="about-psd text-lowercase">
                {{str_limit($psd->description, 90)}}
              </div>
              <!-- <v-btn block large dark round color="purple">Download</v-btn> -->
              <v-dialog
                v-model="dialog"
                width="500"
              >
                <template v-slot:activator="{ on }">
                  <v-btn color="purple"
                    dark round block large
                    v-on="on"
                  >
                    Download
                  </v-btn>
                </template>

                <v-card>
                  <v-card-text>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                  </v-card-text>
                </v-card>
              </v-dialog>

            </v-card-text>
          </v-card>
        </v-flex>
        @endforeach
      </v-layout>
    </v-container>
  </div>

  @include('_partials.footer')

@stop
