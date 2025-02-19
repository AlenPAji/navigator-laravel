<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">

    <title>Sunset Hotel | Layouts</title>
    
    <!-- CSS Plugins -->

    <!-- CSS Global -->
    <link rel="stylesheet" href="assets/css/theme.min.css">
    
  </head>
  <body data-offset="80">

    <!-- Section Home layout
    ================================================== -->
    <section class="section__home-layout">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
              <h1 class="welcome_content__title">Sunset Hotel</h1>
              <p class="welcome_content__title-primary">grand</p>
              <div class="divider">
                <hr class="line1">
                <hr class="line2">
                <hr class="line1">
              </div> <!-- / .divider -->
              <p class="page-subheader text-center">
                Sunset Hotel is a modern, fully responsive multipurpose premium HTML5 template that ideal for all kinds of hotels, hostels, resorts, bed and breakfast, rooms for rent and accommodation sites. Clear and trendy designed, built with Bootstrap v3, it looks perfect on all major browsers, tablets and phones.
              </p>
              <div class="text-center">
                <a href="https://themeforest.net/item/sunset-hotel-hotel-resort-premium-html-template/19571547" class="btn btn-reservation">
                  Purchase now
                </a>
              </div>
          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
      <div class="layout__bg"></div>
    </section>

    <!-- Section Layouts
    ================================================== -->
    <section class="section_layouts">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <div class="section__heading__bg">
              Layouts
            </div>
            <h2 class="section__heading">Choose your <span>style</span></h2>
            <div class="divider">
              <hr class="line1">
              <hr class="line2">
              <hr class="line1">
            </div> <!-- / .divider -->
          </div>
        </div> <!-- / .row -->
        <div class="row">
          <div class="col-sm-6">
            <a href="{{ route('index') }}" target="_blank" class="layouts__item">
              <div class="layouts__item__img">
                <img src="assets/img/screenshot_index.png" class="img-responsive" alt="default version">
              </div>
              <div class="layouts__item__footer">
                <h4 class="layouts__item__footer__heading">
                  Default version
                </h4>
              </div>
            </a> <!-- / .layouts__item -->
          </div>
          <div class="col-sm-6">
            <a href="{{ route('index-parallax') }}" target="_blank" class="layouts__item">
              <div class="layouts__item__img">
                <img src="assets/img/screenshot_parallax.png" class="img-responsive" alt="Parallax version">
              </div>
              <div class="layouts__item__footer">
                <h4 class="layouts__item__footer__heading">
                  Image Parallax
                </h4>
              </div>
            </a> <!-- / .layouts__item -->
          </div>
          <div class="col-sm-6">
            <a href="{{ route('index-slider') }}" target="_blank" class="layouts__item">
              <div class="layouts__item__img">
                <img src="assets/img/screenshot_slider.png" class="img-responsive" alt="Slider version">
              </div>
              <div class="layouts__item__footer">
                <h4 class="layouts__item__footer__heading">
                  Slider Version
                </h4>
              </div>
            </a> <!-- / .layouts__item -->
          </div>
          <div class="col-sm-6">
            <a href="{{ route('index-video') }}" target="_blank" class="layouts__item">
              <div class="layouts__item__img">
                <img src="assets/img/screenshot_video.png" class="img-responsive" alt="Video version">
              </div>
              <div class="layouts__item__footer">
                <h4 class="layouts__item__footer__heading">
                  Video Background
                </h4>
              </div>
            </a> <!-- / .layouts__item -->
          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>

    <!-- Section Pages
    ================================================== -->
    <section class="section_pages">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <div class="section__heading__bg">
              Pages
            </div>
            <h2 class="section__heading">Template <span>pages</span></h2>
            <div class="divider">
              <hr class="line1">
              <hr class="line2">
              <hr class="line1">
            </div> <!-- / .divider -->
          </div>
        </div> <!-- / .row -->
        <div class="row">
          <div class="col-sm-4">
            <a href="{{ route('about') }}" target="_blank" class="layouts__item">
              <div class="layouts__item__img">
                <img src="assets/img/screenshot_about.png" class="img-responsive" alt="about page">
              </div>
              <div class="layouts__item__footer">
                <h4 class="layouts__item__footer__heading">
                  About us
                </h4>
              </div>
            </a> <!-- / .layouts__item -->
          </div>
          <div class="col-sm-4">
            <a href="{{ route('room1') }}" target="_blank" class="layouts__item">
              <div class="layouts__item__img">
                <img src="assets/img/screenshot_rooms-1.png" class="img-responsive" alt="room page 1">
              </div>
              <div class="layouts__item__footer">
                <h4 class="layouts__item__footer__heading">
                  Rooms page 1
                </h4>
              </div>
            </a> <!-- / .layouts__item -->
          </div>
          <div class="col-sm-4">
            <a href="{{ route('room2') }}" target="_blank" class="layouts__item">
              <div class="layouts__item__img">
                <img src="assets/img/screenshot_rooms-2.png" class="img-responsive" alt="rooms page 2">
              </div>
              <div class="layouts__item__footer">
                <h4 class="layouts__item__footer__heading">
                  Rooms page 2
                </h4>
              </div>
            </a> <!-- / .layouts__item -->
          </div>
        </div> <!-- / .row -->
        <div class="row">
          <div class="col-sm-4">
            <a href="{{ route('room-detail') }}" target="_blank" class="layouts__item">
              <div class="layouts__item__img">
                <img src="assets/img/screenshot_room-detail.png" class="img-responsive" alt="room detail">
              </div>
              <div class="layouts__item__footer">
                <h4 class="layouts__item__footer__heading">
                  Room detail
                </h4>
              </div>
            </a> <!-- / .layouts__item -->
          </div>
          <div class="col-sm-4">
            <a href="{{ route('reservation') }}" target="_blank" class="layouts__item">
              <div class="layouts__item__img">
                <img src="assets/img/screenshot_reservation.png" class="img-responsive" alt="reservation">
              </div>
              <div class="layouts__item__footer">
                <h4 class="layouts__item__footer__heading">
                  Reservation
                </h4>
              </div>
            </a> <!-- / .layouts__item -->
          </div>
          <div class="col-sm-4">
            <a href="{{ route('gallery-fullwidth') }}" target="_blank" class="layouts__item">
              <div class="layouts__item__img">
                <img src="assets/img/screenshot_gallery-full-width.png" class="img-responsive" alt="gallery full width">
              </div>
              <div class="layouts__item__footer">
                <h4 class="layouts__item__footer__heading">
                  Gallery full width
                </h4>
              </div>
            </a> <!-- / .layouts__item -->
          </div>
        </div> <!-- / .row -->
        <div class="row">
          <div class="col-sm-4">
            <a href="{{ route('gallery-boxed') }}" target="_blank" class="layouts__item">
              <div class="layouts__item__img">
                <img src="assets/img/screenshot_gallery-boxed.png" class="img-responsive" alt="gallery boxed">
              </div>
              <div class="layouts__item__footer">
                <h4 class="layouts__item__footer__heading">
                  Gallery boxed
                </h4>
              </div>
            </a> <!-- / .layouts__item -->
          </div>
          <div class="col-sm-4">
            <a href="{{ route('blog') }}" target="_blank" class="layouts__item">
              <div class="layouts__item__img">
                <img src="assets/img/screenshot_blog.png" class="img-responsive" alt="blog page">
              </div>
              <div class="layouts__item__footer">
                <h4 class="layouts__item__footer__heading">
                  Blog page
                </h4>
              </div>
            </a> <!-- / .layouts__item -->
          </div>
          <div class="col-sm-4">
            <a href="{{ route('blog-item') }}" target="_blank" class="layouts__item">
              <div class="layouts__item__img">
                <img src="assets/img/screenshot_blog-detail.png" class="img-responsive" alt="blog item">
              </div>
              <div class="layouts__item__footer">
                <h4 class="layouts__item__footer__heading">
                  Blog item
                </h4>
              </div>
            </a> <!-- / .layouts__item -->
          </div>
        </div> <!-- / .row -->
        <div class="row">
          <div class="col-sm-4">
            <a href="{{ route('contacts') }}" target="_blank" class="layouts__item">
              <div class="layouts__item__img">
                <img src="assets/img/screenshot_contacts.png" class="img-responsive" alt="contacts">
              </div>
              <div class="layouts__item__footer">
                <h4 class="layouts__item__footer__heading">
                  Contacts
                </h4>
              </div>
            </a> <!-- / .layouts__item -->
          </div>
          <div class="col-sm-4">
            <a href="{{ route('404page') }}" target="_blank" class="layouts__item">
              <div class="layouts__item__img">
                <img src="assets/img/screenshot_404page.png" class="img-responsive" alt="404 page">
              </div>
              <div class="layouts__item__footer">
                <h4 class="layouts__item__footer__heading">
                  404 error page
                </h4>
              </div>
            </a> <!-- / .layouts__item -->
          </div>
          <div class="col-sm-4">
            <a href="#" target="_blank" class="layouts__item">
              <div class="layouts__item__img">
                <img src="assets/img/screenshot_index.png" class="img-responsive" alt="coming soon">
              </div>
              <div class="layouts__item__footer">
                <h4 class="layouts__item__footer__heading">
                  Coming Soon
                </h4>
              </div>
            </a> <!-- / .layouts__item -->
          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>
    
    <!-- Section Layouts footer
    ================================================== -->
    <section class="section_layouts-footer">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 text-center">
            <span id="footer__year">2017</span> &copy; Sunset Hotel theme by <a href="https://themeforest.net/user/gaminy/portfolio" target="_blank">GaminY</a> / Purchase via <a href="https://themeforest.net/item/sunset-hotel-hotel-resort-premium-html-template/19571547" target="_blank">themeforest.net</a>
          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>

    <!-- 
    ================================================== -->
    <!-- JS Global -->
    <script src="assets/plugins/jquery/jquery-1.12.4.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

    <!-- JS Plugins -->

    <!-- JS Custom -->

  </body>
</html>