<header>
                <div class="container">
                    <div class="address-list float_left">
                        <ul>
                            <li>
                                <div class="icon"><i class="flaticon-signs header-flat" aria-hidden="true"></i></div> 
                                FoodFarm, W 35th St, New York</li>
                            <li>
                                <div class="icon"><i class="flaticon-multimedia  header-flat" aria-hidden="true"></i></div> 
                                info_floor@gmail.com
                            </li>
                        </ul>
                    </div> <!-- /.address-list -->

                    <div class="social-icon float_right">
                        <ul>
                            <li><a href="#" class="tran3s"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#" class="tran3s"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#" class="tran3s"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                            <li><a href="#" class="tran3s"><i class="fa fa-google" aria-hidden="true"></i></a></li>
                        </ul>
                    </div> <!-- /.social-icon -->	
                </div><!-- /.container -->
                <!-- ============================ Theme Menu ========================= -->
                <div class="main-container">    
                    <div class="container">
                        <div class="theme-main-menu">
                            <div class="logo float_left">
                                <a href="{{URL::to('/')}}"><img src="{{ asset('assets/'.Config::get('config.front_template').'/frontend/images/logo/logo.jpg')}}" style="max-height:65px;" alt="logo" class="img-responsive"></a>
                            </div> <!-- End of .logo -->

                            <nav class="navbar navbar-default float_right">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse navbar-collapse float_left" id="navbar-collapse-1">
                                    <ul class="nav navbar-nav">
                                        
                                        <li class="active"><a href="{{URL::to('/')}}">Home</a></li>
                                        <li><a href="{{URL::to('products')}}">Products</a></li>
                                        <li><a href="{{URL::to('news')}}">News</a></li>
                                        <li><a href="{{URL::to('blog')}}">Blog</a></li>
                                        <li><a href="{{Url::to('contents/about-us')}}">About us</a></li>
                                        <li><a href="{{Url::to('contact-us')}}">Contact us</a></li>
                                    </ul>
                                </div><!-- /.navbar-collapse -->

                                <div class="search_option float_right">
                                    <button class="search tran3s dropdown-toggle" id="searchDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-search" aria-hidden="true"></i></button>
                                    <form action="#" class="p_color_bg dropdown-menu" aria-labelledby="searchDropdown">
                                        <input type="text" placeholder="Search here.....">
                                        <button><i class="fa fa-search" aria-hidden="true"></i></button>
                                    </form>
                                </div> <!-- End of .search_option -->
                                <div class="clear_fix"></div>
                            </nav><!-- /.theme-main-menu -->
                            <div class="clear_fix"></div>
                        </div><!-- /.theme-main-menu -->
                    </div><!-- /.container -->
                </div><!-- /.main-container -->
            </header><!-- /.end header -->

            