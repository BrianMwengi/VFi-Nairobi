<?php include("path.php"); 
include(ROOT_PATH . '/app/database/db.php');
$posts = array();
$posts = getpublishedPosts();

?>

<!DOCTYPE html>
<html lang="en">

<!--include header -->
    <?php include("app/includes/header.php");?>
    
<body>
 
    <!-- END nav -->

    <section id="home" class="video-hero js-fullheight" style="height: 700px; background-image: url(assets/images/bg_1.jpg);  background-size:cover; background-position: center center;background-attachment:fixed;" data-section="home">
			<div class="overlay js-fullheight"></div>
			<a class="player" data-property="{videoURL:'https://www.youtube.com/watch?v=nQWFzMvCfLE',containment:'#home', showControls:false, autoPlay:true, loop:true, mute:false, startAt:0, opacity:1, quality:'default'}"></a>
			<div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-10 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><strong>Victory that overcomes</strong> <br>even our faith</br></h1>
            <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><a href="#" class="btn btn-primary btn-outline-white px-4 py-3">Join Us Now</a></p>
          </div>
        </div>
      </div>
		</section>

		<section class="ftco-bible-study">
			<div class="container-wrap">
				<div class="col-md-12 wrap">
					<div class="container">
						<div class="row">
							<div class="col-md-12 d-md-flex">
								<div class="one-forth ftco-animate">
									<h3>Bible Study</h3>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
								</div>
								<div class="one-half d-md-flex align-items-md-center ftco-animate">
									<div class="countdown-wrap">
										<p class="countdown d-flex">
											<span id="days"></span>
											<span id="hours"></span>
											<span id="minutes"></span>
											<span id="seconds"></span>
										</p>
									</div>
									<div class="button">
										<p><a href="event.php" class="btn btn-primary p-3">Events Details</a></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="ftco-section-2">
      <div class="container-fluid">
        <div class="section-2-blocks-wrapper d-flex row no-gutters">
          <div class="img col-md-6 ftco-animate" style="background-image: url('assets/images/about.png');">
            <a href="https://vimeo.com/45830194" class="button popup-vimeo"><span class="ion-ios-play"></span></a>
          </div>
          <div class="text col-md-6 ftco-animate">
            <div class="text-inner align-self-start">
              
              <h3>Loving God, Loving Others and Serving the World</h3>
              <p>This has always been a channel through which we have seen the manifestation of the holy spirit..</p>

              <p>Not forsaking the assembling of ourselves together, as the manner of some is..." Heb 10:25. We hold weekly fellowship meetings, quarterly Zone meetings and bi-annual general conferences. This has always been a channel through which we have seen the manifestation of the holy spirit..</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  
    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-6 text-center heading-section ftco-animate">
            <span class="subheading">Our Services</span>
            <h2 class="mb-4"> VFi Vision </h2>
            <p> We work hand in hand with local churches and fellowships. Our goal is to see the small churches grow by helping them get established.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon d-flex justify-content-center mb-3"><span class="align-self-center flaticon-planet-earth"></span></div></div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">I'm New Here</h3>
                <p>We are excited to have new members on our board as the bible says christ is for all.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon d-flex justify-content-center mb-3"><span class="align-self-center flaticon-maternity"></span></div></div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Partner Ministries</h3>
                <p>We partner with other Ministries so as to work together for the glory of our Lord Jesus Christ .</p>
              </div>
            </div>      
          </div>
          <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon d-flex justify-content-center mb-3"><span class="align-self-center flaticon-pray"></span></div></div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Prayer Request</h3>
                <p>We would love to pray with you send your prayer request, you can subcribe to our Newsletter .</p>
              </div>
            </div>    
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon d-flex justify-content-center mb-3"><span class="align-self-center flaticon-podcast"></span></div></div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Podcasts</h3>
                <p>Listen to our sermons as they are streamed live through Podcasts or other social media</p>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section-parallax">
      <div class="parallax-img d-flex align-items-center">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
              <h2>Subcribe to our Newsletter</h2>
              <p>Subscribe to our Newsletter to get personalised Information or any event happening in VFi Nairobi</p>
              <div class="row d-flex justify-content-center mt-5">
                <div class="col-md-6">
                  <form action="#" class="subscribe-form">
                    <div class="form-group">
                      <span class="icon icon-paper-plane"></span>
                      <input type="text" class="form-control" placeholder="Enter email address">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row no-gutters justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <span class="subheading">Sermons</span>
            <h2 class="mb-4">Watch our sermons</h2>
            <p>Watch our spirit filled sermons from different leaders and members of Vfi</p>
          </div>
        </div>
        <div class="row">
        	<div class="col-md-4 ftco-animate">
        		<div class="sermons">
        			<a href="https://vimeo.com/45830194" class="img popup-vimeo mb-3 d-flex justify-content-center align-items-center" style="background-image: url(assets/images/sermons-1.png);">
        				<div class="icon d-flex justify-content-center align-items-center">
        					<span class="icon-play"></span>
        				</div>
        			</a>
        			<div class="text">
        				<h3><a href="#">Be at Peace With One Another</a></h3>
        				<span class="position">Pastor. George</span>
        			</div>
        		</div>
        	</div>
        	<div class="col-md-4 ftco-animate">
        		<div class="sermons">
        			<a href="https://vimeo.com/45830194" class="img popup-vimeo mb-3 d-flex justify-content-center align-items-center" style="background-image: url(assets/images/sermons-2.png);">
        				<div class="icon d-flex justify-content-center align-items-center">
        					<span class="icon-play"></span>
        				</div>
        			</a>
        			<div class="text">
        				<h3><a href="#">Inspirational Message of God</a></h3>
        				<span class="position">Pastor. Raynold</span>
        			</div>
        		</div>
        	</div>
        	<div class="col-md-4 ftco-animate">
        		<div class="sermons">
        			<a href="https://vimeo.com/45830194" class="img popup-vimeo mb-3 d-flex justify-content-center align-items-center" style="background-image: url(assets/images/sermons-3.png);">
        				<div class="icon d-flex justify-content-center align-items-center">
        					<span class="icon-play"></span>
        				</div>
        			</a>
        			<div class="text">
        				<h3><a href="#">Prayers, Presence, and Provision</a></h3>
        				<span class="position">Erick Kwete Minga</span>
        			</div>
        		</div>
        	</div>
        </div>
        <div class="row mt-5">
        	<div class="col text-center">
        		<p><a href="sermons.php" class="btn btn-primary btn-outline-primary p-3">Watch all sermons</a></p>
        	</div>
        </div>
      </div>
    </section>

    <section class="ftco-section testimony-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <span class="subheading">Read, Get Inspired, and Share Your Story</span>
            <h2 class="mb-4">Testimonies</h2>
            <p>There has to be a test for the testimony to be there below are some of the testimonies from VFi Nairobi</p>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item text-center">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(assets/images/test-1.png)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Consolata</p>
                    <span class="position">Member</span>
                  </div>
                </div>
              </div>
              <div class="item text-center">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(assets/images/test-2.png)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Anonymous</p>
                    <span class="position">Volunteer</span>
                  </div>
                </div>
              </div>
              <div class="item text-center">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(assets/images/test-3.png)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Anonymous</p>
                    <span class="position">member</span>
                  </div>
                </div>
              </div>
              <div class="item text-center">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(assets/images/test-4.png)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Anonymous</p>
                    <span class="position">member</span>
                  </div>
                </div>
              </div>
              <div class="item text-center">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(assets/images/test-5.png)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Anonymous</p>
                    <span class="position">member</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <section class="ftco-section ftco-counter" id="section-counter">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2>VFi Vision </h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="100">0</strong>
                <span>VFi fellowships around the world</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="420000">0</strong>
                <span>VFi Members around the globe</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="8600000">0</strong>
                <span>Reaching &amp; Winining Souls</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section-2 bg-light">
    	<div class="container-fluid">
    		<div class="row no-gutters d-flex">
    			<div class="col-md-6 img d-flex justify-content-end align-items-center" style="background-image: url(assets/images/event.jpg);">
    				<div class="col-md-7 heading-section text-sm-center text-md-right heading-section-white ftco-animate mr-md-5 mt-md-5">
	            <h2>Our latest events</h2>
	            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
	            <p><a href="#" class="btn btn-primary py-3 px-4">View Events</a></p>
	          </div>
    			</div>
    			<div class="col-md-6">
    				<div class="event-wrap">
	    				<div class="event-entry d-flex ftco-animate">
	    					<div class="meta mr-4">
	    						<p>
	    							<span>07</span>
	    							<span>Aug 2020</span>
	    						</p>
	    					</div>
	    					<div class="text">
	    						<h3 class="mb-2"><a href="events.html">Sunday's Bible Reading</a></h3>
	    						<p class="mb-4"><span>4:00pm at VFi Nairobi</span></p>
	    						<a href="events.html" class="img" style="background-image: url(assets/images/event-1.jpg);"></a>
	    					</div>
	    				</div>
	    				<div class="event-entry d-flex ftco-animate">
	    					<div class="meta mr-4">
	    						<p>
	    							<span>07</span>
	    							<span>Jan 2020</span>
	    						</p>
	    					</div>
	    					<div class="text">
	    						<h3 class="mb-2"><a href="events.html">Fellowship with us</a></h3>
	    						<p class="mb-4"><span></span></p>
	    						<a href="events.html" class="img" style="background-image: url(assets/images/event-2.png);"></a>
	    					</div>
	    				</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <span class="subheading">Blog</span>
            <h2>Recent Blog</h2>
            <p>Awesome inspirations from individuals from VFi Nairobi and how they are impacted through word and fellowshiping together.</p>
          </div>
        </div>

        
        
        <div class="row-slider"> 
         <?php foreach ($posts as $post): ?>
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry">
            <a href="blog-single.php?id=<?php echo $post['id']; ?>" class="block-20" style="background-image: url('<?php echo BASE_URL . '/assets/images/' . $post['image']; ?> ">
            </a>
              <div class="text p-4 d-block">
                <div class="meta mb-3">
                  <div><a href= "blog-single.php?id=<?php echo $post['id']; ?>"><?php echo date('F j, Y', strtotime($post['created_at'])); ?></a></div>
                  <div><a href="#"> <?php echo $post['username']; ?> </a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="blog-single.php?id=<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a></h3>
                <?php echo html_entity_decode(substr($post['body'], 0, 65) . '....'); ?></div>
              </div>
              </div>
          <?php endforeach; ?>
        </div>
        </div>
    </section>
    

   

    <!-- To include footer here -->

    <?php include(ROOT_PATH ." /app/includes/footer.php");?>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

  
     <!--Slick Carousel-->
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <!--JQuery-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/jquery.easing.1.3.js"></script>
  <script src="assets/js/jquery.waypoints.min.js"></script>
  <script src="assets/js/jquery.stellar.min.js"></script>
  <script src="assets/js/owl.carousel.min.js"></script>
  <script src="assets/js/jquery.magnific-popup.min.js"></script>
  <script src="assets/js/aos.js"></script>
  <script src="assets/js/jquery.animateNumber.min.js"></script>
  <script src="assets/js/bootstrap-datepicker.js"></script>
  <script src="assets/js/jquery.timepicker.min.js"></script>
  <script src="assets/js/jquery.mb.YTPlayer.min.js"></script>
  <script src="assets/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAiUU4YF6KtehUuv12Iqivj18t4uY50ZPI&sensor=false"></script>
  <script src="assets/js/google-map.js"></script>
  <script src="assets/js/main.js"></script>
  <script src = "assets/js/scripts.js"></script>
  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.3/jquery.min.js"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.min.css" rel="stylesheet" />

    <script>
    $(document).ready(function(){
      $('.row-slider').slick({
        slidesToShow: 3,
        slidesToScroll: 3,
        autoplay: true,
        infinite: false,
        //vertical:true,
        autoplaySpeed: 2000,
        //nextArrow: $('.next'),
       // prevArrow: $('.prev'),
        responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            vertical:true,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            vertical:true,
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 480,
          settings: {
            vertical:true,
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
    });       
});

    </script>
  
    
    
  </body>
</html>