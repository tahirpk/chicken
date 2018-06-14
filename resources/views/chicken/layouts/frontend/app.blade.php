<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <!-- For IE -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- For Resposive Device -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Farm Fresh - Organic Food &amp; Eco Farm HTML Template</title>

        <!-- Favicon -->
        <link rel="icon" type="imges/jpg" sizes="56x56" href="{{ asset('assets/'.Config::get('config.front_template').'/frontend/favicon/fab-icon.jpg')}}">

        <!-- Main style sheet -->
        <link rel="stylesheet" href="{{ asset('assets/'.Config::get('config.front_template').'/frontend/css/custom.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/'.Config::get('config.front_template').'/frontend/css/responsive.css')}}">

        <!-- Fix Internet Explorer ______________________________________-->

        <!--[if lt IE 9]>
                <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
                <script src="resource/html5shiv.js"></script>
                <script src="resource/respond.js"></script>
        <![endif]-->

    </head>


    <body>
        <div class="main-page-wrapper">

            <!-- ===================================================
                    Loading Transition
            ==================================================== -->
            <div id="loader-wrapper">
                <div id="loader"></div>
            </div><!-- /.loader-wrapper -->
            <!-- 
                            =============================================
                                    Theme Header
                            ============================================== 
            -->
            @include(Config::get('config.front_template').'.common.frontend.header')



            @yield('content')

            @include(Config::get('config.front_template').'.common.frontend.footer')


            <!-- Scroll Top Button -->
            <button class="scroll-top">
                <i class="fa fa-angle-up" aria-hidden="true"></i>
            </button>
        </div>
        <!-- Js File_________________________________ --> 
        <!-- JS offline library -->
        <script src="{{ asset('assets/'.Config::get('config.front_template').'/frontend/js/jquery.2.2.3.min.js')}}"></script>
        <!-- bootstrap js -->
        <script src="{{ asset('assets/'.Config::get('config.front_template').'/frontend/resource/bootstrap/js/bootstrap.min.js')}}"></script>
        <!-- Camera js -->
        <script src="{{ asset('assets/'.Config::get('config.front_template').'/frontend/resource/Camera-master/scripts/camera.min.js')}}"></script>
        <script src="{{ asset('assets/'.Config::get('config.front_template').'/frontend/resource/Camera-master/scripts/jquery.easing.1.3.js')}}"></script>
        <!-- Owl carousel css-->
        <script src="{{ asset('assets/'.Config::get('config.front_template').'/frontend/resource/OwlCarousel/dist/owl.carousel.min.js')}}"></script>
        <!-- js count to -->
        <script type="text/javascript" src="{{ asset('assets/'.Config::get('config.front_template').'/frontend/resource/jquery.appear.js')}}"></script>
        <script type="text/javascript" src="{{ asset('assets/'.Config::get('config.front_template').'/frontend/resource/jquery.countTo.js')}}"></script>
        <!-- mixitUp -->
        <script type="text/javascript" src="{{ asset('assets/'.Config::get('config.front_template').'/frontend/resource/jquery.mixitup.min.js')}}"></script>
        <!-- fancy box -->
        <script type="text/javascript" src="{{ asset('assets/'.Config::get('config.front_template').'/frontend/resource/fancybox/dist/jquery.fancybox.min.js')}}"></script>
        <!-- wow Animation -->
        <script src="{{ asset('assets/'.Config::get('config.front_template').'/frontend/resource/WOW-master/dist/wow.js')}}"></script>
        <!-- Custom Js -->
        <script src="{{ asset('assets/'.Config::get('config.front_template').'/frontend/js/custom.js')}}"></script>

    </body>
</html>