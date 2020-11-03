<?php include("path.php"); 
include(ROOT_PATH . '/app/database/db.php');
$events = getpublishedEvents();

?>

<!DOCTYPE html>
<html lang="en">

  <!--include header -->
  <?php include(ROOT_PATH ." /app/includes/header.php"); ?>

  <body>

  <?php

     if (isset($_GET['pageno'])) {
	$pageno = $_GET['pageno'];
     } else {
     $pageno = 1;
  }
     $no_of_records_per_page = 5;
     $offset = ($pageno-1) * $no_of_records_per_page;

  //$conn=mysqli_connect("","vfi nairobi"," "," ");
  // Check connectio
 // if (mysqli_connect_errno()){
	 // echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  //die();
 // }

  $total_pages_sql = "SELECT COUNT(*) FROM events";
  $result = mysqli_query($conn,$total_pages_sql);
  $number_of_results = mysqli_num_rows($result);
  $total_rows = mysqli_fetch_array($result)[0];
  $total_pages = ceil($total_rows / $no_of_records_per_page);

  $sql = "SELECT * FROM events LIMIT $offset, $no_of_records_per_page";
  $res_data  = mysqli_query($conn,$sql); 
  while($row = mysqli_fetch_array($result)){
    //here goes the data
    $id = $row['id'];
    $title = $row['title']; 
    $image = $row['image'];
    $body = $row['body'];

     echo "<tr><td>";
    echo  $id; 
     echo "</td>"; 
     echo "<td>";
    echo $title;
     echo "<td>";
    echo $image;
    echo $body;
     echo "</td></tr>"; 
}


// mysqli_close($conn);
?>	 
 
    <!-- END nav -->

    <section id="home" class="video-hero js-fullheight" style="height: 700px; background-image: url(assets/images/bg_1.jpg);  background-size:cover; background-position: center center;background-attachment:fixed;" data-section="home">
			<div class="overlay js-fullheight"></div>
			<div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-10 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs mb-2" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Home</a></span> <span>Events</span></p>
            <h1 class="mb-3 mt-0 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Events</h1>
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

		
		<section class="ftco-section ftco-section-2">
			<div class="container">
				<div class="row"> 
				<?php foreach ($events as $event): ?>
					<div class="col-md-6">
						<div class="event-entry d-flex ftco-animate">
    					<div class="meta mr-4">
    						<p>
    							<span>07</span>
    							<span>VFi 2020</span>
    						</p>
    					</div>
    					<div class="text">
    						<h3 class="mb-2"><a href="event-single.php?id=<?php echo $event['id']; ?> "><?php echo $event['title']; ?></a></h3>
    						<a href= "event-single.php?id=<?php echo $event['id']; ?> "><p class="mb-4"><span><?php echo date('F j, Y', strtotime($event['created_at'])); ?></span></p>
    						<a href="event-single.php?id=<?php echo $event['id']; ?>" class="img mb-4" style="background-image: url('<?php echo BASE_URL . '/assets/images/' . $event['image']; ?>"></a>
    						<p><?php echo html_entity_decode(substr($event['body'], 0, 65) . '....'); ?>.</p>
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
                <!--<li><a href="#">&lt;</a></li>-->
				<li><a href="?pageno=1">1</a></li>
				<li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
               <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Prev</a>
               </li>
              <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
              <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Next</a>
             </li>
             <li><a href="?pageno=<?php echo $total_pages; ?>">Last</a></li>
            </ul>
               <!-- <li><a href="#">&gt;</a></li>-->
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