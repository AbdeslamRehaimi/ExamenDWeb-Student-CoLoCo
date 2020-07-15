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
                        <form method="post" action="${pageContext.request.contextPath}/article/save" >
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
                                    <input style="border-radius: 150px;" class="form-control" value="latitude" placeholder="titre" disabled="true" />
                                </div>
                                <div class="form-group col-md-12 required ">
                                    <label for="longitude">longitude</label>
                                    <input style="border-radius: 150px;" class="form-control" value="longitude" placeholder="titre" disabled="true" />
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
<script>
    mapboxgl.accessToken = 'pk.eyJ1IjoiaXRzYWJkZXNsYW0iLCJhIjoiY2tjbXQ1bzloMDRuNjJ0bGYwejNmbTNpdSJ9.bVIJw-u4FRKEi6ksBGSpSg';
    var map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/streets-v11'
    });
</script>
@stack ('after-scripts') @endsection
@endsection
