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
						<h3>Contact</h3>
						<ul>
							<li><a href="index.html" class="">Home</a></li>
							<li>.</li>
							<li><span>Contact</span></li>
						</ul>
					</div> <!-- /.container -->
				</div> <!-- /.opacity -->
			</section> <!-- /inner-page-banner -->

		    <!-- 
			=============================================
				contact-map-section
			============================================== 
		    -->
		    <div class="">
				<div id="google-map-area">
					<div class="google-map-three" id="contact-google-map" data-map-lat="40.925372" data-map-lng="-74.276544" data-icon-path="images/logo/map.png" data-map-title="Find Map" data-map-zoom="12"></div>
		   		</div><!-- /.google-map-area -->
			</div>

			<!-- 
			=============================================
				contact-section
			============================================== 
			-->
			<section class="contact-section">
				<div class="container">
				    <div class="theme-title">
                        <h1>Get In Touch,Let's talk</h1>
                        <h6>Want to work with us or need more details about career or have a worthy resume,<br>just mail to us via
                        bSEO@gmail.com we are happy to receive</h6>
				    </div><!-- /.theme-title -->
				    <div class="row">
				      	<div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
				      		<div class="contact-us-section">
				      			<h2>Send Your Request</h2>
				      			<form action="inc/sendemail.php" class="theme-form-two form-validation" autocomplete="off">
				      				<textarea placeholder="Message" name="message"></textarea>
				      				<input type="text" placeholder="Subject" name="sub">
				      				<div class="row">
				      					<div class="col-md-6 col-sm-12">
				      						<input type="text" placeholder="Name" name="name">
				      					</div><!-- /.col -->
				      					<div class="col-md-6 col-sm-12">
				      						<input type="email" placeholder="Email" name="email">
				      					</div><!-- /.col -->
				      				</div><!-- /.row -->
				      				<div class="buttonDiv">
										<button class="hvr-shutter-out-horizontal-two round-border">Submit Text</button>
								    </div><!-- /buttonDiv -->
				      			</form> <!-- /.theme-form-two -->

				      			<!--Contact Form Validation Markup -->
								<!-- Contact alert -->
								<div class="alert-wrapper" id="alert-success">
									<div id="success">
										<button class="closeAlert"><i class="fa fa-times" aria-hidden="true"></i></button>
										<div class="wrapper">
							             	<p>Your message was sent successfully.</p>
							            </div><!-- /.wrapper -->
							        </div>
							    </div> <!-- End of .alert-wrapper -->
							    <div class="alert-wrapper" id="alert-error">
							        <div id="error">
							           	<button class="closeAlert"><i class="fa fa-times" aria-hidden="true"></i></button>
							           	<div class="wrapper">
							               	<p>Sorry!Something Went Wrong.</p>
							            </div><!-- /.wrapper -->
							        </div><!-- /.error -->
							    </div> <!-- End of .alert-wrapper -->
				      		</div><!-- /.contact-us-section -->
				      	</div><!-- /.col -->

				      	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
				      	   <div class="single-list">
				      		<div class="contact-single-list">
				      			<ul>
				      				<li><a href="#" class=""><i class="fa fa-phone" aria-hidden="true"></i> ( +88 ) 01912704281</a></li>
				      				<li><a href="#" class=""><i class="fa fa-envelope-o" aria-hidden="true"></i>help@gmail.com</a></li>
				      				<li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i></a>123 Fake Street- Panama Road, 12/1, London</li>
				      				<li>Brooklyn, NY 10036, Road victor United States</li>
				      			</ul>
				      		</div> <!-- /contact-single-list -->
				      		<div class="social-icon">
				      			<h6>Social touch</h6>
				      			<ul>
				      				<li><a href="#" class=" hvr-shutter-out-horizontal-three"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				      				<li><a href="#" class=" hvr-shutter-out-horizontal-three"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
				      				<li><a href="#" class=" hvr-shutter-out-horizontal-three"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				      				<li><a href="#" class="hvr-shutter-out-horizontal-three"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
				      			</ul>
				      		</div> <!-- /.social-icon --> 
				      		</div><!-- /.single-list -->
				      	</div><!-- /.col -->
				    </div><!-- /.row -->
				</div><!-- /.container -->
			</section><!-- /.contact-section -->


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