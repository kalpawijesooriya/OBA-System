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
<div class="row">  

<div class="col-lg-12 col-md-12 ">

  <div class="site-section-header">
    <h3>LOGIN TO MEMBERS AREA</h3>
  </div> 

  <div class="site-section-content">  
    <div class="site-post-text">
      <div class="row site-portfolio-row">
        <form class="modal-content animate" action="./php/auth.php" method="POST">

            <div class="container" style="padding:20px;">
              <label for="regestration_number"><b>Username</b></label>
              <input id="regestration_number" type="text" placeholder="Enter Registration Number" name="regestration_number" required>
        
              <label for="pw" style="padding-left: 20px;"><b>Password</b></label>
              <input id="pw" type="password" placeholder="Enter Password" name="pw" required>
        
              <button type="submit" class="btn" style="margin-left: 30px;">Login</button>
              <label style="padding-left:20px;">
                <input type="checkbox" checked="checked" name="remember" > Remember me
              </label>
            </div>
          
            <div class="container" style="padding: 20px;">
            <span id="error_msg" style="margin-right:50px;color:rgb(230, 95, 95);visibility:hidden;position:absolute;"></span><span class="psw">Forgot <a href="#">password?</a></span>
            </div>

          </form>
      </div>
    </div>
  </div>


</div>

<!-- <div class="col-lg-4 col-md-4 site-section-right">
    <div class="site-section-subheader">
        <h5>Join the Community</h5>             
    </div>
    <div class="fb-page" data-href="https://www.facebook.com/OBADSSC/" data-width="400" data-height="400" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/OBADSSC/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/OBADSSC/">D. S. Senanayke College OBA</a></blockquote></div>   
</div> -->
</div>
</section> 

<!-- site body end -->


<!-- site footer -->
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