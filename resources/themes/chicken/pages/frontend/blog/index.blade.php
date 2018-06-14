@extends(Config::get('config.front_template').'.layouts.frontend.app')
@section('content')
<!-- 
                        =============================================
                                Inner Page Banner
                        ============================================== 
-->
<section class="inner-page-banner inner-page-banner-vs2">
    <div class="opacity">
        <div class="container">
            <h3>Blog</h3>
            <ul>
                <li><a href="index.html" class="">Home</a></li>
                <li>.</li>
                <li><span>Blog</span></li>
            </ul>
        </div> <!-- /.container -->
    </div> <!-- /.opacity -->
</section> <!-- /inner-page-banner -->

<!-- 
=============================================
        Blog-vs2 page
============================================== 
-->
<article class="blog-vs2-page">
    <div class="container">
        <div class="row">
            <div class="blog-images-categories col-md-8 col-xs-12">
                <div class="left-blog">
                    <div class="img images-hover">
                        <img src="{{ asset('assets/'.Config::get('config.front_template').'/frontend/images/blog/blogimg1.png')}}" alt="images" class="tran3s">
                        <div class="round-border">13 /04 /17</div>
                    </div><!-- /.img -->
                    <div class="text-blog">
                        <h3><a href="blog-details-v2.html" class="tran3s">Treasures of Organic</a></h3>
                        <p>We are proud to be producing/raising much of the food for sale in the shop from the farm. It is very labour intensive and not good for 'economies of scale' to have many small enterprises but we are working our way towards</p>
                        <a href="blog-details-v2.html" class="tran3s"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>&nbsp;&nbsp;Continue reading</a>	
                    </div>
                </div><!-- /.left-blog -->
                <div class="left-blog">
                    <div class="img images-hover">
                        <img src="{{ asset('assets/'.Config::get('config.front_template').'/frontend/images/blog/blogimg2.png')}}" alt="images" class="tran3s">
                        <div class="round-border">13 /04 /17</div>
                    </div><!-- /.img -->
                    <div class="text-blog">
                        <h3><a href="blog-details-v2.html" class="tran3s">Farm Gate Sales</a></h3>
                        <p>Thank you for working with us in upholding and rejuvenating the integrity of family farm culture and wholesome food. If you have any questions or want more information about how to get involved, please do not hesitate to contact us.</p>
                        <a href="blog-details-v2.html" class="tran3s"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>&nbsp;&nbsp;Continue reading</a>	
                    </div>
                </div><!-- /.left-blog -->
                <div class="left-blog">
                    <div class="img images-hover">
                        <img src="{{ asset('assets/'.Config::get('config.front_template').'/frontend/images/blog/blogimg3.png')}}" alt="images" class="tran3s">
                        <div class="round-border">13 /04 /17</div>
                    </div><!-- /.img -->
                    <div class="text-blog">
                        <h3><a href="blog-details-v2.html" class="tran3s">The view from reception at Bore Place</a></h3>
                        <p>I started working at Bore Place at the beginning of September 2016 and so much has happened in that time that I thought it would be good to go on a whistlestop tour of the last few months! I have met so many different people whilst I’ve been here, and</p>
                        <a href="blog-details-v2.html" class="tran3s"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>&nbsp;&nbsp; Continue reading</a>	
                    </div>
                </div><!-- /.left-blog -->
                <div class="left-blog">
                    <div class="img images-hover">
                        <img src="{{ asset('assets/'.Config::get('config.front_template').'/frontend/images/blog/blogimg4.png')}}" alt="images" class="tran3s">
                        <div class="round-border">13 /04 /17</div>
                    </div><!-- /.img -->
                    <div class="text-blog">
                        <h3><a href="blog-details-v2.html" class="tran3s">Cooking with seasonal veg for #September</a></h3>
                        <p>At the moment, I'm picking lots of these in the veg garden at Bore Place. They grow really well in the UK and I much prefer them to their slightly stringier relatives, runner beans You can enjoy local French beans from around June through to September.</p>
                        <a href="blog-details-v2.html" class="tran3s"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>&nbsp;&nbsp;Continue reading</a>	
                    </div>
                </div><!-- /.left-blog -->
                <ul class="page_pagination">
                    <li><a href="#" class="tran3s active">1</a></li>
                    <li><a href="#" class="tran3s">2</a></li>
                    <li><a href="#" class="tran3s">3</a></li>
                    <li><a href="#" class="tran3s active"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li>
                </ul>
            </div><!-- /.blog-images-categories -->

            <div class="categories-sidebar col-md-4 col-sm-6 col-xs-12">
                <div class="search theme-search-box">
                    <form>
                        <input type="text" class="search-color" placeholder="Search"/>
                        <button class=""><span class="tran3s"><i class="fa fa-search"></i></span></button>
                    </form>
                </div> <!-- /.search -->
                <div class="left-about">
                    <h2>Blog Categories</h2>
                    <ul>
                        <li><a href="#" class="tran3s">Berries<span>( 07 )</span></a></li>
                        <li><a href="#" class="tran3s">Fruits</a></li>
                        <li><a href="blog.html" class="tran3s">Garden</a></li>
                        <li><a href="#" class="tran3s">Herbs</a></li>
                        <li><a href="#" class="tran3s">Vegetables</a></li>
                        <li><a href="#" class="tran3s">Eating & Cooking</a></li>
                    </ul>
                </div><!-- /.left-about -->
                <div class="sidebar-recent-news">
                    <h2>Some Recent Post</h2>
                    <div class="single-recent-news clear_fix">
                        <img src="{{ asset('assets/'.Config::get('config.front_template').'/frontend/images/blog/recent1.png')}}" alt="image" class="float_left">
                        <div class="post float_left">
                            <h6><a href="blog-details-v2.html" class="tran3s">The Farm Organic Cuisine  team would like</a></h6>
                            <p>January 27, 2017  by <span>Ghost</span></p>
                        </div> <!-- /.post -->
                    </div> <!-- /.single-recent-news -->
                    <div class="single-recent-news clear_fix">
                        <img src="{{ asset('assets/'.Config::get('config.front_template').'/frontend/images/blog/recent2.png')}}" alt="image" class="float_left">
                        <div class="post float_left">
                            <h6><a href="blog-details-v2.html" class="tran3s">The Organic Farm Shop a social enterprise business</a></h6>
                            <p>January 27, 2017  by <span>Mahfuz</span></p>
                        </div> <!-- /.post -->
                    </div> <!-- /.single-recent-news -->
                    <div class="single-recent-news clear_fix">
                        <img src="{{ asset('assets/'.Config::get('config.front_template').'/frontend/images/blog/recent3.png')}}" alt="image" class="float_left">
                        <div class="post float_left">
                            <h6><a href="blog-details-v2.html" class="tran3s">Enjoy a different shopping experience.</a></h6>
                            <p>January 27, 2017  by <span>Riad</span></p>
                        </div> <!-- /.post -->
                    </div> <!-- /.single-recent-news -->
                </div> <!-- /.sidebar-recent-news -->
                <div class="left-about archive-post">
                    <h2>Archive</h2>
                    <ul>
                        <li><a href="#">January 2017<span>&nbsp;&nbsp;&nbsp;&nbsp;(18)</span></a></li>
                        <li><a href="#">November 2016<span>&nbsp;(4)</span></a></li>
                        <li><a href="blog.html">October 2016<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(1)</span></a></li>
                        <li><a href="#">October 2016<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(1)</span></a></li>
                        <li><a href="#">February 2016<span>&nbsp;&nbsp;&nbsp;(1)</span></a></li>
                        <li><a href="#">January 2015<span>&nbsp;&nbsp;&nbsp;(18)</span></a></li>
                    </ul>
                </div><!-- /.left-about -->
                <div class="sidebar-keywords">
                    <h2>Tages</h2>
                    <ul>
                        <li><a href="" class="tran3s hvr-shutter-out-horizontal round-border">Fresh</a></li>
                        <li><a href="" class="tran3s hvr-shutter-out-horizontal round-border">Fruits</a></li>
                        <li><a href="" class="tran3s hvr-shutter-out-horizontal round-border">Vegetables</a></li>
                        <li><a href="" class="tran3s hvr-shutter-out-horizontal round-border">Milk</a></li>
                        <li><a href="" class="tran3s hvr-shutter-out-horizontal round-border">Food</a></li>
                    </ul>
                </div> <!-- /.sidebar-keywords -->
            </div><!-- /categories-sidebar -->
        </div><!-- /row -->
    </div><!-- /container -->
</article><!-- /news-vs2-page -->	

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