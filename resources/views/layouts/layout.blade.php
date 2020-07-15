<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('res/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('res/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('res/style-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('res/res/style.css') }}">
    <!-- Style Css -->
    <style>
        .aColor {
            color: #000000;
        }

        .space_Section {
            margin-top: 20px;
        }

        .bg-black {
            background-color: #000000 !important;
        }

        .bg-cool-blue {
            background-color: #a0e5e8 !important;
        }

        .icon-drop-user {
            margin-right: 10px;
        }

        .icon-menu-space {
            margin-right: 50px;
        }
    </style>

    @yield('extra-css')
</head>

<body>
    @guest
    <nav class="navbar navbar-expand-lg navbar-light bg-black">
        <div class="container">
            <a class="navbar-brand" style="color: white;" href="{{ route('home') }}">Co-Location</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                </ul>
                <ul class=" navbar-nav my-2 my-lg-0">
                    <li class="nav-item">
                        <a style="color: white;" class="nav-link aColor" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    <li class="nav-item">
                    @if (Route::has('register'))
                        <a style="color: white;" class="nav-link aColor" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @else
    <nav class="navbar navbar-expand-lg navbar-light bg-black">
        <div class="container">
            <a class="navbar-brand" style="color: white;" href="{{ route('home') }}">Co-Location</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                </ul>
                <ul class=" navbar-nav my-2 my-lg-0">
                    <li class="nav-item" style="text-align: center;">
                        <a style="color: white; margin-bottom: -12px;" class="nav-link aColor">{{ Auth::user()->name }} </a>
                        <a class="small" href="{{ route('logout') }}" style="color: #dd3d31;" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> Disconnecte</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                        </form>

                    </li>
                    <li class="nav-item">
                            <a class="btn btn-dark dropdown-toggle" href="#" role="button" id="menu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img alt="AbdeslamRehaimi" class="avatar" src="{{ asset('images/profile.jpg') }}" height="20" width="20">
                            </a>

                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @endguest

    @yield('content')


    <script src="{{ asset('res/res/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('res/bootstrap/js/bootstrap.min.js') }} "></script>

    @yield('custum-js')
</body>

</html>
