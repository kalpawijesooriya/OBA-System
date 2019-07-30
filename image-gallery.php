<!DOCTYPE html>
<html lang="en">
<head>
	<title>Image Gallery</title>


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

<div class="site-section-header">
    <h3>Image Gallery</h3>
</div>

<div class="site-section-content">  
  <?php
       		 $dir = glob('img/gallery/{*.png,*.jpg}',GLOB_BRACE);
        
            foreach($dir as $value){
             ?>
                <a class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-site-xs-12 site-grid-base-3 site-grid-bx site-album-image" href="<?php echo $value; ?>" data-lightbox="site-album-set" data-title="Image-Gallery">
                   <div style="height: 180px; width:270px; padding:0; margin:0; border:0;"> <img class="site-album-item" src="<?php echo $value; ?>"/></div>
                </a>
             <?php
                    }
                ?>

</div>


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
</html>