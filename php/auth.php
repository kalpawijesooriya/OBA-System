<?php
include 'conn.php';

session_start();
if(isset($_POST['regestration_number']) && isset($_POST['pw'])){
  $username = $_POST['regestration_number'];
  $password = $_POST['pw'];
  $admin_role = [];
 
 $result = mysqli_query($conn,"SELECT * FROM member JOIN user ON user.regestration_number='$username' AND 
 user.pw='$password' AND member.regestration_number = user.regestration_number");
 
 if($result)
         {
         while ($row = $result ->fetch_assoc()) 
             {
 
                 $_SESSION['login_user'] =  $row["name"];
                 $_SESSION['regestration_number'] =  $row["regestration_number"];

                 $result2 = mysqli_query($conn,"SELECT * FROM admin WHERE admin.regestration_number=".$row['regestration_number']."");
                 if($result2){
                  // $result ->fetch_assoc()
                  while ($row2 = $result2 ->fetch_assoc()) 
                  {
                    array_push($admin_role,$row2["job_role"]); //used array incase if one has many roles
                  }

                  $_SESSION['admin_role'] = "";

                  if(sizeof($admin_role)>0){
                    $_SESSION['admin_role'] = implode( ", ", $admin_role );
                    header("location: ../Admin/");
                  }
                  else{
                    header("location: ../");
                   }
                  
                 }
                 

                 
             }
         }
 else
   {echo "no value found";}
}
else
{
  session_destroy();
  header("location: ../");
}



?>