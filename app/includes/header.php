<head>
    <title>Victory Fellowship Nairobi</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800" rel="stylesheet">
    
    <!--Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css" integrity="sha384-REHJTs1r2ErKBuJB0fCK99gCYsVjwxHrSU0N7I1zl9vZbggVJXRMsv/sLlOAGb4M" crossorigin="anonymous">
     
    <!--style css -->
    <link rel="stylesheet" href="assets/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">

    <link rel="stylesheet" href="assets/css/aos.css">

    <link rel="stylesheet" href="assets/css/ionicons.min.css">

    <link rel="stylesheet" href="assets/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="assets/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/icomoon.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/Comment&Reply/commentreply.css">

 <style>
.navdrop {
  display:block;
  position: absolute;
  min-width: 120px;
  z-index:-1;
  box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
}
.navdrop li a {
  padding: 12px 16px;
  display: block;
  color: #000000 ;
  text-align: left;
}
.navdrop li a:hover {
  background-color: #fff;
}
 </style>

  </head>

  
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="<?php echo BASE_URL .'/index.php'?>"></i> <span>VFi</span> <span>Nairobi</span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="<?php echo BASE_URL .'/index.php'?>" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
	          <li class="nav-item"><a href="event.php" class="nav-link">Events</a></li>
	          <li class="nav-item"><a href="Gallery.php" class="nav-link">Gallery</a></li>
	          <li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>
            <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>

            <?php if (isset($_SESSION['id'])): ?>
            <li class="nav-item"><a href="#" class="nav-link">
              <i class="fa fa-user"></i> 
              <?php echo $_SESSION['name']; ?>
             <i class="fa fa-chevron-down" style="font-size: 0.8em;"></i></a>
                <ul class = "navdrop" >
                <?php if($_SESSION['admin']): ?>
                 <li class="nav-item"><a href="<?php echo BASE_URL . '/admin/dashboard.php' ?>" >Dashboard</a></li>
                <?php endif; ?>
                 <li class="nav-item"><a href="<?php echo BASE_URL . '/logout.php' ?>"  >Logout</a></li>
             </ul>
            </li>
            <?php else: ?>
          <li class="nav-item"><a href="<?php echo BASE_URL . '/register.php' ?>" class="nav-link">Sign up</a></li>
          <li class="nav-item"><a href="<?php echo BASE_URL . '/login.php' ?>" class="nav-link">Login</a></li>
            <?php endif; ?>
	        </ul>
	      </div>
	    </div>
	  </nav>

