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
                    <a style="float: left; color: white;" class="btn btn-danger" href="../offers">Returne</a>
                </div>
                <br><br>
                <div class="card" style="margin-top: 25px">
                    <div class="card-header">Offer Add</div>
                    <form method="post" action="{{ route('offers.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="card-body row">
                            <input type="hidden" required name="id" value="{{ $offer->id }}">

                            <div class="form-group col-md-12 required ">
                                <label for="title">Titre</label>
                                <input name="titre" value="{{ $offer->titre }}" class="form-control" placeholder="titre" />
                            </div>

                            <div class="form-group col-md-6 required ">
                                <label for="superficier">Superficier</label>
                                <input name="superficie" value="{{ $offer->superficie }}" class="form-control" placeholder="superficier" />
                            </div>

                            <div class="form-group col-md-6 required ">
                                <label for="capaciter">Capaciter</label>
                                <input name="capacite" value="{{ $offer->capacite }}" class="form-control" placeholder="capaciter" />
                            </div>

                            <div class="form-group col-md-12 required ">
                                <label for="prix">prix</label>
                                <input name="prix" value="{{ $offer->prix }}" class="form-control" placeholder="prix" />
                            </div>

                            <div class="form-group col-md-12 required ">
                                <label for="adress">Adress</label>
                                <input id="adress" name="adress" class="form-control" placeholder="Adress" />
                            </div>


                            <div class="form-group col-md-12 required ">
                                <label for="description">Description</label>
                                <textarea name="description" value="{{ $offer->description }}" class="form-control" placeholder="description"></textarea>
                            </div>

                            <div class="form-group col-md-12 required ">
                                <label for="latitude">Latitude</label>
                                <input type="text"  id="latitude" name="latitude" style="border-radius: 150px;" class="form-control"  />
                            </div>
                            <div class="form-group col-md-12 required ">
                                <label for="longitude">Longitude</label>
                                <input type="text" id="longtude" name="longtude"  style="border-radius: 150px;" class="form-control"  />
                            </div>

                            <div class="form-group col-md-12">
                                <label>Image</label>
                                <input type="file" name="photo" class="form-control">
                            </div>

<!--
                            <div class="form-group col-md-12 required">
                                <div class="btn">
                                    <span>Picture</span>
                                    <input type="file" name="picture">
                                </div>

                            </div>
-->








                            <div class="form-group geocoder">
                                <div id="geocoder"  ></div>
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
    var user_location = [-6.353321573187401, 32.335456747816394];
    //Rextraction adress from cordinates
    var long = 32.335456747816394;
    var latd = -6.353321573187401;



    mapboxgl.accessToken = 'pk.eyJ1IjoiZmFraHJhd3kiLCJhIjoiY2pscWs4OTNrMmd5ZTNra21iZmRvdTFkOCJ9.15TZ2NtGk_AtUvLd27-8xA';
    var map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/streets-v9',
        center: user_location,
        zoom: 10
    });
    //  geocoder here
    var geocoder = new MapboxGeocoder({
        accessToken: mapboxgl.accessToken,
    });

    var marker;

    // After the map style has loaded on the page, add a source layer and default
    // styling for a single point.
    map.on('load', function() {
        addMarker(user_location, 'load');
        //add_markers(saved_markers);

        // Listen for the `result` event from the MapboxGeocoder that is triggered when a user
        // makes a selection and add a symbol that matches the result.
        geocoder.on('result', function(ev) {
            alert("We will redirect!");
            console.log(ev.result.center);

        });
    });
    map.on('click', function(e) {
        marker.remove();
        addMarker(e.lngLat, 'click');
        //console.log(e.lngLat.lat);
        document.getElementById("latitude").value = e.lngLat.lat;
        document.getElementById("longtude").value = e.lngLat.lng;
        //Extracting Adress
        long = e.lngLat.lng;
        latd = e.lngLat.lat;

        getGeocoder(long, latd);



    });

    function addMarker(ltlng, event) {

        if (event === 'click') {
            user_location = ltlng;
        }
        marker = new mapboxgl.Marker({
                draggable: true,
                color: "#d02922"
            })
            .setLngLat(user_location)
            .addTo(map)
            .on('dragend', onDragEnd);
    }

    function add_markers(coordinates) {

        var geojson = (saved_markers == coordinates ? saved_markers : '');

        console.log(geojson);
        // add markers to map
        geojson.forEach(function(marker) {
            console.log(marker);
            // make a marker for each feature and add to the map
            new mapboxgl.Marker()
                .setLngLat(marker)
                .addTo(map);
        });

    }


    function onDragEnd() {
        var lngLat = marker.getLngLat();
        document.getElementById("lat").value = lngLat.lat;
        document.getElementById("lng").value = lngLat.lng;
        console.log('lng: ' + lngLat.lng + '<br />lat: ' + lngLat.lat);


    }

    function getGeocoder(lat, long){
        let url = 'https://api.mapbox.com/geocoding/v5/mapbox.places/' + lat + ',' + long + '.json?access_token=pk.eyJ1IjoiaXRzYWJkZXNsYW0iLCJhIjoiY2tjbXQ1bzloMDRuNjJ0bGYwejNmbTNpdSJ9.bVIJw-u4FRKEi6ksBGSpSg';
        fetch(url)
        .then(res => res.json())
        .then((out) => {
            document.getElementById("adress").value = out.features[1].place_name;
            console.log('Checkout this JSON! ', out.features[1].place_name);
        })
        .catch(err => { throw err });
    }


    document.getElementById('geocoder').appendChild(geocoder.onAdd(map));
</script>

<script src="https://cdn.jsdelivr.net/npm/es6-promise@4/dist/es6-promise.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/es6-promise@4/dist/es6-promise.auto.min.js"></script>

@stack ('after-scripts') @endsection @endsection
