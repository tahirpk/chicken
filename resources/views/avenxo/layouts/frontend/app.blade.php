<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Furniture House - Furniture Shopping Template</title>
    
    <!--Favicons-->
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('assets/'.Config::get('config.template').'/frontend/favicon/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('assets/'.Config::get('config.template').'/frontend/favicon/apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/'.Config::get('config.template').'/frontend/favicon/apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/'.Config::get('config.template').'/frontend/favicon/apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/'.Config::get('config.template').'/frontend/favicon/apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets/'.Config::get('config.template').'/frontend/favicon/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('assets/'.Config::get('config.template').'/frontend/favicon/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('assets/'.Config::get('config.template').'/frontend/favicon/apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/'.Config::get('config.template').'/frontend/favicon/apple-icon-180x180.png')}}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('assets/'.Config::get('config.template').'/frontend/favicon/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/'.Config::get('config.template').'/frontend/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets/'.Config::get('config.template').'/frontend/favicon/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/'.Config::get('config.template').'/frontend/favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{ asset('assets/'.Config::get('config.template').'/frontend/favicon/manifest.json')}}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('assets/'.Config::get('config.template').'/frontend/favicon/ms-icon-144x144.png')}}">
    <meta name="theme-color" content="#ffffff">
    
    <!--Bootstrap and Other Vendors-->
    <link rel="stylesheet" href="{{ asset('assets/'.Config::get('config.template').'/frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/'.Config::get('config.template').'/frontend/css/bootstrap-theme.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/'.Config::get('config.template').'/frontend/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/'.Config::get('config.template').'/frontend/vendors/owl.carousel/css/owl.carousel.css')}}">    
    
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/'.Config::get('config.template').'/frontend/vendors/lightbox/css/lightbox.css')}}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/'.Config::get('config.template').'/frontend/vendors/flexslider/flexslider.css')}}" media="screen" />
    
    <!--Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800|Montserrat:400,700' rel='stylesheet' type='text/css'>
    
    <!--Mechanic Styles-->
    <link rel="stylesheet" href="{{ asset('assets/'.Config::get('config.template').'/frontend/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/'.Config::get('config.template').'/frontend/css/responsive.css')}}">
    
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    
    @include(Config::get('config.template').'.common.frontend.header')
    
    
    
    @yield('content')
    
    @include(Config::get('config.template').'.common.frontend.footer')
    
    
   
    <!--jQuery, Bootstrap and other vendor JS-->
    
    <!--jQuery-->
    <script src="{{ asset('assets/'.Config::get('config.template').'/frontend/js/jquery-2.1.3.min.js')}}"></script>
    
    <!--Google Maps-->
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    
    <!--Bootstrap JS-->
    <script src="{{ asset('assets/'.Config::get('config.template').'/frontend/js/bootstrap.min.js')}}"></script>
    
    <!--Nice Scroll-->
    <script src="{{ asset('assets/'.Config::get('config.template').'/frontend/vendors/nicescroll/jquery.nicescroll.js')}}"></script>
        
    <!--Flickr-->
    
    
    <!--Lightshot-->
    <script src="{{ asset('assets/'.Config::get('config.template').'/frontend/vendors/lightbox/js/lightbox.min.js')}}"></script>
    
    <!--Tweets-->
    <script src="{{ asset('assets/'.Config::get('config.template').'/frontend/vendors/tweet/scripts.js')}}"></script>
    <script src="{{ asset('assets/'.Config::get('config.template').'/frontend/vendors/tweet/tweetie.min.js')}}"></script>
    
    <!--Counter Up-->
    <script src="{{ asset('assets/'.Config::get('config.template').'/frontend/vendors/waypoints/waypoints.min.js')}}"></script>
    <script src="{{ asset('assets/'.Config::get('config.template').'/frontend/vendors/counterup/jquery.counterup.min.js')}}"></script>
    
    <!--Owl Carousel-->
    <script src="{{ asset('assets/'.Config::get('config.template').'/frontend/vendors/owl.carousel/js/owl.carousel.min.js')}}"></script>
    
    <!--Isotope-->
    <script src="{{ asset('assets/'.Config::get('config.template').'/frontend/vendors/isotope/isotope-custom.js')}}"></script>
    
    <!--FlexSlider-->
    <script src="{{ asset('assets/'.Config::get('config.template').'/frontend/vendors/flexslider/jquery.flexslider-min.js')}}"></script>
    
    <!--Strella JS-->
    <script src="{{ asset('assets/'.Config::get('config.template').'/frontend/js/furniture.js')}}"></script>
</body>
</html>