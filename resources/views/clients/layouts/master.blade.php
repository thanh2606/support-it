<!doctype html>
<html lang="en">
<head>
    <title>Free Education Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('client/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('client/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('client/css/owl.carousel.min.css') }}">

    <link rel="stylesheet" href="{{ asset("client/fonts/ionicons/css/ionicons.min.css") }}">
    <link rel="stylesheet" href="{{ asset("client/fonts/fontawesome/css/font-awesome.min.css") }}">
    <link rel="stylesheet" href="{{ asset("client/fonts/flaticon/font/flaticon.css") }}">
    <link rel="stylesheet" href="{{ asset("client/css/magnific-popup.css") }}">

    <!-- Theme Style -->
    <link rel="stylesheet" href="{{ asset("css/style.css") }}">
</head>
<body>

@include('clients.layouts.header')

@yield('content')

@include('clients.layouts.footer')
<!-- END footer -->

<!-- loader -->
<div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

<script src="{{ asset('client/js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('client/js/jquery-migrate-3.0.0.js') }}"></script>
<script src="{{ asset('client/js/popper.min.js') }}"></script>
<script src="{{ asset('client/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('client/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('client/js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('client/js/jquery.stellar.min.js') }}"></script>
<script src="{{ asset('client/js/jquery.animateNumber.min.js') }}"></script>

<script src="{{ asset('client/js/jquery.magnific-popup.min.js') }}"></script>

<script src="{{ asset('client/js/main.js') }}"></script>
</body>
</html>
