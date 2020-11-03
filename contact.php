<?php include("path.php"); 
include(ROOT_PATH . '/app/database/db.php');
?>
<!DOCTYPE html>
<html lang="en">
  

  <!--include header -->
  <?php include(ROOT_PATH ." /app/includes/header.php"); ?>

  <body>
    
	  
    <!-- END nav -->

    <section id="home" class="video-hero js-fullheight" style="height: 700px; background-image: url(assets/images/bg_1.jpg);  background-size:cover; background-position: center center;background-attachment:fixed;" data-section="home">
			<div class="overlay js-fullheight"></div>
			<div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-10 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs mb-2" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Home</a></span> <span>Contact</span></p>
            <h1 class="mb-3 mt-0 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Contact</h1>
          </div>
        </div>
      </div>
		</section>

		<section class="ftco-section contact-section ftco-degree-bg">
      <div class="container bg-light">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h4">Contact Information</h2>
          </div>
          <div class="w-100"></div>
          <div class="col-md-3">
            <p><span>Address:</span> Tumaini house opposite kenya commercial bank</p>
          </div>
          <div class="col-md-3">
            <p><span>Phone:</span> <a href="tel://1234567920">0748882969</a></p>
          </div>
          <div class="col-md-3">
            <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@vfinairobi.com</a></p>
          </div>
          <div class="col-md-3">
            <p><span>Website</span> <a href="#">yoursite.com</a></p>
          </div>
        </div>
        <div class="row block-9">
          <div class="col-md-6 pr-md-5">
             <form action="contact-form-handler.php" method= "post" enctype="multipart/form-data"
            onsubmit="return validateContactForm()">
              <div class="form-group">
                <input type="text" class="form-control" name="userName" id="name" placeholder="Your Name"><span
                    id="userName-info" class="info"></span>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="userEmail"  id="userEmail" placeholder="Your Email"><span
                    id="userEmail-info" class="info"></span>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"><span
                    id="subject-info" class="info"></span>
                   
              </div>
              <div class="form-group">
                <textarea name="content" id="content" cols="30" rows="7" class="form-control" placeholder="Message"></textarea><span
                    id="userMessage-info" class="info"></span>
              </div>
              <div class="form-group">
                <input type="submit" name="submit" value="Send Message" class="btn btn-primary py-3 px-5">

                <div id="statusMessage"> 
                        <?php
                        if (! empty($message)) {
                            ?>
                            <p class='<?php echo $type; ?>Message'><?php echo $message; ?></p>
                        <?php
                        }
                        ?>
                    </div>
            </div>
            </form>
          
          </div>

          <div class="col-md-6" id="map"></div>
        </div>
      </div>
    </section>

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="logo"><i class="flaticon-cross"><a href="index.html"></i><span>VFI</span><span>Nairobi</span></a></h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Quick Links</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Church kids</a></li>
                <li><a href="#" class="py-2 d-block">Community</a></li>
                <li><a href="#" class="py-2 d-block">Ministries</a></li>
                <li><a href="#" class="py-2 d-block">Message</a></li>
                <li><a href="#" class="py-2 d-block">Sermons</a></li>
                <li><a href="#" class="py-2 d-block">Events</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Contact Information</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">198 West 21th Street, Suite 721 New York NY 10016</a></li>
                <li><a href="#" class="py-2 d-block">+ 1235 2355 98</a></li>
                <li><a href="#" class="py-2 d-block">info@yoursite.com</a></li>
                <li><a href="#" class="py-2 d-block">email@email.com</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
	                <li><span class="icon icon-clock-o"></span><span class="text">Saturday &mdash; Sunday 8:00am - 5:00pm</span></li>
	              </ul>
	            </div>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p>
  Copyright &copy; 2020 All rights reserved. 
  </p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="https://code.jquery.com/jquery-2.1.1.min.js"
        type="text/javascript"></script>
    <script type="text/javascript">
        function validateContactForm() {
            var valid = true;

            $(".info").html("");
            $(".form-control").css('border', '#e0dfdf 1px solid');
            var userName = $("#userName").val();
            var userEmail = $("#userEmail").val();
            var subject = $("#subject").val();
            var content = $("#content").val();
            
            if (userName == "") {
                $("#userName-info").html("Required.");
                $("#userName").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (userEmail == "") {
                $("#userEmail-info").html("Required.");
                $("#userEmail").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (!userEmail.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/))
            {
                $("#userEmail-info").html("Invalid Email Address.");
                $("#userEmail").css('border', '#e66262 1px solid');
                valid = false;
            }

            if (subject == "") {
                $("#subject-info").html("Required.");
                $("#subject").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (content == "") {
                $("#userMessage-info").html("Required.");
                $("#content").css('border', '#e66262 1px solid');
                valid = false;
            }
            return valid;
        }
</script>

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
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAiUU4YF6KtehUuv12Iqivj18t4uY50ZPI&sensor=true"></script>
  <script src="assets/js/google-map.js"></script>
  <script src="assets/js/main.js"></script>
    
  </body>
</html>