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
            <h3>Blog Left sidebar</h3>
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
<article class="blog-vs2-page blog-details">
    <div class="container">
        <div class="row">
            <div class="blog-images-categories imges-categories col-md-8 col-xs-12">
                <div class="left-blog">
                    <div class="img images-hover">
                        <img src="{{ asset('assets/'.Config::get('config.front_template').'/frontend/images/blog/blog-details1.png')}}" alt="images" class="tran3s">
                        <div class="round-border float_right">13 /04 /17</div>
                    </div><!-- /.img -->
                    <div class="text-blog">
                        <h3><a href="#" class="tran3s">Treasures of Organic</a></h3>
                        <p>Post by <span>Mahfuz</span> in Uncategorized  <span>3 Comment</span></p>
                        <p>Farm fresh (ONM) is a local, vertically-integrated, family-owned and operated meat company producing and selling natural meat products. We focus our sales and marketing emphasis on Oregon animals, local feeding systems, local suppliers and local customers, all in an effort to support the growing “Locavore” movement. Only pasture raised and source-verified beef cattle are selected for the ONM program, and are then fed a high-quality, 100% vegetarian diet consisting of “Upcycled” brewer’s grain from Ninkasi Brewing Company and/or “Upcycled” grass pellets from the Willamette Valley of Oregon.  Our cattle are carefully processed at a small local USDA federally inspected facility near Eugene, Oregon.<br><br>
                            Are you a Locavore?  A Locavore (n) is a person who attempts to buy and eat only foods grown, produced and processed close to their home.  Animals in the Farm fresh Meats program are born and raised in the Pacific Northwest and then finished and processed using small, family-owned and operated companies. </p>
                        <div class="float_left img-box"><img src="{{ asset('assets/'.Config::get('config.front_template').'/frontend/images/blog/blog-details2.jpg')}}" alt="img"></div>
                        <div class="float_right img-box"><img src="{{ asset('assets/'.Config::get('config.front_template').'/frontend/images/blog/blog-details3.jpg')}}" alt="img"></div>
                        <div class="clear_fix"></div>
                        <p>At the moment, I'm picking lots of these in the veg garden at Bore Place. They grow really well in the UK and I much prefer them to their slightly stringier relatives, runner beans. You can enjoy local French beans from around June through to September. I would never buy out of season imported French beans as it takes a massive amount of water to produce them and they have to be air freighted in, often all the way from Africa</p>
                        <div class="recipess">
                            <h5>Food facts</h5>
                            <p>Fresh French beans are an excellent source of dietary fibre, vitamins A, B1, B6, C, antioxidants and lots of minerals. They are also very low in cholesterol, sodium and fat</p>
                            <h5>Recipes</h5>
                            <p>I only really use recipes as a guide, as for me, it all depends on what you have in the fridge. Use what you have and don’t be afraid of experimenting and substituting things, this can lead to great new ideas and combinations. Learn the techniques and apply them to your cooking!</p>
                        </div><!-- /.recipes -->
                        <div class="img images-hover">
                            <img src="{{ asset('assets/'.Config::get('config.front_template').'/frontend/images/blog/blog-details4.png')}}" alt="images" class="tran3s">
                        </div><!-- /.img -->
                        <div class="recipess recipess-bottom">
                            <ul>
                                <li><p>1. Bring a medium sized pan of water to the boil. Add salt (I was taught that beans should be cooked in water as salty as the sea - this seems a lot of salt but gives a great flavour and helps to keep them green)</p></li>
                                <li><p>2. Place your beans in the pan, cover and cook for 4 minutes, test to make sure they are cooked through but not overdone.</p></li>
                                <li><p>3. At the same time heat up a medium frying pan and add the butter or oil and the garlic, cook gently until it starts to soften but be careful that it doesn’t burn or it will turn bitter.</p></li>
                                <li><p>3. At the same time heat up a medium frying pan and add the butter or oil and the garlic, cook gently until it starts to soften but be careful that it doesn’t burn or it will turn bitter.</p></li>
                                <li><p>5. Serve.</p></li>
                            </ul>
                            <h5>4 minutes for test</h5>
                            <ul>
                                <li><p>1. Bring a medium sized pan of water to the boil. Add salt.</p></li>
                                <li><p>2. Place your beans, cover the pan and cook for 4 minutes, test to make sure they are cooked through but not overdone.</p></li>
                                <li><p>3. Remove from the boiling water and place into cold water for a few minutes. This is to stop them cooking (and is called refreshing).</p></li>
                                <li><p>4. Place the beans in a bowl along with the other ingredients, toss together and season to taste. If in doubt add less of the seasonings you can always add more…</p></li>
                            </ul>
                        </div><!-- /.text-blog -->
                        <div class="link-details">
                            <ul>
                                <li><a href="">Facebook</a></li>
                                <li><a href="">Twitter</a></li>
                                <li><a href="">Linkedin</a></li>
                                <li><a href="">Google+</a></li>
                                <li class="float_right"><a href="blog.html" class="last-one"><i class="fa fa-arrow-left" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;food, organic food, meet</a></li>
                            </ul>
                        </div><!-- /.link-details -->
                        <div class="comments_area">
                            <h5>Comments (03)</h5>
                            <div class="single_comment clear_fix ">
                                <img src="{{ asset('assets/'.Config::get('config.front_template').'/frontend/images/blog/comments.jpg')}}" alt="images" class="img-responsive float_left">
                                <div class="comment float_right">
                                    <h6>Riad M</h6>
                                    <span>24/01/2017 at 1:59 am</span>
                                    <p>We invite you to tour our web site, send us an email, find us on social media, or give us a call to learn more about our unique angle on local, integrated, natural, sustainable and humane animal production systems</p>
                                    <a href="#" class="tran3s hvr-shutter-out-horizontal round-border">Reply</a>
                                </div> <!-- End of .comment -->
                                <div class="clear_fix border"></div>
                            </div><!-- /.single_comment -->
                            <div class="single_comment clear_fix ">
                                <img src="{{ asset('assets/'.Config::get('config.front_template').'/frontend/images/blog/comments.jpg')}}" alt="images" class="img-responsive float_left">
                                <div class="comment float_right">
                                    <h6>Gec Celic</h6>
                                    <span>24/01/2017 at 1:59 am</span>
                                    <p>Are you a Locavore?  A Locavore (n) is a person who attempts to buy and eat only foods grown, produced and processed close to their home.  Animals in the farm Meats program are born and raised in the Pacific Northwest </p>
                                    <a href="#" class="tran3s hvr-shutter-out-horizontal round-border">Reply</a>
                                </div> <!-- End of .comment -->
                                <div class="clear_fix border"></div>
                            </div><!-- /.single_comment -->
                            <div class="single_comment clear_fix border_fix">
                                <img src="{{ asset('assets/'.Config::get('config.front_template').'/frontend/images/blog/comments.jpg')}}" alt="images" class="img-responsive float_left">
                                <div class="comment float_right">
                                    <h6>Gec Celic</h6>
                                    <span>24/01/2017 at 1:59 am</span>
                                    <p>Are you a Locavore?  A Locavore (n) is a person who attempts to buy and eat only foods grown, produced and processed close to their home.  Animals in the farm Meats program are born and raised in the Pacific Northwest </p>
                                    <a href="#" class="tran3s hvr-shutter-out-horizontal round-border">Reply</a>
                                </div> <!-- End of .comment -->
                            </div><!-- /.single_comment -->
                        </div><!-- /.comments_area -->
                        <div class="leave_reply">
                            <h3>Leave A Comment</h3>
                            <form action="#">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="single_input">
                                            <input type="text" placeholder="Name" class="tran3s">
                                        </div> <!-- End of .single_input -->
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="single_input">
                                            <input type="email" placeholder="Email" class="tran3s">
                                        </div> <!-- End of .single_input -->
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="single_input">
                                            <textarea placeholder="Comments" class="tran3s"></textarea>
                                        </div> <!-- End of .single_input -->
                                    </div>
                                </div>
                                <button class="tran3s hvr-shutter-out-horizontal round-border float_right">Submit Comment</button>
                            </form>
                        </div> <!-- End of .leave_reply -->
                    </div><!-- /.text-blog -->
                </div><!-- /.left-blog -->	
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
                            <h6><a href="#" class="tran3s">The Farm Organic Cuisine  team would like</a></h6>
                            <p>January 27, 2017  by <span>Ghost</span></p>
                        </div> <!-- /.post -->
                    </div> <!-- /.single-recent-news -->
                    <div class="single-recent-news clear_fix">
                        <img src="{{ asset('assets/'.Config::get('config.front_template').'/frontend/images/blog/recent2.png')}}" alt="image" class="float_left">
                        <div class="post float_left">
                            <h6><a href="#" class="tran3s">The Organic Farm Shop a social enterprise business</a></h6>
                            <p>January 27, 2017  by <span>Mahfuz</span></p>
                        </div> <!-- /.post -->
                    </div> <!-- /.single-recent-news -->
                    <div class="single-recent-news clear_fix">
                        <img src="{{ asset('assets/'.Config::get('config.front_template').'/frontend/images/blog/recent3.png')}}" alt="image" class="float_left">
                        <div class="post float_left">
                            <h6><a href="#" class="tran3s">Enjoy a different shopping experience.</a></h6>
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