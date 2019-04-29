<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/glacial-indifference" type="text/css"/>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel border-0" id="navbar">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <!-- {{ config('app.name', 'Laravel') }} -->
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon" id="hamburger"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
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
                                    <a class="dropdown-item" href=""> My Plants</a>

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

        <main class="py-4" id="body">
            @yield('content')
        </main>
    </div>
</body>
</html>

<style>

    #sign {
    text-decoration: none !important;
    color: white !important;
    }

    #navbar {
        background-color:#c17e70;
        border-color: #c17e70;
    }

    /* .navbar-toggler-icon  {
        border-color:#c17e70 !important;
    } */

    #signBtn, #loginBtn, #rgstrButton, #choosePlant {
        background-color: #3d5367;  
        border-color: #3d5367;  
        text-decoration: none !important;
    }

    #body, html {
        background-color: #c17e70;
        border-color:#c17e70;
    }

    #card, #header, #pickPlant {
        background-color: #c17e70;
        border-color: #c17e70;
        font-family: 'GlacialIndifferenceRegular'; 
        color:#fffdef;
        
    }

    #registerBody, center {
        background-color: #c17e70;
        border-color: !important;

    }

    #signUpRegister {
        background-color: #c17e70;
        border-color: !important;
        font-family: 'GlacialIndifferenceRegular'; 


    }

    #email, #password {
        background-color: #fffdef;
        border-color: #fffdef;
     }

    #confirm, #name {
        background-color: #fffdef;
        border-color: #fffdef;
    }

    #nameLabel, #emailLabel, #passwordLabel, #confirmLabel, .nav-link {
        color:#fffdef !important;
        font-weight:bold;
    }

    #forgot, #signUp, #or {
        font-size: 12px;
        color:#fff9e9;
    }

    #plog {
        font-family: 'GlacialIndifferenceRegular'; 
        font-weight: bold; 
        font-style: normal; 
        font-size: 50px;
        color: #fffdef;
    }


 

  
    </style>
