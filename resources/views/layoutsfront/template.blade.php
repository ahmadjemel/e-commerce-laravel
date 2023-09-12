<!doctype html>
<html class="no-js" lang="zxx">
<!-- Mirrored from template.hasthemes.com/flone/flone/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Dec 2021 08:47:37 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Flone - Minimal eCommerce HTML Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf_token" content="{{ csrf_token() }}" />

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('img/favicon.png')}}">
    <!-- CSS
	============================================ -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{asset('css/icons.min.css')}}">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{asset('css/plugins.css')}}">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    <!--header-->
    @include("layoutsfront.header")
  <!--header end-->
<!--slider-->
@include("layoutsfront.slider")
<!--slider end-->

@include("layoutsfront.marketing")

<!--product-->

@yield("content")

<!--product end-->
<!--footer-->
@include("layoutsfront.footer")
<!--footer end-->
<!-- Modal -->
@include("layoutsfront.modal")
<!-- Modal end -->
<!-- All JS is here
============================================ -->
<script src="{{asset('js/vendor/modernizr-3.11.7.min.js')}}"></script>
<script src="{{asset('js/vendor/jquery-v3.6.0.min.js')}}"></script>
<script src="{{asset('js/vendor/jquery-migrate-v3.3.2.min.js')}}"></script>
<script src="{{asset('js/vendor/popper.min.js')}}"></script>
<script src="{{asset('js/vendor/bootstrap.min.js')}}"></script>
<script src="{{asset('js/plugins.js')}}"></script>
<!-- Ajax Mail -->
<script src="{{asset('js/ajax-mail.js')}}"></script>
<!-- Main JS -->
<script src="{{asset('js/main.js')}}"></script>
</body>
<!-- Mirrored from template.hasthemes.com/flone/flone/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Dec 2021 08:47:43 GMT -->
</html>
