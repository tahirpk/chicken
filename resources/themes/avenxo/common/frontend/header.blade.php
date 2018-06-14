<header class="row" id="header">
        <div class="row m0 top_menus">
            <div class="container">
                <div class="row">
                    <ul class="nav nav-pills fleft">
                        <li><a href="{{URL::to('/')}}">home</a></li>
                        <li><a href="{{Url::to('contents/about-us')}}">about</a></li>
                        <li><a href="{{Url::to('contact-us')}}">contact us</a></li>
                    </ul>
                   
                </div>
            </div>
        </div>
        <div class="row m0 logo_line">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5 logo">
                        <a href="{{URL::to('/')}}" class="logo_a"><img src="{{asset('assets/'.Config::get('config.template').'/frontend/images/logo.png')}}" alt="Furniture House"></a>
                    </div>
                    <div class="col-sm-7 searchSec">
                        
                        {{ Widget::run('Frontend.Categories') }}
                        <div class="fleft wishlistCompare">
                            <ul class="nav">
                                <li><a href="#"><i class="fa fa-heart"></i> Wishlist (3)</a></li>
                                <li><a href="#"><i class="fa fa-exchange"></i> Compare (2)</a></li>
                            </ul>
                        </div>
                        <div class="fleft cartCount">                        
                            <div class="cartCountInner row m0">
                                <span class="badge">2</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-default m0 navbar-static-top">
            <div class="container-fluid container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mainNav">
                        <i class="fa fa-bars"></i> Navigation
                    </button>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                
                {{ Widget::run('Frontend.Topmenu') }}
            </div><!-- /.container-fluid -->
        </nav>
        
        {{ Widget::run('Frontend.Servicefeatures') }}
    </header> <!--Header-->