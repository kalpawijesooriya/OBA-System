<?php session_start();
require_once "./php/membership/Member.php";
// require_once "../conn.php";
$gender ='1';
$member = new Member();

//getPendingMember
$pendingMembers = $member->getPendingMembers();
if($pendingMembers){
$no_pen =mysqli_num_rows($pendingMembers);
}else{
$no_pen ='';
}

//getRegisteredMember
$registeredMembers = $member->getRegisteredMembers();
if($registeredMembers){
$no_reg =mysqli_num_rows($registeredMembers);
}else{
$no_reg ='';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png">
    <title>Prince ODA Admin</title>
    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="css/colors/default.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header">
    <!-- ============================================================== -->
    <!-- Preloader -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Wrapper -->
    <!-- ============================================================== -->
    <div id="wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
        <?php require_once 'common/header.php'; ?>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- End Top Navigation -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <div class="navbar-default sidebar" role="navigation">
            <?php require_once 'common/navbar.php'; ?>
        </div>
        <!-- ============================================================== -->
        <!-- End Left Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        
        <form action="" method="GET" class="form">
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Members</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <!-- <a href="https://wrappixel.com/templates/ampleadmin/" target="_blank" class="btn btn-danger pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Upgrade to Pro</a> -->
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Members</li>
                        </ol>
                    </div>
                </div>
                <div class="container">
            <div class="row">
               <!--  -->
               <div class="col-12">
        <form action="" method="GET" class="form">
               <div class="row" style="background: #ffffff;padding-top: 25px;margin-bottom: 35px;">
                    <div class="col-md-4">
                      <div class="form-group">
                        <input type="text" class="form-control"  id="q" placeholder="Name"  name="q">
                        <input type="hidden" class="form-control"  id="doc_id" placeholder="Doctor's Name"  name="doc_id">
                      </div>    
                    </div>
                    <div class="col-md-2 text-center" >
                        <div class="form-group">
                        <i style="font-size:20px; font-color:white">A/L</i> <input type="radio" <?php $retVal = ($gender==1) ? 'checked' : '' ; //echo $retVal; ?> name="gender" value="1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                         <i style="font-size:20px; font-color:white">O/L</i> <input type="radio" <?php $retVal = ($gender==2) ? 'checked' : '' ; //echo $retVal; ?> name="gender" value="2">
                        </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <select class="form-control"  id="department"  name="department">
                            <option value="">Select Year</option>
                            <?php for($i=1950; $i<=date("Y"); $i++) { ?>   
                        <option value="<?php echo "$i"; ?>"><?php echo "$i"; ?></option>
                        <?php } ?>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <input type="submit" class="btn btn-success" id="search" value="Search" name="search">&nbsp;&nbsp;
                        <input type="reset" class="btn btn-danger" id="reset" value="Reset" name="reset">
                      </div>
                    </div>
                    </div></form>
                            </div>
                            </div></div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="panel">
                            <div class="sk-chat-widgets">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        Registrations Pending Members
                                    </div>
                                    <div class="panel-body">
                                    <p><?php echo $no_pen; ?> result(s) found</p>
                                        <ul class="chatonline">
                                           
                                                <?php
                                                if($no_pen>0){
                                                    while ($row = mysqli_fetch_array($pendingMembers)) { ?>
                                                    <li>
                                                        <div class="call-chat">
                                                            <button class="btn btn-success btn-lg" type="button" id="approveBtn" value="<?php echo $row['regestration_number']; ?>"><i class="fa fa-check">Approve</i></button>
                                                            <button class="btn btn-warning btn-lg" type="button"><i class="fa fa-times">Reject</i></button>
                                                        </div>
                                                        <a href="javascript:void(0)"><img src="plugins/images/users/varun.jpg" alt="user-img" class="img-circle"> <span><?php echo $row['name']; ?><small class="text-success"><?php echo $row['email_address']; ?></small></span></a>
                                                        <?php  } 
                                                        }else{ ?>
                                                            <div class="col-6 col-lg-3"><p>No result found</p></div>
                                                    </li>
                                                <?php  }?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="panel">
                            <div class="sk-chat-widgets">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        Registered Members
                                    </div>
                                    <div class="panel-body">
                                    <p><?php echo $no_reg; ?> result(s) found</p>
                                        <ul class="chatonline">
                                        <?php
                                        if($no_reg>0){
                                            while ($row = mysqli_fetch_array($registeredMembers)) { ?>
                                            <li>
                                                <div class="call-chat">
                                                    <button class="btn btn-danger  btn-lg" id="removeBtn" value="<?php echo $row['regestration_number']; ?>" type="button"><i class="fa fa-times">Remove</i></button>
                                                </div>
                                                <a href="javascript:void(0)"><img src="<?php echo $row['profile_picture_url']; ?>" alt="user-img" class="img-circle"> <span><?php echo $row['name']; ?><small class="text-success"><?php echo $row['email_address']; ?></small></span></a>
                                                <?php  } 
                                                }else{ ?>
                                                    <div class="col-6 col-lg-3"><p>No result found</p></div>
                                            </li>
                                        <?php  }?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2019 &copy; Powered by Gnex Solutions </footer>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.min.js"></script>

    <script type="text/javascript">
    var dataString = document.getElementById("approveBtn").value;
    var dataString = document.getElementById("removeBtn").value;
    
    $(document).ready(function(){
        $("#approveBtn").click(function(){
            $.ajax({
                url: './php/membership/MemberController.php',
                data: {
                        q: dataString,
                        action: "approveRegistration"
                    },
                success: function(data) {
                    location.reload();
                }
            });
    });
    $("#removeBtn").click(function(){
            $.ajax({
                url: './php/membership/MemberController.php',
                data: {
                        q: dataString,
                        action: "removeMember"
                    },
                success: function(data) {
                    location.reload();
                }
            });
    });
    });
    </script>
</body>

</html>
