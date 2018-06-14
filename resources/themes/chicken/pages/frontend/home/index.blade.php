@extends(Config::get('config.front_template').'.layouts.frontend.app')
@section('content')

            <!-- 
                    =============================================
                            Theme Main Banner
                    ============================================== 
            -->
            <div id="theme-main-banner">
                @foreach($slider->images as $image)
                <div data-src="{{ asset('assets/'.Config::get('config.front_template').'/frontend/images/home/'.$image->image)}}">
                    <div class="camera_caption">
                        <div class="container">
                            {!!$image->detail!!}
                            <a href="{{$image->button_one_link}}" class="tran3s active round-border wow fadeInLeft animated hvr-shutter-out-horizontal-two" data-wow-delay="1s">{{$image->button_one}}</a>
                            <a href="{{$image->button_two_link}}" class="tran3s round-border wow fadeInRight animated hvr-shutter-out-horizontal-two" data-wow-delay="1s">{{$image->button_two}}</a>
                        </div> <!-- /.container -->
                    </div> <!-- /.camera_caption -->
                </div>
                @endforeach
                
            </div> <!-- /#theme-main-banner -->

            <!-- 
                        =============================================
                                Sample-section
                        ============================================== 
            -->
            <section class="sample-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-xm-12">
                            <div class="single-content tran3s">

                                <img style="max-height: 220px;" src="{{ asset('assets/'.Config::get('config.front_template').'/frontend/images/inner-page/220X220-1.jpg')}}" alt="img">
                                <div class="text">
                                    <h5>Chicken Meat</h5>
                                    <p>Fresh chicken meat from Alsendian farms</p>
                                </div><!-- /#text -->
                            </div><!-- /#single-content -->	
                        </div><!-- /#col -->
                        <div class="col-md-4 col-sm-6 col-xm-12">
                            <div class="single-content tran3s">
                                <img style="max-height: 220px;" src="{{ asset('assets/'.Config::get('config.front_template').'/frontend/images/inner-page/220X220-2.jpg')}}" alt="img">
                                <div class="text text2">
                                    <h5>Fresh Mutton</h5>
                                    <p>Fresh mutton meat from Alsendian farms</p>	
                                </div><!-- /#text -->
                            </div><!-- /#single-content -->
                        </div><!-- /#col -->
                        <div class="col-md-4 col-sm-4 col-xm-12 hidden-sm">
                            <div class="single-content tran3s">
                                <img style="max-height: 220px;" src="{{ asset('assets/'.Config::get('config.front_template').'/frontend/images/inner-page/220X220-3.jpg')}}" alt="img">
                                <div class="text text2">
                                    <h5>Cholesterol Free Meat</h5>
                                    <p>Fresh cholesterol free meat from Alsendian farms!</p>
                                </div><!-- /#text -->	
                            </div><!-- /#single-content -->
                        </div><!-- /#col -->
                    </div><!-- /#row -->
                </div><!-- /#container -->
            </section><!-- /#sample-section -->

            <!-- 
                        =============================================
                                Farm Fresh Section
                        ============================================== 
            -->
            <section class="farm-fresh">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-xm-12">
                            <h2>{{$aboutus->title}}</h2>
                            <h6>{!!$aboutus->short_description!!}</h6>
                            <a href="{{URL::to('contents/'.$aboutus->slug)}}" class="tran3s round-border wow fadeInRight animated hvr-shutter-out-horizontal-two" data-wow-delay="1s">Know More</a>
                        </div><!-- /#col -->
                        <div class="col-md-6 col-xm-12">
                            <img src="{{ asset('uploads/pages/'.$aboutus->picture)}}" alt="img">
                        </div><!-- /#col -->
                    </div><!-- /#Row -->
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
                                <h6>Cheap like own</h6>
                                <div class="number"><span class="timer" data-from="0" data-to="100" data-speed="1" data-refresh-interval="5">0</span>%</div>
                            </div> <!-- /.counter-box -->
                        </div> <!-- /.col- -->
                        <div class="col-md-3 col-xs-6">
                            <div class="counter-box">
                                <i class="icon flaticon-rate float_left"></i>
                                <h6>Healthy like responsibility</h6>
                                <div class="number"><span class="timer" data-from="0" data-to="100" data-speed="2" data-refresh-interval="5">0</span>%</div>
                            </div> <!-- /.counter-box -->
                        </div> <!-- /.col- -->
                        <div class="col-md-3 col-xs-6">
                            <div class="counter-box">
                                <i class="icon flaticon-construction float_left"></i>
                                <h6>Fresh like home</h6>
                                <div class="number"><span class="timer" data-from="0" data-to="100" data-speed="3" data-refresh-interval="5">0</span>%</div>
                            </div> <!-- /.counter-box -->
                        </div> <!-- /.col- -->
                        <div class="col-md-3 col-xs-6">
                            <div class="counter-box">
                                <i class="icon flaticon-medal float_left"></i>
                                <h6>Attested, Warrentied</h6>
                                <div class="number"><span class="timer" data-from="0" data-to="100" data-speed="5" data-refresh-interval="5">0</span>%</div>
                            </div> <!-- /.counter-box -->
                        </div> <!-- /.col- -->
                    </div> <!-- /.row -->
                </div> <!-- /.container -->
            </section> <!-- /.counter-number -->

            <!-- 
            =============================================
                    Best sale day Section
            ============================================== 
            -->
            <section class="best-sale">
                <div class="container">
                    <h2>Chicken farming</h2>
                    <h6>Chicken is the most common type ofpoultry in the world. Owing to the relative ease and low cost
of raising them in comparison to animals such ascattle, chickens have become prevalent
throughout the cuisine of cultures around the world, and their meat has been variously adapted
to regional tastes.</h6>
                    <div id="client-slider" class="owl-carousel owl-theme owl-best-sale">
                        @foreach($slider2->images as $image)
                        <div class="item">
                            <img src="{{ asset('assets/'.Config::get('config.front_template').'/frontend/images/gallary/'.$image->image)}}" alt="Image">
                        </div> <!-- /.item -->
                        @endforeach
                        
                    </div><!-- /.client-slider -->	
                    <a href="{{$slider2->button_one_link}}" class="tran3s round-border wow fadeInRight animated hvr-shutter-out-horizontal-two" data-wow-delay="1s">{{$slider2->button_one}}</a>
                </div><!-- /.container -->
            </section><!-- /.best-sale -->

            <!-- 
                        =============================================
                          Product Section
                        ============================================== 
            -->
            <section class="Organice-Product">
                <div class="container">
                    <h2>Our Product</h2>
                    <div class="mixitUp_menu">
                        <ul>
                            <li class="filter tran3s active" data-filter="all">All Product</li>
                            @foreach($categories as $category)
                            <li class="filter tran3s" data-filter=".category{{$category->id}}">{{$category->name}}</li>
                            @endforeach
                        </ul>
                    </div> <!-- End of .mixitUp_menu -->
                    <div class="gallery_item_wrapper row" id="mixitup_list">		
                        <!-- Single Item -->
                        @foreach($categories as $category)
                            @foreach($category->products as $product)
                                <div class="col-md-4 col-xs-6 mix Fruits category{{$category->id}} Vegetables">
                                    <div class="Product tran3s">
                                        <ul>
                                            <li><a href="#" class="float_left round-border hvr-shutter-out-horizontal"><i class="flaticon-shapes" aria-hidden="true"></i></a></li>
                                            <li><a href="shop.html" class="float_right round-border hvr-shutter-out-horizontal"><i class="flaticon-business" aria-hidden="true"></i></a></li>
                                        </ul>
                                        <div class="single_item_wrapper"><?php //echo '<pre>'; print_r($product->mainimage['image']); ?>
                                            <img style="max-height: 175px" src="{{ asset('uploads/products/'.$product->mainimage['image'])}}" alt="Image">
                                        </div> <!-- End of .single_item_wrapper -->
                                        <div class="value-info">
                                            <h4><a href="{{URL::to('product/'.$product->slug)}}" class="tran3s">{{$product->name}}</a></h4>
                                            <h6 class="round-border">AED{{$product->price}}</h6>
                                        </div><!-- value-info -->
                                    </div> <!-- Product -->
                                </div> <!-- col -->
                            @endforeach
                        @endforeach
                       
                    </div> <!-- End of .gallery_item_wrapper -->
                </div><!-- /.container -->
            </section><!-- /.Organice-Product -->

            <!-- 
            =============================================
                    Testimonial Section
            ============================================== 
            -->
            <section class="testimonial">
                <div class="opacity">
                    <div class="container">
                        <div class="main_title">
                            <h2>What People Say?</h2>
                        </div> <!-- End of .main_title -->
                        <div class="owl-carousel owl-theme" id="testimonial-slider">
                            <div class="item">
                                <div class="info_wrapper">
                                    <div class="client_info">
                                        <img src="{{ asset('assets/'.Config::get('config.front_template').'/frontend/images/inner-page/testimonial-1.jpg')}}" alt="client" class="border_round float_left">
                                        <div class="name float_left">
                                            <h6>Mahfuz Riad</h6>
                                            <span>CEO, Company</span>
                                        </div> <!-- End of .name -->
                                        <div class="clear_fix"></div>
                                    </div> <!-- End of .client_info -->
                                    <div class="brief-content">
                                        <h6>I’ve been happy with the services provided by Finazi LLC. Felix has been wonderful! He has returned my calls quickly, and he answered all my questions.</h6>
                                        <span></span>
                                        <span></span>
                                    </div><!-- End of .brief-content -->
                                </div> <!-- End of .info_wrapper -->
                            </div> <!-- End of .item -->
                            <div class="item">
                                <div class="info_wrapper">
                                    <div class="client_info">
                                        <img src="{{ asset('assets/'.Config::get('config.front_template').'/frontend/images/inner-page/testimonial-2.jpg')}}" alt="client" class="border_round float_left">
                                        <div class="name float_left">
                                            <h6>Zuber All Hasan</h6>
                                            <span>CEO, Developer</span>
                                        </div> <!-- End of .name -->
                                        <div class="clear_fix"></div>
                                    </div> <!-- End of .client_info -->
                                    <div class="brief-content">
                                        <h6>I’ve been happy with the services provided by Finazi LLC. Felix has been wonderful! He has returned my calls quickly, and he answered all my questions.</h6>
                                        <span></span>
                                        <span></span>
                                    </div><!-- End of .brief-content -->
                                </div> <!-- End of .info_wrapper -->
                            </div> <!-- End of .item -->
                            <div class="item">
                                <div class="info_wrapper">
                                    <div class="client_info">
                                        <img src="{{ asset('assets/'.Config::get('config.front_template').'/frontend/images/inner-page/testimonial-1.jpg')}}" alt="client" class="border_round float_left">
                                        <div class="name float_left">
                                            <h6>Mahfuz Riad</h6>
                                            <span>CEO, Company</span>
                                        </div> <!-- End of .name -->
                                        <div class="clear_fix"></div>
                                    </div> <!-- End of .client_info -->
                                    <div class="brief-content">
                                        <h6>I’ve been happy with the services provided by Finazi LLC. Felix has been wonderful! He has returned my calls quickly, and he answered all my questions.</h6>
                                        <span></span>
                                        <span></span>
                                    </div><!-- End of .brief-content -->
                                </div> <!-- End of .info_wrapper -->
                            </div> <!-- End of .item -->
                            <div class="item">
                                <div class="info_wrapper">
                                    <div class="client_info">
                                        <img src="{{ asset('assets/'.Config::get('config.front_template').'/frontend/images/inner-page/testimonial-2.jpg')}}" alt="client" class="border_round float_left">
                                        <div class="name float_left">
                                            <h6>Zuber All Hasan</h6>
                                            <span>CEO, Developer</span>
                                        </div> <!-- End of .name -->
                                        <div class="clear_fix"></div>
                                    </div> <!-- End of .client_info -->
                                    <div class="brief-content">
                                        <h6>I’ve been happy with the services provided by Finazi LLC. Felix has been wonderful! He has returned my calls quickly, and he answered all my questions.</h6>
                                        <span></span>
                                        <span></span>
                                    </div><!-- End of .brief-content -->
                                </div> <!-- End of .info_wrapper -->
                            </div> <!-- End of .item -->
                        </div><!-- End of .testimonial-slider -->
                    </div><!-- End of .container -->
                </div><!-- End of .container -->    
            </section><!-- End of .container -->	

            <!-- 
                        =============================================
                                Latest News Section
                        ============================================== 
            -->		
            <section class="latest-news">
                <div class="container">
                    <div class="latest-title">
                        <h2>Latest News</h2>	
                    </div><!-- /.latest-title-->
                    <div class="row">
                        @foreach($newses as $news)
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="latest-single-content">
                                <img src="{{ asset('uploads/news/'.$news->picture)}}" alt="latest">
                                <div class="news-single-content wow fadeInUp animated">
                                    <h4><a href="{{URL::to('news/'.$news->slug)}}" class="tran3s">{{$news->title}}</a></h4>
                                    <p>{{date('d M, Y',strtotime($news->created_at))}}</p>
                                    <p class="tran3s">{{$news->title}}</p>
                                </div><!-- /.news-single-content-->   
                            </div><!-- /.latest-single-content--> 	
                        </div><!-- /.col- -->
                        @endforeach
                      			        	
                    </div><!-- /.row- -->     	
                </div><!-- /.container-->	
            </section><!-- /.latest-news-->

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