<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">

    <title>Blog item | Sunset Hotel</title>

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
                <li class="active"><a href="{{ route('blog-item') }}">Blog Item</a></li>
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
							<h1 class="welcome_content__title">Blog post title here</h1>
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

    <!-- section blog-item -->
    <section class="section__blog-item">
    	<div class="container">
    	  <div class="row">
    	    <div class="col-sm-8">
    	    	<div class="blog__item">
    	    		<div class="blog-item__img">
                <img src="assets/img/events_img6.jpg" class="img-responsive" alt="...">
              </div>
              <div class="blog-item__content">
              	<div class="blog-item__category">
                  <p>/ <span>Events</span> /</p>
                </div>
            		<div class="blog-item__title">
                  <h3>Degustation of Spanish and French wines</h3>
                </div>
                <div class="divider blog-divider">
		    					<hr class="line1">
		    					<hr class="line2">
		    					<hr class="line1">
		    				</div> <!-- / .divider -->
		    				<div class="blog-item__date">
                  <p>March 15, 2017</p>
                </div>
                <div class="blog-item__text">
                  One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections. The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked.
                </div> <!-- .blog-item__text -->
                <div class="blog-item__text">
                  "What's happened to me?" he thought. It wasn't a dream. His room, a proper human room although a little too small, lay peacefully between its four familiar walls. A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame.
                </div> <!-- .blog-item__text -->
                <h4 class="blog-item__header">Lorem ipsum dolor sit amet</h4>
                <div class="blog-item__text">
                   It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole of her lower arm towards the viewer. Gregor then turned to look out the window at the dull weather.
                </div> <!-- .blog-item__text -->
                <h4 class="blog-item__quote">The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary.</h4>
                <div class="blog-item__text">
                   Drops of rain could be heard hitting the pane, which made him feel quite sad. "How about if I sleep a little bit longer and forget all this nonsense", he thought, but that was something he was unable to do because he was used to sleeping on his right, and in his present state couldn't get into that position. However hard he threw himself onto his right, he always rolled back to where he was. He must have tried it a hundred times, shut his eyes so that he wouldn't have to look at the floundering legs, and only stopped when he began to feel a mild, dull pain there that he had never felt before. "Oh, God", he thought, "what a strenuous career it is that I've chosen!
                </div> <!-- .blog-item__text -->
                <div class="blog-item__tags">
                  <p>Tags:</p> 
                  <a href="#">#travel</a>
                  <a href="#">#news</a>
                  <a href="#">#themeforest</a>
                </div>
                <div class="blog-item__footer">
                	<div class="footer__item">
                		<ul class="item-info__list">
	                    <li class="info-list__item"><i class="ion ion-android-person"></i> by John Doe</li>
	                    <li class="info-list__item"><i class="ion ion-android-chat" aria-hidden="true"></i> 5 Comments</li>
	                  </ul> <!-- .item-info__list -->
                	</div> <!-- .footer__item -->
                	<div class="footer__item">
                		<ul class="social__icons">
                			<li class="social-icons__item">Share:</li>
						          <li class="social-icons__item"><a href="#"><i class="icon ion-social-twitter" aria-hidden="true"></i></a></li>
						          <li class="social-icons__item"><a href="#"><i class="icon ion-social-facebook" aria-hidden="true"></i></a></li>
						          <li class="social-icons__item"><a href="#"><i class="icon ion-social-googleplus" aria-hidden="true"></i></a></li>
						        </ul> <!-- .social__icons -->
                	</div> <!-- .footer__item -->
                </div> <!-- .blog-item__footer -->
              </div> <!-- / .blog-item__content -->
            </div> <!-- .blog__item -->
            <div class="comments">
              <p class="subheading">Comments</p>
              <ul class="comments__list">
                <li class="comment">
                  <div class="comment__user">
                    Robert Jones
                  </div>
                  <div class="comment__date">
                    April 8, 2017 at 1:15 pm
                  </div>
                  <div class="comment__message">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni dicta alias enim quasi sapiente saepe, repellat soluta commodi delectus doloribus, veniam odit hic ratione quae modi earum dolor dignissimos quas?
                  </div>
                  <div class="comment__reply">
                    <a href="">Reply</a>
                  </div>
                  <ul class="comments-list__cildren">
                    <li class="comment">
                      <div class="comment__user">
                        John Doe
                      </div>
                      <div class="comment__date">
                        April 8, 2017 at 4:15 pm
                      </div>
                      <div class="comment__message">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                      </div>
                      <div class="comment__reply">
                        <a href="">Reply</a>
                      </div>
                    </li>
                  </ul>
                </li> <!-- .comment -->
                <li class="comment">
                  <div class="comment__user">
                    Maria Atkinson
                  </div>
                  <div class="comment__date">
                    March 24, 2017 at 1:38 am
                  </div>
                  <div class="comment__message">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit eaque magni aliquam dolore cum aliquid ipsa, asperiores modi voluptates.
                  </div>
                  <div class="comment__reply">
                    <a href="">Reply</a>
                  </div>
                </li> <!-- .comment -->
                <li class="comment">
                  <div class="comment__user">
                    Brad pitt
                  </div>
                  <div class="comment__date">
                    March 20, 2017 at 3:40 pm
                  </div>
                  <div class="comment__message">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti provident adipisci eos reiciendis. Ab dolore natus nam temporibus quidem esse soluta. Accusamus sapiente, officia architecto accusantium sunt amet harum quis!
                  </div>
                  <div class="comment__reply">
                    <a href="">Reply</a>
                  </div>
                </li> <!-- .comment -->
                <li class="comment">
                  <div class="comment__user">
                    Jessica Doe
                  </div>
                  <div class="comment__date">
                    March 15, 2017 at 10:30 am
                  </div>
                  <div class="comment__message">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi quas iste et dolor harum accusamus.
                  </div>
                  <div class="comment__reply">
                    <a href="">Reply</a>
                  </div>
                </li> <!-- .comment -->
              </ul> <!-- .comments__list -->
              <p class="subheading">Leave a comment</p>
              <form class="comments__form" data-animate-in="animateUp">
                
                <div class="form-group">
                  <label for="name">Name (Required)</label>
                  <input type="text" name="name" class="form-control" id="name" placeholder="Enter Your Full Name">
                </div>

                <div class="form-group">
                  <label for="email">Email address (Required)</label>
                  <input type="email" name="email" class="form-control" id="email" placeholder="Enter Your E-mail">
                </div>

                <div class="form-group">
                  <label for="website">Website</label>
                  <input type="email" name="website" class="form-control" id="website" placeholder="Enter website">
                </div>

                <div class="form-group">
                  <label for="message">Message (Required)</label>
                  <textarea name="message" class="form-control" rows="6" id="message" placeholder="Enter Your Message"></textarea>
                  <span class="help-block"></span>
                </div>
                
                <button type="submit" class="btn">
                    Post comment
                </button>
              </form>
            </div> <!-- .comments -->
          </div>
          <div class="col-sm-4">
    	    	<div class="blog__sidebar">
    	    		<div class="sidebar__item">
    	    			<p class="subheading">Search</p>
    	    			<form class="search-form" role="search">
								  <div class="form-group">
								    <input type="text" class="form-control" placeholder="Enter keywords">
								  </div>
								  <button type="submit" class="btn btn-search"><i class="icon ion-search"></i></button>
								</form> <!-- .search-form -->
    	    			<p class="subheading">Categories</p>
    	    			<ul class="categories">
    	    				<li><a href="#">Accomondation</a></li>
    	    				<li><a href="#">Travel</a></li>
    	    				<li><a href="#">Rooms</a></li>
    	    				<li><a href="#">Services</a></li>
    	    				<li><a href="#">Events</a></li>
    	    			</ul> <!-- .categories -->
    	    		</div> <!-- .sidebar__item -->
    	    		<div class="sidebar__item">
    	    			<p class="subheading">Newsletter</p>
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
                        <button type="submit" class="btn btn-newsletter btn-newsletter__blog" id="mc-embedded-subscribe">
                          <i class="icon ion-paper-airplane"></i>
                        </button>
                      </div>
                    </div>
                  </form>
                </div> <!-- #mc_embed_signup -->
                
			          <p class="subheading">Follow us</p>
			          <ul class="social__icons">
				          <li class="social-icons__item"><a href="#"><i class="icon ion-social-twitter" aria-hidden="true"></i></a></li>
				          <li class="social-icons__item"><a href="#"><i class="icon ion-social-facebook" aria-hidden="true"></i></a></li>
				          <li class="social-icons__item"><a href="#"><i class="icon ion-social-googleplus" aria-hidden="true"></i></a></li>
				        </ul> <!-- .social__icons -->
    	    		</div> <!-- .sidebar__item -->
    	    		<div class="sidebar__item">
    	    			<p class="subheading">Recent posts</p>
    	    			<ul class="recent__posts">
    	    				<li>
    	    					<a href="#" class="post__title">
    	    						<h5 class="post__title">Lorem ipsum dolor sit amet.</h5>
    	    						<p class="post__desc">
	    	    						One morning, when Gregor Samsa woke from troubled dreams, he found...
	    	    					</p>
	    	    					<p class="post__info"><i class="ion ion-android-calendar"></i> 15 March, 2017</p>
	    	    					<p class="post__info"><i class="ion ion-android-person"></i> by John Doe</p>
    	    					</a>
    	    				</li>
    	    				<li>
    	    					<a href="#">
    	    						<h5 class="post__title">Lorem ipsum dolor sit amet.</h5>
    	    						<p class="post__desc">
	    	    						One morning, when Gregor Samsa woke from troubled dreams, he found...
	    	    					</p>
	    	    					<p class="post__info"><i class="ion ion-android-calendar"></i> 15 March, 2017</p>
	    	    					<p class="post__info"><i class="ion ion-android-person"></i> by John Doe</p>
    	    					</a>
    	    				</li>
    	    				<li>
    	    					<a href="#" class="post__title">
    	    						<h5 class="post__title">Lorem ipsum dolor sit amet.</h5>
    	    						<p class="post__desc">
	    	    						One morning, when Gregor Samsa woke from troubled dreams, he found...
	    	    					</p>
	    	    					<p class="post__info"><i class="ion ion-android-calendar"></i> 15 March, 2017</p>
	    	    					<p class="post__info"><i class="ion ion-android-person"></i> by John Doe</p>
    	    					</a>
    	    				</li>
    	    				<li>
    	    					<a href="#" class="post__title">
    	    						<h5 class="post__title">Lorem ipsum dolor sit amet.</h5>
    	    						<p class="post__desc">
	    	    						One morning, when Gregor Samsa woke from troubled dreams, he found...
	    	    					</p>
	    	    					<p class="post__info"><i class="ion ion-android-calendar"></i> 15 March, 2017</p>
	    	    					<p class="post__info"><i class="ion ion-android-person"></i> by John Doe</p>
    	    					</a>
    	    				</li>
    	    			</ul>
    	    		</div> <!-- .sidebar__item -->
    	    		<div class="sidebar__item">
    	    			<p class="subheading">Tags</p>
    	    			<ul class="tags">
    	    				<li><a href="#">#travel</a></li>
    	    				<li><a href="#">#rooms</a></li>
    	    				<li><a href="#">#services</a></li>
    	    				<li><a href="#">#accomondation</a></li>
    	    				<li><a href="#">#spa</a></li>
    	    				<li><a href="#">#events</a></li>
    	    				<li><a href="#">#news</a></li>
    	    				<li><a href="#">#hotel</a></li>
    	    			</ul>
    	    		</div> <!-- .sidebar__item -->
  	    		</div> <!-- .blog__sidebar -->
    	    </div>
    	  </div> <!-- / .row -->
    	</div> <!-- / .container -->
    </section> <!-- / .section blog-item -->

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