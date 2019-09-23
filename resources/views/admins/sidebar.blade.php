<div class="column is-2 admin-sidebar">
  <li><a href="{{route('home')}}">Home</a></li>
  <li><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
  <li><a href="{{route('admin.allpost')}}">All Posts</a></li>
  <li><a href="{{route('admin.allmembers')}}">All Members</a></li>
  <v-list-tile href="{{route('psd.create')}}">
    <v-list-tile-action>
      <i class="fa fa-plus"></i>
    </v-list-tile-action>

    <v-list-tile-content>
      <v-list-tile-title>Add PSD</v-list-tile-title>
    </v-list-tile-content>
  </v-list-tile>
  <v-list-tile href="{{route('free-templates.create')}}">
    <v-list-tile-action>
      <i class="fa fa-plus"></i>
    </v-list-tile-action>

    <v-list-tile-content>
      <v-list-tile-title>Add Templates</v-list-tile-title>
    </v-list-tile-content>
  </v-list-tile>
</div>
