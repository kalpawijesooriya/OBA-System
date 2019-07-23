<?php

$servername = "us-cdbr-iron-east-02.cleardb.net";
$username = "b3ddc9c03fcdea";
$password = "c72fb202";
$db = "heroku_c89e249aac6f9c4";

// Create connection
$conn = new mysqli($servername, $username, $password,$db);

//Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// } 
// echo "Connected successfully";



?>