@extends('layouts.layout') @section('content') @section('extra-css')
<style>
    .user-header {
        position: relative;
        overflow: hidden;
        height: 324px;
        z-index: 1;
        box-sizing: border-box;
        vertical-align: top;
        background-color: #350000;
    }

    .user-profile {
        padding-top: 80px;
        width: 100%;
        position: relative;
        display: grid;
        grid-template-columns: 100%;
        justify-items: center;
        z-index: 2;
    }

    .user {
        border-radius: 50%;
        margin: 0;
        position: relative;
        display: block;
    }

    .user-contents {
        padding-top: 0px;
        /*min-height: 360px;*/
    }

    h2 {
        flex: 1;
        color: black;
        z-index: 1;
        font-size: 18px;
        line-height: 1.22226;
        font-weight: 700;
        letter-spacing: .005em;
        font-family: "SF Pro Display", "SF Pro Icons", "Helvetica Neue", Helvetica, Arial, sans-serif;
        align-items: center;
        justify-content: flex-end;
    }

    h1 {
        color: white;
    }

    .blok1 {
        display: flex;
        justify-content: flex-start;
        align-items: center;
        margin-top: 20px;
    }

    .albimage {
        width: 165px;
        margin-top: 14px;
        vertical-align: text-top;
        white-space: normal;
        position: relative;
        height: 200px;
    }

    .block2 {
        flex: 1;
        vertical-align: text-top;
        white-space: normal;
        position: relative;
        width: 100%;
        z-index: 1;
    }

    body {
        background-color: #fdf1ec;
    }

    .wrapper {
        height: 180px;
        width: 800px;
        margin: 15px auto;
        border-radius: 7px 7px 7px 7px;
        /* VIA CSS MATIC https://goo.gl/cIbnS */
        -webkit-box-shadow: 0px 14px 32px 0px rgba(0, 0, 0, 0.15);
        -moz-box-shadow: 0px 14px 32px 0px rgba(0, 0, 0, 0.15);
        box-shadow: 0px 14px 32px 0px rgba(0, 0, 0, 0.15);
    }

    .product-img {
        float: left;
        height: 180px;
        width: 327px;
    }

    .product-img img {
        border-radius: 7px 0 0 7px;
    }

    .product-info {
        float: left;
        height: 180px;
        width: 473px;
        border-radius: 0 7px 10px 7px;
        background-color: #ffffff;
    }

    .product-text {
        height: 180px;
        width: 327px;
    }

    .product-text h1 {
        margin: 0 0 0 38px;
        font-size: 34px;
        color: #474747;
    }

    .product-text h1,
    .product-price-btn p {
        font-family: 'Bentham', serif;
    }

    .product-text h2 {
        margin: 0 0 10px 38px;
        font-size: 13px;
        font-family: 'Raleway', sans-serif;
        font-weight: 400;
        text-transform: uppercase;
        color: #d2d2d2;
        letter-spacing: 0.2em;
    }

    .product-text p {
        height: 125px;
        margin: 0 0 0 38px;
        font-family: 'Playfair Display', serif;
        color: #8d8d8d;
        line-height: 1.7em;
        font-size: 15px;
        font-weight: lighter;
        overflow: hidden;
    }

    .product-price-btn {
        height: 103px;
        width: 327px;
        margin-top: 17px;
        position: relative;
    }

    .product-price-btn p {
        display: inline-block;
        position: absolute;
        top: -13px;
        height: 50px;
        font-family: 'Trocchi', serif;
        margin: 0 0 0 38px;
        font-size: 28px;
        font-weight: lighter;
        color: #474747;
    }

    span {
        display: inline-block;
        height: 50px;
        font-family: 'Suranna', serif;
        font-size: 34px;
    }

    .product-price-btn button {
        float: right;
        display: inline-block;
        height: 50px;
        width: 176px;
        margin: 0 40px 0 16px;
        box-sizing: border-box;
        border: transparent;
        border-radius: 60px;
        font-family: 'Raleway', sans-serif;
        font-size: 14px;
        font-weight: 500;
        text-transform: uppercase;
        letter-spacing: 0.2em;
        color: #ffffff;
        background-color: #9cebd5;
        cursor: pointer;
        outline: none;
    }

    .product-price-btn button:hover {
        background-color: #79b0a1;
    }
</style>

@endsection
<div class="jumbotron jumbotron-fluid bg-cool-blue">
    <div class="container">
        <h1 class="display-4 aColor">
            Offers
        </h1>
    </div>
</div>
<div class="container-fluid">

    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <input type="button" style="float: left; border-radius: 50px;" value="Nouveau Offre" onclick="window.location.href='offer/add'; return false;" class="btn btn-primary" />
                <br/><br/>
            </div>
        </div>

        <div id='map' style='width: 1500px; height: 500px;'></div>





        <div class="container">
        <ul class="nav pdetails-allinfotab justify-content-center" style=" background-color: chocolate; text-align: center; color: beige; margin: 30px; " id="product-details" role="tablist">
                <li class="nav-item">
                    <a class="nav-link" id="product-details-area3-tab" style="color: white;" data-toggle="tab" href="#product-details-area3" role="tab" aria-controls="product-details-area3" aria-selected="false">Tous les offre publier</a>
                </li>
            </ul>
            <div class="row">
                @foreach ($offers as $item)
                <!--Repeate This-->
                <div class="user-contents">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 col-sm-3 ">
                                <div class="blok1">
                                    <div style="display: block; margin: 35px; align-items: center">
                                        <img style="    margin-left: 20px;" src="{{ $item->photo }}" class="user" width="80px" height="80px">
                                        <a href="${pageContext.request.contextPath}/article/view/${item.id}">
                                            <h2 style="text-align: center;  margin-left: -20px;"><a href="{{ route('profile', ['user' => $item->users->name ]) }}"><em>{{ $item->users->name }}</em></a></h2>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9 col-sm-9">
                                <div class="article">
                                    <div class="wrapper">
                                        <div class="product-img">
                                            <h3 style=" color: azure; position: absolute; margin-left: 20px; margin-top: 150px; background-color: #ff2714; border-radius: 25px; padding: 5px; ">{{ $item->prix }} DH/mois</h3>
                                            <img src="{{ $item->photo }}" height="180" width="327">
                                        </div>
                                        <div class="product-info">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="product-text">
                                                            <h1>{{ $item->titre }}</h1>
                                                            <h2><span class="fa fa-map-marker fa-2x" style="color: green;"></span>{{ $item->adress }}</h2>
                                                            <p>Superficier : {{ $item->superficie }}m <br> Capaciter : {{ $item->capacite }} <br> Bundled with : {{ $item->description }}</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="product-price-btn">
                                                            <button type="button" style="margin-top: 30px;"><a style="color: white;" href="{{ route('offers.show', $item->titre ) }}">Voire l'offre</a></button>
                                                            <button type="button" style="margin-top: 15px;"><a href="#">Demander</a></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr style="width: 50%; color: black; background-color: black; margin-left: 180px;">
                        </div>
                    </div>
                </div>
                @endforeach
                <!--End Repeate-->


                <!--Repeate This-->
                <!--
                <div class="user-contents">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 col-sm-3 ">
                                <div class="blok1">
                                    <div style="display: block; margin: 35px; align-items: center">
                                        <img src="https://raw.githubusercontent.com/AbdeslamRehaimi/SpringMVC_Blog/master/src/main/webapp/resources/images/users/04.jpg" class="user" width="80px" height="80px">
                                        <a href="${pageContext.request.contextPath}/article/view/${item.id}">
                                            <h2 style="text-align: center;  margin-left: -20px;"><em>Ahmed Avura</em></h2>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9 col-sm-9">
                                <div class="article">
                                    <div class="wrapper">
                                        <div class="product-img">
                                            <img src="http://bit.ly/2tMBBTd" height="180" width="327">
                                        </div>
                                        <div class="product-info">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="product-text">
                                                            <h1>Harvest Vase</h1>
                                                            <h2>by studio and friends</h2>
                                                            <p>Superficier : 150m <br> Superficier : 150m <br> Superficier : 150m <br> Superficier : 150m </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="product-price-btn">
                                                            <p><span style=" margin-left: 80px; margin-top: 10px; ">78</span>$</p>
                                                            <button type="button" style="margin-top: 30px;"><a href="#">Voire l'offre</a></button>
                                                            <button type="button" style="margin-top: 15px;">Demander</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr style="width: 50%; color: black; background-color: black; margin-left: 180px;">
                        </div>
                    </div>
                </div>
                -->
                <!--End Repeate-->


                <script>
                    var offers = {!!json_encode($offers->toArray(), JSON_HEX_TAG) !!};
                    console.log(offers.data[1].titre);
                    console.log(offers.data.length);
                    for (var i = 0; i < offers.data.length; i++) {
                        console.log(offers.data[i].titre);
                    }
                </script>

            </div>
        </div>
    </div>

    @section('custum-js') @stack ('before-scripts')
    <script src='https://api.mapbox.com/mapbox-gl-js/v1.11.1/mapbox-gl.js'></script>
<link href='https://api.mapbox.com/mapbox-gl-js/v1.11.1/mapbox-gl.css' rel='stylesheet' />
    <script>
        var offers = {!!json_encode($offers->toArray(), JSON_HEX_TAG) !!};
        console.log(offer.titre);
        var user_location = [offers.data[1].longtude, offers.data[1].latitude];
        mapboxgl.accessToken = 'pk.eyJ1IjoiZmFraHJhd3kiLCJhIjoiY2pscWs4OTNrMmd5ZTNra21iZmRvdTFkOCJ9.15TZ2NtGk_AtUvLd27-8xA';
        var map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/mapbox/streets-v9',
            center: user_location,
            zoom: 15
        });

        var marker = new mapboxgl.Marker().setLngLat(user_location).addTo(map);
    </script>
    @stack ('after-scripts') @endsection @endsection
