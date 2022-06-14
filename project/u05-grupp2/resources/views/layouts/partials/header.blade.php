<nav class="navbar navbar-dark bg-dark">

    <div class="container"  >
        <a class="navbar-brand" href="{{ route('home') }}">
            <img style="max-width: 100px" src="{{ asset('assets/logos/logo.png') }}" alt="logo Group2"> {{--LOGO --}}
        </a>
        
        <div class="d-flex" id="navbarColor02">
            @guest <!-- validates if as visitor -->
                @if (Route::has('login'))
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                @endif
                @if (Route::has('register'))
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                @endif
                @else
                    <a class="nav-link" href="{{ route('displayWatchlist',['id'=> Auth::user()->id]) }}">Watchlist</a>
                    <a class="nav-link" href="{{ route('logout') }}"
                        onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        <i class="fa fa-sign-out"></i>
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>                       
            @endguest           
        </div>
    </div>
</nav>
