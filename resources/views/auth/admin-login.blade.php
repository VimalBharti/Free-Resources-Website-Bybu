@extends('layouts.app')

@section('content')
  <div class="admin-login">
    <v-container>
      <v-layout>
        <v-flex md4 offset-md4 xs12>
          <div class="logo">
            <a href="{{url('/')}}">
              <img src="{{asset('images/t-logo.png')}}" alt="bybu.cc">
            </a>
          </div>
          <div class="form-container">
            <form method="POST" action="{{ route('admin.login.submit') }}" aria-label="{{ __('Login') }}">
              {{ csrf_field() }}
              <v-text-field
                label="Email"
                name="email"
                outline
                required
              ></v-text-field>

              <v-text-field
                label="Password"
                name="password"
                type="password"
                outline
                required
              ></v-text-field>

              <input type="submit" class="login-btn" value="Login">
            </form>
          </div>
        </v-flex>
      </v-layout>
    </v-container>
  </div>
@endsection
