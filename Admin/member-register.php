<?php session_start();
require_once "./php/membership/Member.php";
// require_once "../conn.php";
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
    <link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

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
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Members</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <a href="../membershipform.php" target="_blank" class="btn btn-danger pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">REGISTER NEW MEMBER</a>
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Members</li>
                        </ol>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12" id="memberList">
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
                                                            <button class="btn btn-success" data-toggle="modal" data-target="#edit<?php echo $row['regestration_number']; ?>"><span class = "glyphicon glyphicon-pencil"></span> View</button>  <button class="btn btn-danger delete" data-toggle="modal" data-target="#delete<?php echo $row['regestration_number']; ?>"><span class = "glyphicon glyphicon-trash"></span> Remove</button>                                                      
                                                        </div>
                                                        <a href="javascript:void(0)"><img src="<?php echo $row['profile_picture_url']; ?>" alt="user-img" class="img-circle"> <span><?php echo $row['name']; ?><small class="text-success"><?php echo $row['email_address']; ?></small></span></a>
                                                        
                                                <?php include('member_modal.php'); ?>
                                                <?php include('member_deleteModal.php'); ?>
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
                                                    <button class="btn btn-danger delete" data-toggle="modal" data-target="#delete<?php echo $row['regestration_number']; ?>"><span class = "glyphicon glyphicon-trash"></span> Remove</button>
                                                </div>
                                                <a href="javascript:void(0)"><img src="<?php echo $row['profile_picture_url']; ?>" alt="user-img" class="img-circle"> <span><?php echo $row['name']; ?><small class="text-success"><?php echo $row['email_address']; ?></small></span></a>
                                                <?php include('member_deleteModal.php'); ?>
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
    $(document).ready(function(){
        $(document).on('click', '.acceptMember', function(){
                $dataString=$(this).val();
                $('#edit'+$dataString).modal('hide');
                $('body').removeClass('modal-open');
                $('.modal-backdrop').remove();
                    $.ajax({
                        type: "POST",
                        url: "./php/membership/MemberController.php",
                        data: {
                            q: $dataString,
                            action: "approveRegistration",
                        },
                        success: function(){
                            location.reload();
                        }
                    });
        });

        $(document).on('click', '.deleteMember', function(){
            $dataString=$(this).val();
            $('#edit'+$dataString).modal('hide');
            $('body').removeClass('modal-open');
            $('.modal-backdrop').remove();
                $.ajax({
                    type: "POST",
                    url: "./php/membership/MemberController.php",
                    data: {
                        q: $dataString,
                        action: "removeMember",
                    },
                    success: function(){
                        location.reload();
                    }
                });
        });
    });
	
    </script>
</body>

</html>
