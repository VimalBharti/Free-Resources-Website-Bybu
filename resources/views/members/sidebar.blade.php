
<v-card height="100vh" flat>
    <v-navigation-drawer
      v-model="drawer"
      permanent
      absolute
    >
      <v-toolbar flat class="transparent">
        <v-list class="pa-0">
          <v-list-tile avatar>
            <v-list-tile-avatar>
              <img src="https://randomuser.me/api/portraits/men/85.jpg">
            </v-list-tile-avatar>

            <v-list-tile-content>
              <v-list-tile-title>John Leider</v-list-tile-title>
            </v-list-tile-content>
          </v-list-tile>
        </v-list>
      </v-toolbar>

      <v-list class="pt-0" dense>
        <v-divider></v-divider>

        <v-btn block href="{{route('members.create')}}">Add Post</v-btn>

        <v-list-tile href="#">
          <v-list-tile-action>
            <i class="fa fa-heart"></i>
          </v-list-tile-action>

          <v-list-tile-content>
            <v-list-tile-title>All Freebies</v-list-tile-title>
          </v-list-tile-content>
        </v-list-tile>

        <v-list-tile href="{{route('profiles.show', $user->username)}}">
          <v-list-tile-action>
            <i class="fa fa-user-circle-o"></i>
          </v-list-tile-action>

          <v-list-tile-content>
            <v-list-tile-title>Profile</v-list-tile-title>
          </v-list-tile-content>
        </v-list-tile>

      </v-list>
    </v-navigation-drawer>
  </v-card>
