<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>File Sharing</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-inverse" style="background-color:black">
            <div class="container row">
                <div class="navbar-brand col-md-4">
                   <img src="/storage/png/file_transfer.png"> {{ _('File Sharing') }}
                </div>
                {{-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}"> --}}
                    {{-- <span class="navbar-toggler-icon"></span> --}}
                {{-- </button> --}}

                <div class="col-md-4">
                    <!--  center Of Navbar -->
                    <div style="color:cornsilk">
                    <ul class="navbar-nav mr-auto">
                        <li><div id="home-btn"><a href="/">Home</a></div></li>
                        <li><div id="about-btn"><a href="about">About</a></div></li>
                        <li><div id="service-btn"><a href="Service" >Service</a></div></li>
                    </ul>
                    </div>
                </div>
                {{-- right side of the navbar --}}

                {{-- <div class="col-md-4"> --}}
                    {{-- <ul class="navbar-nav"> --}}
                        {{-- <li><a href="{{ route('login') }}" style="padding:10px; color:cornsilk">login</a></li> --}}
                        {{-- <li><a href="{{ route('register')}}" style="padding:10px; color:cornsilk">Register</a></li> --}}
                    {{-- </ul> --}}
                {{-- </div> --}}
                <div class="col-md-4">
                    {{-- <!-- Right Side Of Navbar --> --}}
                    <ul class="navbar-nav ml-auto">
                        {{-- <!-- Authentication Links --> --}}
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                            @else
                                <script>
                                     document.getElementById('nav').innerHTML="";
                                 </script>
                                <li class="nav-item dropdown">
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
                                 </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main>
            <div class="jumbotron">
            @yield('contents')
            </div>
        </main>
    </div>
</body>
</html>
