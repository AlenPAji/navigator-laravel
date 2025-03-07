<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{asset('assets/ico/favicon.ico')}}">

    <title>Navigator Booking</title>

    <!-- CSS Plugins -->
		<link href="{{asset('assets/plugins/ionicons/css/ionicons.min.css')}}" rel="stylesheet" type="text/css">

    <!-- CSS Global -->
    <link rel="stylesheet" href="{{asset('assets/css/theme.min.css')}}">

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
            <h3 class="navbar-brand__logo">Navigator </h3>
            <p class="navbar-brand__sublogo">Booking</p>
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
              <li class="active"><a href="{{ route('room1') }}">Rooms 1</a></li>
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
                    <h1 class="welcome_content__title">{{ $data['title'] }}</h1>
                    <!-- Breadcrumbs -->
                </div> <!-- .welcome__content -->
            </div>
        </div> <!-- / .row -->
    </div> <!-- / .container -->
    <div 
        class="home__bg rooms__bg" 
        style="background-image: url('{{ asset('assets/img/' . $data['img']) }}');">
    </div>
</section><!-- / .section__header -->

    <!-- section rooms-1 -->
    <section class="section__rooms-1">
    	<div class="container">
    		<div class="row">
            @foreach($data['properties'] as $property)
          <div class="rooms__item">
            <div class="col-md-6">
              <div class="rooms__pic">
                <img src="{{ asset('assets/img/' . $property['img']) }}" class="img-responsive" alt="...">
              </div> <!-- / .about__pic -->
            </div>
            <div class="col-md-6">
              <div class="rooms__desc">
                <div class="rooms_desc__header">
                  <h2 class="rooms_desc__title">{{$property['name']}}</h2>
                 
                </div> <!-- .rooms_desc__header -->
                <p class="rooms_desc__desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil dolorem illum vitae facere doloremque quas voluptates dolore.</p>
                <div class="col-sm-6">
                  <ul class="rooms_desc__services">
                    <li><i class="icon ion-android-person"></i> One king bed</li>
                    <li><i class="icon ion-coffee"></i> Breakfast</li>
                    <li><i class="icon ion-android-sunny"></i> Air conditioning</li>
                  </ul> <!-- .rooms_desc__services -->
                </div>
                <div class="col-sm-6">
                  <ul class="rooms_desc__services">
                    <li><i class="icon ion-wineglass"></i> Mini bar</li>
                    <li><i class="icon ion-monitor"></i> LCD TV</li>
                    <li><i class="icon ion-wifi"></i> Wi-Fi</li>
                  </ul> <!-- .rooms_desc__services -->
                </div>
                <a href="{{ route('hotel', ['place' => Str::slug($data['title']), 'hotel' => Str::slug($property['name'])]) }}" class="btn btn-rooms" class="btn btn-rooms">View details</a>
              </div> <!-- / .rooms__desc -->
            </div>
          </div> <!-- .rooms__item -->
          @endforeach
           <!-- .rooms__item -->
           <!-- .rooms__item -->
        </div> <!-- .row -->
        <div class="row">
          <div class="col-sm-12">
        
          <nav aria-label="Page navigation">
    <ul class="pagination">
        {{-- Display pagination links --}}
        {{ $data['properties']->links('pagination::bootstrap-4') }}
    </ul>
</nav>

        
          </div>
        </div> <!-- / .row -->
	    </div> <!-- / .container -->
    </section> <!-- / .section__rooms-1 -->

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
    <script src="{{asset('assets/plugins/jquery/jquery-1.12.4.min.js')}}"></script>
    <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- JS Plugins -->
		<script src="{{asset('assets/plugins/waypoints/lib/jquery.waypoints.min.js')}}"></script>
		<script src="{{asset('assets/plugins/lightbox/dist/js/lightbox.min.js')}}"></script>
		<script src="{{asset('assets/plugins/isotope/isotope.pkgd.min.js')}}"></script>
		<script src="{{asset('assets/plugins/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>

    <!-- JS Custom -->
    <script src="{{asset('assets/js/theme.min.js')}}"></script>

  </body>
</html>