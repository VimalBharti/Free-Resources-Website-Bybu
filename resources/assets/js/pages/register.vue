<template lang="html">
  <div class="login-popup">
    <v-dialog
      v-model="dialog"
      max-width="450"
    >
      <template v-slot:activator="{ on }">
        <a v-on="on"
          >Register
        </a>
      </template>

      <v-card class="login-box">
        <div class="login-content">
            <div class="login-logo">
              <h3>Login to Bybu</h3>
            </div>

            <form>
              <v-text-field
                v-model="email"
                v-validate="'required|email'"
                label="E-mail"
                data-vv-name="email"
                required
              ></v-text-field>

              <v-text-field
                v-model="password"
                :rules="[rules.required, rules.min]"
                :type="show1 ? 'text' : 'password'"
                name="input-10-1"
                label="Password"
                hint="At least 8 characters"
                counter
                @click:append="show1 = !show1"
              ></v-text-field>

              <v-btn block large class="mt-2 mb-4" @click="submit">Log In</v-btn>

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
          Don't have an account? <a href="#">Register</a>
        </p>
      </v-card>
    </v-dialog>
  </div>
</template>

<script>

export default {
  data (){
    return{
      show1: false,
      dialog: true,
      name: '',
      email: '',
      password: 'Password',
      rules: {
        required: value => !!value || 'Required.',
        min: v => v.length >= 8 || 'Min 8 characters',
        emailMatch: () => ('The email and password you entered don\'t match')
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
