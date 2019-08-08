<!DOCTYPE html>
<html lang="en">
<head>
	<title>Membership</title>
  
  <?php
      session_start();

      if( isset($_SESSION['login_user']) ){
        echo "<span id ='login_user' style='visibility:hidden; position:absolute;'>".$_SESSION['login_user']."</span>";
        echo "<span id ='login_user_reg' style='visibility:hidden; position:absolute;'>".$_SESSION['regestration_number']."</span>";
        echo "<span id ='login_user_role' style='visibility:hidden; position:absolute;'>".$_SESSION['admin_role']."</span>";

      }
      else{
        echo "<span id ='login_user' style='visibility:hidden;position:absolute;'>no_data</span>";
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
<?php include('./components/header.php') ?>
</section>
</header><!-- site header+navigation end -->

<!-- site body -->

<section id="section-page" class="container-fluid site-section">
<div class="row">  

<div class="col-lg-8 col-md-8 site-section-left">
    
  <div class="site-section-header">
    <h3>GET YOUR MEMBERSHIP</h3>
  </div>    

  <div class="site-section-content">

    <div class="site-post-text"> 
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>

      <div class="col-lg -6 col-md-6">
        <blockquote class="site-blockquote">Required Documents</blockquote>
        <hr>
        <blockquote class="site-blockquote">Copy of the National Identity Card (NIC)</blockquote>
        <blockquote class="site-blockquote">Copy of the Character Certificate/Leaving Certificate</blockquote>
        <blockquote class="site-blockquote">Two passport size photographs (Colour)</blockquote>
      </div>
      <div class="col-lg -6 col-md-6">      
        <div class="panel panel-danger site-panel">
          <div class="panel-heading site-panel-heading">
            <h3 class="text-center">Year MEMBERSHIP</h3>
          </div>
          <div class="panel-body text-center site-panel-body">
            <p class="lead" style="font-size:30px"><strong>LKR 2,500.00</strong></p>
          </div>
          <div class="panel-footer site-panel-footer"> <a class="btn btn-lg btn-block site-panel-btn" href="membershipform.php">Online Membership Form </a> 
            </div>
            <div class="panel-footer site-panel-footer"> <a class="btn btn-lg btn-block site-panel-btn" href="PaymentGateway.php">Pay Your Membership Fee Here </a> 
            </div>
        </div>
       
      </div> 
    </div>

  </div>

</div>

<div class="col-lg-4 col-md-4 site-section-right">
    <div class="site-section-subheader">
        <h5>Join the Community</h5>             
    </div>
    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FPrince-OBA-1304854939660799%2F&tabs=cover%20photo&width=400&height=400&small_header=false&adapt_container_width=false&hide_cover=false&show_facepile=true&appId=1107689822724816" width="400" height="400" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
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
<script type="text/javascript" src="js/login.js"></script>

</body>
</html>