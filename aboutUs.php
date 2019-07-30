<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!-- <link
      rel="stylesheet"
      type="text/css"
      href="template/css/bootstrap.min.css"
    /> -->
    <script type="text/javascript" src="https://use.fontawesome.com/20bf8ce7c9.js"></script>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="template/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="template/css/style.css">
	<link rel="stylesheet" type="text/css" href="template/css/lightbox.css">
  <link rel="stylesheet" type="text/css" href="template/css/animate.css"> 
  <link rel="stylesheet" type="text/css" href="template/css/aboutUs.css">  
  
	<script type="text/javascript" src="template/js/jquery-1.11.2.js"></script>
  <script type="text/javascript" src="template/js/bootstrap.min.js"></script> 
  <script type="text/javascript" src="template/js/lightbox.js"></script> 
	<script type="text/javascript" src="https://use.fontawesome.com/20bf8ce7c9.js"></script>
    <title>About Us</title>
    <?php
      session_start();

      if( isset($_SESSION['login_user']) ){
        echo "<span id ='login_user' style='visibility:hidden; position:absolute;'>".$_SESSION['login_user']."</span>";
        echo "<span id ='login_user_reg' style='visibility:hidden; position:absolute;'>".$_SESSION['regestration_number']."</span>";
        echo "<span id ='login_user_role' style='visibility:hidden; position:absolute;'>".$_SESSION['admin_role']."</span>";

      }
      else{
        echo "<span id ='login_user' style='visibility:hidden;position:absolute;'>no_data</span>";
        echo "<span id ='login_user_reg' style='visibility:hidden;position:absolute;'>no_data</span>";
        echo "<span id ='login_user_role' style='visibility:hidden;position:absolute;'>no_data</span>";

      }
  ?>

  </head>
  <body>

<!-- adding the header component  -->

      <header>   
          <section class="container">
            <?php include './components/header.php' ?>
          </section>
      </header>

      <div class="wrapper row2">
        <div id="container" class="clear">
         
          <div id="about-us" class="clear">
           
            <section id="about-intro" class="about-intro">
            <h1 style="margin-top:50px"> Prince College Old Boys Association </h1>
              <p style="margin-top:20px">In odio. Mauris feugiat. Nunc posuere, felis sit amet faucibus convallis, tortor enim viverra quam, hendrerit interdum dui quam ut lacus. Ut dui dui, viverra ac, vulputate scelerisque, viverra molestie, tortor. Nullam quis odio id justo accumsan ullamcorper. Mauris lectus enim, luctus vitae, viverra a, pharetra mollis, diam. Donec sed lorem eget nibh sagittis dictum. Curabitur libero. Integer molestie mi sed tellus.</p>
              <p>Praesent imperdiet justo at sem. Nam accumsan dui eget diam.Nulla quis ante eget pede fringilla rutrum. Proin mollis tristique orci. Nam est. Fusce felis nisl, volutpat vel, sollicitudin eu, luctus sit amet, sem. Curabitur risus erat, scelerisque sit amet, mollis id, consectetuer eu, neque. Curabitur sodales semper arcu. Sed ullamcorper arcu eu ante. Vestibulum sed lacus. Quisque vitae libero. Sed quis turpis vitae lectus vehicula tincidunt. Aliquam quam mi, rutrum malesuada, consequat vitae, accumsan ut, lacus. Nulla dictum vestibulum lorem.</p>
            </section>
            <!-- team introduction -->
            <section id="team" class="about-intro">

              <h1 style="margin-top:50px"> Executive committee </h1>
              <div  style="margin-top:50px;margin-bottom:50px">
                              <!--  displaying the excecative member info  -->
               <div class="row" >
                  <?php 
                    include('./php/conn.php');
          
                    $result = mysqli_query($conn, "select member.`name` , member.mobile_number, member.email_address , member.profile_picture_url , admin.job_role
                    from heroku_c89e249aac6f9c4.member  inner join heroku_c89e249aac6f9c4.admin on member.regestration_number = admin.regestration_number
                    where admin.started_date < curdate() and admin.end_date > curdate() and admin.job_role != 'commitee member';");
                    while ($row = mysqli_fetch_assoc($result))
                    {
                      $imgUrl = "img/team_member.jpg";
                        if( !empty($row['profile_picture_url'])){
                          $imgUrl = 'Admin/'.$row['profile_picture_url'];
                        }
                      if($row['job_role'] == "president"){
                        
                        ?>
                        <div class="col-lg-4  col-md-4 order-1 profile_pic" style="margin-top:20px;">
                          <!-- <li class="one_quarter first"> -->
                            <figure>
                            <div id="img_frame_exec"  class="circular-square">
                               <img id="img_exec"src="<?php echo $imgUrl ?>" alt="">
                            </div>
                              <figcaption  style="margin-top:10px; text-align:center;overflow-wrap: break-word;" width="250">
                                <p class="member_name"><?php echo($row['name']) ?> </p>
                                <p class="member_title"> <?php echo($row['job_role']) ?> </p>
                                <p class="member_mobile"> <?php echo($row['mobile_number']) ?> </p>
                                <p class="mem_email"> <?php echo($row['email_address']) ?> </p>
                              </figcaption>
                            </figure>
                          <!-- </li> -->
                        </div>
                      
                  <?php } 
                      else if($row['job_role'] == "vice president"){
                        ?>
                        <div class="col-lg-4 col-md-4 order-2 profile_pic" style="margin-top:20px;">
                          <!-- <li class="one_quarter first"> -->
                            <figure>
                              <div  id="img_frame_exec"  class="circular-square">
                               <img id="img_exec" src="<?php echo $imgUrl ?>" alt="">
                              </div>
                              <figcaption  style="margin-top:10px; text-align:center;overflow-wrap: break-word;" width="250">
                                <p class="member_name"><?php echo($row['name'])?> </p>
                                <p class="member_title"> <?php echo($row['job_role'])?>  </p>
                                <p class="member_mobile"> <?php echo($row['mobile_number'])?> </p>
                                <p class="mem_email"> <?php echo($row['email_address'])?> </p>
                              </figcaption>
                            </figure>
                          <!-- </li> -->
                        </div>
                  <?php }
                      else if ($row['job_role'] == "secretary"){ ?>
                        <div class="col-lg-4 col-md-4 order-3 profile_pic" style="margin-top:20px;">
                          <!-- <li class="one_quarter first"> -->
                            <figure>
                            <div  id="img_frame_exec"  class="circular-square">
                               <img  id="img_exec" src="<?php echo $imgUrl?>" alt="">
                              </div>
                              <figcaption  style="margin-top:10px; text-align:center;overflow-wrap: break-word;" width="250">
                                <p class="member_name"><?php echo($row['name'])?> </p>
                                <p class="member_title"> <?php echo($row['job_role'])?>  </p>
                                <p class="member_mobile"> <?php echo($row['mobile_number'])?> </p>
                                <p class="mem_email"> <?php echo($row['email_address'])?> </p>
                              </figcaption>
                            </figure>
                          <!-- </li> -->
                        </div>
                    <?php }
                      else if ($row['job_role'] == "vice_secretary"){ ?>
                        <div class="col-lg -4 col-md-4 order-4 profile_pic" style="margin-top:20px;">
                          <!-- <li class="one_quarter first"> -->
                            <figure>
                            <div  id="img_frame_exec"  class="circular-square">
                               <img id="img_exec" src="<?php echo $imgUrl ?>" alt="">
                              </div>
                              <figcaption style="margin-top:10px; text-align:center;overflow-wrap: break-word;" width="250">
                                <p class="member_name"><?php echo($row['name'])?> </p>
                                <p class="member_title"> <?php echo($row['job_role'])?>  </p>
                                <p class="member_mobile"> <?php echo($row['mobile_number'])?> </p>
                                <p class="mem_email"> <?php echo($row['email_address'])?> </p>
                              </figcaption>
                            </figure>
                          <!-- </li> -->
                        </div>
                    <?php }
                      else if ($row['job_role'] == "tresurer"){ ?>
                      <div  class="col-lg-4 col-md-4 order-2 profile_pic" style="margin-top:20px;">
                          <!-- <li class="one_quarter first"> -->
                            <figure>
                            <div  id="img_frame_exec"  class="circular-square">
                               <img id="img_exec" src="<?php echo $imgUrl ?>" alt="">
                              </div>
                              <figcaption  style="margin-top:10px; text-align:center;overflow-wrap: break-word;" width="250">
                                <p class="member_name"><?php echo($row['name'])?> </p>
                                <p class="member_title"> <?php echo($row['job_role'])?>  </p>
                                <p class="member_mobile"> <?php echo($row['mobile_number'])?> </p>
                                <p class="mem_email"> <?php echo($row['email_address'])?> </p>
                              </figcaption>
                            </figure>
                          <!-- </li> -->
                      </div>
                      <?php }
                    } 
                    ?>
                </div>
                <!-- displaying the comitee member info  -->
                <div class="row">
                  <?php 
                    // include('./php/conn.php');
          
                    $result2 = mysqli_query($conn, "select member.`name` , member.mobile_number, member.email_address , member.profile_picture_url , admin.job_role
                    from heroku_c89e249aac6f9c4.member  inner join heroku_c89e249aac6f9c4.admin on member.regestration_number = admin.regestration_number
                    where admin.started_date < curdate() and admin.end_date > curdate() and admin.job_role = 'commitee member';");

                    while ($row2 = mysqli_fetch_assoc($result2))
                    { 
                      $imgUrl2 = "img/team-member.gif";
                        if( !empty($row2['profile_picture_url'])){
                          $imgUrl2 = 'Admin'.$row2['profile_picture_url'];
                        }
                      ?>
                      <hr>
                      <div class=" col-lg-4 col-md-4 order-2 profile_pic" style="margin-top:40px;">
                          <!-- <li class="one_quarter first"> -->
                            <figure>
                              <div  id="img_frame_com"  class="circular-square">
                               <img id="img_com" src="<?php echo $imgUrl2 ?>" alt="">
                              </div>
                              <figcaption  style="margin-top:10px; text-align:center;overflow-wrap: break-word;" >
                                <p class="member_name"><?php echo($row2['name']) ?> </p>
                                <p class="member_title"> <?php echo($row2['job_role']) ?>  </p>
                                <p class="member_mobile"> <?php echo($row2['mobile_number']) ?> </p>
                                <p class="mem_email"> <?php echo($row2['email_address']) ?> </p>
                              </figcaption>
                            </figure>
                          <!-- </li> -->
                        </div>
                   <?php } ?>
                </div>
              </div>
            </section>
          
          </div>
          
        </div>
      </div>

      <!-- site footer -->
      
      <footer id="section-footer" class="container-fluid site-section">
        <?php include('./components/footer.php') ?>
      </footer>
      
      <!-- site footer end -->

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
