<?php include("path.php");
include(ROOT_PATH . '/app/database/db.php');
$posts = getPublishedPosts();
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
            <p class="breadcrumbs mb-2" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Home</a></span> <span>Blog</span></p>
            <h1 class="mb-3 mt-0 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Blog</h1>
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

		<section class="ftco-section">
      <div class="container">
        <div class="row">
        <?php foreach ($posts as $post): ?>
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry">
            <a href= "blog-single.php?id=<?php echo $post['id']; ?>"class="block-20" style="background-image: url('<?php echo BASE_URL . '/assets/images/' . $post['image']; ?> ">
              </a>
              <div class="text p-4 d-block">
                <div class="meta mb-3">
                  <div><a href="#"><?php echo date('F j, Y', strtotime($post['created_at'])); ?></a></div>
                  <div><a href= "blog-single.php?id=<?php echo $post['id']; ?>"><?php echo $post['username']; ?></a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="blog-single.php"><?php echo $post['title']; ?></a></h3>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
        </div>



        <div class="row mt-5">
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
    </section>

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
    
  </body>
</html>