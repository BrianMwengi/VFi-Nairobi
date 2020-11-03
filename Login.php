<?php include("path.php"); ?>

<?php include(ROOT_PATH . "/app/controllers/users.php"); ?>
<!DOCTYPE html>
<html lang="en">

<!--Login form header-->

<head>
	<title>Victory Fellowship Nairobi</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" type="assets/image/png" href="assets/images/icons/favicon.ico"/>

	<link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">

	<link rel="stylesheet" type="text/css" href="assets/vendor/animate/animate.css">

	<link rel="stylesheet" type="text/css" href="assets/vendor/css-hamburgers/hamburgers.min.css">

	<link rel="stylesheet" type="text/css" href="assets/vendor/animsition/css/animsition.min.css">

	<link rel="stylesheet" type="text/css" href="assets/vendor/select2/select2.min.css">

	<link rel="stylesheet" type="text/css" href="assets/vendor/daterangepicker/daterangepicker.css">

	<link rel="stylesheet" type="text/css" href="assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">

</head>

<body>
			
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
			<form action = "Login.php" method ="post">	
					<span class="login100-form-title p-b-33">
						Account Login

						<?php include(ROOT_PATH . "/app/helpers/formerrors.php"); ?>
     
					</span>
 
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="username" placeholder="Your name">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

					<div class="wrap-input100 rs1 validate-input">
						<input class="input100" type="password" name="password"  placeholder="Your Password">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

					<div class="container-login100-form-btn m-t-20">
						<button type ="submit" name="login100-form-btn" class="login100-form-btn">
							Sign in
						</button>
					</div>

					<div class="text-center p-t-45 p-b-4">
						<span class="txt1">
							Forgot
						</span>

						<a href="#" class="txt2 hov1">
							Username / Password?
						</a>
					</div>

					<div class="text-center">
						<span class="txt1">
							Create an account?
						</span>

						<a href="<?php echo BASE_URL .'/Register.php'?>" class="txt2 hov1">
							Sign up
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	

	<script src="assets/vendor/jquery/jquery-3.2.1.min.js"></script>

	<script src="assets/vendor/animsition/js/animsition.min.js"></script>

	<script src="assets/vendor/bootstrap/js/popper.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>

	<script src="assets/vendor/select2/select2.min.js"></script>

	<script src="assets/vendor/daterangepicker/moment.min.js"></script>
	<script src="assets/vendor/daterangepicker/daterangepicker.js"></script>

	<script src="assets/vendor/countdowntime/countdowntime.js"></script>

	<script src="assets/js/main.js"></script>

</body>
</html>