<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">

    <title>Navigator Booking| Book your hotel</title>

    <!-- CSS Plugins -->
    <link href="assets/plugins/lightbox/dist/css/lightbox.css" rel="stylesheet">
		<link href="assets/plugins/ionicons/css/ionicons.min.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="assets/plugins/owl-carousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/plugins/owl-carousel/dist/assets/owl.theme.default.min.css">

    <!-- CSS Global -->
    <link rel="stylesheet" href="assets/css/theme.min.css">
	<link rel="stylesheet" href="assets/css/newtheme.css">

  </head>
  <body>

  	<!-- Back to top button
    ================================================== -->
    <a id="back-to-top" href="#section__home" class="btn btn-top back-to-top" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left">
	  	<i class="ion-android-arrow-up"></i>
	  </a>

	  <!-- PRELOADER
    ================================================== -->
    <div id="loader-wrapper">
		  <div id="loader"></div>
		</div>
		
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
            <h3 class="navbar-brand__logo">Navigator</h3>
            <p class="navbar-brand__sublogo">Booking</p>
          </a>

        </div> <!-- / .navbar-header -->
    
        <!-- Links -->
        <div class="collapse navbar-collapse" id="navbar__collapse">
          <ul class="nav navbar-nav navbar-left">
          	<li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home <i class="icon ion-chevron-down"></i></a>
		          <ul class="dropdown-menu">
		            <li class="active"><a href="{{ route('index') }}">Home static image</a></li>
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
            <li><a href="{{ route('contacts') }}">Contacts</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->

      </div><!-- /.container -->
    </nav>

    <!-- CONTENT
      ================================================== -->

    <!-- section home -->
    <section class="section__home" id="section__home">
    	<div class="container">
    		<div class="row">
  	    	<div class="col-sm-12">
  	    		<div class="welcome__content">

  	    			<!-- logo -->
							<h1 class="welcome_content__title">Navigator</h1>
							<p class="welcome_content__title-primary">Booking</p>

							<div class="divider">
	    					<hr class="line1">
	    					<hr class="line2">
	    					<hr class="line1">
	    				</div> <!-- / .divider -->

	  					<p class="welcome_content__desc">On our platform, you'll find the best places to stay and experience your perfect getaway.</p>

	  					<!-- button -->
	  					<a href="#section__about" class="btn btn-reservation">About Us</a>

		  			</div> <!-- .welcome__content -->
    	    </div>
	    	</div> <!-- / .row -->
    	</div> <!-- / .container -->

			<!-- background image (insert via CSS) -->
			<div class="home__bg"></div>

    </section> <!-- / .section__home -->

    <!-- section availability -->
	<!-- .section__availability -->
	   
	<!-- section about -->
    <section class="section__about" id="section__about">
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
    	<div class="container-fluid">
    		<div class="row">
		    	<div class="section_about__content">
		    	  <div class="col-md-6">
		    	  	<div class="about__pic">
		    				<img src="assets/img/about_img.jpg" class="img-responsive" alt="...">
		    			</div> <!-- / .about__pic -->
		    	  </div>
		    	  <div class="col-md-6">
				  <div class="about__desc">
    					<p class="about_desc__subtitle">About us</p>
    					<h3 class="about_desc__title">Curated Stays for Unforgettable Moments</h3>
    					<p class="about_desc__desc">
        				Since you’re here to learn about your staycations, let’s focus on that. With so many options for booking stays these days, finding a truly unique one can be tough. That’s why we’ve curated a selection of private stays which give you unforgettable moments. Whether you’re traveling solo or with family, you can choose our stays which suit your needs and preferences.
    					</p>
    					<h4 class="about_desc__quote">
        				"Probably the best place to enjoy your life."
    					</h4>
    					<a href="{{ route('about') }}" class="btn btn-default">Learn More</a>
					</div>
 <!-- / .about__desc -->
		    	  </div>
		    	</div> <!-- / .section_about__content -->
		    </div> <!-- / .row -->
    	</div>
	    
    </section> <!-- / .section__about -->
		
		<!-- section best-rooms -->
    <section class="section__best-rooms">
    	<div class="container">
    		<div class="row">
    		  <div class="col-sm-12"> 		  	
    				<h2 class="section__title">Our <strong>Destinations</strong></h2>
    				<div class="divider">
    					<hr class="line1">
    					<hr class="line2">
    					<hr class="line1">
    				</div> <!-- / .divider -->
    				<p class="section__subtitle">We take pride in serving the best destinations across Kerala, offering you unforgettable stays that perfectly blend comfort and charm. Experience the essence of God’s Own Country with us</p>
    		  </div>
    		</div> <!-- / .row -->
    	</div> <!-- / .container -->
    	<div class="container">
    		<div class="best-rooms__content">
			<div class="row">
  <div class="col-12 col-md-6">
    <figure class="place-card">
      <img src="assets/img/munnar.jpg" class="img-fluid" alt="Munnar">
      <figcaption>
        <h3>Munnar</h3>
        <a href="{{ route('place', ['place' => 'munnar']) }}" class="btn-book">Book now</a>
      </figcaption>
    </figure>
  </div>
  <div class="col-12 col-md-6">
    <figure class="place-card">
      <img src="assets/img/wayanad.jpg" class="img-fluid" alt="Wayanad">
      <figcaption>
        <h3>Wayanad</h3>
        <a href="{{ route('reservation') }}" class="btn-book">Book now</a>
      </figcaption>
    </figure>
  </div>
</div>
<div class="row">
  <div class="col-12 col-md-6">
    <figure class="place-card">
      <img src="assets/img/kyttikanam.jpg" class="img-fluid" alt="Kuttikanam">
      <figcaption>
        <h3>Kuttikanam</h3>
        <a href="{{ route('reservation') }}" class="btn-book">Book now</a>
      </figcaption>
    </figure>
  </div>
  <div class="col-12 col-md-6">
    <figure class="place-card">
      <img src="assets/img/idukki.jpg" class="img-fluid" alt="Idukki">
      <figcaption>
        <h3>Idukki</h3>
        <a href="{{ route('reservation') }}" class="btn-book">Book now</a>
      </figcaption>
    </figure>
  </div>
</div>
 <!-- / .row -->
		    	<div class="row">
			    	<div class="col-xs-12">
			    		<div class="rooms__button">
			    			<a href="{{ route('room1') }}" class="btn">See all rooms</a>
			    		</div> <!-- / .rooms__button -->
			    	</div>
		    	</div> <!-- / .row -->
		    </div> <!-- / .best-rooms__content -->
	    </div> <!-- / .container -->
    </section> <!-- / .section__best-rooms -->

    <!-- section services -->
    <section class="section__services">
    	<div class="container-fluid">
		    <div class="row">
					<div class="col-md-3 col-sm-6">
						<div class="services__item">
							<h2 class="services_item__title">Parking</h2>
							<div class="services_item__divider">
								<i class="icon ion-android-star"></i>
								<i class="icon ion-android-star"></i>
								<i class="icon ion-android-star"></i>
							</div> <!-- .services_item__divider -->
							<p class="services_item__desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel temporibus adipisci mollitia ducimus facilis nesciunt at minima magni optio, dignissimos, neque dolore iste labore dolor enim, ipsam quisquam, quae nihil!</p>
						</div> <!-- .services__item -->
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="services__item">
							<h2 class="services_item__title">Fitness hall</h2>
							<div class="services_item__divider">
								<i class="icon ion-android-star"></i>
								<i class="icon ion-android-star"></i>
								<i class="icon ion-android-star"></i>
							</div> <!-- .services_item__divider -->
							<p class="services_item__desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi eaque, eum. Voluptates corporis tenetur commodi nihil velit perspiciatis natus fugit rerum nisi, at, voluptas autem quisquam reprehenderit odit dolores quas!</p>
						</div> <!-- .services__item -->
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="services__item">
							<h2 class="services_item__title">Restaurant</h2>
							<div class="services_item__divider">
								<i class="icon ion-android-star"></i>
								<i class="icon ion-android-star"></i>
								<i class="icon ion-android-star"></i>
							</div> <!-- .services_item__divider -->
							<p class="services_item__desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non nesciunt ullam porro ipsa, architecto, doloribus illo veritatis consequatur temporibus eveniet labore, vitae laudantium possimus placeat libero magnam.</p>
						</div> <!-- .services__item -->
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="services__item">
							<h2 class="services_item__title">Spa center</h2>
							<div class="services_item__divider">
								<i class="icon ion-android-star"></i>
								<i class="icon ion-android-star"></i>
								<i class="icon ion-android-star"></i>
							</div> <!-- .services_item__divider -->
							<p class="services_item__desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed animi voluptates, laudantium aspernatur, libero nulla ut. Quibusdam distinctio eaque cum officia expedita dolore, perspiciatis quisquam vel et neque tempora cupiditate.</p>
						</div> <!-- .services__item -->
					</div>
		    </div> <!-- / .row -->
	    </div> <!-- / .container -->
    </section> <!-- / .section__services -->

    <!-- section gallery -->
    <section class="section__gallery">
    	<div class="container">
    		<div class="row">
    		  <div class="col-sm-12"> 		  	
    				<h2 class="section__title">Our <strong>Gallery</strong></h2>
    				<div class="divider">
    					<hr class="line1">
    					<hr class="line2">
    					<hr class="line1">
    				</div> <!-- / .divider -->
    				<p class="section__subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti sit dicta quae natus quasi ratione quis id, tenetur atque blanditiis aperiam mollitia enim corporis ex praesentium reprehenderit.</p>
    		  </div>
    		</div> <!-- / .row -->
    	</div> <!-- / .container -->
    	<div class="container-fluid">
		    <div class="row">
		    	<div class="col-xs-12">
		    		<div id="gallery__carousel" class="owl-carousel owl-theme gallery__body">
		    			<div class="gallery__item">
	              <a href="assets/img/gallery_img1.jpg" data-lightbox="gallery" data-title="Your caption">
	                <img src="assets/img/gallery_img1.jpg" class="img-responsive" alt="...">
	              </a>
	            </div> <!-- .gallery__item -->
	            <div class="gallery__item">
	              <a href="assets/img/gallery_img2.jpg" data-lightbox="gallery" data-title="Your caption">
	                <img src="assets/img/gallery_img2.jpg" class="img-responsive" alt="...">
	              </a>
	            </div> <!-- .gallery__item -->
	            <div class="gallery__item">
	              <a href="assets/img/gallery_img3.jpg" data-lightbox="gallery" data-title="Your caption">
	                <img src="assets/img/gallery_img3.jpg" class="img-responsive" alt="...">
	              </a>
	            </div> <!-- .gallery__item -->
	            <div class="gallery__item">
	              <a href="assets/img/gallery_img4.jpg" data-lightbox="gallery" data-title="Your caption">
	                <img src="assets/img/gallery_img4.jpg" class="img-responsive" alt="...">
	              </a>
	            </div> <!-- .gallery__item -->
	            <div class="gallery__item">
	              <a href="assets/img/gallery_img5.jpg" data-lightbox="gallery" data-title="Your caption">
	                <img src="assets/img/gallery_img5.jpg" class="img-responsive" alt="...">
	              </a>
	            </div> <!-- .gallery__item -->
	            <div class="gallery__item">
	              <a href="assets/img/gallery_img6.jpg" data-lightbox="gallery" data-title="Your caption">
	                <img src="assets/img/gallery_img6.jpg" class="img-responsive" alt="...">
	              </a>
	            </div> <!-- .gallery__item -->
	            <div class="gallery__item">
	              <a href="assets/img/gallery_img7.jpg" data-lightbox="gallery" data-title="Your caption">
	                <img src="assets/img/gallery_img7.jpg" class="img-responsive" alt="...">
	              </a>
	            </div> <!-- .gallery__item -->
	            <div class="gallery__item">
	              <a href="assets/img/gallery_img8.jpg" data-lightbox="gallery" data-title="Your caption">
	                <img src="assets/img/gallery_img8.jpg" class="img-responsive" alt="...">
	              </a>
	            </div> <!-- .gallery__item -->
	            <div class="gallery__item">
	              <a href="assets/img/gallery_img9.jpg" data-lightbox="gallery" data-title="Your caption">
	                <img src="assets/img/gallery_img9.jpg" class="img-responsive" alt="...">
	              </a>
	            </div> <!-- .gallery__item -->
	            <div class="gallery__item">
	              <a href="assets/img/gallery_img10.jpg" data-lightbox="gallery" data-title="Your caption">
	                <img src="assets/img/gallery_img10.jpg" class="img-responsive" alt="...">
	              </a>
	            </div> <!-- .gallery__item -->
	            <div class="gallery__item">
	              <a href="assets/img/gallery_img11.jpg" data-lightbox="gallery" data-title="Your caption">
	                <img src="assets/img/gallery_img11.jpg" class="img-responsive" alt="...">
	              </a>
	            </div> <!-- .gallery__item -->
	            <div class="gallery__item">
	              <a href="assets/img/gallery_img12.jpg" data-lightbox="gallery" data-title="Your caption">
	                <img src="assets/img/gallery_img12.jpg" class="img-responsive" alt="...">
	              </a>
	            </div> <!-- .gallery__item -->
		    		</div> <!-- .gallery__body -->
		    	</div>
		    </div> <!-- / .row -->
	    </div> <!-- / .container -->
    </section> <!-- / .section__gallery -->

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

    <!-- section Events -->
    <section class="section__events">
    	<div class="container">
    		<div class="row">
    		  <div class="col-sm-12"> 		  	
    				<h2 class="section__title">Our news <strong>& events</strong></h2>
    				<div class="divider">
    					<hr class="line1">
    					<hr class="line2">
    					<hr class="line1">
    				</div> <!-- / .divider -->
    		  </div>
    		</div> <!-- / .row -->
    	</div> <!-- / .container -->
    	<div class="container-fluid">
    		<div class="row">
    			<div class="col-xs-12 hidden-xs col-sm-6 col-md-6 col-lg-3 col-lg-push-9">
						<div class="news__title">
							<div>News</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-lg-pull-3">
						<div class="events__item">
							<div class="events-item__img">
                <img src="assets/img/events_img1.jpg" class="img-responsive" alt="...">
              </div>
              <div class="events-item__body">
                <div class="events-item__header">
                	<div class="events-item__date">
                		<p class="item_date__nbr">15</p>
                		<p class="item_date__mounth">March</p>
                	</div> <!-- .events-item__date -->
                	<div class="events-item__content">
                		<div class="events-item__title">
		                  <h3>News post title</h3>
		                </div>
		                <div class="events-item__info">
		                  <ul class="item-info__list">
		                    <li class="info-list__item"><i class="ion ion-android-person"></i> by John Doe</li>
		                    <li class="info-list__item"><i class="ion ion-android-chat" aria-hidden="true"></i> 5 Comments</li>
		                  </ul> <!-- .item-info__list -->
		                </div> <!-- .events-item__info -->
                	</div> <!-- .events-item__content -->
                </div> <!-- .events-item__header -->
                <div class="events-item__text">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab eius dicta, magni, placeat sed excepturi tenetur. Unde esse repellendus saepe ipsa odio in laborum voluptas. Obcaecati quae.
                </div> <!-- .events-item__text -->
                <div class="events-item__link">
                  <a href="{{ route('blog-item') }}">Read More ➔</a>
                </div> <!-- .events-item__link -->
              </div> <!-- / .events-item__body -->
						</div> <!-- .events__item -->
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-lg-pull-3">
						<div class="events__item">
							<div class="events-item__img">
                <img src="assets/img/events_img2.jpg" class="img-responsive" alt="...">
              </div>
              <div class="events-item__body">
                <div class="events-item__header">
                	<div class="events-item__date">
                		<p class="item_date__nbr">18</p>
                		<p class="item_date__mounth">March</p>
                	</div> <!-- .events-item__date -->
                	<div class="events-item__content">
                		<div class="events-item__title">
		                  <h3>News post title</h3>
		                </div>
		                <div class="events-item__info">
		                  <ul class="item-info__list">
		                    <li class="info-list__item"><i class="ion ion-android-person"></i> by John Doe</li>
		                    <li class="info-list__item"><i class="ion ion-android-chat" aria-hidden="true"></i> 7 Comments</li>
		                  </ul> <!-- .item-info__list -->
		                </div> <!-- .events-item__info -->
                	</div> <!-- .events-item__content -->
                </div> <!-- .events-item__header -->
                <div class="events-item__text">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab eius dicta, magni, placeat sed excepturi tenetur. Unde esse repellendus saepe ipsa odio in laborum voluptas. Obcaecati quae.
                </div> <!-- .events-item__text -->
                <div class="events-item__link">
                  <a href="{{ route('blog-item') }}">Read More ➔</a>
                </div> <!-- .events-item__link -->
              </div> <!-- / .events-item__body -->
						</div> <!-- .events__item -->
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-lg-pull-3">
						<div class="events__item">
							<div class="events-item__img">
                <img src="assets/img/events_img3.jpg" class="img-responsive" alt="...">
              </div>
              <div class="events-item__body">
                <div class="events-item__header">
                	<div class="events-item__date">
                		<p class="item_date__nbr">21</p>
                		<p class="item_date__mounth">March</p>
                	</div> <!-- .events-item__date -->
                	<div class="events-item__content">
                		<div class="events-item__title">
		                  <h3>News post title</h3>
		                </div>
		                <div class="events-item__info">
		                  <ul class="item-info__list">
		                    <li class="info-list__item"><i class="ion ion-android-person"></i> by John Doe</li>
		                    <li class="info-list__item"><i class="ion ion-android-chat" aria-hidden="true"></i> 9 Comments</li>
		                  </ul> <!-- .item-info__list -->
		                </div> <!-- .events-item__info -->
                	</div> <!-- .events-item__content -->
                </div> <!-- .events-item__header -->
                <div class="events-item__text">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab eius dicta, magni, placeat sed excepturi tenetur. Unde esse repellendus saepe ipsa odio in laborum voluptas. Obcaecati quae.
                </div> <!-- .events-item__text -->
                <div class="events-item__link">
                  <a href="{{ route('blog-item') }}">Read More ➔</a>
                </div> <!-- .events-item__link -->
              </div> <!-- / .events-item__body -->
						</div> <!-- .events__item -->
					</div>
	      </div> <!-- / .row -->
	      <div class="row">
	      	<div class="col-xs-12 hidden-xs col-sm-6 col-md-6 col-lg-3">
	      		<div class="events__title">
							<div>Events</div>
						</div>
	      	</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
						<div class="events__item ">
							<div class="events-item__img">
                <img src="assets/img/events_img4.jpg" class="img-responsive" alt="...">
              </div>
              <div class="events-item__body">
                <div class="events-item__header">
                	<div class="events-item__date">
                		<p class="item_date__nbr">11</p>
                		<p class="item_date__mounth">April</p>
                	</div> <!-- .events-item__date -->
                	<div class="events-item__content">
                		<div class="events-item__title">
		                  <h3>Event post title</h3>
		                </div>
		                <div class="events-item__info">
		                  <ul class="item-info__list">
		                    <li class="info-list__item"><i class="ion ion-android-person"></i> by John Doe</li>
		                    <li class="info-list__item"><i class="ion ion-android-chat" aria-hidden="true"></i> 2 Comments</li>
		                  </ul> <!-- .item-info__list -->
		                </div> <!-- .events-item__info -->
                	</div> <!-- .events-item__content -->
                </div> <!-- .events-item__header -->
                <div class="events-item__text">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab eius dicta, magni, placeat sed excepturi tenetur. Unde esse repellendus saepe ipsa odio in laborum voluptas. Obcaecati quae.
                </div> <!-- .events-item__text -->
                <div class="events-item__link">
                  <a href="{{ route('blog-item') }}">Read More ➔</a>
                </div> <!-- .events-item__link -->
              </div> <!-- / .events-item__body -->
						</div> <!-- .events__item -->
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
						<div class="events__item">
							<div class="events-item__img">
                <img src="assets/img/events_img5.jpg" class="img-responsive" alt="...">
              </div>
              <div class="events-item__body">
                <div class="events-item__header">
                	<div class="events-item__date">
                		<p class="item_date__nbr">14</p>
                		<p class="item_date__mounth">April</p>
                	</div> <!-- .events-item__date -->
                	<div class="events-item__content">
                		<div class="events-item__title">
		                  <h3>Event post title</h3>
		                </div>
		                <div class="events-item__info">
		                  <ul class="item-info__list">
		                    <li class="info-list__item"><i class="ion ion-android-person"></i> by John Doe</li>
		                    <li class="info-list__item"><i class="ion ion-android-chat" aria-hidden="true"></i> 11 Comments</li>
		                  </ul> <!-- .item-info__list -->
		                </div> <!-- .events-item__info -->
                	</div> <!-- .events-item__content -->
                </div> <!-- .events-item__header -->
                <div class="events-item__text">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab eius dicta, magni, placeat sed excepturi tenetur. Unde esse repellendus saepe ipsa odio in laborum voluptas. Obcaecati quae.
                </div> <!-- .events-item__text -->
                <div class="events-item__link">
                  <a href="{{ route('blog-item') }}">Read More ➔</a>
                </div> <!-- .events-item__link -->
              </div> <!-- / .events-item__body -->
						</div> <!-- .events__item -->
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
						<div class="events__item">
							<div class="events-item__img">
                <img src="assets/img/events_img6.jpg" class="img-responsive" alt="...">
              </div>
              <div class="events-item__body">
                <div class="events-item__header">
                	<div class="events-item__date">
                		<p class="item_date__nbr">16</p>
                		<p class="item_date__mounth">April</p>
                	</div> <!-- .events-item__date -->
                	<div class="events-item__content">
                		<div class="events-item__title">
		                  <h3>Event post title</h3>
		                </div>
		                <div class="events-item__info">
		                  <ul class="item-info__list">
		                    <li class="info-list__item"><i class="ion ion-android-person"></i> by John Doe</li>
		                    <li class="info-list__item"><i class="ion ion-android-chat" aria-hidden="true"></i> 8 Comments</li>
		                  </ul> <!-- .item-info__list -->
		                </div> <!-- .events-item__info -->
                	</div> <!-- .events-item__content -->
                </div> <!-- .events-item__header -->
                <div class="events-item__text">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab eius dicta, magni, placeat sed excepturi tenetur. Unde esse repellendus saepe ipsa odio in laborum voluptas. Obcaecati quae.
                </div> <!-- .events-item__text -->
                <div class="events-item__link">
                  <a href="{{ route('blog-item') }}">Read More ➔</a>
                </div> <!-- .events-item__link -->
              </div> <!-- / .events-item__body -->
						</div> <!-- .events__item -->
					</div>
	      </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section> <!-- / .section__events -->

		<!-- section Contacts -->
    <section class="section__contacts">
    	<div class="container">
    		<div class="row">
    		  <div class="col-sm-12"> 		  	
    				<h2 class="section__title"><strong>Contact</strong> us</h2>
    				<div class="divider">
    					<hr class="line1">
    					<hr class="line2">
    					<hr class="line1">
    				</div> <!-- / .divider -->
    		  </div>
    		</div> <!-- / .row -->
    	</div> <!-- / .container -->
      <div class="section_row">
        <div id="map"></div>
      </div> <!-- / .section_row -->
      <div class="container">
      	<div class="row">
	        <div class="col-sm-5">
						<div class="contacts__info">
							<p class="contacts_info__title">Information</p>
							<ul class="contacts_info__content">
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
	            </ul> <!-- .contacts_info__content -->
						</div> <!-- / .contacts__info -->
						<p class="subheading">If you have any questions don't hesistate to contact us.</p>
	        </div>
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
            </div> <!-- / .secction-contacts__form_body -->
	        </div>
	      </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section> <!-- / .section__contacts -->

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
    <script src="assets/plugins/moment-develop/moment.js"></script>
    <script src="assets/plugins/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
		<script src="assets/plugins/waypoints/lib/jquery.waypoints.min.js"></script>
		<script src="assets/plugins/lightbox/dist/js/lightbox.min.js"></script>
		<script src="assets/plugins/owl-carousel/dist/owl.carousel.min.js"></script>
		<script src="assets/plugins/countTo/jquery.countTo.js"></script>
		<script src="assets/plugins/contact/contact.js"></script>

    <!-- JS Custom -->
    <script src="assets/js/theme.min.js"></script>
		<script src="assets/js/google_maps.js"></script>

    <!-- Google Maps -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBTGnDWmYKPhKslCvPfkrcZDpgT_QMHT0s&callback=initMap" async defer></script>

  </body>
</html>