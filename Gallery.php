<?php include("path.php"); 
include(ROOT_PATH . '/app/database/db.php');
$images = getPublishedImages();
?>
<!DOCTYPE html>
<html lang="en">


  <!--include header -->
  <?php include(ROOT_PATH ." /app/includes/header.php"); ?>

 
  <link href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" rel="stylesheet">
 <style>
 #gallery {margin-top:20px;}
 .img-fluid {
   margin-top:0px;
   margin-bottom:30px;
 }
</style>
    
  <body>
  
    <!-- END nav -->

    <section id="home" class="video-hero js-fullheight" style="height: 700px; background-image: url(assets/images/bg_1.jpg);  background-size:cover; background-position: center center;background-attachment:fixed;" data-section="home">
			<div class="overlay js-fullheight"></div>
			<div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-10 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs mb-2" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Home</a></span> <span>Gallery</span></p>
            <h1 class="mb-3 mt-0 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Gallery</h1>
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
										<p><a href = "event.php" class="btn btn-primary p-3">Events Details</a></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

   
 <section id = "gallery">
      <div class="row justify-content-center">
      <div class="col-md-8">
      <div class="row ">
      <?php foreach ($images as $image): ?>
            <a href= "<?php echo BASE_URL . '/assets/images/' . $image['image']; ?>" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                <img src= "<?php echo BASE_URL . '/assets/images/' . $image['image']; ?>" class="img-fluid">
            </a>
      <?php endforeach; ?>
    </div>
</div>
</div>
</section>


        <!--<div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>-->

   <!-- To include footer here -->

   <?php include(ROOT_PATH ." /app/includes/footer.php");?>
    
  
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

 
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
    
<script src = "https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"></script>
  <script>
$(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox();
            });
</script>

  </body>
</html>