<!DOCTYPE html>
<html lang="en">

<head>
  <title>Register Existot</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
  <link rel="icon" type="image/png" href="<?php echo base_url(); ?>static/images/icons/favicon.ico"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/vendor/animate/animate.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/vendor/select2/select2.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/css/util.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/css/main.css">
<!--===============================================================================================-->
</head>
<body>

  <div class="limiter">
    <div class="container-login100 cntre_prt">
      <div class="top_head_wel">
      <h1 class="main-text"> Welcome To Existot</h1>
<!--        <p class="main-text-con">Don’t have an account?<br><b>SIGN UP : </b><button class="minimal inner_sel"><a href="/course/accounts/signup/teacher/">Instructor</a></button> OR <button class="minimal inner_sel"><a href="/course/accounts/signup/student/">Student</a></button>-->
        <p class="main-text-con">Don’t have an account?<br><b>SIGN UP : </b><button class="minimal inner_sel"><a href="https://existot.com/course/accounts/signup/student/">User</a></button>




        <!-- Trigger/Open The Modal -->
<!--        <a href="#"><button id="myBtn"  style="color:red;">Message error click here</button></a>-->

        <!-- The Modal -->
        <div id="myModal" class="modalmain">

          <!-- Modal content -->
          <div class="modal-contentmain">
            <span class="close_new">&times;</span>
               
          </div>

        </div>

        <script>
        // Get the modal
        var modalmain = document.getElementById("myModal");

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close_new")[0];

        // When the user clicks the button, open the modal
        btn.onclick = function() {
          modalmain.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
          modalmain.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
          if (event.target == modalmain) {
            modalmain.style.display = "none";
          }
        }
        </script>




      </p>
</div>
      <div class="wrap-login100  p-t-72 p-b-50">
        
        <form class="login100-form validate-form" method="post" action="<?php echo base_url('welcome/register'); ?>">
          <span class="login100-form-title p-b-20">
            Sign Up
            <?php echo validation_errors(); ?>
            <p style="color: green;"><?php echo $this->session->flashdata('success'); ?></p>
            <p style="color: red;"><?php echo $this->session->flashdata('error'); ?></p>

          </span>

          <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
            <span class="label-input100">Name</span>
            <input class="input100" type="text" name="name" placeholder="Your Full Name">
            <span class="focus-input100"></span>
          </div>

          <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
            <span class="label-input100">email</span>
            <input class="input100" type="text" name="email" placeholder="Your Email...">
            <span class="focus-input100"></span>
          </div>

          <div class="wrap-input100 validate-input m-b-10" data-validate = "Password is required">
            <span class="label-input100">Password</span>
            <input class="input100" type="password" name="password" placeholder="*************">
            <span class="focus-input100"></span>
          </div>

          <div class="flex-m w-full p-b-33">
            <div class="contact100-form-checkbox">
              <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
              <label class="label-checkbox100" for="ckb1">
                <span class="txt1">
                  REMEMBER ME
                </span>
              </label>
            </div>

            <div class="fort_apss">
              <a href="https://existot.com/password_reset/">Forgot Password?</a>
          </div>


          </div>

          <div class="container-login100-form-btn">
            <div class="wrap-login100-form-btn">
              <div class="login100-form-bgbtn"></div>
              <button class="login100-form-btn">
                Sign In
              </button>
            </div>

<!--<div class="slet_inst">-->
<!--<select class="minimal inner_sel">-->
<!--    <option value="instructor" >Register as Instructor</option>-->
<!--    <option value="student">Register as Student</option>-->
<!--&lt;!&ndash;  &ndash;&gt;-->
<!--</select>-->
<!--</div>-->

<div class="or_main">
<div class="or_cent">OR</div>
</div>

<div class="social_pnl">
  <img src="<?php echo base_url(); ?>static/images/google.jpg"  />
  <img src="<?php echo base_url(); ?>static/images/fb.jpg"  />
  <img src="<?php echo base_url(); ?>static/images/twitter.jpg"  />
  <img src="<?php echo base_url(); ?>static/images/linkedin.jpg"  />
</div>

<div class="main_terms">
By signing in, you accept our <a href="#">Terms of use</a>
</div>


        <!--   <a href="/course/accounts/signup/teacher/" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
              Register as Instructor
              <i class="fa fa-long-arrow-right m-l-5"></i>
            </a>
            <a href="/course/accounts/signup/student/" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
              Register as Student
              <i class="fa fa-long-arrow-right m-l-5"></i>
            </a> -->


          </div>
        </form>
      </div>


      <div class="login100-more">
     <img src="<?php echo base_url(); ?>static/images/login_mg.jpg"  />
      </div>
    </div>
  </div>



<!--===============================================================================================-->
  <script src="<?php echo base_url(); ?>static/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="<?php echo base_url(); ?>static/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
  <script src="<?php echo base_url(); ?>static/vendor/bootstrap/js/popper.js"></script>
  <script src="<?php echo base_url(); ?>static/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="<?php echo base_url(); ?>static/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="<?php echo base_url(); ?>static/vendor/daterangepicker/moment.min.js"></script>
  <script src="<?php echo base_url(); ?>static/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
  <script src="<?php echo base_url(); ?>static/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
  <script src="<?php echo base_url(); ?>static/js/main.js"></script>

</body>

</html>
