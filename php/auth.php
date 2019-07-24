<?php
include 'conn.php';

session_start();
if(isset($_POST['regestration_number']) && isset($_POST['pw'])){
  $username = $_POST['regestration_number'];
  $password = $_POST['pw']; 
 
 $result = mysqli_query($conn,"SELECT member.name FROM member JOIN user ON user.regestration_number='$username' AND 
 user.pw='$password' AND member.regestration_number = user.regestration_number");
 
 if($result)
         {
         while ($row = $result ->fetch_assoc()) 
             {
                // echo $row["name"];
 
                 $_SESSION['login_user'] =  $row["name"];
                 
                 header("location: /");
             }
         }
 else
   {echo "no value found";}
}
else
{
  session_destroy();
  header("location: /");
}



?>