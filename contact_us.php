<!DOCTYPE html>
<html lang="en" class="fa-events-icons-ready"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<head>
  <title>Contact Us</title>
  <?php
      session_start();

      if( isset($_SESSION['login_user']) ){
        echo "<span id ='login_user' style='visibility:hidden; position:absolute;'>".$_SESSION['login_user']."</span>";
        echo "<span id ='login_user_reg' style='visibility:hidden; position:absolute;'>".$_SESSION['regestration_number']."</span>";
        echo "<span id ='login_user_role' style='visibility:hidden; position:absolute;'>".$_SESSION['admin_role']."</span>";

      }
      else{
        echo "<span id ='login_user' style='visibility:hidden; position:absolute;'>no_data</span>";
      }
  ?>
  
          
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
  </head>
	<body>

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
<div id="site-content" style="display: block;">


<!-- site header+navigation -->
<header>     
<section class="container">
<?php include './components/header.php' ?>
</section>
</header><!-- site header+navigation end -->

<!-- site body -->

<section id="section-page" class="container-fluid site-section">
<div class="row">  

<div class="col-lg-8 col-md-8 site-section-left">
    
  <div class="site-section-header">
    <h3>CONTACT US</h3>
  </div>

  <div class="site-section-content">  
  <div class="site-post-text">
    <form action="php/sendMessage.php" method="post" class="">
      <div class="form-group">
          <label for="name">Your Name</label>
          <input type="text" class="form-control site-form-elem" id="name" required="" name="name">
      </div>
      <div class="form-group">
          <label for="email">Your Email</label>
          <input type="email" class="form-control site-form-elem" id="email" required="" name="email">
      </div>
      <div class="form-group">
          <label for="subject">Subject</label>
          <input type="text" class="form-control site-form-elem" id="subject" required=""  name="subject" >
      </div>
      <div class="form-group">
      <label for="subject">Your Message</label>
      <textarea name="your-message" cols="40" rows="10" class="form-control site-form-textarea site-form-elem" aria-invalid="false" required=""></textarea>
      </div>
      <div class="form-group">
      <input type="submit" value="SEND" class="form-control site-form-submit-btn">
      </div>
    </form>
  </div>  
  </div>


 


</div>
</section>
<!-- site footer -->
<footer id="section-footer" class="container-fluid site-section">
<?php include('./components/footer.php') ?>
</footer><!-- site footer end -->
</div>
<!-- site content end -->


<script type="text/javascript" src="template/js/jquery.custom.js"></script>   
<script type="text/javascript" src="template/js/jquery.site.slider.js"></script>   
<script>

var usr = document.getElementById("login_user").innerHTML;
var user_reg =  document.getElementById("login_user_reg").innerHTML;
var user_admin_role =  document.getElementById("login_user_role").innerHTML;

  window.onload = function(e){
      if(usr != "no_data"){

        var btn = document.getElementById("login_btn");
        var login_as =  document.getElementById("login_as");  

        btn.innerHTML="LOGOUT";
        login_as.innerHTML=usr;
      }
  };

  function login(){

    if(usr == "no_data"){ //logout by clearing session
      console.log("usr == 'no_data'");
      location.href='./login.php';
    }
    else{
      console.log("usr != 'no_data'");
      location.href='./php/auth.php';
    }
     
  }
</script>
</body>
