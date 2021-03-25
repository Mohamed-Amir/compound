<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!--Fav and touch icons-->
    <link rel="icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/apple-touch-icon-152x152.png">

    <!--Common Styles Plugins-->
    <link rel="stylesheet" type="text/css" href="/Fronted/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/Fronted/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/Fronted/css/animate.css">
    <link rel="stylesheet" type="text/css" href="/Fronted/css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="/Fronted/css/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="/Fronted/css/jquery-ui.min.css">
    <link rel="stylesheet" type="text/css" href="/Fronted/css/magnific-popup.css">

    <!--Google fonts-->
    <link rel="stylesheet" href="/Fronted/fonts/stylesheet.css" >
    <!--Custom Style-->
    <link rel="stylesheet" type="text/css" href="/Fronted/style.css">
    <link rel="stylesheet" type="text/css" href="/Fronted/space.css">
    <link rel="stylesheet" type="text/css" href="/Fronted/responsive.css">
    <link href="/Admin/toast/jquery.toast.css" rel="stylesheet"/>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="/Fronted/js/html5shiv.min.js"></script>
    <script src="/Fronted//js/respond.min.js"></script>

    <![endif]-->
    @yield('style')
</head>
<body>

@include('Fronted.layouts.header')

@yield('content')

@include('Fronted.layouts.footer')


<!--Common JS Plugin-->
<script type="text/javascript" src="/Fronted/js/jquery-1.12.4.min.js"></script>
<script type="text/javascript" src="/Fronted/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="/Fronted/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/Fronted/js/retina.min.js"></script>
<script type="text/javascript" src="/Fronted/js/jquery.easing.min.js"></script>
<script type="text/javascript" src="/Fronted/js/jquery.scrollUp.min.js"></script>
<script type="text/javascript" src="/Fronted/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="/Fronted/js/isotope.pkgd.min.js"></script>
<script type="text/javascript" src="/Fronted/js/imagesloaded.pkgd.min.js"></script>
<script type="text/javascript" src="/Fronted/js/headroom.min.js"></script>
<script type="text/javascript" src="/Fronted/js/jQuery.headroom.min.js"></script>
<script type="text/javascript" src="/Fronted/js/sticky-kit.min.js"></script>
<script type="text/javascript" src="/Fronted/js/jquery.countdown.min.js"></script>
<script type="text/javascript" src="/Fronted/js/jquery.waypoints.js"></script>
<script type="text/javascript" src="/Fronted/js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="/Fronted/js/jquery.counterup.min.js"></script>

<!-- Google Map -->

<!-- Custom JS -->
<script type="text/javascript" src="/Fronted/js/custom.js"></script>

@yield('script')
</body>
</html>


