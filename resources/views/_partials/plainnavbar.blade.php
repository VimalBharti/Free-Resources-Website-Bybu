<v-toolbar flat class="white plainnavbar">
    <v-toolbar-title>
      <a class="navbar-item" href="{{route('home')}}">
  		  <img src="{{asset('images/logo.png')}}" alt="bybu.cc" class="main-logo">
      </a>
    </v-toolbar-title>

    <v-spacer></v-spacer>

    <v-toolbar-items class="hidden-sm-and-down">
      @if (Auth::guest())
        <v-btn flat href="{{route('me.index')}}">Showcase</v-btn>
        <li>@include('../login')</li>
      @else
        <v-btn flat href="{{route('me.index')}}">Showcase</v-btn>
        <v-menu offset-y>
            <v-avatar size="40" slot="activator" class="gradient-bg text-uppercase">
                VB
            </v-avatar>
            <v-list class="">
                <v-list-tile href="{{route('member.dashboard')}}">
                    <i class="fa fa-th-large" aria-hidden="true"></i>
                    <v-list-tile-title>Dashboard</v-list-tile-title>
                </v-list-tile>
                <v-list-tile href="{{route('member.dashboard')}}">
                    <i class="fa fa-address-book-o" aria-hidden="true"></i>
                    <v-list-tile-title>My Account</v-list-tile-title>
                </v-list-tile>

                <v-divider></v-divider>

                <v-list-tile
                    href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"
                >
                    <i class="fa fa-sign-out" aria-hidden="true"></i>
                    <v-list-tile-title>Logout</v-list-tile-title>
                </v-list-tile>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                </form>
            </v-list>
        </v-menu>
      @endif
    </v-toolbar-items>
</v-toolbar>
