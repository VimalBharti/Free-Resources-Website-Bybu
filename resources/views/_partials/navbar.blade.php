<v-container>
  <header class="main-header">
      <a class="navbar-item" href="{{route('home')}}">
  		  <img src="{{asset('images/white-logo.png')}}" alt="bybu.cc" class="main-logo">
      </a>
      <nav>
        <div class="hamburger">
          <div class="line"></div>
          <div class="line"></div>
          <div class="line"></div>
        </div>
        <ul class="nav__links">
          @if (Auth::guest())
            <li>
              <a href="{{route('free-templates.index')}}" class="showcase-btn">
                <span><i class="fa fa-html5"></i> Templates</span>
              </a>
            </li>
            <li>
              <a href="{{route('me.index')}}" class="showcase-btn">
                <span><i class="fa fa-columns"></i> Showcase</span>
              </a>
            </li>
            <li>
              @include('../login')
            </li>
          @else
            <li>
              <a href="{{route('showcase.dash')}}">
                  <strong>Showcase</strong>
              </a>
            </li>
            <v-menu offset-y>
                <v-avatar size="40" slot="activator" class="gradient-bg text-uppercase">
                  <span class="font-weight-black">{{ str_limit(Auth::user()->name, 1, $end='') }}</span>
                </v-avatar>
                <v-list class="dropdown-menu">
                    <v-list-tile href="{{route('member.dashboard')}}">
                        <i class="fa fa-th-large"></i>
                        <v-list-tile-title>Dashboard</v-list-tile-title>
                    </v-list-tile>
                    <v-list-tile href="{{route('member.dashboard')}}">
                        <i class="fa fa-address-book-o"></i>
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
        </ul>
      </nav>
	</header>
</v-container>
