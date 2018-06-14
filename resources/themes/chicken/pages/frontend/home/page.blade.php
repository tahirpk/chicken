@extends(Config::get('config.front_template').'.layouts.frontend.app')
@section('content')
<!-- 
                        =============================================
                                Inner Page Banner
                        ============================================== 
-->
<section class="inner-page-banner">
    <div class="opacity">
        <div class="container">
            <h3>About us</h3>
            <ul>
                <li><a href="index.html" class="">Home</a></li>
                <li>.</li>
                <li><span>About</span></li>
            </ul>
        </div> <!-- /.container -->
    </div> <!-- /.opacity -->
</section> <!-- /inner-page-banner -->

<!-- 
            =============================================
                    Best sale day Section
            ============================================== 
-->
<section class="best-sale about-us-best">
    <div class="container">
        <h2>Best sale of the day</h2>
        <h6>We produce lots of vegetables in our Farm, you will get everything Fresh. Also, the cows produce lots of Milk. We rely on<br> healthy methods to nurture our cows. We are currently producing 150 liters of Milk every day. Also, for Gardening, our<br> farmers are skilled, they understand very well how to grow organic foods.</h6>
        <div id="client-slider" class="owl-carousel owl-theme owl-best-sale">
            <div class="item">
                <img src="{{ asset('assets/'.Config::get('config.front_template').'/frontend/images/gallary/gallary-home.jpg')}}" alt="Image">
            </div> <!-- /.item -->
            <div class="item">
                <img src="{{ asset('assets/'.Config::get('config.front_template').'/frontend/images/gallary/gallary-home.jpg')}}" alt="Image">
            </div> <!-- /.item -->
        </div><!-- /.client-slider -->	
        <a href="shop.html" class="tran3s round-border wow fadeInRight animated hvr-shutter-out-horizontal-two" data-wow-delay="1s">Shop Now</a>
    </div><!-- /.container -->
</section><!-- /.best-sale -->

<!-- 
=============================================
        Farm Fresh Section
============================================== 
-->
<section class="farm-fresh about-us-fresh">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-xs-12">
                <h2>We Are Farm Fresh</h2>
                <h6>We produce lots of vegetables in our Farm, you will get everything Fresh. Also, the cows produce lots of Milk. We rely on healthy methods to nurture our cows. We are currently producing 150 liters of Milk every day. Also, for Gardening, our farmers are skilled, they understand very well how to grow organic foods.</h6>
                <a href="#" class="tran3s round-border wow fadeInRight animated hvr-shutter-out-horizontal-two" data-wow-delay="1s">Know More</a>
            </div><!-- /#col -->
            <div class="col-md-6 col-xs-12">
                <img src="{{ asset('assets/'.Config::get('config.front_template').'/frontend/images/blog/blog1.jpg')}}" alt="img">
            </div><!-- /#col -->
        </div><!-- /#Row -->
        <h6>Organic farming system in India is not new and is being followed from ancient time. It is a method of farming system which primarily aimed at cultivating the land and raising crops in such a way, as to keep the soil alive and in good health by use of organic wastes (crop, animal and farm wastes, aquatic wastes) and other biological materials along with beneficial microbes (biofertilizers) to release nutrients to crops for increased sustainable production in an eco friendly pollution free environment
            As per the definition of the United States Department of Agriculture (USDA) study team on organic farming “organic farming is a system which avoids or largely excludes the use of synthetic inputs (such as fertilizers, pesticides, hormones, feed additives etc) and to the maximum extent feasible rely upon crop rotations,</h6>
    </div><!-- /#container -->
</section><!-- /#farm-fresh -->

<!-- 
            =============================================
                    Counter Number Section
            ============================================== 
-->
<section class="counter-number">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-xs-6">
                <div class="counter-box">
                    <i class="icon flaticon-business float_left"></i>
                    <h6>Cups of coffe</h6>
                    <div class="number"><span class="timer" data-from="0" data-to="210" data-speed="1500" data-refresh-interval="5">0</span></div>
                </div> <!-- /.counter-box -->
            </div> <!-- /.col- -->
            <div class="col-md-3 col-xs-6">
                <div class="counter-box">
                    <i class="icon flaticon-rate float_left"></i>
                    <h6>Cups of coffe</h6>
                    <div class="number"><span class="timer" data-from="0" data-to="100" data-speed="1500" data-refresh-interval="5">0</span>%</div>
                </div> <!-- /.counter-box -->
            </div> <!-- /.col- -->
            <div class="col-md-3 col-xs-6">
                <div class="counter-box">
                    <i class="icon flaticon-construction float_left"></i>
                    <h6>Cups of coffe</h6>
                    <div class="number"><span class="timer" data-from="0" data-to="70" data-speed="1500" data-refresh-interval="5">0</span></div>
                </div> <!-- /.counter-box -->
            </div> <!-- /.col- -->
            <div class="col-md-3 col-xs-6">
                <div class="counter-box">
                    <i class="icon flaticon-medal float_left"></i>
                    <h6>Cups of coffe</h6>
                    <div class="number"><span class="timer" data-from="0" data-to="234" data-speed="1500" data-refresh-interval="5">0</span></div>
                </div> <!-- /.counter-box -->
            </div> <!-- /.col- -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</section> <!-- /.counter-number -->

<!-- 
=============================================
partners section
==============================================
-->
<div class="partners-section">
    <div class="container">
        <div class="row">
            <div id="partners" class="owl-carousel owl-theme owl-partners">
                <div class="item"><img src="{{ asset('assets/'.Config::get('config.front_template').'/frontend/images/logo/prtn-logo-1.png')}}" alt="partners"></div><!-- /.item-->
                <div class="item"><img src="{{ asset('assets/'.Config::get('config.front_template').'/frontend/images/logo/prtn-logo-2.png')}}" alt="partners"></div><!-- /.item-->
                <div class="item"><img src="{{ asset('assets/'.Config::get('config.front_template').'/frontend/images/logo/prtn-logo-3.png')}}" alt="partners"></div><!-- /.item-->
                <div class="item"><img src="{{ asset('assets/'.Config::get('config.front_template').'/frontend/images/logo/prtn-logo-4.png')}}" alt="partners"></div><!-- /.item-->
            </div><!-- /.owl-partners-->
        </div><!-- /.row-->
    </div><!-- /.container-->
</div><!-- /.partners-section-->


@endsection