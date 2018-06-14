@extends(Config::get('config.front_template').'.layouts.frontend.app')
@section('content')
<section id="breadcrumbRow" class="row">
       
        <div class="row pageTitle m0">
            <div class="container">
                <h4 class="fleft">{{$blog->name}}</h4>
                <ul class="breadcrumb fright">
                    <li><a href="{{URL::to('/')}}">home</a></li>
                    <li><a href="{{URL::to('products')}}">Products</a></li>
                    <li class="active">{{$blog->name}}</li>
                    
                </ul>
            </div>
        </div>
    </section>
<!-- 
			=============================================
				shop-details
			============================================== 
			-->
			<section class="shop-details">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-5 col-xs-12 upper-left">
						    <div class="images-left col-lg-12">
                                                        <img src="{{(isset($blog->mainimage->image))?asset('uploads/products/'.$blog->mainimage->image):'images/gallary/glry1.png'}}" alt="images">
							</div><!-- /images-left -->
                                                        @foreach($blog->images as $image)
								<div class="float_left small-col">
									<img src="{{(isset($image->image))?asset('uploads/products/'.$image->image):'images/gallary/glry1.png'}}" alt="images" class="img">
								</div><!-- /col -->
                                                                @endforeach
								
						</div><!-- /col -->
						<div class="col-lg-6 col-md-7 col-xs-12">
							<div class="right-side">
								<h3>{{$blog->name}}</h3>
								<ul>
									<li><h3>$48</h3></li>
									<li><h5>AED{{$blog->price}}</h5></li>
									<li>In stock</li>
								</ul>
								<ul>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star-half-o" aria-hidden="true"></i></li>
									<li><span>Categories:</span>{{$blog->category->name}}</li>
								</ul>
								<p>Only pasture raised and source-verified beef cattle are selected for the ONM program, and are then fed a high-quality, 100% vegetarian diet consisting of “Upcycled” brewer’s grain from Ninkasi Brewing Company and/or “Upcycled” grass pellets from the Willamette Valley of Oregon.Only pasture raised and source-verified beef cattle are selected for the ONM program, and are then fed a high-quality, 100% vegetarian diet consisting of “Upcycled” brewer’s grain from Ninkasi Brewing Company.</p>
								<div class="clearfix">
									<ul class="float_left">
										<li><button id="value-decrease"><i class="fa fa-angle-left" aria-hidden="true"></i></button> </li>
										<li id="product-value">1</li>
										<li><button id="value-increase"><i class="fa fa-angle-right" aria-hidden="true"></i></button> </li>
									</ul>
									<a href="#" class="float_right tran3s">Add To Cart</a>
								</div>
							</div><!-- /right-side -->
						</div><!-- /col -->
						<div class="col-md-9 col-off-set-3 col-xs-12">
							<div class="details-tab-text">
								<ul class="nav nav-pills">
									<li class="active"><a data-toggle="pill" href="#tab1">Product Description</a></li>
									
								</ul>

								<div class="tab-content">
									<div id="tab1" class="tab-pane fade in active">
										{!!$blog->description!!}
                                                                        </div> <!-- End of #tab1 -->

									
								</div> <!-- End of .tab-content -->
							</div><!-- /details-tab-text --> 
						</div><!-- /col -->
						<div class="col-md-8 col-xs-12">
							<div class="production">
								<h4>Related product</h4>
								<div class="row">
									<div class="col-sm-3 col-xs-6">
										<div class="product">
											<img src="images/inner-page/shop5.png" alt="img" class="tran3s">
											<h6>Fresh Meet</h6>
											<h6>$ 34</h6>
										</div><!-- /product -->
									</div><!-- /col -->
									<div class="col-sm-3 col-xs-6">
										<div class="product">
											<img src="images/inner-page/shop6.png" alt="img" class="tran3s">
											<h6>Meet</h6>
											<h6>$ 45</h6>
										</div><!-- /product -->
									</div><!-- /col -->
									<div class="col-sm-3 col-xs-6">
										<div class="product">
											<img src="images/inner-page/shop7.png" alt="img" class="tran3s">
											<h6>Apple</h6>
											<h6>$ 13</h6>
										</div><!-- /product -->
									</div><!-- /col -->
									<div class="col-sm-3 col-xs-6">
										<div class="product tran3s">
											<img src="images/inner-page/shop8.png" alt="img" class="tran3s">
											<h6>Cucumber</h6>
											<h6>$ 24</h6>
										</div><!-- /product -->
									</div><!-- /col -->
								</div><!-- /row -->
							</div><!-- /production -->
						</div><!-- /col -->
					</div> <!-- /row -->
				</div> <!-- /container -->
			</section> <!-- /shop-details -->

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