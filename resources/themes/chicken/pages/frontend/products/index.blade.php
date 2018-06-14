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
            <h3>Shop</h3>
            <ul>
                <li><a href="{{URL::to('/')}}" class="">Home</a></li>
                <li>.</li>
                <li><span>Shop</span></li>
            </ul>
        </div> <!-- /.container -->
    </div> <!-- /.opacity -->
</section> <!-- /inner-page-banner -->


<!-- 
=============================================
  Product Section
============================================== 
-->
<section class="Organice-Product shop-section">
    <div class="container">
        <div class="search theme-search-box float_left">
            <form>
                <input type="text" class="search-color" placeholder="Search Product ..."/>
                <button><span class="tran3s"><i class="fa fa-search"></i></span></button>
            </form>
        </div> <!-- /.search -->
        <div class="float_left Result">
            <p>Showing 1 - 12 of 12 Result</p>
        </div>
        <div class="search theme-search-box float_right">
            <form>
                <input type="text" class="search-color" placeholder="Defult Shorting"/>
                <button><span class="tran3s"><i class="fa fa-angle-right" aria-hidden="true"></i></span></button>
            </form>
        </div> <!-- /.search -->
        <div class="gallery_item_wrapper row">		
            <!-- Single Item -->
            @foreach($products as $product)
            <div class="col-md-4 col-xs-6">
                <div class="Product tran3s">
                    <ul>
                        <li><a href="#" class="float_left round-border hvr-shutter-out-horizontal-two"><i class="flaticon-shapes" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="float_right round-border hvr-shutter-out-horizontal-two"><i class="flaticon-business" aria-hidden="true"></i></a></li>
                    </ul>
                    <div class="single_item_wrapper">
                        <img src="{{(isset($product->mainimage->image))?asset('uploads/products/'.$product->mainimage->image):'images/gallary/glry1.png'}}" alt="Image">
                    </div> <!-- End of .single_item_wrapper -->
                    <div class="value-info">
                        <h4><a href="{{URL::to('product/'.$product->slug)}}" class="tran3s">{{$product->name}}</a></h4>
                        <h6 class="round-border">AED{{$product->price}}</h6>
                    </div><!-- value-info -->
                </div> <!-- Product -->
            </div> <!-- col -->
            @endforeach
           
        </div> <!-- End of .gallery_item_wrapper -->
        <ul class="page_pagination">
            <li><a href="#" class="tran3s active">1</a></li>
            <li><a href="#" class="tran3s">2</a></li>
            <li><a href="#" class="tran3s">3</a></li>
            <li><a href="#" class="tran3s active"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li>
        </ul>
    </div><!-- /.container -->
</section><!-- /.Organice-Product -->

<!-- 
=============================================
partners section
==============================================
-->
<div class="partners-section">
    <div class="container">
        <div class="row">
            <div id="partners" class="owl-carousel owl-theme owl-partners">
                <div class="item"><img src="images/logo/prtn-logo-1.png" alt="partners"></div><!-- /.item-->
                <div class="item"><img src="images/logo/prtn-logo-2.png" alt="partners"></div><!-- /.item-->
                <div class="item"><img src="images/logo/prtn-logo-3.png" alt="partners"></div><!-- /.item-->
                <div class="item"><img src="images/logo/prtn-logo-4.png" alt="partners"></div><!-- /.item-->
            </div><!-- /.owl-partners-->
        </div><!-- /.row-->
    </div><!-- /.container-->
</div><!-- /.partners-section-->

@endsection