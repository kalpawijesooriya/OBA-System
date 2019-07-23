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
<div class="row">
<div class="col-lg-4 col-md-4 responsive-col-full-width">
    <div class="site-brand text-center">
      <a href="index.html">
        <div class="pull-left site-pull-left">        
          <img src="template/images/site-assets/logo.png" alt="dsscoba-logo">
        </div>
        <div class="pull-right site-pull-right">
          <h4>PRINCE COLLEGE</h4>
          <p>Old Boys' Association</p>
        </div>
        <div class="clearfix"></div>
      </a>
    </div>   
    <div class="button nvbtn"></div>         
</div>
<div class="col-md-8 responsive-col-full-width">

  <div class="col-md-8">
    <nav id='cssmenu'>
      <div id="head-mobile"></div>
      <!-- <div class="button"></div> -->
      <ul>
      <li id="nav-home"><a href="index.php">HOME</a></li>
      <li id="nav-news"><a href="index.php">ABOUT US</a></li>
      <li id="nav-events"><a href="index.php">EVENTS</a></li>
      <li id="nav-projects"><a href="membership.html">MEMBERSHIP</a></li>            
      <li id="nav-media"><a href="index.php">GALLERY</a>
        <ul>
            <li id="nav-media-sub"><a href="index.php">IMAGE GALLERY</a></li>
            <li id="nav-media-sub"><a href="index.php">VIDEO GALLERY</a></li>
        </ul>
      </li>
      <li id="nav-contact"><a href="index.php">CONTACT US</a></li>
      <li class="">

            <button id="login_btn" class="btn" style="margin-left: 40pt; margin-right: 40pt;margin-top: 6pt;margin-bottom:  6pt;padding: 5pt; right: 0px;"
            onclick="login()">Login</button>
            <p id="login_as" style="color:white;text-align:center"></p>

      </li>      
    </ul>
      </nav>
  </div>

</div>
</div>
</section>

</header><!-- site header+navigation end -->

<!-- site body -->

<!-- site main slider -->
<div class="slider">
    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:380px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
            <div>
                <img data-u="image" src="img/001.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/002.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/003.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/004.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/005.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/006.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/007.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/008.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/009.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/010.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/011.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/012.jpg" />
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
      <a href="events/Psycho-Parade-2018">
      <div class="timeline-heading">
      <h5 class="timeline-title">Psycho Parade 2018</h5>
      </div>
      <div class="timeline-body">                
      <p class="text-left">9.00 AM at School Premises</p>
      </div>
      </a>
    </div>
    </li>
        <li>            
    <div class="timeline-badge">
            <div class="timeline-badge-up"><span>22<sup>nd</sup></span></div>
      <div class="timeline-badge-down"><span>Oct</span></div>
    </div>
    
    <div id="tm-event-1" class="timeline-panel animated">
      <a href="events/The-36th-Annual-General-Meeting-of-D.-S.-Senanayake-College-Old-Boys-Association">
      <div class="timeline-heading">
      <h5 class="timeline-title">The 36th Annual General Meeting of D. S. Senanayake College Old Boys Association</h5>
      </div>
      <div class="timeline-body">                
      <p class="text-left">2.00 PM Onwards at R I T Alles Hall</p>
      </div>
      </a>
    </div>
    </li>
        <li>            
    <div class="timeline-badge">
            <div class="timeline-badge-up"><span>25<sup>th</sup></span></div>
      <div class="timeline-badge-down"><span>Mar</span></div>
    </div>
    
    <div id="tm-event-1" class="timeline-panel animated">
      <a href="events/Psycho-Parade-2017">
      <div class="timeline-heading">
      <h5 class="timeline-title">Psycho Parade 2017</h5>
      </div>
      <div class="timeline-body">                
      <p class="text-left">8.00 AM at School Premises</p>
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
      <a href="http://dsscoba.org/events/Golden-Jubilee-Celebration-&ndash;-DS-Turned-50">
      <div class="timeline-heading">
      <h5 class="timeline-title">Golden Jubilee Celebration &ndash; DS Turned 50</h5>
      </div>
      <div class="timeline-body">                
      <p class="text-left">7.00PM at School Premises</p>
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
      <a href="events/Theewraa-Live">
      <div class="timeline-heading">
      <h5 class="timeline-title">Theewraa Live</h5>
      </div>
      <div class="timeline-body">                
      <p class="text-left">6.30 PM at School Premises</p>
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
      <h3><a href="news/Mini-Auditorium-Opening-Ceremony">Mini Auditorium Opening Ceremony</a></h3>
      </div>
      <div class="site-post-excerpt">
      <p>The 29th of September saw the successful completion and handing over of one of the 
largest infrastructure development projects in the history of the Old Boys Association 
of D.S. Senanayake College. This venture was commenced under the leadership of the 
OBA Senior President Madura Wickramaratne and the President Susantha 
Dissanayake.</p>
      </div>
      <div class="site-post-readmore">
      <a href="news/Mini-Auditorium-Opening-Ceremony">Read More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
      </div>
      </div>
    </div>
	    <div class="site-post-item">
      <div class="site-post-details">
      <div class="site-clearfix"></div>
      <div class="site-post-title">
      <h3><a href="news/DSSC-OBA-CSR-Project-at-Jaffna">DSSC OBA CSR Project at Jaffna</a></h3>
      </div>
      <div class="site-post-excerpt">
      <p>A project successfully completed by the Old Boys&#039; Association of D.S. Senanayake 
College. A CSR project of donating school books, bags, shoes &amp; socks, sport items, 
computers, musical &amp; sound equipments, bicycles and paints worth of Rs. 1.7mn to 
Jaffna Atchuvely Saraswathy College.</p>
      </div>
      <div class="site-post-readmore">
      <a href="news/DSSC-OBA-CSR-Project-at-Jaffna">Read More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
      </div>
      </div>
    </div>
	    <div class="site-post-item">
      <div class="site-post-details">
      <div class="site-clearfix"></div>
      <div class="site-post-title">
      <h3><a href="news/Golden-Ball-2017">Golden Ball 2017</a></h3>
      </div>
      <div class="site-post-excerpt">
      <p>The Old Boys Association of D. S. Senanayake College will have their annual Dinner 
Dance on the 22nd of September at Grand Ballroom Hilton, Colombo.</p>
      </div>
      <div class="site-post-readmore">
      <a href="news/Golden-Ball-2017">Read More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
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
    <a><h5>Mini Auditorium Opening Ceremony</h5></a>
    <p>The 29th of September saw the successful completion and handing over of one of the largest infrastructure development projects in the history of the Old Boys Association of D.S. Senanayake College.</p>

    <div>
      <a href="news/Mini-Auditorium-Opening-Ceremony">
        <img class="media-object" src="template/images/site-assets/top-news/dsscoba-topnews-1.png">
        <a class="site-img-label">Top News</a>
      </a>
    </div>

    <p>The Mini Auditorium of D.S.Senanayake College was declared open with the presence of Hon. Minister Harsha De Silva. This venture was commenced under the leadership of the OBA Senior President Madura Wickramaratne and the President Susantha Dissanayake. The mini auditorium consists of facilities to accommodate over 300 plus people. The founder principle late Mr. R. I. T. Alles wife Rohini Alles graced this occasion along with other prominent dignitaries.<span><a href="news/Mini-Auditorium-Opening-Ceremony"> Read More <i class="fa fa-angle-right" aria-hidden="true"></i></a></span></p>    
  </div>

  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 site-grid-base-2 site-grid-bx">
    <a><h5>DSSC OBA CSR Project at Jaffna</h5></a>
    <p>A project successfully completed by the Old Boys' Association of D.S. Senanayake College. A CSR project of donating items worth of Rs. 1.7mn to Jaffna Atchuvely Saraswathy College.</p>

    <div>
      <a href="news/DSSC-OBA-CSR-Project-at-Jaffna">
        <img class="media-object" src="template/images/site-assets/top-news/dsscoba-topnews-2.png">
        <a class="site-img-label">Top News</a>
      </a>
    </div>

    <p>Project was headed by Susantha Subashan Dissanayake ayya, the President of OBA along with project chairman Kosala Suresh , Mahesh Hettige ayya and OBA brothers with the commendable support from 52nd and 522nd Divisions of SL Army. A sincere appreciation to the OBA Senior President Madura Wickramarathne ayya and the Executive Committee and to everyone who extend their support towards this noble event.<span><a href="news/DSSC-OBA-CSR-Project-at-Jaffna"> Read More <i class="fa fa-angle-right" aria-hidden="true"></i></a></span></p>    
  </div>

  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 site-grid-base-2 site-grid-bx">
    <a><h5>Let’s Rise together</h5></a>
    <p>As our Motherland faced another tragic natural disaster as last year, the sons of mother DS came once again to help our beloved country men living our motto 'Country before self'.</p>

    <div>
      <a href="news/Let’s-Rise-together">
        <img class="media-object" src="template/images/site-assets/top-news/dsscoba-topnews-3.png">
        <a class="site-img-label">Top News</a>
      </a>
    </div>

    <p>As the news broke out throughout the country of this disaster, our OBA immediately initiated to collect essential goods to be distributed which resulted in donations flowing in from our donors within the country and brothers who donated from our foreign OBA units who operated very responsively.<span><a href="news/Let’s-Rise-together"> Read More <i class="fa fa-angle-right" aria-hidden="true"></i></a></span></p>    
  </div>
</div>
</section>
<!-- site top news section end -->

<!-- site separator -->
<section id="section-separator" class="container-fluid site-section">
<div class="row">

<div class="col-lg-12 col-md-12 site-big-text">
    <h1><span>DS</span> MEANS LOVE</h1>
    <h1>THE <span>CULTURE</span> OF OURS</h1>
    <h1>BUILT ON THAT <span>LOVE</span></h1>
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
    <div class="text text-center"><a href="http://dsscphotography.com/portfolio-item/golden-jubilee-celebration/" target="_blank">Golden Jubilee Celebration</a></div>
    </div>
    </div>  
  </div>

  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-site-xs-12 site-grid-base-3 site-grid-bx">
    <div class="site-img-bx">
    <img src="template/images/site-assets/site-gridimages/IG02.png" alt="" class="image">
    <div class="overlay">
    <div class="text text-center"><a href="http://dsscphotography.com/portfolio-item/theewraa-golden-jubilee-live/" target="_blank">Theewraa - Golden Jubilee Live</a></div>
    </div>
    </div>  
  </div>

  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-site-xs-12 site-grid-base-3 site-grid-bx">
    <div class="site-img-bx">
    <img src="template/images/site-assets/site-gridimages/IG03.png" alt="" class="image">
    <div class="overlay">
    <div class="text text-center"><a href="http://dsscphotography.com/portfolio-item/steps-17/" target="_blank">Steps 17</a></div>
    </div>
    </div>  
  </div>

  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-site-xs-12 site-grid-base-3 site-grid-bx">
    <div class="site-img-bx">
    <img src="template/images/site-assets/site-gridimages/IG04.png" alt="" class="image">
    <div class="overlay">
    <div class="text text-center"><a href="http://dsscphotography.com/portfolio-item/big-match-ticket-launch/" target="_blank">Big Match Ticket Launch</a></div>
    </div>
    </div>  
  </div>

  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-site-xs-12 site-grid-base-3 site-grid-bx">
    <div class="site-img-bx">
    <img src="template/images/site-assets/site-gridimages/IG05.png" alt="" class="image">
    <div class="overlay">
    <div class="text text-center"><a href="http://dsscphotography.com/portfolio-item/medical-camp/" target="_blank">Medical Camp</a></div>
    </div>
    </div>  
  </div>

  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-site-xs-12 site-grid-base-3 site-grid-bx">
    <div class="site-img-bx">
    <img src="template/images/site-assets/site-gridimages/IG06.png" alt="" class="image">
    <div class="overlay">
    <div class="text text-center"><a href="http://dsscphotography.com/portfolio-item/aipadma-dance-show/" target="_blank">Aipadma Dance Show</a></div>
    </div>
    </div>  
  </div>

  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-site-xs-12 site-grid-base-3 site-grid-bx">
    <div class="site-img-bx">
    <img src="template/images/site-assets/site-gridimages/IG07.png" alt="" class="image">
    <div class="overlay">
    <div class="text text-center"><a href="http://dsscphotography.com/portfolio-item/ds-students-brand-awards-16/" target="_blank">D S Students Brand Awards 2016</a></div>
    </div>
    </div>  
  </div>

  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-site-xs-12 site-grid-base-3 site-grid-bx">
    <div class="site-img-bx">
    <img src="template/images/site-assets/site-gridimages/IG08.png" alt="" class="image">
    <div class="overlay">
    <div class="text text-center"><a href="http://dsscphotography.com/portfolio-item/d-s-aura-2016/" target="_blank">D S Aura 2016</a></div>
    </div>
    </div>  
  </div>

</div>
</section>
<!-- site image section end -->


<!-- site body end -->


<!-- site footer -->
<footer id="section-footer" class="container-fluid site-section">
<div class="row">
    
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 site-footer-bx">
        <div id="site-footer-A1" class="text-center animated">
            <img class="" src="template/images/site-assets/logo.png" alt="dsscoba-logo">
            <h5 class="">COUNTRY BEFORE SELF</h5>
        </div>
    </div>
    
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 site-footer-bx">
        <div id="site-footer-A2" class="text-left site-footer-text-center animated">
            <h5>SOCIETIES & CLUBS</h5> 
            <ul class="list-inline site-footer-list site-list-inline-img">
                <li>
                    <a href="https://www.facebook.com/groups/dsobawildlifeclub" target="_blank">
                    <img src="template/images/site-assets/clubs-societies/dsscoba-wildlife.png" alt="dsscoba-wildlife" title="Wildlife Club">
                    </a>
                </li>
                <li>
                    <a href="https://www.facebook.com/dsbuddhists" target="_blank">
                    <img src="template/images/site-assets/clubs-societies/dsscoba-buddhist.png" alt="dsscoba-buddhist" title="Buddhist Society">
                    </a>
                </li>
                <li>
                    <a href="https://www.facebook.com/donspsychoparade" target="_blank">
                    <img src="template/images/site-assets/clubs-societies/dsscoba-psycho.png" alt="dsscoba-psycho-parade" title="Psycho Parade">
                    </a>
                </li>
                <li>
                    <a href="https://www.facebook.com/Theewraa" target="_blank">
                    <img src="template/images/site-assets/clubs-societies/dsscoba-theewra.png" alt="dsscoba-theewra" title="D.S Theewraa">
                    </a>
                </li>

            </ul>
        </div>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 site-footer-bx">
        <div id="site-footer-A3" class="text-center animated">
            <h5>CONTACT</h5>
            <p>
                <span>DSSC OBA HEADQUARTERS</span>
                <br>
                <span>No 62, Gregory Road,</span>
                <br>
                <span>Colombo 07</span>
                <br>
                <span>Sri Lanka</span>
                <br><br>
                <span>dsoba@sltnet.lk</span>
                <br>
                <span>+94 115 840 310 | +94 112 688 010</span>
            </p>
        </div>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 site-footer-bx">
        <div id="site-footer-A4" class="text-center animated">
            <h5>FOLLOW US</h5> 
            <ul class="list-inline site-social-icons">
                <li><a href="https://www.facebook.com/OBADSSC/" target="_blank"><i class="fa fa-facebook-square fa-lg" aria-hidden="true"></i></a></li>
                <li><a href="https://twitter.com/obadssc" target="_blank"><i class="fa fa-twitter fa-lg" aria-hidden="true"></i></a></li>
                <li><a href="https://www.instagram.com/obadssc/" target="_blank"><i class="fa fa-instagram fa-lg" aria-hidden="true"></i></a></li>
                <li><a href="https://www.youtube.com/channel/UC6oSyNbktAqKIh5bt0wGz_A" target="_blank"><i class="fa fa-youtube-square fa-lg" aria-hidden="true"></i></a></li>
            </ul>
            <p class="site-privacy-tag">Privacy Policy | <a href="index.html">Terms & Conditions</a></p>
        </div>
    </div>
</div>

<div class="row">    
    <div class="site-copyright-tag">
    <div class="container text-center">
        <p>Website Designed & Developed by Gnex Solutions</p>
        <div class="site-scroll-up pull-right text-center">
        <a id="scrolltotop" href="index.html"><i id="fo-icon" class="fa fa-caret-up fa-lg animated" aria-hidden="true"></i></a>
        </div>
    </div>
    </div>
</div>
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

    if(usr != "no_data"){ //logout by clearing session
      location.href='./php/auth.php';
    }
    else{
      location.href='login.html';
    }
     
  }
</script>


</body>
</html>