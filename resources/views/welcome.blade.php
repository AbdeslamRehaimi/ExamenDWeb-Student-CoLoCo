<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('res/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('res/font-awesome.min.css') }}">

    <!-- Style Css -->
    <link rel="stylesheet" href="{{ asset('res/res/style.css') }}">
    <style>
        p {
            display: block;
            margin-block-start: 1em;
            margin-block-end: 1em;
            margin-inline-start: 0px;
            margin-inline-end: 0px;
        }
        
        .maintitle {
            font-size: 2.5rem;
            color: #fff;
            margin-bottom: .5rem;
            font-weight: 500;
            line-height: 1.2;
            margin-top: 0;
            display: block;
            margin-block-start: 0.67em;
            margin-block-end: 0.67em;
            margin-inline-start: 0px;
            margin-inline-end: 0px;
            font-family: Metropolis, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
        }
        
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
    </style>

</head>

<body>
    <div class="container-fluid">
        <div class="container">
            <!--
            <div>
                <h1 class="maintitle">
                    Build your next project faster with SB UI Kit Pro
                </h1>
                <p class="page-header-text mb-5">Welcome to SB UI Kit Pro, a toolkit for building beautiful web interfaces, created by the developmet team at Start Bootstrap</p>
            </div>
            -->
            <div class="row">
                <div class="col-md-6">
                    <div class="container">
                        <div class="gris pad-10 mar-b-10">
                            <div id="ctl00_ctl50_g_d8fa90bd_8360_4dd7_bea6_22fc238511fe_ctl00_upAuthentifierUtilisateur">

                                <div id="ctl00_ctl50_g_d8fa90bd_8360_4dd7_bea6_22fc238511fe_ctl00_pnlAuthentifierUtilisateur" onkeypress="javascript:return WebForm_FireDefaultButton(event, 'lnkBtnConnex')">

                                    <div id="msgConteneurFormulaire" class="" enableviewstate="false" style="width: 98%; margin-top: 5px; margin-bottom: 12px;">
                                    </div>
                                    <h1>Pour accéder à votre compte, veuillez vous identifier.</h1>
                                    <div class="conx ConexUser">
                                        <input name="ctl00$ctl50$g_d8fa90bd_8360_4dd7_bea6_22fc238511fe$ctl00$txtEmail" type="text" maxlength="50" id="txtEmail" class="local-cnx glowing-border" placeholder="Adresse e-mail" autocomplete="off">
                                        <span id="ctl00_ctl50_g_d8fa90bd_8360_4dd7_bea6_22fc238511fe_ctl00_RFVtxtEmail" class="failureNotification" style="display:none;"></span>
                                        <input type="hidden" name="ctl00$ctl50$g_d8fa90bd_8360_4dd7_bea6_22fc238511fe$ctl00$ValidatorCalloutExtender7_ClientState" id="ctl00_ctl50_g_d8fa90bd_8360_4dd7_bea6_22fc238511fe_ctl00_ValidatorCalloutExtender7_ClientState" autocomplete="off">

                                        <span id="ctl00_ctl50_g_d8fa90bd_8360_4dd7_bea6_22fc238511fe_ctl00_REtxtEmail" style="display:none;"></span>
                                        <input type="hidden" name="ctl00$ctl50$g_d8fa90bd_8360_4dd7_bea6_22fc238511fe$ctl00$ValidatorCalloutExtender11_ClientState" id="ctl00_ctl50_g_d8fa90bd_8360_4dd7_bea6_22fc238511fe_ctl00_ValidatorCalloutExtender11_ClientState" autocomplete="off">

                                        <input name="ctl00$ctl50$g_d8fa90bd_8360_4dd7_bea6_22fc238511fe$ctl00$txtPassword" type="password" maxlength="14" id="txtPassword" class="local-cnx" autocomplete="off" placeholder="Mot de passe">

                                        <span id="ctl00_ctl50_g_d8fa90bd_8360_4dd7_bea6_22fc238511fe_ctl00_RFVtxtPassword" class="failureNotification" style="display:none;"></span>
                                        <input type="hidden" name="ctl00$ctl50$g_d8fa90bd_8360_4dd7_bea6_22fc238511fe$ctl00$ValidatorCalloutExtender8_ClientState" id="ctl00_ctl50_g_d8fa90bd_8360_4dd7_bea6_22fc238511fe_ctl00_ValidatorCalloutExtender8_ClientState" autocomplete="off">

                                        <a id="lnkAfficherPopUpInitialiserPass" href="javascript:;">
                                            <p class="oublie hoverUnderLine">J'ai oublié mon mot de passe</p>
                                        </a>
                                        <div style="position: relative;">
                                            <div style="margin: 50px auto" class="btn">
                                                <a onclick="ShowLoaderDisableBtn('imgLoaderbtnConnexion','lnkBtnConnex','VG_btnAuthentification');" id="lnkBtnConnex" class="or" href="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$ctl50$g_d8fa90bd_8360_4dd7_bea6_22fc238511fe$ctl00$lnkBtnConnex&quot;, &quot;&quot;, true, &quot;VG_btnAuthentification&quot;, &quot;&quot;, false, true))">Connexion</a>

                                            </div>
                                            <div id="imgLoaderbtnConnexion" style="position: absolute; bottom: -1px; right: 30px; display: none;">
                                                <img src="/Style library/SelfCare/Images/ajax-loader.gif" alt="Chargement ..." title="Chargement ..." style="width: 30px;">
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="container">
                        <div class="bleu pad-10 mar-b-10">
                            <h1 style="text-transform: none">C’est votre première visite ? Inscrivez-vous pour accéder à votre espace client
                            </h1>

                            <div class="btn"><a class="bl bl2" href="/Pages/Creation-de-compte.aspx">Inscrivez vous!</a></div>
                        </div>

                        <div class=" pad-0 mar-b-10">

                            <div id="ctl00_ctl50_g_d8fa90bd_8360_4dd7_bea6_22fc238511fe_ctl00_divVideo" class="storeapp"><iframe width="100%" height="181" style="border-radius: 10px" src="https://www.youtube.com/embed/TIKfkJTXtPs?rel=0" frameborder="0" allowfullscreen=""></iframe></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>