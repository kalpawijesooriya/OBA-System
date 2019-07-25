<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  
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

    <script src="js/jssor.slider-27.5.0.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        jssor_1_slider_init = function() {

            var jssor_1_SlideshowTransitions = [
              {$Duration:800,$Opacity:2}
            ];

            var jssor_1_options = {
              $AutoPlay: 1,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 980;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
    </script>
    <style>
        /*jssor slider loading skin spin css*/
        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        /*jssor slider bullet skin 051 css*/
        .jssorb051 .i {position:absolute;cursor:pointer;}
        .jssorb051 .i .b {fill:#fff;fill-opacity:0.5;}
        .jssorb051 .i:hover .b {fill-opacity:.7;}
        .jssorb051 .iav .b {fill-opacity: 1;}
        .jssorb051 .i.idn {opacity:.3;}

        /*jssor slider arrow skin 051 css*/
        .jssora051 {display:block;position:absolute;cursor:pointer;}
        .jssora051 .a {fill:none;stroke:#fff;stroke-width:360;stroke-miterlimit:10;}
        .jssora051:hover {opacity:.8;}
        .jssora051.jssora051dn {opacity:.5;}
        .jssora051.jssora051ds {opacity:.3;pointer-events:none;}
    </style>
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

<div id="preloader" class="loader">
    <div class="box box1"></div>
    <div class="box box2"></div>
    <div class="box box3"></div>
    <div class="box box4"></div>
    <div class="box box5"></div>
    <div class="box box6"></div>
    <div class="box box7"></div>
    <div class="box box8"></div>
</div>
<!-- site content -->
<div id="site-content">

<!-- site header+navigation -->
<header>     
<section class="container">
<?php include './components/header.php' ?>


</section>

</header><!-- site header+navigation end -->   

<!-- site body -->

<!-- site main slider -->
<div class="slider">
    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:500px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:500px;overflow:hidden;">
            <div>
                <img data-u="image" src="img/gallery/001.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/gallery/002.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/gallery/003.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/gallery/004.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/gallery/005.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/gallery/006.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/gallery/007.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/gallery/008.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/gallery/009.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/gallery/010.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/gallery/011.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/gallery/012.jpg" />
            </div>
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb051" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
            <div data-u="prototype" class="i" style="width:16px;height:16px;">
                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                </svg>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
            </svg>
        </div>
    </div>
</div>
<!-- site main slider end -->

<!-- site main banner -->
<section id="section-banner" class="container-fluid">  
<div class="site-banner text-center">
  <img src="template/images/site-assets/banners/banner.png">
</div>
</section>
<!-- site main banner end -->

<!-- site foucs section -->
<section id="section-focus" class="container-fluid site-section">
<div class="row"> 

<div class="col-lg-4 col-md-4 site-focus-left">

  <div class="site-section-header">
    <h3>Events</h3>
    <a href="events">View all</a>
  </div> 

  <div>
  <ul class="timeline">
  	    <li>            
    <div class="timeline-badge">
            <div class="timeline-badge-up"><span>17<sup>th</sup></span></div>
      <div class="timeline-badge-down"><span>Feb</span></div>
    </div>
    
    <div id="tm-event-1" class="timeline-panel animated">
      <!-- <a href="events/Psycho-Parade-2018"> -->
      <div class="timeline-heading">
      <h5 class="timeline-title">Lorem ipsum is a sample text</h5>
      </div>
      <div class="timeline-body">                
      <p class="text-left">Contrary to popular belief, Lorem Ipsum is not simply random text. s</p>
      </div>
      </a>
    </div>
    </li>
        <li>            
    <div class="timeline-badge">
            <div class="timeline-badge-up"><span>18<sup>th</sup></span></div>
      <div class="timeline-badge-down"><span>Jul</span></div>
    </div>
    
    <div id="tm-event-1" class="timeline-panel animated">
      <!-- <a href="events/The-36th-Annual-General-Meeting-of-D.-S.-Senanayake-College-Old-Boys-Association"> -->
      <div class="timeline-heading">
      </div>
      </a>
    </div>
    </li>
        <li>            
    <div class="timeline-badge">
            <div class="timeline-badge-up"><span>14<sup>th</sup></span></div>
      <div class="timeline-badge-down"><span>May</span></div>
    </div>
    
    <div id="tm-event-1" class="timeline-panel animated">
      <!-- <a href="events/Psycho-Parade-2017"> -->
      <div class="timeline-heading">
      <h5 class="timeline-title">Lorem ipsum is a sample text</h5>
      </div>
      <div class="timeline-body">                
      <p class="text-left">Contrary to popular belief, Lorem Ipsum is not simply random text. </p>
      </div>
      </a>
    </div>
    </li>
        <li>            
    <div class="timeline-badge">
            <div class="timeline-badge-up"><span>10<sup>th</sup></span></div>
      <div class="timeline-badge-down"><span>Feb</span></div>
    </div>
    
    <div id="tm-event-1" class="timeline-panel animated">
      <!-- <a href="http://dsscoba.org/events/Golden-Jubilee-Celebration-&ndash;-DS-Turned-50"> -->
      <div class="timeline-heading">
      <h5 class="timeline-title">Lorem ipsum is a sample text </h5>
      </div>
      <div class="timeline-body">                
      <p class="text-left">Contrary to popular belief, Lorem Ipsum is not simply random text. </p>
      </div>
      </a>
    </div>
    </li>
        <li>            
    <div class="timeline-badge">
            <div class="timeline-badge-up"><span>05<sup>th</sup></span></div>
      <div class="timeline-badge-down"><span>Jan</span></div>
    </div>
    
    <div id="tm-event-1" class="timeline-panel animated">
      <!-- <a href="events/Theewraa-Live"> -->
      <div class="timeline-heading">
      <h5 class="timeline-title">Lorem ipsum is a sample text</h5>
      </div>
      <div class="timeline-body">                
      <p class="text-left">Contrary to popular belief, Lorem Ipsum is not simply random text. </p>
      </div>
      </a>
    </div>
    </li>
       
      </ul>
  </div>

</div>

<div class="col-lg-8 col-md-8 site-focus-right">

  <div class="site-section-header">
    <h3>Latest News</h3>
    <a href="news">View all</a>
  </div> 

  <div class="site-blog-list">

    <!-- <div class="site-post-item">
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 site-post-thumb">
      <a href="post-regular.html">
      <img src="images/site-images/IG1.png" alt="">
      </a>
      </div>
      <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12 site-post-details">
      <div class="site-clearfix">
      </div>
      <div class="site-post-title">
      <h3><a href="post-regular.html">Should Los Angeles Be Celebrating Its Olympisite Win?</a></h3>
      </div>
      <div class="site-post-excerpt">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit euismod, mi in rhoncus rutrum, mi felis malesuada.</p>
      </div>
      <div class="site-post-readmore">
      <a href="post-regular.html">Read More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
      </div>
      </div>
    </div> -->
        <div class="site-post-item">
      <div class="site-post-details">
      <div class="site-clearfix"></div>
      <div class="site-post-title">
      <h3><a href="rvervrever">Lorem ipsum is a sample text</a></h3>
      </div>
      <div class="site-post-excerpt">
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
       when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,
        remaining essentially unchanged.</p>
      </div>
      <div class="site-post-readmore">
      <a href="revervrev">Read More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
      </div>
      </div>
    </div>
	    <div class="site-post-item">
      <div class="site-post-details">
      <div class="site-clearfix"></div>
      <div class="site-post-title">
      <h3><a href="rvreverver">Lorem ipsum is a sample text</a></h3>
      </div>
      <div class="site-post-excerpt">
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
       when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,
        remaining essentially unchanged.</p>
      </div>
      <div class="site-post-readmore">
      <a href="evrerververv">Read More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
      </div>
      </div>
    </div>
	    <div class="site-post-item">
      <div class="site-post-details">
      <div class="site-clearfix"></div>
      <div class="site-post-title">
      <h3><a href="erververver">Lorem ipsum is a sample text</a></h3>
      </div>
      <div class="site-post-excerpt">
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
       when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,
        remaining essentially unchanged.</p>
      </div>
      <div class="site-post-readmore">
      <a href="vervreverv">Read More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
      </div>
      </div>
    </div>
	  </div>

</div>

</div>
</section>
<!-- site focus section end -->



<!-- site top news section -->
<section id="section-posts" class="container-fluid site-section">
<div class="row">
  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 site-grid-base-2 site-grid-bx">
    <a><h5>Lorem Ipsum is simply</h5></a>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took </p>

    <div>
      <a href="news/Mini-Auditorium-Opening-Ceremony">
        <img class="media-object" src="template/images/site-assets/top-news/dsscoba-topnews-1.png">
        <a class="site-img-label">Top News</a>
      </a>
    </div>

    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<span><a href="news/Mini-Auditorium-Opening-Ceremony"> Read More <i class="fa fa-angle-right" aria-hidden="true"></i></a></span></p>    
  </div>

  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 site-grid-base-2 site-grid-bx">
    <a><h5>Lorem Ipsum is simply</h5></a>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took</p>

    <div>
      <a href="news/DSSC-OBA-CSR-Project-at-Jaffna">
        <img class="media-object" src="template/images/site-assets/top-news/dsscoba-topnews-2.png">
        <a class="site-img-label">Top News</a>
      </a>
    </div>

    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<span><a href="news/DSSC-OBA-CSR-Project-at-Jaffna"> Read More <i class="fa fa-angle-right" aria-hidden="true"></i></a></span></p>    
  </div>

  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 site-grid-base-2 site-grid-bx">
    <a><h5>Lorem Ipsum is simply</h5></a>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took</p>

    <div>
      <a href="news/Let’s-Rise-together">
        <img class="media-object" src="template/images/site-assets/top-news/dsscoba-topnews-3.png">
        <a class="site-img-label">Top News</a>
      </a>
    </div>

    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<span><a href="news/Let’s-Rise-together"> Read More <i class="fa fa-angle-right" aria-hidden="true"></i></a></span></p>    
  </div>
</div>
</section>
<!-- site top news section end -->

<!-- site separator -->
<section id="section-separator" class="container-fluid site-section">
<div class="row">

<div class="col-lg-12 col-md-12 site-big-text">
    <h1><span>BECOMING</span> THE MOST</h1>
    <h1>EXCELLENT <span>SCHOOL</span> IN</h1>
    <h1>SABARAGAMUWA <span>PROVINCE</span></h1>
</div>

</div>
</section>
<!-- site separator end -->

<!-- site image section -->
<section id="section-image" class="container-fluid site-section">
<div class="row">

  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-site-xs-12 site-grid-base-3 site-grid-bx">
    <div class="site-img-bx">
    <img src="template/images/site-assets/site-gridimages/IG01.png" alt="" class="image">
    <div class="overlay">
    <div class="text text-center"><a href="xxxxxxxx" target="_blank">Lorem ipsum dolor sit amet</a></div>
    </div>
    </div>  
  </div>

  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-site-xs-12 site-grid-base-3 site-grid-bx">
    <div class="site-img-bx">
    <img src="template/images/site-assets/site-gridimages/IG02.png" alt="" class="image">
    <div class="overlay">
    <div class="text text-center"><a href="xxxxxxxx" target="_blank">Lorem ipsum dolor sit amet</a></div>
    </div>
    </div>  
  </div>

  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-site-xs-12 site-grid-base-3 site-grid-bx">
    <div class="site-img-bx">
    <img src="template/images/site-assets/site-gridimages/IG03.png" alt="" class="image">
    <div class="overlay">
    <div class="text text-center"><a href="xxxxxxxx" target="_blank">Lorem ipsum dolor sit amet</a></div>
    </div>
    </div>  
  </div>

  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-site-xs-12 site-grid-base-3 site-grid-bx">
    <div class="site-img-bx">
    <img src="template/images/site-assets/site-gridimages/IG04.png" alt="" class="image">
    <div class="overlay">
    <div class="text text-center"><a href="xxxxxxxx" target="_blank">Lorem ipsum dolor sit amet</a></div>
    </div>
    </div>  
  </div>

  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-site-xs-12 site-grid-base-3 site-grid-bx">
    <div class="site-img-bx">
    <img src="template/images/site-assets/site-gridimages/IG05.png" alt="" class="image">
    <div class="overlay">
    <div class="text text-center"><a href="xxxxxxxx" target="_blank">Lorem ipsum dolor sit amet</a></div>
    </div>
    </div>  
  </div>

  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-site-xs-12 site-grid-base-3 site-grid-bx">
    <div class="site-img-bx">
    <img src="template/images/site-assets/site-gridimages/IG06.png" alt="" class="image">
    <div class="overlay">
    <div class="text text-center"><a href="xxxxxxxx" target="_blank">Lorem ipsum dolor sit amet</a></div>
    </div>
    </div>  
  </div>

  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-site-xs-12 site-grid-base-3 site-grid-bx">
    <div class="site-img-bx">
    <img src="template/images/site-assets/site-gridimages/IG07.png" alt="" class="image">
    <div class="overlay">
    <div class="text text-center"><a href="xxxxxxxx" target="_blank">Lorem ipsum dolor sit amet</a></div>
    </div>
    </div>  
  </div>

  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-site-xs-12 site-grid-base-3 site-grid-bx">
    <div class="site-img-bx">
    <img src="template/images/site-assets/site-gridimages/IG08.png" alt="" class="image">
    <div class="overlay">
    <div class="text text-center"><a href="xxxxxxxx" target="_blank">Lorem ipsum dolor sit amet</a></div>
    </div>
    </div>  
  </div>

</div>
</section>
<!-- site image section end -->


<!-- site body end -->


<!-- site footer -->
<footer id="section-footer" class="container-fluid site-section">
<?php include('./components/footer.php') ?>
</footer><!-- site footer end -->

</div>
<!-- site content end -->

<script type="text/javascript">jssor_1_slider_init();</script>
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

        btn.innerHTML="Logout";
        login_as.innerHTML="Logged in as "+ usr;
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