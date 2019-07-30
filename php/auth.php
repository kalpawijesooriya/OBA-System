<?php
include 'conn.php';

session_start();
if(isset($_POST['regestration_number']) && isset($_POST['pw']))
{
  $username = $_POST['regestration_number'];
  $password = $_POST['pw'];
  $admin_role = [];
 
  // obtaining the values from the memeber table only ; dj 


//  $result = mysqli_query($conn,"SELECT * FROM member JOIN user ON user.regestration_number='$username' AND 
//  user.pw='$password' AND member.regestration_number = user.regestration_number");
$result = mysqli_query($conn,"SELECT * FROM member where  
member.regestration_number = '$username'  AND  member.password= '$password';");

// end of change : dj 
 
 if(mysqli_num_rows($result)>0)
         {
         while ($row = $result ->fetch_assoc()) 
             {
                 $_SESSION['login_user'] =  $row["name"];
                 $_SESSION['regestration_number'] =  $row["regestration_number"];

                 $result2 = mysqli_query($conn,"SELECT * FROM admin WHERE admin.regestration_number=".$row['regestration_number']."");
                 if(mysqli_num_rows($result2)>0){
                      // $result ->fetch_assoc()
                      while ($row2 = $result2 ->fetch_assoc()) 
                      {
                        array_push($admin_role,$row2["job_role"]); //used array incase if one has many roles
                      }
           
                      if(sizeof($admin_role)>0){
                        $_SESSION['admin_role'] = implode( ", ", $admin_role );
                        header("location: ../");
                      }
                 }
                 else{
                  $_SESSION['admin_role'] = "";
                  header("location: ../");
                }
             }
         }
 else
   {
    $_SESSION['login_error'] = "Invalid Credentials";
    header("location: ../login.php");
  }
}
else
{
  session_destroy();
  header("location: ../");
}



?>