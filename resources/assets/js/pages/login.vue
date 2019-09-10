<template lang="html">
  <div class="login-popup">
    <v-dialog
      v-model="dialog"
      max-width="450"
    >
      <template v-slot:activator="{ on }">
        <v-btn
          color="white"
          dark
          v-on="on"
          outline
        >
          Login
        </v-btn>
      </template>

      <v-card class="login-box">
        <div class="login-content">
            <div class="login-logo">
              <h3>Login to Bybu</h3>
            </div>

            <form v-on:submit.prevent="onSubmit">
              <v-text-field
                v-model="email"
                label="E-mail"
                name="email"
                required
              ></v-text-field>

              <v-text-field
                v-model="password"
                :type="show1 ? 'text' : 'password'"
                name="password"
                label="Password"
                hint="At least 8 characters"
                counter
                @click:append="show1 = !show1"
              ></v-text-field>

              <!-- <v-btn block large class="mt-2 mb-4">Log In</v-btn> -->
              <button >Login</button>

              <div class="divider line one-line" contenteditable>OR</div>

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

        <v-divider></v-divider>

        <p class="signup-text">
          Don't have an account?
          <Signup />
        </p>
      </v-card>
    </v-dialog>
  </div>
</template>

<script>

import Signup from './register.vue';

export default {
  name: "login",
  props: ["app"],
  data (){
    return{
      email: "",
      password: "",
      errors: [],
      show1: false,
      dialog: false,
      components: {
        'register' : Signup
      },
    };
  },
  methods: {
    onSubmit(){
      this.errors = [];

      if(!this.email){
        this.errors.push("email is required");
      }
      if(!this.password){
        this.errors.push("Password is required");
      }

      if(!this.errors.lenght){
        const data = {
          email: this.username,
          password: this.password
        };

        this.app.req
          .post("/login", data)
          .then(response => {
            this.app.user = response.data;
            this.$router.push("/");
          })
          .catch(error => {
            this.errors.push(error.response.data.error);
          });
      }
    }
  },
}
</script>

<style scoped lang="scss">
.login-box{
    border-radius: 12px;
    .login-content{
      padding: 2.5em 3em 1em 3em;
    }
    .signup-text{
      text-align: center;
      padding: 12px;
      color: #777;
      a{color: #cf1bb0;}
    }
    .login-logo{
      text-align: center;margin-bottom: 2em;
      h3{font-size: 1.6em;color:#555;}
      img{max-height: 40px;}
    }
    .social-auth-links{
      text-align: center;
      .btn{
        border: 1px solid #efefef;
        border-radius: 6px;
        height: 50px;
        text-transform: capitalize;
        img{margin-right: 1em;}
      }
    }

}
.divider {
  display: flex;color: #888;
  &:before, &:after {
    content: "";flex: 1;
  }
}
.line {
  align-items: center;margin: 1em -1em;
  &:before, &:after {
    height: 1px;margin: 0 1em;
  }
}
.one-line {
  &:before, &:after {
    background: #cdcdcd;
  }
}
</style>
