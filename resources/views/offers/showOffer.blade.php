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
        padding-top: 60px;
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

    .pdetails-allinfotab {
        background: #474747;
        padding: 15px 0;
    }

    .pdetails-allinfotab li a {
        display: inline-block;
        vertical-align: middle;
        text-transform: uppercase;
        color: #7e7e7e;
        font-weight: 700;
        font-size: 16px;
        padding: 3px 25px;
    }

    .pdetails-allinfo,
    .pdetails-description,
    .pdetails-moreinfo,
    .pdetails-quantity,
    .pdetails-reviews {
        margin-top: 30px;
    }
</style>

<style>
    .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        max-width: 300px;
        margin: auto;
        text-align: center;
        font-family: arial;
    }

    .title {
        color: grey;
        font-size: 18px;
    }

    button {
        border: none;
        outline: 0;
        display: inline-block;
        padding: 8px;
        color: white;
        background-color: #000;
        text-align: center;
        cursor: pointer;
        width: 100%;
        font-size: 18px;
    }

    a {
        text-decoration: none;
        font-size: 22px;
        color: black;
    }

    button:hover,
    a:hover {
        opacity: 0.7;
    }
</style>
@endsection
<div class="jumbotron jumbotron-fluid bg-cool-blue">
    <div class="container">
        <h1 class="display-4 aColor">
            Show Offer
        </h1>
    </div>
</div>
<!--
<div class="user-header" style=" margin-top: -50px; ">
    <div class="user-profile">
        <img src="https://raw.githubusercontent.com/AbdeslamRehaimi/SpringMVC_Blog/master/src/main/webapp/resources/images/users/04.jpg" class="user">
        <h1>Abdeslam Rehaimi</h1>
    </div>
</div>
-->
<div class="container-fluid">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <input type="button" style="float: left; border-radius: 50px;" value="Return" onclick="window.location.href='../offers'; return false;" class="btn btn-primary" />
                <br/><br/>
            </div>
            <!--Product Image-->
            <div class="col-md-8">
                <img src="{{ $offer->photo }}" srcset="" mode="contain" height="551px" alt="Macbook air 2015 intel i5 13 inch - 1" loading="lazy" width="500px">
            </div>
            <div class="col-md-4">
                <!--User Badge-->
                <div class="card" style=" border-top-left-radius: 50px; border-radius: 150px; ">
                    <img src="{{ $offer->users->photo }}"  style="border-top-left-radius: 50px; border-top-right-radius: 50px; height: 220px" alt="John" style="width:100%">
                    <h1 style="color: #000;     font-size: 30px;"><a href="{{ route('profile', ['user' => $offer->users->name]) }}">{{ $offer->users->name }}</a></h1>
                    <p class="title">{{ $offer->users->email }}</p>
                    <p><button style="border-bottom-left-radius: 33px; border-bottom-right-radius: 33px;"><span class="fa fa-phone fa-2x" style="color: red; margin-right: 10px;"></span>{{ $offer->users->tel }}</button></p>
                    <p><button style="border-bottom-left-radius: 33px; border-bottom-right-radius: 33px; width: 180px;">Demander</button></p>
                </div>
            </div>
            <ul class="nav pdetails-allinfotab justify-content-center" style=" width: 1500px; text-align: center; color: beige; margin: 30px; " id="product-details" role="tablist">
                <li class="nav-item">
                    <a class="nav-link" id="product-details-area3-tab" style="color: white;" data-toggle="tab" href="#product-details-area3" role="tab" aria-controls="product-details-area3" aria-selected="false">Information</a>
                </li>
            </ul>
            <ul style="width: 1500px; background-color: white; color: black; text-align: center ;">
                <h1>{{ $offer->titre }}</h1>
                <h2>{{ $offer->prix }} MAD</h2>
                <p>Superficier {{ $offer->superficie }}m <br> Max etudiant: {{ $offer->capacite }} <br> Bundled with: {{ $offer->description }}</p>
            </ul>
            <hr style="width: 50%; color: black; background-color: black; margin-left: 280px;">
            <!--Integrate MAP Here-->

            <div id='map' style='width: 1500px; height: 500px;'></div>

        </div>

    </div>
</div>
<!--
            <script>
                var offer = {!! json_encode($offer->toArray(), JSON_HEX_TAG) !!};
                console.log(offer.titre);
            </script>
-->

@section('custum-js') @stack ('before-scripts')
<script src='https://api.mapbox.com/mapbox-gl-js/v1.11.1/mapbox-gl.js'></script>
<link href='https://api.mapbox.com/mapbox-gl-js/v1.11.1/mapbox-gl.css' rel='stylesheet' />
<script>

    var offer = {!! json_encode($offer->toArray(), JSON_HEX_TAG) !!};
    console.log(offer.titre);
    var user_location = [offer.longtude, offer.latitude];
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
