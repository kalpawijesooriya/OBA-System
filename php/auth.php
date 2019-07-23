<?php
include 'conn.php';

// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// } 
// echo "Connected successfully";

 $username = $_POST['regestration_number'];
 $password = $_POST['pw'];

$result = mysqli_query($conn,"SELECT member.name FROM member JOIN user ON user.regestration_number='$username' AND 
user.pw='$password' AND member.regestration_number = user.regestration_number");

if($result)
        {
        while ($row = $result ->fetch_assoc()) 
            {
                echo $row["name"];
            }
        }
else
  {echo "no value found";}


?>