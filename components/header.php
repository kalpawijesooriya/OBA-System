<?php 
if( isset($_SESSION['login_user']) ){
 $profile_section='

  <a style="width:110%;display: grid; grid-template-columns: 50% 60% ;">
    <div class="" style="margin-left:-10px;">
      <div id="frame_img_nav"  class="circular-square">
        <img id="img_nav" src="img/team_member.jpg" alt="">
      </div>
    </div>
    <div class="" style="height:100%;margin-top:20%;">
       <span id="login_as" style="color:white;text-align:left;overflow-wrap:break-word;"></span>
    </div>
  </a>
  
  <ul>
     <li><a id="login_btn" onclick="login()">LOGIN</a></li>
  </ul>


';}
else{
  $profile_section='<a id="login_btn" onclick="login()">LOGIN</a>';
}

echo('

    <div class="col-lg-4 col-md-4 responsive-col-full-width/">
    <div class="site-brand text-center">
      <a href="index.php">
        <div class="pull-left site-pull-left">        
          <img src="template/images/site-assets/logo.png" alt="dsscoba-logo">
        </div>
        <div class="pull-right site-pull-right">
       
          <h4>NEW TOWN PRINCE COLLEGE</h4>
          <p>Old Boys\' Association</p>
        </div>
        <div class="clearfix"></div>
      </a>
    </div>   
    <div class="button nvbtn"></div>         
</div>
<div class="col-md-8 responsive-col-full-width">

  <div class="col-md-8">
    <nav id=\'cssmenu\'>
      <div id="head-mobile"></div>
      <!-- <div class="button"></div> -->
      <ul>
      <li id="nav-home"><a href="index.php">HOME</a></li>
      <li id="nav-news"><a href="aboutUs.php">ABOUT US</a></li>
      <li id="nav-events"><a href="events">EVENTS</a></li>
      <li id="nav-projects"><a href="membership.php">MEMBERSHIP</a></li>            
      <li id="nav-media"><a href="image-gallery.php">GALLERY</a>
       <!-- <ul>
            <li id="nav-media-sub"><a href="image-gallery">IMAGE GALLERY</a></li>
            <li id="nav-media-sub"><a href="index.php">VIDEO GALLERY</a></li>
        </ul> -->
      </li>
      <li id="nav-contact"><a href="contact_us.php">CONTACT US</a></li>
      <li>'.$profile_section.'
      </li>
    </ul>
      </nav>
  </div>
  
  
  <style>
  .circular-square {
    border-radius: 50%;
  }

  .circular-square {
    border-top-left-radius: 50% 50%;
    border-top-right-radius: 50% 50%;
    border-bottom-right-radius: 50% 50%;
    border-bottom-left-radius: 50% 50%;
    /* padding-bottom: 5%; */
  }

  #frame_img_nav{
    overflow: hidden !important;
    width: 60px;
    height: 60px;
    margin:auto;
    background-position: center center
    margin-left:0px !important;
  }
  
  #img_nav{
    width:60px;
    height:auto;
  }
  #login_btn{
    
  }

  </style>')
?>