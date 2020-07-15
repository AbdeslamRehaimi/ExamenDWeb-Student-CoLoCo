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
                        <form method="post" action="${pageContext.request.contextPath}/article/save" modelAttribute="article">
                            <div class="card-body row">
                                <input path="id" type="hidden" />

                                <div class="form-group col-md-12 required ">
                                    <label for="title">Titre</label>
                                    <input path="title" class="form-control" placeholder="titre" />
                                    <errors path="title" class="alert-danger" />
                                </div>

                                <div class="form-group col-md-12 required ">
                                    <label for="title">Writer</label>
                                    <input style="border-radius: 150px;" class="form-control" value="${fullName}" placeholder="titre" disabled="true" />
                                </div>

                                <div class="form-group col-md-12">

                                    <button class="btn btn-success btn-block">Valider</button>


                                </div>

                                @yield('lmalwi')
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
