@extends('layouts.app') @section('content')
<div class="container">
    <!--
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif You are logged in!
                </div>
            </div>
        </div>
    </div>
-->

    <!-- This is the beutiful UI menu -->
    <section class=" text-center page-regions">
        <style>
            .cg-item {
                width: 144px !important;
                height: 167px;
                border-radius: 8px !important;
                background-color: #ffffff;
                margin-right: 18px;
                padding: 0px 6px;
                transition-property: transform, box-shadow;
                transition-duration: 0.25s;
            }

            .cg-item:hover {
                box-shadow: 0 4px 16px 0 rgba(0, 0, 0, 0.04);
                transform: translateY(-7px);
                -webkit-transform: translateY(-7px);
                -moz-transform: translateY(-7px);
                -o-transform: translateY(-7px);
                transition: 0.2s ease-in-out;
                -webkit-transition: 0.2s ease-in-out;
                -moz-transition: 0.2s ease-in-out;
                -o-transition: 0.2s ease-in-out;
            }

            .cg-item a:hover,
            .cg-item a:focus {
                text-decoration: none;
            }

            .cg-text {
                text-transform: uppercase;
                font-size: 14px;
                font-weight: 500;
                font-stretch: normal;
                font-style: normal;
                line-height: normal;
                letter-spacing: 1px;
                text-align: center;
                margin-top: 8px;
            }

            .cg-container {
                display: flex;
            }

            .cg-img {
                width: 72px;
                height: 72px;
            }

            .center-v {
                position: relative;
                margin: 0;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
            }

            .cg-title,
            .seo-lp-heading {
                text-align: start;
                font-size: 24px;
                font-weight: normal;
                font-stretch: normal;
                font-style: normal;
                line-height: normal;
                letter-spacing: normal;
                color: #333333;
                margin-bottom: 4px;
            }

            .cg-subtitle {
                text-align: start;
                font-size: 14px;
                font-weight: normal;
                font-stretch: normal;
                font-style: normal;
                line-height: normal;
                letter-spacing: normal;
                color: #666666;
            }

            .badge-cg {
                position: absolute;
                top: -23px;
                right: 4px;
            }
        </style>
        <p class="p-box cg-title">Choisissez une catégorie</p>
        <p class="p-box cg-subtitle">Catégories populaires</p>
        <div class="p-box cg-container d-flex justify-content-center">
            <div class="cg-item mx-2">
                <div class="center-v">
                    <a class="categories_homepage" href="https://www.avito.ma/fr/maroc/informatique_et_multimedia-à_vendre">
                        <div class="">
                            <img class="cg-img cg-market" alt="cg-market" src="https://www.avito.ma/img/cg-cars.png">
                        </div>
                        <div class="">
                            <div class="cg-text" style="color:#58d577;">PARAMETRE</div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="cg-item mx-2">
                <div class="center-v">
                    <a class="categories_homepage" href="https://www.avito.ma/fr/maroc/véhicules-à_vendre">
                        <div class="">
                            <img class="cg-img cg-cars" alt="cg-cars" src="https://www.avito.ma/img/cg-cars.png">
                        </div>
                        <div class="">
                            <div class="cg-text" style="color:#ff5664;">OFFERS</div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="cg-item mx-2">
                <div class="center-v">
                    <a class="categories_homepage" href="https://www.avito.ma/fr/maroc/immobilier-à_vendre">
                        <div class="">
                            <img class="cg-img cg-re" alt="cg-re" src="https://www.avito.ma/img/cg-cars.png">
                        </div>
                        <div class="">
                            <div class="cg-text" style="color:#42aeff;">DEMANDS</div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="cg-item mx-2">
                <div class="center-v">
                    <a class="categories_homepage" href="https://www.avito.ma/fr/maroc/pour_la_maision_et_jardin-à_vendre">
                        <div class="">
                            <img class="cg-img cg-garden" alt="cg-garden" src="https://www.avito.ma/img/cg-cars.png">
                        </div>
                        <div class="">
                            <div class="cg-text" style="color:#4a4a4a;">REQUESTS</div>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </section>
    <!-- This is the Percentage UI menu -->
    <section class="container mb-5" style="margin-top: 40px;">
        <style>
            .stats-container p {
                font-size: 28px;
                font-weight: 500;
                font-stretch: normal;
                font-style: normal;
                letter-spacing: normal;
                color: #ffffff;
                margin: 0 auto;
                border-radius: 50%;
                width: 79px;
                height: 79px;
                line-height: 79px;
                background-color: #4a4a4a;
            }

            .stats-container h5 {
                font-size: 20px;
                font-weight: normal;
                font-stretch: normal;
                font-style: normal;
                line-height: normal;
                letter-spacing: normal;
                color: #666666;
            }

            .num {
                width: 30%;
            }

            .txt {
                text-align: left;
                width: 70%;
                padding: 10px 0;
            }

            .statsb,
            .statsa {
                border-radius: 8px;
                background-color: #ffffff;
                width: 43%;
                padding: 30px;
            }
        </style>
        <div class="text-center">
            <div class="stats-container d-flex justify-content-between">
                <div class="statsa d-flex justify-content-center">
                    <span class="num"><p>73%</p></span>
                    <span class="txt"><h5>Des objets et annonces sont vendus en moins de 3 jours</h5></span>
                </div>
                <div class="statsb d-flex justify-content-center">
                    <span class="num"><p>92%</p></span>
                    <span class="txt"><h5>De nos utilisateurs sont satisfaits</h5></span>
                </div>
            </div>
        </div>
    </section>
    <!-- Available on mobile twoo -->
    <section class=" appb-wrapper mb-4">
        <style>
            .appb-container {
                background: url(https://www.avito.ma/img/app-banner.png) no-repeat;
                padding: 48.5px;
                background-size: contain;
            }

            .appb-container h3 {
                font-size: 24px;
                font-weight: normal;
                font-stretch: normal;
                font-style: normal;
                line-height: normal;
                letter-spacing: normal;
                color: #ffffff;
                text-transform: uppercase;
            }

            .appb-container p {
                font-size: 16px;
                font-weight: normal;
                font-stretch: normal;
                font-style: normal;
                line-height: normal;
                letter-spacing: normal;
                color: #ffffff;
            }

            .appb-google a img {
                width: 173px;
                height: 51px;
            }

            .appb-playstore a img {
                width: 150px;
                height: 51px;
            }

            .flip-RTL {
                -moz-transform: scaleY(-1);
                -o-transform: scaleY(-1);
                -webkit-transform: scaleY(-1);
                transform: scaleX(-1);
            }
        </style>
        <div class="appb-container ">
            <h3 class="my-1 ">
                Achetez et vendez partout!
            </h3>
            <p class="mb-4 ">
                Téléchargez nos applications sur Android et iOS
            </p>
            <div class="appb-ctas ">
                <span class="appb-google mx-1">
        <a href="https://play.google.com/store/apps/details?id=se.scmv.morocco&amp;utm_source=homepage&amp;utm_campaign=homepage">
        <img alt="Get it on Google Play" src="https://www.avito.ma/img/playstore.png">
        </a>
        </span>
                <span class="appb-playstore mx-1">
        <a href="https://apps.apple.com/us/app/avito-ma/id740544172?l=fr&amp;ls=1&amp;utm_source=homepage&amp;utm_campaign=homepage">
        <img alt="Get it on Play Store" src="https://www.avito.ma/img/appstore.png">
        </a>
        </span>
            </div>
        </div>
    </section>


</div>
@endsection
