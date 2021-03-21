<nav class="navbar navbar-dark fixed-top bg-blue flex-md-nowrap p-0 shadow navbar-expand-lg">
  <!-- <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Company name</a> -->
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="{{ url('/') }}">ホーム</a>
  <ul class="navbar-nav px-3 ml-auto">
    <li class="nav-item text-nowrap">
        @guest
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        @else
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        @endguest
    </li>
  </ul>
</nav>
