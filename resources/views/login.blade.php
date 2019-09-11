
  <div class="text-xs-center">
    <v-menu
      :close-on-content-click="false"
      :nudge-width="250"
      offset-y
    >
      <template v-slot:activator="{ on }">
        <a v-on="on" class="showcase-btn pb-3">
          <span><i class="fa fa-sign-in"></i> Login</span>
        </a>
      </template>

      <v-card class="login-box">
        <div class="login-content">
            <!-- <div class="login-logo">
              <h3>Login to Bybu</h3>
            </div> -->

            <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
              {{ csrf_field() }}

              <v-text-field
                label="E-mail"
                name="email"
                required
              ></v-text-field>

              <v-text-field
                type="password"
                name="password"
                label="Password"
                counter
              ></v-text-field>

              <button class="login-btn">Login</button>

              <!-- <div class="divider line one-line" contenteditable>OR</div>

              <v-layout row class="social-auth-links">
                <v-flex class="google">
                  <v-btn flat block class="btn" href="{{url('/auth/google')}}"><img src="images/google.png">Google</v-btn>
                </v-flex>
                <v-flex class="facebook">
                  <v-btn flat block class="btn"><img src="images/fb.png">Facebook</v-btn>
                </v-flex>
              </v-layout> -->

            </form>
        </div>

        <v-divider></v-divider>

        <div class="signup-text">
          Don't have an account?
          <a href="/register">Register</a>
        </div>
      </v-card>
    </v-menu>
  </div>
