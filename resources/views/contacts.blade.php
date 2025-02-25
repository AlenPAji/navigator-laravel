<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">

    <title>Contacts | Sunset Hotel</title>

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
            <li class="active"><a href="{{ route('contacts') }}">Contacts</a></li>
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
							<h2 class="welcome_content__title">Contact us</h2>

              <!-- Breadcrumbs -->
              <ol class="breadcrumb">
                <li><a href="{{ route('index') }}">Home</a></li>
                <li class="active">Contact</li>
              </ol>

    					<p class="welcome_content__desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
    				</div> <!-- .welcome__content -->
    	    </div>
    	  </div> <!-- / .row -->
    	</div> <!-- / .container -->
			<div class="home__bg contacts__bg"></div>
    </section> <!-- / .section header -->

		<!-- section Contacts alt -->
    <section class="section__contacts-alt">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h1 class="subheading">If you have any questions don't hesistate to contact us.</h1>        
          </div>
        </div> <!-- / .row -->
      	<div class="row">
      		<div class="col-sm-7">
	        	<div class="section-contacts__form_body">
              <p class="section-contacts__title">Get in touch</p>

              <!-- Please carefully read the README file in order to setup the PHP contact form properly -->

              <!-- Alert message -->
              <div class="alert" id="form_message" role="alert"></div>

              <!-- Form -->
              <form id="form_sendemail" class="contacts__form">
                
                <!-- Email -->
                <div class="form-group">
                  <label for="email" class="sr-only">Email address</label>
                  <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email address">
                  <span class="help-block"></span>
                </div>
                
                <!-- Name -->
                <div class="form-group">
                  <label for="name" class="sr-only">Name</label>
                  <input type="text" name="name" class="form-control" id="name" placeholder="Enter your name">
                  <span class="help-block"></span>
                </div>
                
                <!-- Message -->
                <div class="form-group">
                  <label for="message" class="sr-only">Message</label>
                  <textarea name="message" class="form-control" id="message" rows="6" placeholder="Enter your message"></textarea>
                  <span class="help-block"></span>
                </div>
                
                <!-- Note -->
                <div class="form-group">
                  <small class="text-muted">
                    * All fields are mandatory.
                  </small>
                </div>
                
                <!-- Submit -->
                <button type="submit" class="btn btn-default">
                  Send Message
                </button>

              </form> <!-- .contacts__form -->
              
            </div> <!-- / .section-contacts__form_body -->
	        </div>
	        <div class="col-sm-5">
						<div class="contacts__info">
							<p class="contacts_info__title">Information</p>
							<ul class="contacts_info__content">
                <li>
                  <p class="contact-info-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit eveniet repellat possimus.</p>
                </li>
	              <li>
	                <i class="icon ion-android-pin"></i>
	                <div class="contact-info-content">
	                  <div class="title">Address</div>
	                  <div class="description">10987 1st Avenue, Lorem City, CA</div>
	                </div>
	              </li>
	              <li>
	                <i class="icon ion-android-call"></i>
	                <div class="contact-info-content">
	                  <div class="title">Phone / Fax</div>
	                  <div class="description">+45 789 123 4544 / +45 789 123 4848</div>
	                </div>
	              </li>
	              <li>
	                <i class="icon ion-android-mail"></i>
	                <div class="contact-info-content">
	                  <div class="title">E-mail</div>
	                  <div class="description">admin@sunsethotel.com</div>
	                </div>
	              </li>
	            </ul>
						</div> <!-- / .contacts__info -->
	        </div>
	      </div> <!-- / .row -->
      </div> <!-- / .container -->
      <div class="section_row">
        <div id="map"></div>
      </div> <!-- / .section_row -->
    </section> <!-- / .section__contacts-alt -->

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

    <!-- Scripts
    ================================================== -->

    <!-- JS Global -->
    <script src="assets/plugins/jquery/jquery-1.12.4.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

    <!-- JS Plugins -->
		<script src="assets/plugins/waypoints/lib/jquery.waypoints.min.js"></script>
    <script src="assets/plugins/contact/contact.js"></script>

    <!-- JS Custom -->
    <script src="assets/js/theme.min.js"></script>
		<script src="assets/js/google_maps.js"></script>

    <!-- Google Maps -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBTGnDWmYKPhKslCvPfkrcZDpgT_QMHT0s&callback=initMap" async defer></script>

  </body>
</html>