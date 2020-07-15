<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('res/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('res/font-awesome.min.css') }}">

    <!-- Style Css -->
    <link rel="stylesheet" href="{{ asset('res/style-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('res/res/style.css') }}">
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
            /*background: #0069bc;*/
            background: #02101b;
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

<body>

@guest
    <nav class="navbar navbar-expand-lg navbar-light bg-black">
        <div class="container">
            <a class="navbar-brand" style="color: white;" href="#">Co-Location</span></a>
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
        <a class="navbar-brand" style="color: white;" href="#">Co-Location</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            </ul>
            <ul class=" navbar-nav my-2 my-lg-0">
                <li class="nav-item" style="text-align: center;">
                    <a style="color: white; margin-bottom: -12px;" class="nav-link aColor">{{ Auth::user()->name }} </a>
                    <a class="small" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Disconnecte') }}</a>
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
    <!--style="background-image: url( {{ asset( 'images/main_page.jpg') }} )-->

    <div class="container-fluid" ">
        <div class="container ">
            <div class="row ">

                <div class="col-md-12 " style="padding: 50px ">
                    <div class="container ">
                        <div class="bleupad " >
                            <h1 style="text-transform: none; " class="mileux ">C’est votre première visite ? Inscrivez-vous pour accéder à votre espace
                            </h1>
                            <div class="btnP " style="background: none !important; ">
                                <a class="bl bl2 " href="/login ">Come over!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- Available on mobile twoo -->
    </div>
    <footer class="page-footer space_Section " style="background-color: #0e0201; ">
    <div style="color: #fff; " class="footer-copyright text-center py-3 ">Copyright © 2020 ||
        <a style="color: #fff; " href="https://mdbootstrap.com/education/bootstrap/ "> Master ISI</a>
    </div>
</footer>
    <script src="{{ asset( 'res/res/jquery-3.3.1.min.js') }} "></script>
    <script src="{{ asset( 'res/bootstrap/js/bootstrap.min.js') }} "></script>
</body>

</html>
