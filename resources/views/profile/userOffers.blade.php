@extends('layouts.layout') @section('content') @section('extra-css')
<style>
    .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        max-width: 250px;
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
        margin: 0 0 0 10px;
        font-size: 34px;
        color: #474747;
    }

    .product-text h1,
    .product-price-btn p {
        font-family: 'Bentham', serif;
    }

    .product-text h2 {
        margin: 0 0 10px 10px;
        font-size: 12px;
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

<div class="container">
    <div class="row">
            <div class="col-md-4">
                <!--User Badge-->
                <div class="card" style=" border-top-left-radius: 50px; border-radius: 150px; ">
                    <img src="{{ $offer->photo }}" style="border-top-left-radius: 50px; border-top-right-radius: 50px; height: 220px" alt="John" style="width:100%">
                    <h1 style="color: #000;     font-size: 25px;">{{ $offer->name }}</h1>
                    <p class="title">{{ $offer->email }}</p>
                    <p><button style="border-bottom-left-radius: 33px; border-bottom-right-radius: 33px; width: 200px"><span
                                class="fa fa-phone fa-2x"
                                style="color: red; margin-right: 10px;"></span>{{ $offer->tel }}</button></p>
                </div>

            </div>
            <div class="col-md-8">
            <ul class="nav pdetails-allinfotab justify-content-center" style=" background-color: chocolate; text-align: center; color: beige; margin: 30px; " id="product-details" role="tablist">
                <li class="nav-item">
                    <a class="nav-link" id="product-details-area3-tab" style="color: white;" data-toggle="tab" href="#product-details-area3" role="tab" aria-controls="product-details-area3" aria-selected="false">Tous les offre publier par: <b style="color: black">{{ $offer->name }}</b></a>
                </li>
            </ul>
            <hr style="font-size: 5px; color: red; background-color: red; width: 100%;">
                @foreach ($offer->offers as $item)
                <!--Repeate This-->
                <div class="user-contents">
                    <div class="container">
                        <div class="row">
                            <div class="">
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
                                                            <button type="button" style="margin-top: 50px;"><a style="color: white; font-size: 18px;" href="{{ route('offers.show', $item->titre ) }}">Consulter</a></button>
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
            </div>

    </div>
</div>


@endsection
