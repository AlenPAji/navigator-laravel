<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="asset('assets/ico/favicon.ico')">

  <title>Room detail | Sunset Hotel</title>

  <!-- CSS Plugins -->
  <link href="{{asset('assets/plugins/ionicons/css/ionicons.min.css')}}" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="{{asset('assets/plugins/owl-carousel/dist/assets/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/plugins/owl-carousel/dist/assets/owl.theme.default.min.css')}}">

  <!-- CSS Global -->
  <link rel="stylesheet" href="{{asset('assets/css/theme.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/newtheme.css')}}">

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
            <li class="social-icons__item"><a href="#"><i class="icon ion-social-twitter" aria-hidden="true"></i></a>
            </li>
            <li class="social-icons__item"><a href="#"><i class="icon ion-social-facebook" aria-hidden="true"></i></a>
            </li>
            <li class="social-icons__item"><a href="#"><i class="icon ion-social-googleplus" aria-hidden="true"></i></a>
            </li>
          </ul> <!-- .social__icons -->
          <div class="dropdown lang-menu">
            <button class="dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="true">
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
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar__collapse"
          aria-expanded="false">
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
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
              aria-expanded="false">Home <i class="icon ion-chevron-down"></i></a>
            <ul class="dropdown-menu">
              <li><a href="{{ route('index') }}">Home static image</a></li>
              <li><a href="{{ route('index-parallax') }}">Home Parallax</a></li>
              <li><a href="{{ route('index-slider') }}">Home Slider</a></li>
              <li><a href="{{ route('index-video') }}">Home Video</a></li>
            </ul>
          </li>
          <li><a href="{{ route('about') }}">About us</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
              aria-expanded="false">Rooms <i class="icon ion-chevron-down"></i></a>
            <ul class="dropdown-menu">
              <li><a href="{{ route('room1') }}">Rooms 1</a></li>
              <li><a href="{{ route('room2') }}">Rooms 2</a></li>
              <li class="active"><a href="{{ route('room-detail') }}">Room detail</a></li>
            </ul>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="{{ route('reservation') }}">Reservation</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
              aria-expanded="false">Pages <i class="icon ion-chevron-down"></i></a>
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

  <!-- section text header -->
  <section class="section__text-header">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="welcome__content">
            <h1 class="welcome_content__title">{{ $hotelData['name'] }}</h1>
            <div class="divider blog-divider">
              <hr class="line1">
              <hr class="line2">
              <hr class="line1">
            </div> <!-- / .divider -->
          </div> <!-- .welcome__content -->
        </div>
      </div> <!-- / .row -->
    </div> <!-- / .container -->
  </section> <!-- / .section text-header -->

  <!-- section room-detail -->
  <section class="section__room-detail">
    <div class="container">
      <div class="row">
        <div class="col-sm-7 col-md-8">
          <div class="room_detail__body">
            <div id="room-detail__carousel" class="owl-carousel owl-theme room-detail__gallery">
              @foreach ($hotelData['main_images'] as $mainImage)
          <div class="room_gallery__item">
          <img src="{{ asset('assets/img/' . $mainImage) }}" class="img-responsive"
            alt="{{ $hotelData['name'] }}">
          </div> <!-- .room_gallery__item -->
        @endforeach <!-- .room_gallery__item -->
            </div> <!-- .room-detail__gallery -->
            <div class="room_price__body">
              <h2 class="room__name">{{ $hotelData['name'] }}</h2>
              <p class="room__price"><span>$165</span> / night</p>
            </div>
            <p class="subheading">Room description</p>
            <div class="room__desc">
              A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I
              enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for
              the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense of mere
              tranquil existence. When, while the lovely valley teems with vapour around me and the meridian.
            </div>
            <div class="room__desc">
              A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I
              enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for
              the bliss of souls like mine.
            </div>
            <a href="{{ route('reservation') }}" class="btn">Book this room now</a>
          </div> <!-- .room-detail__body -->
          <div class="room__reviews">
            <p class="subheading">Room reviews</p>
            <ul class="reviews__list">
              <li class="review">
                <div class="review__user">
                  Robert Jones
                </div>
                <div class="review__date">
                  April 8, 2017 at 1:15 pm
                </div>
                <div class="review__message">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni dicta alias enim quasi sapiente saepe,
                  repellat soluta commodi delectus doloribus, veniam odit hic ratione quae modi earum dolor dignissimos
                  quas?
                </div>
              </li> <!-- .review -->
              <li class="review">
                <div class="review__user">
                  Maria Atkinson
                </div>
                <div class="review__date">
                  March 24, 2017 at 1:38 am
                </div>
                <div class="review__message">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit eaque magni aliquam dolore cum aliquid
                  ipsa, asperiores modi voluptates.
                </div>
              </li> <!-- .review -->
              <li class="review">
                <div class="review__user">
                  Brad pitt
                </div>
                <div class="review__date">
                  March 20, 2017 at 3:40 pm
                </div>
                <div class="review__message">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti provident adipisci eos reiciendis.
                  Ab dolore natus nam temporibus quidem esse soluta. Accusamus sapiente, officia architecto accusantium
                  sunt amet harum quis!
                </div>
              </li> <!-- .review -->
            </ul> <!-- .reviews__list -->
            <p class="subheading">Leave a review</p>
            <form class="comments__form" data-animate-in="animateUp">

              <div class="form-group">
                <label for="name">Name (Required)</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Enter Your Full Name">
              </div>

              <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Enter Your E-mail">
              </div>

              <div class="form-group">
                <label for="message">Comment (Required)</label>
                <textarea name="message" class="form-control" rows="6" id="message"
                  placeholder="Enter Your Comment"></textarea>
                <span class="help-block"></span>
              </div>

              <button type="submit" class="btn">
                Submit review
              </button>
            </form>
          </div> <!-- .room__reviews -->
        </div>
        <div class="col-sm-5 col-md-4">
          <div class="room-detail__sidebar">
            <div class="room_features__body">
              <p class="subheading">Room features</p>
              <ul class="room__features">
                <li class="feature__item">
                  <i class="icon ion-android-people"></i>
                  <div class="feature_item__title">
                    Double king bed
                  </div>
                </li>
                <li class="feature__item">
                  <i class="icon ion-coffee"></i>
                  <div class="feature_item__title">
                    Breakfast
                  </div>
                </li>
                <li class="feature__item">
                  <i class="icon ion-android-sunny"></i>
                  <div class="feature_item__title">
                    Air conditioning
                  </div>
                </li>
                <li class="feature__item">
                  <i class="icon ion-wineglass"></i>
                  <div class="feature_item__title">
                    Mini bar
                  </div>
                </li>
                <li class="feature__item">
                  <i class="icon ion-wifi"></i>
                  <div class="feature_item__title">
                    Wi-Fi service
                  </div>
                </li>
                <li class="feature__item">
                  <i class="icon ion-model-s"></i>
                  <div class="feature_item__title">
                    Free parking
                  </div>
                </li>
              </ul> <!-- .room__features -->
            </div> <!-- .room_features__body -->
            <div class="similar__rooms">
              <p class="subheading">Similar rooms</p>
              <ul class="similar-rooms__list">
                @foreach ($hotelData['categories'] as $categoryKey => $category)
          <li class="list__item">
            <figure class="list_item__body">
            <!-- Carousel Wrapper -->
            <div id="room-carousel-{{ $categoryKey }}" class="owl-carousel owl-theme room-carousel">
              @foreach ($category['images'] as $image)
          <div class="room_gallery__item">
          <img src="{{ asset('assets/img/' . $image) }}" class="img-responsive"
          alt="{{ $category['name'] }}">
          </div>
        @endforeach
            </div>
            <!-- Carousel Content -->
            <figcaption>
              <h3>{{ $category['name'] }}</h3>
              <div class="item__price">
              ${{ $category['price'] }} <small>/ night</small>
              </div>
            </figcaption>
            </figure>
          </li>
        @endforeach
                <!-- .list__item -->
              </ul> <!-- .similar-rooms__list -->
            </div> <!-- .similar__rooms -->
            <div class="info__body">
              <p class="info__title">Information</p>
              <ul class="info__content">
                <li>
                  <p class="info-text">For more information about rooms please contact us.</p>
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
          </div> <!-- .room-detail__sidebar -->
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
                <li class="social-icons__item"><a href="#"><i class="icon ion-social-twitter"
                      aria-hidden="true"></i></a></li>
                <li class="social-icons__item"><a href="#"><i class="icon ion-social-facebook"
                      aria-hidden="true"></i></a></li>
                <li class="social-icons__item"><a href="#"><i class="icon ion-social-googleplus"
                      aria-hidden="true"></i></a></li>
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
                <form class="newsletter__form validate"
                  action="//themeforest.us16.list-manage.com/subscribe/post-json?u=3c9679e26b601e1a87122b12f&id=e4b9351526&c=?"
                  method="get" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank"
                  novalidate="">
                  <div id="mc_embed_signup_scroll">
                    <div class="mc-field-group form-group">
                      <label for="mce-EMAIL" class="sr-only">E-mail address</label>
                      <input type="email" value="" name="EMAIL" class="required email form-control newsletter_input"
                        id="mce-EMAIL" placeholder="Email address">
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
  <script src="{{asset('assets/plugins/owl-carousel/dist/owl.carousel.min.js')}}"></script>

  <!-- JS Custom -->
  <script src="{{asset('assets/js/theme.min.js')}}"></script>

  <script>
    $(document).ready(function () {
      $('.room-carousel').each(function () {
        $(this).owlCarousel({
          loop: true,
          margin: 10,
          nav: true,
          dots: true,
          items: 1, // Adjust as needed
        });
      });
    });


  </script>


</body>

</html>