<!doctype html>
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
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('res/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('res/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('res/style-theme.css') }}">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .masthead-page {
            padding: 1rem 0 4rem;
        }

        .masthead {
            background-image: url("{{ asset('images/overlay.svg') }}"),
            linear-gradient(45deg,
            #e61101 0%,
            #0e0201 100%);
            position: relative;
            background-size: cover;
            z-index: 0;
            border-bottom-left-radius: 200px;
        }
    </style>
    <style>
        .pad-10 {
            padding: 10px;
        }

        .mar-b-10 {
            margin-bottom: 10px;
        }

        .gris {
            background: #efefef;
            border-radius: 10px;
        }

        .conx p.oublie {
            margin: 10px auto 0;
            padding-left: 15px;
            font-size: 10px;
            width: 80%;
            text-align: left;
        }

        .hoverUnderLine:hover {
            text-decoration: underline;
        }

        .mb-2,
        .my-2 {
            margin-bottom: .5rem !important;
        }

        .mb-5,
        .my-5 {
            margin-bottom: 3rem !important;
        }

        .align-items-center {
            align-items: center !important;
        }

        .bleupad {
            padding: 10px;
            margin-bottom: 10px;
            background: #0069bc;
            border-radius: 10px;
        }

        .mileux {
            font-size: 16px;
            color: #fff;
            margin: 0;
            padding: 0;
            border: 0;
            font: inherit;
        }

        .btnP {
            border-radius: 2px;
            margin: 20px auto;
            display: block;
            padding: 0;
            width: 70%;
            font-size: 14px;
            font-weight: 400;
            line-height: 1.42857143;
            text-align: center;
            white-space: nowrap;
            touch-action: manipulation;
            cursor: pointer;
        }

        .btnP a.bl {
            color: #0069bc;
            background: #ffffff none repeat scroll 0 0;
            border: 1px solid #fff;
            display: block;
            padding: 8px 10px;
            text-transform: uppercase;
            text-decoration: none;
        }

        .conx {
            background: #fff;
            margin: 10px auto;
            display: inline-block;
            width: 100%;
            text-align: center;
        }

        .conx .local-cnx {
            margin-top: 10px;
            margin-left: 10px;
            background: #f1f1f1;
            border: none;
            width: 80%;
            box-shadow: none;
            height: 40px;
        }
    </style>

</head>
<body style="background-color: #c5c2c2;">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
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

        <header class="masthead masthead-page mb-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 py-5">
                    <h1 class="mb-2">Find a co_location never been easy!</h1>
                    <h2 class="m-0">Bringnig to you the most powerful solution to sahre and display co_locations and also locating the position of each. Come join now for free!</h2>
                </div>
                <div class="col-lg-4">
                    <div id="carbonads"><span><span class="carbon-wrap"><a href="#" class="carbon-img" target="_blank"
                                rel="noopener sponsored"><img src="{{ asset('images/main_logo.png') }}"
                                    alt="ads via Carbon" border="0" style="max-width: 130px;"></a><a href="#"
                                class="carbon-text" target="_blank" rel="noopener sponsored">Student Co_Location :
                                Were here to help you!.</a></span>
                        <a href="#" class="carbon-poweredby" target="_blank" rel="noopener sponsored">Share u're
                            favoorite locations</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </header>
        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <script src="{{ asset('res/res/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('res/bootstrap/js/bootstrap.min.js') }} "></script>
</body>
</html>
