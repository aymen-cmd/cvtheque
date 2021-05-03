
   
<nav class="navbar navbar-expand-md navbar-light  shadow-sm" style="background-color:#2c3e50;">
            <div class="container">
                <a class="navbar-brand" style="color:white;" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                   

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto "  >
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                
                                <li class="nav-item">
                                    <a class="nav-link" style="color:white;" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                
                            @endif
                            
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" style="color:white;"  href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                        <a class='nav-link' style="color:white;">mes cv</a>
                            <li class="nav-item dropdown">
                            
                                <a  class="nav-link dropdown-toggle" style="color:white;" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown" aria-labelledby="navbarDarkDropdownMenuLink">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
            
        </nav>