<nav class="navbar navbar-expand-lg navbar-light">
        {{-- <a class="navbar-brand" href="#"><img src="indexer.png"></a> --}}
        @guest
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Indexer') }}
            </a>
        @else
            <a class="navbar-brand" href="{{ url('/posts') }}">
                {{ config('app.name', 'Indexer') }}
            </a>
        @endguest
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars" aria-hidden="true"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    
            <!--ml-auto marginleft auto-->
            <ul class="navbar-nav ml-auto">
                @guest
                <li>
                    <a class="nav-item nav-link navbar-light" href="#top">HOME</a>
                </li>
                <!-- <li>
                    <a class="nav-item nav-link" href="#services">SERVICES</a>
                </li> -->
                <li>
                    <a class="nav-item nav-link" href="#about-us">ABOUT US</a>
                </li>
                <!-- <li>
                    <a class="nav-item nav-link " href="#testimonials">TESTIMONIALS</a>
                </li> -->
                <li>
                    <a class="nav-item nav-link " href="#footer">CONTACT US</a>
                </li>
                @else
                    <li>
                        <a class="nav-item nav-link navbar-light" href="/posts">HOME</a>
                    </li>
                @endguest
                <li class="nav-item dropdown">
                    <div class="dropdown-menu" style="background-color:#424242" aria-labelledby="navbarDropdown">
                    @guest
                            <!-- <div class="dropdown-divider"></div> -->
                            <a class="dropdown-item" href="{{ route('login') }}">{{ __('Login') }}</a>
                            @if (Route::has('register'))
                            <a class="dropdown-item"
                                href="{{ route('register') }}">{{ __('Register') }}</a>
                            @endif
                    </div>
                    @else
                        <a class="nav-link dropdown-toggle" href="/users" id="navbarDropdown" role="button"
                        data-toggle="dropdown">ACCOUNT</a>
                        
                        <a class="nav-link dropdown-toggle" href="/home" id="navbarDropdown" role="button"
                        data-toggle="dropdown">DASHBOARD</a>

                        <a class="nav-link dropdown-toggle" href="{{ route('logout') }}" role="button"
                                onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    @endguest
                </li>
            </ul>
        </div>
    </nav>