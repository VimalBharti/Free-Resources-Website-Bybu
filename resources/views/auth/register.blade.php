@extends('layouts.app')

@section('title', 'Create new account')

@section('content')
  <v-container fluid>
    <v-layouts>
      <v-flex md4 offset-md4 xs12 class="register-page">
        <div class="logo">
          <a href="/"><img src="{{asset('images/t-logo.png')}}" alt="bybu.cc"></a>
        </div>
        <div class="register-top-text has-text-centered">
          <h1>Join the community </h1>
          <p>Create your account, it takes less than a minute.</p>
          <p>Already have an account? <a href="{{url('/login')}}">Sign In</a> </p>
        </div>

        <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
          {{ csrf_field() }}

          <v-layout row class="social-auth-links">
            <v-flex class="google">
              <v-btn flat block class="btn"><img src="images/google.png">Google</v-btn>
            </v-flex>
            <v-flex class="facebook">
              <v-btn flat block class="btn"><img src="images/fb.png">Facebook</v-btn>
            </v-flex>
          </v-layout>

          <div class="divider line one-line" contenteditable>OR</div>

          <v-text-field
            label="Your name"
            name="name"
            required
          ></v-text-field>

          <v-text-field
            label="E-mail"
            name="email"
            required
          ></v-text-field>

          <v-text-field
            type="password"
            name="password"
            label="Password"
            hint="At least 8 characters"
            counter
          ></v-text-field>
          <v-text-field
            type="password"
            name="password_confirmation"
            label="Confirm Password"
            counter
          ></v-text-field>

          <button class="register-btn">Create an account</button>

        </form>
      </v-flex>
    </v-layouts>
  </v-container>
@endsection
