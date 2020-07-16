@extends('layouts.layout') @section('content') @section('extra-css')
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

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="col-md-4">
                <!--User Badge-->
                <div class="card" style=" border-top-left-radius: 50px; border-radius: 150px; ">
                    <img src="{{ $offer->users->photo }}" style="border-top-left-radius: 50px; border-top-right-radius: 50px; height: 220px" alt="John" style="width:100%">
                    <h1 style="color: #000;     font-size: 30px;">{{ $offer->users->name }}</h1>
                    <p class="title">{{ $offer->users->email }}</p>
                    <p><button style="border-bottom-left-radius: 33px; border-bottom-right-radius: 33px;"><span
                                class="fa fa-phone fa-2x"
                                style="color: red; margin-right: 10px;"></span>{{ $offer->users->tel }}</button></p>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection