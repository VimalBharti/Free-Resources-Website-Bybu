@extends('layouts.app')

@section('title', 'Login')

@section('content')
  <v-container fluid>
    <v-layout class="hidden-md-and-up">
      <v-flex>
        <v-img
          src="images/login.svg"
        ></v-img>
      </v-flex>
    </v-layout>
    <v-layout class="login-page" align-center row fill-height>
      <v-flex md6 xs12 class="flex-box">
        <div class="main-heading-t">FREEBIES WEBSITE</div>
        <div class="main-heading-b">FOR DESIGNERS & DEVELOPERS</div>
        <div class="sub-heading">Welcome back, Please login to your account</div>
        <v-layout>
          <v-flex md6>
            <v-card class="login-box" flat>
              <div class="login-content">
                  <div class="login-logo">
                    <!-- <img src="{{asset('images/t-logo.png')}}"> -->
                  </div>

                  <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                    {{ csrf_field() }}

                    <v-text-field
                      label="E-mail"
                      name="email"
                      required
                    ></v-text-field>

                    <!-- Store previous location -->
                    <div class="form-group">
                        @if (Request::has('previous'))
                            <input type="hidden" name="previous" value="{{ Request::get('previous') }}">
                        @else
                            <input type="hidden" name="previous" value="{{ URL::previous() }}">
                        @endif
                    </div>
                    <!-- Store previous location end -->

                    <v-text-field
                      type="password"
                      name="password"
                      label="Password"
                      hint="At least 8 characters"
                      counter
                    ></v-text-field>

                    <button class="login-button">LOGIN</button>
                    <v-btn block outline class="signup-button" href="{{ route('register') }}">SIGN UP</v-btn>

                    <div class="divider line one-line mt-4" contenteditable>OR</div>

                    <v-layout row class="social-auth-links">
                      <v-flex class="google">
                        <v-btn flat block class="btn"><img src="images/google.png">Google</v-btn>
                      </v-flex>
                      <v-flex class="facebook">
                        <v-btn flat block class="btn"><img src="images/fb.png">Facebook</v-btn>
                      </v-flex>
                    </v-layout>

                  </form>
              </div>

            </v-card>
          </v-flex>
        </v-layout>
      </v-flex>

      <v-flex md6 class="flex-box hidden-sm-and-down">
        <v-img
          src="images/login.svg"
        ></v-img>
      <v-flex>
    </v-layout>
  </v-container>
@endsection
