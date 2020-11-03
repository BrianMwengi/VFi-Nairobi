<?php include("path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/users.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="assets/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="assets/css/form.css">
</head>
<body>

    <div class="main">

        <section class="signup">
            <!--<img src="assets/images/signup-bg.jpg" alt="">-->
            <div class="container">
                <div class="signup-content">
                    <form action="register.php" id="signup-form" class="signup-form" method="post">
                        <h2 class="form-title">Create account</h2>
                          
                        <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>
     
                        <div class="form-group">
                            <input type="text" value="<?php echo $username; ?>" class="form-input" name="username" id="name"  placeholder="Your Name"/>
                        </div>
                        <div class="form-group">
                            <input type="email" value="<?php echo $email; ?>" class="form-input" name="email" id="email"  placeholder="Your Email"/>
                        </div>
                        <div class="form-group">
                            <input type="password" value="<?php echo $password; ?>" class="form-input" name="password" id="password" placeholder="Password"/>
                            <!--<span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>-->
                        </div>
                        <div class="form-group">
                            <input type="password" value="<?php echo $re_password; ?>" class="form-input" name="re_password" id="re_password"  placeholder="Confirm password"/>
                        </div>

                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Sign up"/>
                        </div>
                    </form>
                    <p class="loginhere">
                        Have already an account ? <a href="<?php echo BASE_URL .'/Login.php'?>">Login here</a>
                    </p>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>