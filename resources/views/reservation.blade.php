<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">

    <title>Reservation | Sunset Hotel</title>

    <!-- CSS Plugins -->
		<link href="assets/plugins/ionicons/css/ionicons.min.css" rel="stylesheet" type="text/css">

    <!-- CSS Global -->
    <link rel="stylesheet" href="assets/css/theme.min.css">

  </head>
  <body>
		
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
            <h3 class="navbar-brand__logo">Sunset Hotel</h3>
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
            <li><a href="{{ route('about') }}">About us</a></li>
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
            <li class="active"><a href="{{ route('reservation') }}">Reservation</a></li>
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
    <section class="section__header">
    	<div class="container">
    	  <div class="row">
    	    <div class="col-sm-12">
    	    	<div class="welcome__content">
							<h1 class="welcome_content__title">Reservation</h1>

							<!-- Breadcrumbs -->
              <ol class="breadcrumb">
							  <li><a href="{{ route('index') }}">Home</a></li>
							  <li class="active">Reservation</li>
							</ol>

    					<p class="welcome_content__desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
    				</div> <!-- .welcome__content -->
    	    </div>
    	  </div> <!-- / .row -->
    	</div> <!-- / .container -->
			<div class="home__bg reservation__bg"></div>
    </section> <!-- / .section header -->

    <!-- section reservation -->
    <section class="section__reservation">
    	<div class="container">
    	  <div class="row">
    	    <div class="col-sm-5 col-sm-push-7 col-md-4 col-md-push-8">
    	    	<div class="booking__details-body">
    	    		<p class="subheading">Booking details</p>
    	    		<h2 class="section__heading">Selected room</h2>
    	    		<figure class="room__details">
								<img src="assets/img/gallery_img1.jpg" class="img-responsive" alt="...">
								<figcaption>
									<h3>Double room</h3>
									<div class="room__price">
										$50 <small>/ night</small>
									</div>
									<p class="room__desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis mollitia voluptas vero vel eligendi sint.</p>
								</figcaption>
							</figure> <!-- / .room__details -->
							<ul class="details-info">
                <li>
                  <label>Check in</label>
                  <p>2017-04-09</p>
                </li>
                <li>
                  <label>Check out</label>
                  <p>2017-04-18</p>
                </li>
                <li>
                  <label>Adults</label>
                  <p>2 Person</p>
                </li>
                <li>
                  <label>Children</label>
                  <p>1 Chind</p>
                </li>
                <li>
                  <label>Nights</label>
                  <p>9 Nights</p>
                </li>
                <li>
                  <label>Services</label>
                  <p>$ 65</p>
                </li>
                <li class="total-price">
                  <label>Total price</label>
                  <p>$ 515</p>
                </li>
            </ul>
  	    		</div> <!-- .booking__details-body -->
  	    		<div class="info__body">
							<p class="info__title">Information</p>
							<ul class="info__content">
                <li>
                  <p class="info-text">If you have some questions with booking please contact us.</p>
                </li>
	              <li>
	                <i class="icon ion-android-pin"></i>
	                <div class="info-content">
	                  <div class="title">Address</div>
	                  <div class="description">10987 1st Avenue, Lorem City, CA</div>
	                </div>
	              </li>
	              <li>
	                <i class="icon ion-android-call"></i>
	                <div class="info-content">
	                  <div class="title">Phone / Fax</div>
	                  <div class="description">+45 789 123 4544 / +45 789 123 4848</div>
	                </div>
	              </li>
	              <li>
	                <i class="icon ion-android-mail"></i>
	                <div class="info-content">
	                  <div class="title">E-mail</div>
	                  <div class="description">admin@sunsethotel.com</div>
	                </div>
	              </li>
	            </ul> <!-- .info__content -->
  	    		</div> <!-- / .info__body -->
    	    </div>
    	    <div class="col-sm-7 col-sm-pull-5 col-md-8 col-md-pull-4">
    	    	<div class="reservation__form-body">
    	    		<p class="subheading">Booking form</p>
    	    		<h2 class="section__heading">Personal info</h2>
    	    		<p class="section__subheading">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla ea doloremque tenetur quidem odit repellat omnis beatae obcaecati tempora.</p>

							<!-- Alert message -->
              <div class="alert" id="form_reservation" role="alert"></div>

              <!-- This is HTML form only, PHP files are not included -->

              <form id="reservation-form_sendemail" class="reservation__form" data-animate-in="animateUp">
              	<div class="col-sm-12 col-md-6">
              		<div class="form-group">
	                  <label for="check-in" class="sr-only">Arrival date</label>
	                  <input type="date" name="check-in" class="form-control" id="check-in" value="2017-04-09">
	                  <span class="help-block"></span>
	                </div>
	              </div>
	              <div class="col-sm-12 col-md-6">
	              	<div class="form-group">
	                  <label for="check-out" class="sr-only">Departure date</label>
	                  <input type="date" name="check-out" class="form-control" id="check-out" value="2017-04-18">
	                  <span class="help-block"></span>
	                </div>
	              </div>
	              <div class="col-sm-12 col-md-6">
	              	<div class="form-group">
	                  <label for="form-adults" class="sr-only">Adults</label>
	                  <select class="form-control" name="form-adults" id="form-adults">
                      <option value="1" selected="">Adults</option>
                      <option value="2">1 Adult</option>
                      <option value="3">2 Adults</option>
                      <option value="4">3 Adults</option>
                  	</select>
	                  <span class="help-block"></span>
	                </div>
	              </div>
	              <div class="col-sm-12 col-md-6">
	              	<div class="form-group">
	                  <label for="form-children" class="sr-only">Children</label>
	                  <select class="form-control" name="form-children" id="form-children">
                      <option value="1" selected="">Children</option>
                      <option value="2">1 Child</option>
                      <option value="3">2 Children</option>
                      <option value="4">3 Children</option>
                  	</select>
	                  <span class="help-block"></span>
	                </div>
	              </div>
              	<div class="col-sm-12 col-md-6">
              		<div class="form-group">
	                  <label for="first-name" class="sr-only">First name</label>
	                  <input type="text" name="first-name" class="form-control" id="first-name" placeholder="First Name">
	                  <span class="help-block"></span>
	                </div>
	              </div>
	              <div class="col-sm-12 col-md-6">
              		<div class="form-group">
	                  <label for="last-name" class="sr-only">Last name</label>
	                  <input type="text" name="last-name" class="form-control" id="last-name" placeholder="Last Name">
	                  <span class="help-block"></span>
	                </div>
	              </div>
	              <div class="col-sm-12 col-md-6">
	                <div class="form-group">
	                  <label for="email" class="sr-only">Email</label>
	                  <input type="email" name="email" class="form-control" id="email" placeholder="Email">
	                  <span class="help-block"></span>
	                </div>
	              </div>
	              <div class="col-sm-12 col-md-6">
	                <div class="form-group">
	                  <label for="phone" class="sr-only">Phone</label>
	                  <input type="tel" name="phone" class="form-control" id="phone" placeholder="Phone">
	                  <span class="help-block"></span>
	                </div>
	              </div>
	              <div class="col-sm-12 col-md-6">
	                <div class="form-group">
	                  <label for="address-line1" class="sr-only">Address line 1</label>
	                  <input type="text" name="address-line1" class="form-control" id="address-line1" placeholder="Address line 1">
	                  <span class="help-block"></span>
	                </div>
              	</div>
              	<div class="col-sm-12 col-md-6">
	                <div class="form-group">
	                  <label for="address-line2" class="sr-only">Address line 2</label>
	                  <input type="text" name="address-line2" class="form-control" id="address-line2" placeholder="Address line 2">
	                  <span class="help-block"></span>
	                </div>
              	</div>
              	<div class="col-sm-12 col-md-6">
	                <div class="form-group">
	                  <label for="state" class="sr-only">State / Region</label>
	                  <input type="text" name="state" class="form-control" id="state" placeholder="State / Region">
	                  <span class="help-block"></span>
	                </div>
              	</div>
              	<div class="col-sm-12 col-md-6">
	                <div class="form-group">
	                  <label for="city" class="sr-only">City</label>
	                  <input type="text" name="city" class="form-control" id="city" placeholder="City">
	                  <span class="help-block"></span>
	                </div>
              	</div>
              	<div class="col-sm-12 col-md-6">
	                <div class="form-group">
	                  <label for="country" class="sr-only">Country</label>
	                  <input type="text" name="country" class="form-control" id="country" placeholder="Country">
	                  <span class="help-block"></span>
	                </div>
              	</div>
              	<div class="col-sm-12 col-md-6">
	                <div class="form-group">
	                  <label for="zip-code" class="sr-only">Zip Code</label>
	                  <input type="text" name="zip-code" class="form-control" id="zip-code" placeholder="Zip code">
	                  <span class="help-block"></span>
	                </div>
              	</div>
              	<div class="col-sm-12">
	                <div class="form-group">
	                  <label for="requirements" class="sr-only">Special requirements</label>
	                  <textarea name="requirements" class="form-control" rows="8" id="requirements" placeholder="Special requirements"></textarea>
	                  <span class="help-block"></span>
	                </div>
              	</div>
               	<div class="col-sm-12">
               		<p>
               			<input type="checkbox" name="checkbox"> I have read and accept <a href="#" class="conditions">the terms and conditions.</a>
               		</p>
               		<button type="submit" class="btn btn-booking">Book now by email</button>
               	</div>
              </form> <!-- .reservation__form -->
            </div> <!-- .reservation__form-body -->
          </div>
    	  </div> <!-- / .row -->
    	</div> <!-- / .container -->
    </section> <!-- / .section reservation -->

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

    <!-- JS Custom -->
    <script src="assets/js/theme.min.js"></script>

  </body>
</html>