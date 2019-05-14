<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="https://unpkg.com/ionicons@4.5.5/dist/ionicons.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/glacial-indifference" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Archivo+Narrow" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Alegreya|Domine" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Hind" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        @if (Auth::check())
        <nav class="navbar navbar-expand-md navbar-dark navbar-laravel border-0" id="navbar">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <!-- {{ config('app.name', 'Laravel') }} -->
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
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
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('LOGOUT') }}
                                </a>
                                <a class="dropdown-item" href="/home">MY PLANTS</a>
                                <a class="dropdown-item" href="/species">ADD PLANT</a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @else


        @endif


        <main class="py-4" id="body">
            @yield('content')
        </main>
    </div>

    <div class='content' id='desktop'>

        <div class="row">
            <div class='col'>
                <img src="/img/iphoneShots.png" id="phones">


            </div>


            <div class='col'>

                <img src="/img/landingcall.png" id='calltoaction'>


            </div>

        </div>

    </div>

</body>

</html>

<style>
    .dropdown-item {
        display: block;
        width: 100%;
        padding: 0.25rem 1.5rem;
        clear: both;
        font-weight: 400;
        color: #3d5367;
        text-align: inherit;
        white-space: nowrap;
        background-color: transparent;
        border: 0;
    }

    .navbar-nav .dropdown-menu {
        position: static;
        float: none;
        background-color: #fffdef;
        font-family: 'GlacialIndifferenceRegular';
        color: #3d5367;
    }

    .navbar-dark .navbar-toggler {
        color: rgba(255, 255, 255, 0.5);
        border-color: rgba(255, 255, 255, 0.0);
    }

    input:-webkit-autofill,
    input:-webkit-autofill:hover,
    input:-webkit-autofill:focus,
    input:-webkit-autofill:active {
        transition: background-color 5000s ease-in-out 0s;
        -webkit-text-fill-color: #3d5367 !important;
    }

    input[type="text"] {
        font-family: 'GlacialIndifferenceRegular';
    }

    #daysLeft {
        font-size: 15px;
    }

    #needs {
        font-size: 20px;
        color: #fffdef;
        font-family: 'GlacialIndifferenceRegular';
    }

    #careNames {
        font-size: 50px;
    }

    #sign {
        text-decoration: none !important;
        color: white !important;
    }

    #navbar {
        background-color: #c17e70;
        border-color: #c17e70;
    }

    .navbar-light .navbar-toggler {
        color: #fffdef;
        border-color: rgba(0, 0, 0, 0.0);
    }

    /* .navbar-toggler-icon  {
        border-color:#c17e70 !important;
    } */

    #signBtn,
    #loginBtn,
    #rgstrButton,
    #choosePlant,
    #nameBtn {
        background-color: #3d5367;
        border-color: #3d5367;
        text-decoration: none !important;
        font-family: 'GlacialIndifferenceRegular';
        color: #fffdef;
    }

    #trash {
        background-color: #c17e70 !important;
        border-color: #c17e70 !important;
    }

    ion-icon {
        color: #914c3d;
        font-size: 15px;
    }

    #shadow-root :host(.icon-large) {
        font-size: 50px !important;
    }


    #body,
    html,
    main,
    nav {
        background-color: #c17e70 !important;
        border-color: #c17e70 !important;
    }

    .pb-4,
    .py-4,
    .pt-4 {
        padding-bottom: 0 !important;
        padding-top: 0 !important;

    }

    #card,
    #header,
    #pickPlant {
        background-color: #c17e70;
        border-color: #c17e70;
        font-family: 'GlacialIndifferenceRegular';
        color: #fffdef;
        

    }

    .card-body {
        padding: 1rem;
    }

    #registerBody,
    center {
        background-color: #c17e70;
        border-color:  !important;

    }

    #signUpRegister {
        background-color: #c17e70;
        border-color:  !important;
        font-family: 'GlacialIndifferenceRegular';


    }

    #email,
    #password {
        background-color: #fffdef;
        border-color: #fffdef;
    }

    #confirm,
    #name {
        background-color: #fffdef;
        border-color: #fffdef;
    }

    #nickName {
        
        border-color: black;
        padding-right: 0px; 
        font-size:20px;
    }

    #nameLabel,
    #emailLabel,
    #passwordLabel,
    #confirmLabel,
    .nav-link {
        color: #fffdef !important;
        font-weight: bold;
    }

    #forgot,
    #signUp,
    #or {
        font-size: 12px;
        color: #fff9e9;
    }

    #plog {
        font-family: 'GlacialIndifferenceRegular';
        font-weight: bold;
        font-style: normal;
        font-size: 50px;
        color: #fffdef;
    }


    #desktop {
        display: none;
    }

    @media only screen and (min-width : 700px) {
        #app {
            display: none;
        }

        #desktop {
            display: block;
            background-color: white;
            height: 100vh;
            width: 100vw;


        }

        #phones {
            padding-left: 15vw;
            margin-top: 12.5vh;
            height: 75vh;
            width: auto;
        }

        #calltoaction{
            margin-top: 28vh;
            height: 40vh;
            width: auto;

        }
    }
</style>