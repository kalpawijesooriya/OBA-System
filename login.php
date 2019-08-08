<!DOCTYPE html>
<html lang="en">
<head>
	<title>LOGIN</title>

  <meta charset="UTF-8">
  <meta content="text/html; charset=UTF-8" http-equiv="content-type">        
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
	<link rel="stylesheet" type="text/css" href="template/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="template/css/style.css">
	<link rel="stylesheet" type="text/css" href="template/css/lightbox.css">
  <link rel="stylesheet" type="text/css" href="template/css/animate.css">  
  <link rel="stylesheet" type="text/css" href="template/css/util.css"> 
  <link rel="stylesheet" type="text/css" href="template/css/main.css"> 

	<script type="text/javascript" src="template/js/jquery-1.11.2.js"></script>
  <script type="text/javascript" src="template/js/bootstrap.min.js"></script> 
  <script type="text/javascript" src="template/js/lightbox.js"></script> 
  <script type="text/javascript" src="https://use.fontawesome.com/20bf8ce7c9.js"></script>

  <?php
      session_start();

      if( isset($_SESSION['login_error']) ){
        echo "<span id ='get_error_msg' style='visibility:hidden; position:absolute;'>".$_SESSION['login_error']."</span>";
      }
      else{
        echo "<span id ='get_error_msg' style='visibility:hidden; position:absolute;'>success</span>";
      }

  ?>

</head>
<body>

<!-- site fb addon plugin -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script><!-- site fb addon plugin end -->

<!-- site preloader -->

<div id="preloader" class="preloader">
  <div class="lines">
  <div class="line line-1"></div>
  <div class="line line-2"></div>
  <div class="line line-3"></div></div>  
  <div class="loading-text">LOADING</div>
</div>
<!-- site preloader end -->


<!-- site content -->
<div id="site-content">

<!-- site header+navigation -->
<header>     
<section class="container">
<?php include './components/header.php' ?>
</section>
</header><!-- site header+navigation end -->

<!-- site body -->

<section id="section-page" class="container-fluid site-section">
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
				<form class="login100-form validate-form flex-sb flex-w" action="./php/auth.php" method="POST">
					<span class="login100-form-title p-b-32">
						Account Login
					</span>

					<span class="txt1 p-b-11">
						Username
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Username is required">
           
            <input class="input100" id="regestration_number" type="text" placeholder="Enter Registration Number" name="regestration_number" required> 
						<span class="focus-input100"></span>
					</div>
					
					<span class="txt1 p-b-11">
						Password
					</span>
					<div class="wrap-input100 validate-input m-b-12" data-validate = "Password is required">
						<span class="btn-show-pass">
							<i class="fa fa-eye"></i>
            </span>
            <input id="pw" type="password"  class="input100" placeholder="Enter Password" name="pw" required>
					
						<span class="focus-input100"></span>
					</div>
					
					<div class="flex-sb-m w-full p-b-48">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>

						<div>
							<a href="#" class="txt3">
								Forgot Password?
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn">
					
            <button type="submit"  class="login100-form-btn" style="margin-left: 30px;">Login</button>
					</div>

        </form>
        <span id="error_msg" style="margin-right:50px;color:rgb(230, 95, 95);visibility:hidden;position:absolute;"></span>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>




</section> 
	


  <script src="template/js/main.js"></script>

  <footer id="section-footer" class="container-fluid site-section">
<?php include('./components/footer.php') ?>
</footer><!-- site footer end -->

</div>
<!-- site content end -->


<script type="text/javascript" src="template/js/jquery.custom.js"></script>   
<script type="text/javascript" src="template/js/jquery.site.slider.js"></script>   
<script>
    window.onload = function(e){

      if(document.getElementById('get_error_msg').innerHTML != "success")
      {
        document.getElementById('error_msg').innerHTML = document.getElementById('get_error_msg').innerHTML;
        document.getElementById('error_msg').style.position = 'relative';
        document.getElementById('error_msg').style.visibility = 'visible';
      }

    };
 </script>


</body>
</html>