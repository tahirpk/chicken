@extends(Config::get('config.front_template').'.layouts.frontend.app')
@section('content')

            <!-- 
                    =============================================
                            Theme Main Banner
                    ============================================== 
            -->
            <div id="theme-main-banner">
                @if(sizeof($slider->images)>0)
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
                @endif
                
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
           
            <!-- /.counter-number -->

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
            
            <!-- End of .container -->	

            <!-- 
                        =============================================
                                Latest News Section
                        ============================================== 
            -->		
           
            <!-- /.latest-news-->

            <!-- 
                =============================================
                partners section
                ==============================================
            -->
            

        <!-- /.container-->
            </div><!-- /.partners-section-->

@endsection