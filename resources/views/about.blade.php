<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">

    <title>About us | Navigator Booking</title>

    <!-- CSS Plugins -->
		<link href="assets/plugins/ionicons/css/ionicons.min.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="assets/plugins/owl-carousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/plugins/owl-carousel/dist/assets/owl.theme.default.min.css">

    <!-- CSS Global -->
    <link rel="stylesheet" href="assets/css/theme.min.css">

  </head>
  <body>

		<!-- Modal
    ================================================== -->
	  <div class="modal fade" id="services__modal" tabindex="-1" role="dialog">
		  <div class="modal-dialog modal-lg" role="document">
		    <div class="modal-content">
			    <div class="embed-responsive embed-responsive-16by9">
			    	<iframe class="embed-responsive-item" src="https://player.vimeo.com/video/114151688?color=ffffff&title=0&byline=0&portrait=0" allowfullscreen></iframe>
					</div>
		    </div> <!-- .modal-content -->
		  </div> <!-- .modal-dialog -->
		</div> <!-- .modal -->
		
		<!-- Info Section
    ================================================== -->
		<div class="section__info">
			<div class="container">
				<div class="section_info__body">
					<div class="info__column-left">
						<div class="section_info__contact hidden-xs">
							<p>
								<i class="icon ion-android-pin"></i> 29 Land St, Lorem City, CA
							</p>	
						</div> <!-- .section_info__contact -->
						<div class="section_info__contact hidden-xs">
							<p>
								<i class="icon ion-android-call"></i> +96 885 1247
							</p>	
						</div> <!-- .section_info__contact -->
					</div> <!-- .info__column-left -->
					<div class="info__column-right">
						<ul class="social__icons">
		          <li class="social-icons__item"><a href="#"><i class="icon ion-social-twitter" aria-hidden="true"></i></a></li>
		          <li class="social-icons__item"><a href="#"><i class="icon ion-social-facebook" aria-hidden="true"></i></a></li>
		          <li class="social-icons__item"><a href="#"><i class="icon ion-social-googleplus" aria-hidden="true"></i></a></li>
		        </ul> <!-- .social__icons -->
		        <div class="dropdown lang-menu">
						  <button class="dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
						    En
						    <i class="icon ion-chevron-down"></i>
						  </button>
						  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
						    <li><a href="#">Fr</a></li>
						    <li><a href="#">Es</a></li>
						    <li><a href="#">Ru</a></li>
						  </ul>
						</div> <!-- .lang-menu -->
						<form class="search-form hidden-xs" role="search">
						  <div class="form-group">
						    <input type="text" class="form-control" placeholder="Search">
						  </div>
						  <button type="submit" class="btn btn-default btn-search"><i class="icon ion-search"></i></button>
						</form> <!-- .search-form -->
						
		      </div> <!-- .info__column-right -->
				</div> <!-- .section_info__body -->
			</div> <!-- .container -->
		</div> <!-- .section__info -->

  	<!-- Navbar
    ================================================== -->
    <nav class="navbar navbar-default">
      <div class="container">
    
        <!-- Header -->
        <div class="navbar-header">

          <!-- Collapse toggle -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar__collapse" aria-expanded="false">
            <span class="sr-only">Menu</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <!-- Logo -->
          <a class="navbar-brand" href="{{ route('index') }}">
            <h3 class="navbar-brand__logo">Navigator Booking</h3>
            <p class="navbar-brand__sublogo">Grand</p>
          </a>

        </div> <!-- / .navbar-header -->
    
        <!-- Links -->
        <div class="collapse navbar-collapse" id="navbar__collapse">
          <ul class="nav navbar-nav navbar-left">
          	<li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home <i class="icon ion-chevron-down"></i></a>
		          <ul class="dropdown-menu">
		            <li><a href="{{ route('index') }}">Home static image</a></li>
		            <li><a href="{{ route('index-parallax') }}">Home Parallax</a></li>
		            <li><a href="{{ route('index-slider') }}">Home Slider</a></li>
		            <li><a href="{{ route('index-video') }}">Home Video</a></li>
		          </ul>
		        </li>
            <li class="active"><a href="{{ route('about') }}">About us</a></li>
            <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Rooms <i class="icon ion-chevron-down"></i></a>
	          <ul class="dropdown-menu">
	            <li><a href="{{ route('room1') }}">Rooms 1</a></li>
	            <li><a href="{{ route('room2') }}">Rooms 2</a></li>
	            <li><a href="{{ route('room-detail') }}">Room detail</a></li>
	          </ul>
	        </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="{{ route('reservation') }}">Reservation</a></li>
            <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages <i class="icon ion-chevron-down"></i></a>
		          <ul class="dropdown-menu">
		            <li><a href="{{ route('gallery-fullwidth') }}">Gallery full width</a></li>
		            <li><a href="{{ route('gallery-boxed') }}">Gallery boxed</a></li>
		            <li><a href="{{ route('blog') }}">Blog</a></li>
		            <li><a href="{{ route('blog-item') }}">Blog Item</a></li>
		            <li><a href="{{ route('404page') }}">404 Page</a></li>
		          </ul>
		        </li>
            <li><a href="{{ route('contacts') }}">Contacts</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->

      </div><!-- /.container -->
    </nav>


    <!-- CONTENT
      ================================================== -->

    <!-- section header -->
    <section class="section__header" id="section__header">
    	<div class="container">
    		<div class="row">
  	    	<div class="col-sm-12">
  	    		<div class="welcome__content">

							<h2 class="welcome_content__title">About us</h2>

							<!-- Breadcrumbs -->
              <ol class="breadcrumb">
							  <li><a href="{{ route('index') }}">Home</a></li>
							  <li class="active">About us</li>
							</ol>

	  					<p class="welcome_content__desc">Since you’re here to learn about your staycations, let’s focus on that. With so many options for booking stays these days, finding a truly unique one can be tough. That’s why we’ve curated a selection of private stays which give you an unforgettable moments. Whether you’re traveling solo or with family , you can choose our stays which suits your needs and preferences.</p>

		  			</div> <!-- .welcome__content -->
    	    </div>
	    	</div> <!-- / .row -->
    	</div> <!-- / .container -->
			<div class="home__bg about__bg"></div>
    </section> <!-- / .section__header -->
	   
	<!-- section about-alt -->
    <section class="section__about-alt">
    	<div class="container">
    		<div class="row">
    			<div class="col-sm-12"> 		  	
    				<h2 class="section__title">Welcome to <strong>Navigator Booking</strong></h2>
    				<div class="divider">
    					<hr class="line1">
    					<hr class="line2">
    					<hr class="line1">
    				</div> <!-- / .divider -->
    			</div>
    		</div> <!-- / .row -->
    	</div> <!-- / .container -->
    	<div class="container">
    		<div class="row">
		    	<div class="section_about__content">
		    	  <div class="col-md-6">
		    	  	<div class="about__pic">
		    				<img src="assets/img/about_img.jpg" class="img-responsive" alt="...">
		    			</div> <!-- / .about__pic -->
		    	  </div>
		    	  <div class="col-md-6">
			    	  <div class="about__desc">
			  				<h3 class="about_desc__title">Probably the best place to enjoy your life</h3>
								<p class="about_desc__desc">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence. When, while the lovely valley teems with vapour around me, and the meridian sun strikes the upper surface of the impenetrable foliage of my trees, and but a few stray gleams steal into the inner sanctuary.</p>
								<h4 class="about_desc__quote">The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary.</h4>
			  			</div> <!-- / .about__desc -->
		    	  </div>
		    	</div> <!-- / .section_about__content -->
		    </div> <!-- / .row -->
    	</div> <!-- / .container -->
    </section> <!-- / .section__about -->

		<!-- section data -->
    <section class="section__data">
    	<div class="container">
		    <div class="row">
					<div class="col-xs-12 col-sm-3">
						<div class="section-data__item">
							<p class="section-data__nbr" data-from="0" data-to="1024" data-speed="2000" data-refresh-interval="10">0</p>
							<h3 class="section-data__title">Guests stay</h3>
						</div> <!-- .section-data__item -->
					</div>
					<div class="col-xs-12 col-sm-3">
						<div class="section-data__item">
							<p class="section-data__nbr" data-from="0" data-to="245" data-speed="1000" data-refresh-interval="5">0</p>
							<h3 class="section-data__title">Rooms</h3>
						</div> <!-- .section-data__item -->
					</div>
					<div class="col-xs-12 col-sm-3">
						<div class="section-data__item">
							<p class="section-data__nbr" data-from="0" data-to="37" data-speed="1000" data-refresh-interval="2">0</p>
							<h3 class="section-data__title">Awards</h3>
						</div> <!-- .section-data__item -->
					</div>
					<div class="col-xs-12 col-sm-3">
						<div class="section-data__item">
							<p class="section-data__nbr" data-from="0" data-to="3700" data-speed="2000" data-refresh-interval="10">0</p>
							<h3 class="section-data__title">Meal served</h3>
						</div> <!-- .section-data__item -->
					</div>
		    </div> <!-- / .row -->
	    </div> <!-- / .container -->
    </section> <!-- / .section__data -->

    <!-- section services alt -->
    <section class="section__services-alt">
    	<div class="container">
		    <div class="row">
					<div class="col-sm-5">
						<h2 class="section__title services__title">Our <strong>Services</strong></h2>
						<p class="services__text">Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc.</p>
						<div class="services__img">
							<a href="#services__modal" data-toggle="modal">
								<img src="assets/img/about_services.jpg" class="img-responsive" alt="...">	
							</a>
						</div>
					</div>
					<div class="col-sm-7">
						<div class="row">
							<div class="col-sm-6">
								<div class="services__item">
									<div class="services_item__logo">
										<i class="icon ion-model-s"></i>
									</div>
									<div class="services_item__title">
										<h3>Parking</h3>
									</div>
									<div class="services_item__desc">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit dolor magnam quas cumque.
									</div>
								</div> <!-- .services__item -->
							</div>
							  <div class="col-sm-6">
							  	<div class="services__item">
										<div class="services_item__logo">
											<i class="icon ion-android-bicycle"></i>
										</div>
										<div class="services_item__title">
											<h3>Fitness Hall</h3>
										</div>
										<div class="services_item__desc">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe ullam architecto.
										</div>
									</div> <!-- .services__item -->
							  </div>
						</div> <!-- .row -->
						<div class="row">
						  <div class="col-sm-6">
						  	<div class="services__item">
									<div class="services_item__logo">
										<i class="icon ion-android-restaurant"></i>
									</div>
									<div class="services_item__title">
										<h3>Restaurant</h3>
									</div>
									<div class="services_item__desc">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum sint ipsum culpa consequatur.
									</div>
								</div> <!-- .services__item -->
						  </div>
						  <div class="col-sm-6">
						  	<div class="services__item">
									<div class="services_item__logo">
										<i class="icon ion-android-sunny"></i>
									</div>
									<div class="services_item__title">
										<h3>Spa center</h3>
									</div>
									<div class="services_item__desc">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi quo iure sapiente. Earum est corporis.
									</div>
								</div> <!-- .services__item -->
							</div>  
						</div> <!-- / .row -->
					</div>
		    </div> <!-- / .row -->
	    </div> <!-- / .container -->
    </section> <!-- / .section__services-alt -->

    <!-- section testimonials -->
    <section class="section__testimonials">
    	<div class="container">
    		<div class="row">
    		  <div class="col-sm-12"> 		  	
    				<h2 class="section__title"><strong>Testimonials</strong></h2>
    				<div class="divider">
    					<hr class="line1">
    					<hr class="line2">
    					<hr class="line1">
    				</div> <!-- / .divider -->
    				<p class="section__subtitle testimonials__subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti sit dicta quae natus quasi ratione quis id, tenetur atque blanditiis aperiam.</p>
    		  </div>
    		</div> <!-- / .row -->
    	</div> <!-- / .container -->
    	<div class="container">
    		<div class="row">
					<div class="col-xs-12">
		    		<div id="testimonials__carousel" class="owl-carousel owl-theme testimonials__body">
		    			<div class="testimonials__wrapper">
		    				<div class="testimonials__item">
				    			<div class="testimonials__img">
				    				<img src="assets/img/testimonials_img1.jpg" class="img-responsive" alt="...">
				    			</div>
		              <div class="testimonials__caption">
		              	<h3 class="testimonials_caption__name">John Doe</h3>
		              	<p class="testimonials_caption__prof">Photographer</p>
		              	<p class="testimonials_caption__text">I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now. When, while the lovely valley teems with vapour around me.</p>
		              </div> <!-- .testimonials__caption -->
		            </div> <!-- .testimonials__item -->
		    			</div><!-- .testimonials__wrapper -->
		    			<div class="testimonials__wrapper">
		            <div class="testimonials__item">
		              <div class="testimonials__img">
				    				<img src="assets/img/testimonials_img2.jpg" class="img-responsive" alt="...">
				    			</div>
		              <div class="testimonials__caption">
		              	<h3 class="testimonials_caption__name">Maria Atkinson</h3>
		              	<p class="testimonials_caption__prof">Writer</p>
		              	<p class="testimonials_caption__text">I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now. When, while the lovely valley teems with vapour around me.</p>
		              </div> <!-- .testimonials__caption -->
		            </div> <!-- .testimonials__item -->
							</div><!-- .testimonials__wrapper -->
		          <div class="testimonials__wrapper">
		            <div class="testimonials__item">
		              <div class="testimonials__img">
				    				<img src="assets/img/testimonials_img3.jpg" class="img-responsive" alt="...">
				    			</div>
		              <div class="testimonials__caption">
		              	<h3 class="testimonials_caption__name">Brad Pitt</h3>
		              	<p class="testimonials_caption__prof">Actor</p>
		              	<p class="testimonials_caption__text">I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now. When, while the lovely valley teems with vapour around me.</p>
		              </div> <!-- .testimonials__caption -->
		            </div> <!-- .testimonials__item -->
	           	</div><!-- .testimonials__wrapper -->
	           	<div class="testimonials__wrapper">
		            <div class="testimonials__item">
		              <div class="testimonials__img">
				    				<img src="assets/img/testimonials_img4.jpg" class="img-responsive" alt="...">
				    			</div>
		              <div class="testimonials__caption">
		              	<h3 class="testimonials_caption__name">Jessica Doe</h3>
		              	<p class="testimonials_caption__prof">Singer</p>
		              	<p class="testimonials_caption__text">I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now. When, while the lovely valley teems with vapour around me.</p>
		              </div> <!-- .testimonials__caption -->
		            </div> <!-- .testimonials__item -->
	           	</div><!-- .testimonials__wrapper -->
	           	<div class="testimonials__wrapper">
		            <div class="testimonials__item">
		              <div class="testimonials__img">
				    				<img src="assets/img/testimonials_img1.jpg" class="img-responsive" alt="...">
				    			</div>
		              <div class="testimonials__caption">
		              	<h3 class="testimonials_caption__name">Robert Jones</h3>
		              	<p class="testimonials_caption__prof">Art Director</p>
		              	<p class="testimonials_caption__text">I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now. When, while the lovely valley teems with vapour around me.</p>
		              </div> <!-- .testimonials__caption -->
		            </div> <!-- .testimonials__item -->
		         	</div><!-- .testimonials__wrapper -->
	           	<div class="testimonials__wrapper">
		            <div class="testimonials__item">
		              <div class="testimonials__img">
				    				<img src="assets/img/testimonials_img4.jpg" class="img-responsive" alt="...">
				    			</div>
		              <div class="testimonials__caption">
		              	<h3 class="testimonials_caption__name">Melissa Portland</h3>
		              	<p class="testimonials_caption__prof">Designer</p>
		              	<p class="testimonials_caption__text">I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now. When, while the lovely valley teems with vapour around me.</p>
		              </div> <!-- .testimonials__caption -->
		            </div> <!-- .testimonials__item -->
		          </div><!-- .testimonials__wrapper -->
		    		</div> <!-- .testimonials__body -->
		    	</div>
		    </div> <!-- / .row -->
	    </div> <!-- / .container -->
    </section> <!-- / .section__testimonials -->

    <!-- section quote -->
    <section class="section__quote">
    	<div class="container">
		    <div class="row">
					<div class="col-xs-12">
						<i class="icon ion-ios-partlysunny-outline"></i>
						<p class="section-quote__text">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine.</p>
						<h2 class="section-quote__author">by <span>Thomas Ford</span></h2>
					</div>
		    </div> <!-- / .row -->
	    </div> <!-- / .container -->
    </section> <!-- / .section__quote -->

		<!-- section footer -->
    <footer class="section__footer">
    	<div class="container">
    		<div class="footer__body">
		  		<div class="row">
		  			<div class="col-xs-12 col-sm-4 col-sm-push-4 col-md-6 col-md-push-3">
		  				<div class="footer__item">
		  					<h2 class="brand__logo">Sunset Hotel</h2>
			          <p class="brand__sublogo">Grand</p>
			          <ul class="social__icons">
				          <li class="social-icons__item"><a href="#"><i class="icon ion-social-twitter" aria-hidden="true"></i></a></li>
				          <li class="social-icons__item"><a href="#"><i class="icon ion-social-facebook" aria-hidden="true"></i></a></li>
				          <li class="social-icons__item"><a href="#"><i class="icon ion-social-googleplus" aria-hidden="true"></i></a></li>
				        </ul> <!-- .social__icons -->
		  				</div> <!-- .footer__item -->
		  		  </div>
		  		  <div class="col-xs-12 col-sm-4 col-sm-pull-4 col-md-3 col-md-pull-6">
		  		  	<div class="footer__item">
		  					<ul class="footer__links">
			  					<li><a href="#">About</a></li>
			  					<li><a href="#">Support</a></li>
			  					<li><a href="#">Privacy Policy</a></li>
			  					<li><a href="#">Terms & Conditions</a></li>
			  				</ul> <!-- .footer__links -->
		  				</div> <!-- .footer__item -->
		  		  </div>
		  		  <div class="col-xs-12 col-sm-4 col-md-3">
		  		  	<div class="footer__item">
		  					<h3 class="newsletter__title">Newsletter</h3>
								<p class="newsletter__subtitle">Subscribe to our email newsletter to receive updates and news.</p>

				        <!-- Newsletter form -->
		            <div id="mc_embed_signup">
		              <form class="newsletter__form validate" action="//themeforest.us16.list-manage.com/subscribe/post-json?u=3c9679e26b601e1a87122b12f&id=e4b9351526&c=?" method="get" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank" novalidate="">
		                <div id="mc_embed_signup_scroll">
		                  <div class="mc-field-group form-group">
		                    <label for="mce-EMAIL" class="sr-only">E-mail address</label>
		                    <input type="email" value="" name="EMAIL" class="required email form-control newsletter_input" id="mce-EMAIL" placeholder="Email address">
		                  </div>
		                  <div id="mce-responses" class="clear">
		                    <div class="response"></div>
		                    <div class="response" id="mce-success-response"></div>
		                  </div>
		                  <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
		                  <div aria-hidden="true" id="mce-hidden-input">
		                    <input type="text" name="b_507744bbfd1cc2879036c7780_4523d25e1b" tabindex="-1" value="">
		                  </div>
		                  <div class="clear">
		                    <button type="submit" class="btn btn-default btn-newsletter" id="mc-embedded-subscribe">
		                      <i class="icon ion-paper-airplane"></i>
		                    </button>
		                  </div>
		                </div>
		              </form>
		            </div> <!-- #mc_embed_signup -->

		  				</div> <!-- .footer__item -->
		  		  </div>
		  		</div> <!-- / .row -->
		  	</div> <!-- / .footer__body -->
		  	<div class="footer__copyright">
		  		<div class="row">
	    		  <div class="col-xs-12">
	    		  	<hr>
	            <p class="footer_copyright__text">&#169; 2017 Sunset Grand Hotel. All rights reserved.</p>
	    		  </div>
	    		</div> <!-- / .row -->	
		  	</div> <!-- / .footer__copyright -->
    		
    	</div> <!-- / .container -->
    </footer> <!-- .section__footer -->

    <!-- 
    ================================================== -->

    <!-- JS Global -->
    <script src="assets/plugins/jquery/jquery-1.12.4.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

    <!-- JS Plugins -->
		<script src="assets/plugins/waypoints/lib/jquery.waypoints.min.js"></script>
		<script src="assets/plugins/lightbox/dist/js/lightbox.min.js"></script>
		<script src="assets/plugins/owl-carousel/dist/owl.carousel.min.js"></script>
		<script src="assets/plugins/countTo/jquery.countTo.js"></script>

    <!-- JS Custom -->
    <script src="assets/js/theme.min.js"></script>

  </body>
</html>