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
        width: 450px;
    }

    .product-text h1 {
        margin: 0 0 0 8px;
        font-size: 30px;
        color: #474747;
    }

    .product-text h1,
    .product-price-btn p {
        font-family: 'Bentham', serif;
    }

    .product-text h2 {
        margin: 0 0 10px 8px;
        font-size: 13px;
        font-family: 'Raleway', sans-serif;
        font-weight: 400;
        text-transform: uppercase;
        color: #d2d2d2;
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
        <div class="statsa d-flex justify-content-center">
            <span class="txt"><h5>Localisation des ensemble des offres!</h5></span>
        </div>
        <div id='map' style='height: 500px;'></div>





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
                                        <img src="{{ $item->users->photo }}"  style="margin-left: 20px;"  class="user" width="80px" height="80px">
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
                                                            <button type="button" style="margin-top: 15px;"><a style="color: white;" href="{{ route('demands.add', $item->titre ) }}">Demander</a></button>
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


                <div class="cr-pagination pt-30">
                    {{$offers->appends(request()->input())->links()}}
                    <!--
                    <p>Showing 1-12 of 13 item(s)</p>
                    <ul>
                        <li><a href="http://preview.hasthemes.com/haltico-v3/haltico/shop-rightsidebar.html"><i class="ion ion-ios-arrow-back"></i> Previous</a></li>
                        <li class="active"><a href="http://preview.hasthemes.com/haltico-v3/haltico/shop-rightsidebar.html">1</a></li>
                        <li><a href="http://preview.hasthemes.com/haltico-v3/haltico/shop-rightsidebar.html">2</a></li>
                        <li><a href="http://preview.hasthemes.com/haltico-v3/haltico/shop-rightsidebar.html">Next <i class="ion ion-ios-arrow-forward"></i></a></li>
                    </ul>
                    -->
                </div>







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

    <footer class="page-footer space_Section" style="background-color: #0e0201;">
    <div style="color: #fff;" class="footer-copyright text-center py-3">Copyright © 2020 |
        <a style="color: #fff;" href="https://mdbootstrap.com/education/bootstrap/"> Master ISI</a>
    </div>
</footer>


    @section('custum-js')
    @stack('before-scripts')
    <script src='https://api.mapbox.com/mapbox-gl-js/v1.11.1/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v1.11.1/mapbox-gl.css' rel='stylesheet'/>
    <script>
        var offers = {!!json_encode($offers->toArray(), JSON_HEX_TAG) !!};
        console.log(offers.data.length);
        //var user_location = [offers.data[1].longtude, offers.data[1].latitude];
        var user_location = [-6.353321573187401, 32.335456747816394];

        mapboxgl.accessToken = 'pk.eyJ1IjoiZmFraHJhd3kiLCJhIjoiY2pscWs4OTNrMmd5ZTNra21iZmRvdTFkOCJ9.15TZ2NtGk_AtUvLd27-8xA';
        var map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/mapbox/streets-v9',
            center: user_location,
            zoom: 15
        });

        for (var i = 0; i < offers.data.length; i++) {
            console.log(offers.data[i].titre);
            var popup = new mapboxgl.Popup({ offset: 25 }).setText(
                'Titre: ' + offers.data[i].titre + '  &&  Located in : ' + offers.data[i].adress
            );
            var otherMarkers = [offers.data[i].longtude, offers.data[i].latitude];
            var marker = new mapboxgl.Marker().setLngLat(otherMarkers).setPopup(popup).addTo(map);

            //Attaching popup
        }

        var popup = new mapboxgl.Popup({ offset: 25 }).setText(
                'Cest notre localisation principale, nous somme a beni mellal !!!'
            );
        var marker = new mapboxgl.Marker({color: "#d02922"}).setLngLat(user_location).setPopup(popup).addTo(map);
    </script>


    @stack('after-scripts')
    @endsection @endsection
