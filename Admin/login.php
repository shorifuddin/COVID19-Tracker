<?php
		require_once('function/function.php');
		
?>
<!DOCTYPE html>
<html lang="en">
  <title>Sing In </title>
  <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="icon" href="files/assets/images/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">
    <link rel="stylesheet" href="files/bower_components/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="files/assets/pages/waves/css/waves.min.css" media="all">
    <link rel="stylesheet" href="files/assets/icon/feather/css/feather.css">
    <link rel="stylesheet" href="files/assets/css/font-awesome-n.min.css">
    <link rel="stylesheet" href="files/bower_components/chartist/css/chartist.css" media="all">
    <link rel="stylesheet" href="files/assets/css/coustom.css">
    <link rel="stylesheet" href="files/assets/css/widget.css">
    
    <link rel="stylesheet" href="files/assets/css/style.css">
    
    <script src="files/bower_components/jquery/js/jquery.min.js"></script>
    <script src="files/assets/js/sweetalert.min.js"></script>
  </head>
  <body themebg-pattern="theme1">
    
    <section class="login-block">
      <div class="container-fluid">
        <div class="row">
        <div class="col-4"></div>
          <div class="col-4">
            <form class="md-float-material form-material" method="POST">
              <div class="text-center">
                <img src="files/assets/images/logo.png" alt="logo.png">
              </div>
              <div class="auth-box card cards">
                <div class="card-block">
                  <div class="row m-b-20">
                    <div class="col-md-12">
                      <h3 class="text-center txt-primary">Sign In</h3>
                    </div>
                  </div>
                  <div class="row m-b-20">
                    <div class="col-md-6">
                      <button class="btn btn-facebook m-b-20 btn-block">
                        <i class="icofont icofont-social-facebook"></i>facebook </button>
                    </div>
                    <div class="col-md-6">
                      <button class="btn btn-twitter m-b-20 btn-block">
                        <i class="icofont icofont-social-twitter"></i>twitter </button>
                    </div>
                  </div>
                  <p class="text-muted text-center p-b-5">Sign in with your regular account</p>

                  <?php

                    if (!empty($_POST)) {
                        $username=$_POST['username'];
                        $pass=md5($_POST['pass']);
                        $sel="SELECT * FROM user_info NATURAL JOIN user_role WHERE user_username='$username' AND user_pas='$pass'";
                        $q=mysqli_query($con,$sel);
                        $data=mysqli_fetch_assoc($q);

                        if ($data) {
                            $_SESSION['id']=$data['user_id'];
                            $_SESSION['name']=$data['user_name'];
                            $_SESSION['role']=$data['role_name'];
                            $_SESSION['username']=$data['user_username'];
                            $_SESSION['img']=$data['user_img'];
                            header('Location:index.php');
                        }else{
                            echo "Username or Password Don't Match";
                        }
                    }



?>

                  <div class="form-group form-primary">
                  <label class="float-label" aria-placeholder="Username"></label>
                    <input type="text" name="username" class="form-control" required="" placeholder="Username">
                    <span class="form-bar"></span>
                    <label class="float-label"aria-placeholder="Username"></label>
                  </div>
                  <div class="form-group form-primary">
                    <input type="password" name="pass" class="form-control" required="" placeholder="Password">
                    <span class="form-bar"></span>
                    <label class="float-label"></label>
                  </div>
                  <div class="row m-t-25 text-left">
                    <div class="col-12">
                      <div class="checkbox-fade fade-in-primary">
                        
                          <input type="checkbox" value="" name="pass">
                          <span class="cr">
                            <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                          </span>
                          <span class="text-inverse">Remember me</span>
                        
                      </div>
                      <!-- <div class="forgot-phone text-right float-right">
                        <a href="auth-reset-password.html" class="text-right f-w-600"> Forgot Password?</a>
                      </div> -->
                    </div>
                  </div>
                  <div class="row m-t-30">
                    <div class="col-md-12">
                      <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">LOGIN</button>
                    </div>
                  </div>
                  <!-- <p class="text-inverse text-left">Don't have an account? <a href="auth-sign-up-social.html">
                      <b>Register here </b>
                    </a>for free! </p> -->
                </div>
              </div>
            </form>
          </div>
          <div class="col-4"></div>
        </div>
      </div>
      </div>
    </section>
    <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
   
    <script src="files/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
    <script src="files/bower_components/popper.js/js/popper.min.js"></script>
    <script src="files/bower_components/bootstrap/js/bootstrap.min.js"></script>
    <script src="files/assets/pages/waves/js/waves.min.js"></script>
    <script src="files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>
    <script src="files/assets/pages/chart/float/jquery.flot.js"></script>
    <script src="files/assets/pages/chart/float/jquery.flot.categories.js"></script>
    <script src="files/assets/pages/chart/float/curvedLines.js"></script>
    <script src="files/assets/pages/chart/float/jquery.flot.tooltip.min.js"></script>
    <script src="files/bower_components/chartist/js/chartist.js"></script>
    <script src="files/assets/pages/widget/amchart/amcharts.js"></script>
    <script src="files/assets/pages/widget/amchart/serial.js"></script>
    <script src="files/assets/pages/widget/amchart/light.js"></script>
    <script src="files/assets/js/pcoded.min.js"></script>
    <script src="files/assets/js/vertical/vertical-layout.min.js"></script>
    <script src="files/assets/pages/dashboard/custom-dashboard.min.js"></script>
    <script src="files/assets/js/script.min.js"></script>
  </body>
  </html>