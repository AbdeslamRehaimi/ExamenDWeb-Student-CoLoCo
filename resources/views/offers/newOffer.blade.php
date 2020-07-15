@extends('layouts.layout') @section('content')

<div class="jumbotron jumbotron-fluid bg-cool-blue">
    <div class="container">
        <h1 class="display-4 aColor">
            New Offer
        </h1>
    </div>
</div>
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <a style="float: left;" class="btn btn-danger" href="${pageContext.request.contextPath}/article/">Returne</a>
                </div>
                <br><br>
                <div class="card" style="margin-top: 25px">
                    <div class="card-header">Article Edite</div>
                    <form method="post" action="${pageContext.request.contextPath}/article/save">
                        <div class="card-body row">
                            <input path="id" type="hidden" />

                            <div class="form-group col-md-12 required ">
                                <label for="title">Titre</label>
                                <input path="title" class="form-control" placeholder="titre" />
                                <errors path="title" class="alert-danger" />
                            </div>

                            <div class="form-group col-md-12 required ">
                                <label for="superficier">superficier</label>
                                <input path="superficier" class="form-control" placeholder="superficier" />
                                <errors path="superficier" class="alert-danger" />
                            </div>

                            <div class="form-group col-md-12 required ">
                                <label for="capaciter">capaciter</label>
                                <input path="capaciter" class="form-control" placeholder="capaciter" />
                                <errors path="capaciter" class="alert-danger" />
                            </div>

                            <div class="form-group col-md-12 required ">
                                <label for="prix">prix</label>
                                <input path="prix" class="form-control" placeholder="prix" />
                                <errors path="prix" class="alert-danger" />
                            </div>

                            <div class="form-group col-md-12 required ">
                                <label for="photo">photo</label>
                                <input path="photo" class="form-control" placeholder="photo" />
                                <errors path="photo" class="alert-danger" />
                            </div>

                            <div class="form-group col-md-12 required ">
                                <label for="adress">adress</label>
                                <input path="adress" class="form-control" placeholder="adress" />
                                <errors path="adress" class="alert-danger" />
                            </div>

                            <div class="form-group col-md-12 required ">
                                <label for="latitude">latitude</label>
                                <input id="lag" style="border-radius: 150px;" class="form-control" value="latitude" placeholder="titre" disabled="true" />
                            </div>
                            <div class="form-group col-md-12 required ">
                                <label for="longitude">longitude</label>
                                <input id="lng" style="border-radius: 150px;" class="form-control" value="longitude" placeholder="titre" disabled="true" />
                            </div>
                            <div class="form-group geocoder">
                                <div id="geocoder"></div>
                            </div>
                            <div class="form-group col-md-12 required ">
                                <div id='map' style='width: 1070px; height: 500px;'></div>
                            </div>
                            <div class="form-group col-md-12">
                                <button class="btn btn-success btn-block">Valider</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@section('custum-js') @stack ('before-scripts')
<script src='https://api.mapbox.com/mapbox-gl-js/v1.11.1/mapbox-gl.js'></script>
<link href='https://api.mapbox.com/mapbox-gl-js/v1.11.1/mapbox-gl.css' rel='stylesheet' />
<script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.5.1/mapbox-gl-geocoder.min.js"></script>
<link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.5.1/mapbox-gl-geocoder.css" type="text/css" />
<script>
    var user_location = [77.216721, 28.644800];
    mapboxgl.accessToken = 'pk.eyJ1IjoiaXRzYWJkZXNsYW0iLCJhIjoiY2tjbXQ1bzloMDRuNjJ0bGYwejNmbTNpdSJ9.bVIJw-u4FRKEi6ksBGSpSg';
    var map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/streets-v9',
        center: user_location,
        zoom: 10
    });

    map.addControl(
        new MapboxGeocoder({
            accessToken: mapboxgl.accessToken,
            mapboxgl: mapboxgl
        })
    );

    var marker;
    //After the map style has loaded on the page,
    map.on('load', function() {
        addMarker(user_location, 'load');
        //add_markers(saved_markers);
        geocoder.on('result', function(ev) {
            console.log(ev.result.center);
        });
    });

    map.on('click', function(e) {
        marker.remove();
        addMarker(e.lngLat, 'click');
        document.getElementById("lag").value = e.lngLat.lat;
        document.getElementById("lng").value = e.lngLat.lng;
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/es6-promise@4/dist/es6-promise.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/es6-promise@4/dist/es6-promise.auto.min.js"></script>

@stack ('after-scripts') @endsection @endsection