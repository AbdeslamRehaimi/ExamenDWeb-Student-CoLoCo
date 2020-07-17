@extends('layouts.layout')
@section('content')

<div class="container">
      <div class="jumbotron">
        <h1 class="display-3" style="padding-right: 0px;">Student Colocation</h1>
        <p class="lead">Finding and location a colocation was never been easy, bringing to you this solution to help you!</p>
      </div>
      <div class="container">
<h1>About Project</h1>
<p>The goal is to implement a web application with laravel that will manage the sharing of co-location notices between students at a university. The application will manage offers and requests
    for co-rentals. The application will use a map (googlemap / leaflet) to display the positions of the co-location notices. The application will use Mysql SGBD to manage its data.
    A co-location offer can be made by a user of the application by creating an account and completing a form which will indicate the details of its offer:

<p>The address of the accommodation, the area, the price and the capacity (the number of students)</p>
<p>WiFi, Lave-linge, …, etc</p>
<p>Pictures of the accommodation</p>
<p>
</div>



<br><br>

    </div>
    <footer class="page-footer space_Section" style="background-color: #0e0201;">
    <div style="color: #fff;" class="footer-copyright text-center py-3">Copyright © 2020 |
        <a style="color: #fff;" href="https://mdbootstrap.com/education/bootstrap/"> Master ISI</a>
    </div>
</footer>


@endsection
